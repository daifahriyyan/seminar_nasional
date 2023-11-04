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
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Nama Tim</th>
                        <th scope="col">Pembimbing</th>
                        <th scope="col">Sekolah</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Status</th>
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
                            <div class="badge badge-success">Completed</div>
                        </td>
                        <td colspan="6" align="center">
                            <h1>Belum buat team</h1> <a href="">Tambah Team</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</main>
@endsection