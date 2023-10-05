@extends('layouts.main')

@section('container')

<section id="hero">
    <div class="container">
        <div class="row judul">
            <div class="col d-flex text-center justify-content-center align-items-center">
                <div>
                    <img src="assets/Logo.png" width="50">
                    <h1>Seminar Nasional</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div class="kolom-login p-3">
                    <h3>Login</h3>
                    <div class="mt-5 d-flex justify-content-center align-items-center">
                        <form action="">
                            <label for="username">Username</label><br>
                            <input class="input" type="text" name="username">
                            <br><br>
                            <label for="password">Password</label><br>
                            <input class="input" type="text" name="password">
                            <br>
                            <button class="mt-4">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center mt-2">
                <h7>Belum Mempunyai Akun? <span style="color: #0077B6;">Buat Akun</span></h7>
            </div>
        </div>
    </div>
</section>
    
@endsection