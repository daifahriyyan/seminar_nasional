@extends('layouts.dashboard')

@section('content')
    
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="section-body">
        <h2 class="section-title">Upload Bukti Pembayaran</h2>
        <!-- <p class="section-lead">Silakan daftarkan team anda melalui tombol di bawah ini.</p> -->
            <div class="card">
                <div class="card-body">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" class="needs-validation" enctype="multipart/form-data" novalidate="" autocomplete="off" action="{{ route('UploadBukti') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nominal</label>
                                        <input type="text" name="user_id" value="{{ auth()->user()->id }}"> 
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Nominal :</label>
                                        <select class="form-control @error('nominal') is-invalid @enderror" name="nominal">
                                            <option value="{{ old('nominal') }}">Default</option>
                                            <option value="27000">Rp. 27.000</option>
                                            <option value="30000">Rp. 30.000</option>
                                            <option value="35000">Rp. 35.000</option>
                                        </select>
                                        @error('nominal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Seminar secara :</label>
                                        <select class="form-control @error('seminar') is-invalid @enderror" name="seminar">
                                            <option value="{{ old('seminar') }}">Default</option>
                                            <option value="online">Online</option>
                                            <option value="offline">Offline</option>
                                        </select>
                                        @error('seminar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Metode Pembayaran :</label>
                                        <select class="form-control @error('metode') is-invalid @enderror" name="metode">
                                            <option value="{{ old('metode') }}">default</option>
                                            <option value="VA-BNI">VA - BNI</option>
                                            <option value="VA-BRI">VA - BRI</option>
                                            <option value="VA-BCA">VA - BCA</option>
                                            <option value="Spay">Shopee Pay</option>
                                            <option value="TF-BNI">Transfer - BNI</option>
                                        </select>
                                        @error('metode')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Screenshot Bukti Transfer</label>
                                        <input type="file" name="file" value="{{ old('file') }}" class="form-control @error('file') is-invalid @enderror" required>
                                        @error('file')
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
            @if (isset($pembayaran))
                
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>                 
                                    <th scope="col">Metode</th>
                                    <th scope="col">Nominal</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Tiket</th>
                                    <th scope="col">file</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $pembayaran->metode }}</td>
                                    <td>Rp. {{ number_format($pembayaran->nominal, 2, ',', '.') }} </td>
                                    <td>{{ $pembayaran->keterangan }}</td>
                                    <td>{{ $pembayaran->tiket }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/BuktiPembayaran/'.$pembayaran->file) }}" width="200">
                                        <br>{{ $pembayaran->file }}
                                        <br><a href="{{ route('downloadBukti', $pembayaran->file) }}">Download</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm " href="/editBukti/{{ $pembayaran->id }}"   role="button">Edit</a>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $pembayaran->id }}">
                                            Edit
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$pembayaran->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Bukti Pembayaran</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="{{ route('EditBukti', $pembayaran->id )}}" method="get">
                    <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{$pembayaran->keterangan}}">
                            </div>
                            <div class="mb-3">
                                <label for="tiket" class="form-label">Urutan Tiket ke</label>
                                <input type="text" class="form-control" name="tiket" id="tiket" value="{{$pembayaran->tiket}}">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            @endif
    </div>
</main>
@endsection