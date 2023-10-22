@extends('layouts.main');

@section('container');
<style>
    .bg{
        
    background: rgb(0,119,182);
    background: linear-gradient(45deg, rgba(0,119,182,0.3) 0%, rgba(0,180,216,0.3) 25%, rgba(84,206,229,0.35) 50%, rgba(144,224,239,0.4) 75%, rgba(202,240,248,0.6) 100%);
    margin-top: -25px;
    padding-bottom: 20px;
    }
</style>
<!-- Register -->
<section class="bg">
    <div class="container">
        <div class="row judul">
            <div class="col text-center">
                <div>
                    <img
                        src="assets/Logo.png"
                        width="100"
                    />
                    <h1>Seminar Nasional</h1>
                </div>
            </div>
        </div>
        <div class="row container">
            <div
                class="container"
                style="
                    width: 800px;
                    background-color: white;
                    box-shadow: 5px 5px 5px 0px rgb(0, 0, 0, 0.25);
                    border-radius: 5px;
                    border-top: 3px solid;
                    border-left: 3px solid;
                    border-color: #48cae4;
                "
            >
                <form action="/daftar" method="POST">
                    @csrf
                    <h3 class="mt-3 mb-3">Register</h3>
                    <div class="col-md-8 ms-auto me-auto kolom-daftar">
                        <div class="mb-3">
                            <label for="nama" class="form-label"
                                >Nama</label
                            >
                            <input
                                type="text"
                                class="form-control @error('nama') is-invalid @enderror"
                                name="nama" value="{{ old('nama') }}"
                            />
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"
                                >Email</label
                            >
                            <input
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}"
                            />
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"
                                >Password</label
                            >
                            <input
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password" value="{{ old('password') }}"
                            />
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="konfirmasi" class="form-label"
                                >Konfirmasi Password</label
                            >
                            <input
                                type="password"
                                class="form-control @error('konfirmasi') is-invalid @enderror"
                                name="konfirmasi" value="{{ old('konfirmasi') }}"
                            />
                            @error('konfirmasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nomor" class="form-label"
                                >No. WA</label
                            >
                            <input
                                type="text"
                                class="form-control @error('nomor') is-invalid @enderror"
                                name="nomor" value="{{ old('nomor') }}"
                            />
                            @error('nomor')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="instansi" class="form-label"
                                >Asal Instansi</label
                            >
                            <input
                                type="text"
                                class="form-control @error('instansi') is-invalid @enderror"
                                name="instansi" value="{{ old('instansi') }}"
                            />
                            @error('instansi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="profesi" class="form-label"
                                >Profesi</label
                            >
                            <input
                                type="text"
                                class="form-control @error('profesi') is-invalid @enderror"
                                name="profesi" value="{{ old('profesi') }}"
                            />
                            @error('profesi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ikut" class="form-label"
                                >Mengikuti Semnas</label
                            >
                            <input
                                type="text"
                                class="form-control @error('motivasi') is-invalid @enderror"
                                name="motivasi" value="{{ old('motivasi') }}"
                            />
                            @error('motivasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="bukti" class="form-label"
                                >Upload Bukti Pembayaran</label
                            >
                            <input
                                type="file"
                                class="form-control @error('bukti') is-invalid @enderror"
                                name="bukti" value="{{ old('bukti') }}"
                            />
                            @error('bukti')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button
                            type="submit"
                            class="col-md-12 col-sm-12 mb-5"
                        >
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row text-center m-5">
            <div class="col">
                <h6>
                    Sudah Memiliki Akun?
                    <a
                        href="#"
                        style="color: #0077b6; text-decoration: none"
                        >Login
                    </a>
                </h6>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Register -->
@endsection
