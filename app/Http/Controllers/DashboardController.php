<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Peserta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(){
        $pembayaran = Pembayaran::with('user')->where('user_id', Auth::user()->id)->first();

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'pembayaran' => $pembayaran
        ]);
    }

    public function dataPeserta(){
        return view('dashboard.dataPeserta', [
            'title' => 'Data Peserta'
        ]);
    }

    public function buktiPembayaran(){
        $pembayaran = Pembayaran::with('user')->where('user_id', Auth::user()->id)->first();

        return view('dashboard.Pembayaran', [
            'title' => 'Bukti Pembayaran',
            'pembayaran' => $pembayaran
        ]);
    }

    // public function storeData(Request $request){
    //     $validator = $request->validate([
    //         'nama'      => 'required',
    //         'user_id'   => 'required',
    //         'instansi'  => 'required',
    //         'profesi'   => 'required'
    //     ]);

    //     Peserta::create($validator);

    //     return redirect('/dashboard')->with('success', 'Data Peserta Telah dilengkapi');
    // }

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
}
