@extends('layouts.dashboard')

@section('content')
    
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Peserta</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
          <svg class="bi"><use xlink:href="#calendar3"/></svg>
          This week
        </button>
      </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="{{ route('LengkapiData') }}">
                            @csrf
                            <div class="form-group mt-3">
                                <label>Asal Instansi</label>
                                <input type="text" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="text" name="instansi" class="form-control @error('instansi') is-invalid @enderror" value="{{ old('instansi') }}" required>
                                @error('instansi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label>Profesi</label>
                                <input type="text" name="profesi" class="form-control @error('profesi') is-invalid @enderror" value="{{ old('profesi') }}" required>
                                @error('profesi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label>Facebook</label>
                                <input type="url" name="facebook" class="form-control @error('facebook') is-invalid @enderror" value="{{ old('facebook') }}" required>
                                @error('facebook')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label>Instagram</label>
                                <input type="url" name="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ old('instagram') }}" required>
                                @error('instagram')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label>Twitter</label>
                                <input type="url" name="twitter" class="form-control @error('twitter') is-invalid @enderror" value="{{ old('twitter') }}" required>
                                @error('twitter')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label>Tiktok</label>
                                <input type="url" name="tiktok" class="form-control @error('tiktok') is-invalid @enderror" value="{{ old('tiktok') }}" required>
                                @error('tiktok')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <input class="btn btn-primary mt-3" type="submit" name="submit" id="submit" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor WA</th>
                        <th scope="col">Instansi</th>
                        <th scope="col">Profesi</th>
                        <th scope="col">Seminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>asd</th>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asda
                        </td>
                        <td>
                            <div class="badge text-bg-success">Completed</div>
                        </td>
                        {{-- <td colspan="6" align="center">
                            <h1>Belum buat team</h1> <a href="">Tambah Team</a>
                        </td> --}}
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</main>
@endsection