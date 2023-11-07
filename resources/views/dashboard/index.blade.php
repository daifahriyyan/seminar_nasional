@extends('layouts.dashboard')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    {{-- <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
        <svg class="bi"><use xlink:href="#calendar3"/></svg>
        This week
      </button>
    </div> --}}
  </div>

  <div class="row align-items-md-stretch">
    <div class="col-md-4">
      @if (session()->has('berhasil'))
      <div class="row">
          <div class="col d-flex justify-content-center">
              <div class="alert alert-success alert-dismissible fade show" style="min-height: 50px; width:500px;" role="alert">
                  <div>
                      {{ session('berhasil') }}
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          </div>
      </div>
      @endif
      <div class="p-5 profile-card bg-body-tertiary border rounded-3 text-center">
        <img src="{{ asset('storage/fotoProfil/'.$dataPeserta->profil) }}" alt="Foto Profile" height="100">
        <h5>{{ auth()->user()->nama }}</h5>
        <h6>{{ auth()->user()->instansi }}</h6>
        <div class="social-links mt-2">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card bg-body-tertiary pt-3">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">

          <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
          </li>

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
          </li>

          {{-- <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
          </li>

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
          </li> --}}

        </ul>
        <div class="tab-content pt-2 p-4">

          <div class="tab-pane fade show active profile-overview" id="profile-overview">
            <h5 class="card-title mb-3">Detail Profil</h5> <a class="btn btn-primary btn-sm " href="/dataPeserta" role="button">Lengkapi Data</a>
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
            <div class="row mt-4">
              <p class="col-lg-3 col-md-4 label "><b>Nama Lengkap</b></p>
              <p class="col-lg-9 col-md-8">{{ auth()->user()->nama }}</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label"><b>E-mail</b></p>
              <p class="col-lg-9 col-md-8">{{ auth()->user()->email }}</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label"><b>Nomor WA</b></p>
              <p class="col-lg-9 col-md-8">{{ auth()->user()->nomor }}</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label"><b>Asal Instansi</b></p>
              <p class="col-lg-9 col-md-8">{{ auth()->user()->instansi }}</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label"><b>Profesi</b></p>
              <p class="col-lg-9 col-md-8">{{ auth()->user()->profesi }}</p>
            </div>
          @if (isset($pembayaran))
            <div class="row">
              <p class="col-lg-3 col-md-4 label"><b>Seminar</b></p>
              <p class="col-lg-9 col-md-8">{{ $pembayaran->seminar }}</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label"><b>Pembayaran</b></p>
              <p class="col-lg-9 col-md-8">{{ $pembayaran->metode }}</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label"><b>Bukti Pembayaran</b></p>
              <p class="col-lg-9 col-md-8">
                <img src="{{ asset('storage/BuktiPembayaran/'.$pembayaran->file) }}" alt="Foto Profile" height="100"></p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label"><b>Tiket</b></p>
              <p class="col-lg-9 col-md-8">23 - {{ $pembayaran->tiket }}</p>
            </div>
              
          @endif

          </div>

          <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

            <!-- Profile Edit Form -->
            <form action="{{ route('EditData', auth()->user()->id) }}" method="GET" enctype="multipart/form-data">
              @if (isset($dataPeserta))
              <div class="row mb-3">
                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                <div class="col-md-8 col-lg-9">
                  <img src="{{ asset('storage/fotoProfil/'.$dataPeserta->profil) }}" width="200" alt="Profile">
                  <div class="pt-2">
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                  </div>
                </div>
              </div>
              @endif

              <div class="row mb-3">
                <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                <div class="col-md-8 col-lg-9">
                  <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ auth()->user()->nama }}">
                  @error('nama')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="email" class="col-md-4 col-lg-3 col-form-label">E-mail</label>
                <div class="col-md-8 col-lg-9">
                  <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ auth()->user()->email }}">
                  @error('email')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="nomor" class="col-md-4 col-lg-3 col-form-label">Nomor WA</label>
                <div class="col-md-8 col-lg-9">
                  <input name="nomor" type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" value="{{ auth()->user()->nomor }}">
                  @error('nomor')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="instansi" class="col-md-4 col-lg-3 col-form-label">Asal Instansi</label>
                <div class="col-md-8 col-lg-9">
                  <input name="instansi" type="text" class="form-control @error('instansi') is-invalid @enderror" id="instansi" value="{{ auth()->user()->instansi }}">
                  @error('instansi')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="profesi" class="col-md-4 col-lg-3 col-form-label">Profesi</label>
                <div class="col-md-8 col-lg-9">
                  <input name="profesi" type="text" class="form-control @error('profesi') is-invalid @enderror" id="profesi" value="{{ auth()->user()->profesi }}">
                  @error('profesi')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              @if (isset($pembayaran))
              <div class="row mb-3">
                <label for="seminar" class="col-md-4 col-lg-3 col-form-label">Seminar</label>
                <div class="col-md-8 col-lg-9">
                  <input name="seminar" type="text" class="form-control @error('seminar') is-invalid @enderror" id="seminar" value="{{ $pembayaran->seminar }}">
                  @error('seminar')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="metode" class="col-md-4 col-lg-3 col-form-label">Pembayaran</label>
                <div class="col-md-8 col-lg-9">
                  <input name="metode" type="text" class="form-control @error('metode') is-invalid @enderror" id="metode" value="{{ $pembayaran->metode }}">
                  @error('metode')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              @endif

              @if (isset($dataPeserta))
              <div class="row mb-3">
                <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                <div class="col-md-8 col-lg-9">
                  <input name="twitter" type="text" class="form-control" id="Twitter" value="{{ $dataPeserta->twitter }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                <div class="col-md-8 col-lg-9">
                  <input name="facebook" type="text" class="form-control" id="Facebook" value="{{ $dataPeserta->facebook }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                <div class="col-md-8 col-lg-9">
                  <input name="instagram" type="text" class="form-control" id="Instagram" value="{{ $dataPeserta->instagram }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="tiktok" class="col-md-4 col-lg-3 col-form-label">Tiktok Profile</label>
                <div class="col-md-8 col-lg-9">
                  <input name="tiktok" type="text" class="form-control" id="tiktok" value="{{ $dataPeserta->tiktok }}">
                </div>
              </div>
              @endif

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </form><!-- End Profile Edit Form -->

          </div>

          {{-- <div class="tab-pane fade pt-3" id="profile-settings">

            <!-- Settings Form -->
            <form>

              <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                <div class="col-md-8 col-lg-9">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="changesMade" checked>
                    <label class="form-check-label" for="changesMade">
                      Changes made to your account
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="newProducts" checked>
                    <label class="form-check-label" for="newProducts">
                      Information on new products and services
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="proOffers">
                    <label class="form-check-label" for="proOffers">
                      Marketing and promo offers
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                    <label class="form-check-label" for="securityNotify">
                      Security alerts
                    </label>
                  </div>
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </form><!-- End settings Form -->

          </div> --}}

          {{-- <div class="tab-pane fade pt-3" id="profile-change-password">
            <!-- Change Password Form -->
            <form method="POST" action="{{ route('EditPass') }}">

              <div class="row mb-3">
                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="currentPassword">
                  @error('password')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="passwordBaru" class="col-md-4 col-lg-3 col-form-label">Password Baru</label>
                <div class="col-md-8 col-lg-9">
                  <input name="passwordBaru" type="password" class="form-control @error('passwordBaru') is-invalid @enderror" id="passwordBaru">
                  @error('passwordBaru')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="rePasswordBaru" class="col-md-4 col-lg-3 col-form-label">Masukkan Lagi Password Baru</label>
                <div class="col-md-8 col-lg-9">
                  <input name="rePasswordBaru" type="password" class="form-control @error('rePasswordBaru') is-invalid @enderror" id="rePasswordBaru">
                  @error('rePasswordBaru')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Change Password</button>
              </div>
            </form><!-- End Change Password Form -->

          </div> --}}

        </div><!-- End Bordered Tabs -->

      </div>
    </div>
  </div>
</main>
    
@endsection