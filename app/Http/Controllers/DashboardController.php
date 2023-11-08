<?php

namespace App\Http\Controllers;

use App\Models\DataPeserta;
use App\Models\Pembayaran;
use App\Models\User;
use finfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(){
        $pembayaran = Pembayaran::with('user')->where('user_id', Auth::user()->id)->first();
        $dataPeserta= DataPeserta::with('user')->where('user_id', Auth::user()->id)->first();

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'pembayaran' => $pembayaran,
            'active'=> 'Dashboard',
            'dataPeserta'=> $dataPeserta
        ]);
    }

    public function dataPeserta(){
        $daftarPeserta = User::with('pembayaran', 'dataPeserta')->where('role', 'peserta')->get()->all();
        $daftarPanitia = User::with('pembayaran', 'dataPeserta')->where('role', 'panitia')->get()->all();
        

        if (Auth::user()->role == 'peserta') {
            $title = 'Input Data';
        } else {
            $title = 'Data Peserta';
        }

        return view('dashboard.dataPeserta', [
            'title'         => $title,
            'active'        => 'Data Peserta',
            'daftarPeserta' => $daftarPeserta,
            'daftarPanitia' => $daftarPanitia
        ]);
    }

    public function buktiPembayaran(){
        $pembayaran = Pembayaran::with('user')->get()->all();

        if (Auth::user()->role == 'peserta') {
            $title = 'Input Bukti Pembayaran';
        } else {
            $title = 'Data Pembayaran';
        }

        return view('dashboard.Pembayaran', [
            'title'         => $title,
            'active'        => 'Pembayaran',
            'pembayaran'    => $pembayaran
        ]);
    }

    public function storeData(Request $request){
        $this->validate($request, [
            'profil'    => 'required|mimes:png,jpg,jpeg',
            'facebook'  => 'nullable',
            'instagram' => 'nullable',
            'tiktok'    => 'nullable',
            'twitter'   => 'nullable'
        ]);

        $fotoProfil= $request->file('profil');
        $namaFile    = time()."-".$fotoProfil->getClientOriginalName();
        $tujuanUpload   = 'fotoProfil/'.$namaFile;
        
        Storage::disk('public')->put($tujuanUpload,file_get_contents($fotoProfil));

        $lengkapiData = new DataPeserta();
        $lengkapiData->user_id      = $request->user_id;
        $lengkapiData->profil       = $namaFile;
        $lengkapiData->facebook     = $request->facebook;
        $lengkapiData->instagram    = $request->instagram;
        $lengkapiData->twitter      = $request->twitter;
        $lengkapiData->tiktok       = $request->tiktok;
        $lengkapiData->save();

        return redirect('/dashboard')->with('success', 'Data Peserta Telah dilengkapi');
    }

    public function uploadBukti(Request $request){
        $this->validate($request, [
            'user_id'   => 'required',
            'nominal'   => 'required',
            'seminar'   => 'required',
            'metode'    => 'required',
            'file'      => 'required'
        ]);

        $buktiPembayaran= $request->file('file');
        $namaFile    = time()."-".$buktiPembayaran->getClientOriginalName();
        $tujuanUpload   = 'BuktiPembayaran/'.$namaFile;
        
        Storage::disk('public')->put($tujuanUpload,file_get_contents($buktiPembayaran));

        $pembayaran = new Pembayaran();
        $pembayaran->user_id = $request->user_id;
        $pembayaran->nominal = $request->nominal;
        $pembayaran->seminar = $request->seminar;
        $pembayaran->metode = $request->metode;
        $pembayaran->file = $namaFile;
        $pembayaran->save();

        return redirect('/dashboard')->with('success', 'Upload Bukti Pembayaran Telah Sukses');
    }

    public function editProfil(Request $request, $id){
        $this->validate($request, [
            'nama'      => 'required',
            'email'     => 'required|email',
            'nomor'     => 'required',
            'instansi'  => 'required',
            'profesi'   => 'required'
        ]);
        
        $pembayaran = Pembayaran::where('user_id', $id)->first();
        $dataPeserta= DataPeserta::where('user_id', $id)->first();
        $user       = User::where('id', $id)->first();


        $user->nama     = $request->nama;
        $user->email    = $request->email;
        $user->nomor    = $request->nomor;
        $user->instansi = $request->instansi;
        $user->profesi  = $request->profesi;
        $user->save();

        if (isset($pembayaran)) {
            $pembayaran->seminar    = $request->seminar;
            $pembayaran->metode     = $request->metode;
            $pembayaran->save();
        }

        if (isset($dataPeserta)) {
            $dataPeserta->twitter   = $request->twitter;
            $dataPeserta->facebook  = $request->facebook;
            $dataPeserta->instagram = $request->instagram;
            $dataPeserta->tiktok    = $request->tiktok;
            $dataPeserta->save();
        }

        return redirect('/dashboard')->with('berhasil', 'Edit Data Berhasil!!!');
    }

    public function edit(Request $request, $id){
        $pembayaran = Pembayaran::where('id', $id)->first();

        $pembayaran->keterangan = $request->keterangan;
        $pembayaran->tiket = $request->tiket;
        $pembayaran->save();

        return redirect('/Pembayaran')->with('success', 'Edit Berhasil');
    }

    public function download($id){
        $pathToFile = Storage::path('/public/BuktiPembayaran/'.$id);
        
        // $pathToFile = asset('storage/BuktiPembayaran/'.$id);
        return response()->download($pathToFile);
    }
    
    // Edit Password
    // public function editPass(Request $request){
    //     $validator = $request->validate([
    //         'password'      => 'current_password:api',
    //         'passwordBaru'  => 'required | lowercase | uppercase',
    //         'rePasswordBaru'=> 'required | same:passwordBaru'
    //     ]);

    //     User::create($validator);
        
    //     return redirect('/dashboard')->with('berhasil', 'Edit Password Berhasil!!!');
    // }
}
