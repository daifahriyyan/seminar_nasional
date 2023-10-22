@extends('layouts.main')

@section('container')

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
  </svg>
  

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
        @if (session()->has('success'))
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="alert alert-success alert-dismissible fade show" style="min-height: 50px; width:500px;" role="alert">
                    <div>
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif
        @if (session()->has('loginError'))
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="alert alert-danger alert-dismissible fade show" style="min-height: 50px; width:500px;" role="alert">
                    <div>
                        {{ session('loginError') }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div class="kolom-login p-3">
                    <h3>Login</h3>
                    <div class="mt-5 d-flex justify-content-center align-items-center">
                        <form action="/login" method="POST">
                            @csrf
                            <label for="email">E-mail</label><br>
                            <input class="input" type="email" name="email" required>
                            <br><br>
                            <label for="password">Password</label><br>
                            <input class="input" type="password" name="password" required>
                            <br>
                            <button class="mt-4">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center mt-2">
                <h7>Belum Mempunyai Akun? <a href="/daftar" style="color: #0077B6;">Buat Akun</a></h7>
            </div>
        </div>
    </div>
</section>
    
@endsection