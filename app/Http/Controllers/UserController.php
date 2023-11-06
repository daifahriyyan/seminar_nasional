<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // Melakukan Validasi
    public function store(Request $request){

        $validator = $request->validate([
            'nama'      => 'required | max:255',
            'email'     => 'required | email | unique:users',
            'password'  => 'required | min:3 | max:16',
            'konfirmasi'=> 'required | same:password',
            'nomor'     => 'required | unique:users',
            'instansi'  => 'required',
            'profesi'   => 'required'
        ]);

        User::create($validator);

        return redirect('/login')->with('success', 'Registrasi Berhasil!!! Silahkan Login');


    }
    // Direct Page method
    
    public function register(){
        return view('user.register', [
            'title' => 'Registrasi'
        ]);
    }

    public function login(){
        return view('user.index', [
            'title' => 'Login'
        ]);
    }

    // Melakukan Authentication
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    // Melakukan Logout
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
