@extends('layouts.dashboard')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
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

  <div class="row align-items-md-stretch">
    <div class="col-md-4">
      <div class="p-5 profile-card bg-body-tertiary border rounded-3 text-center">
        <img src="assets/speakers.png" alt="Foto Profile" height="100">
        <h5>Nama Lengkap</h5>
        <h6>Asal Instansi</h6>
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

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
          </li>

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
          </li>

        </ul>
        <div class="tab-content pt-2 p-4">

          <div class="tab-pane fade show active profile-overview" id="profile-overview">
            <h5 class="card-title mb-3">Detail Profil</h5>

            <div class="row">
              <p class="col-lg-3 col-md-4 label ">Nama Lengkap</p>
              <p class="col-lg-9 col-md-8">{{ auth()->user()->nama }}</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label">E-mail</p>
              <p class="col-lg-9 col-md-8">{{ auth()->user()->email }}</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label">Nomor WA</p>
              <p class="col-lg-9 col-md-8">{{ auth()->user()->nomor }}</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label">Asal Instansi</p>
              <p class="col-lg-9 col-md-8">{{ auth()->user()->instansi }}</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label">Profesi</p>
              <p class="col-lg-9 col-md-8">{{ auth()->user()->profesi }}</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label">Seminar</p>
              <p class="col-lg-9 col-md-8">{{ auth()->user()->motivasi }}</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label">Pembayaran</p>
              <p class="col-lg-9 col-md-8">BNI/SPay</p>
            </div>

            <div class="row">
              <p class="col-lg-3 col-md-4 label">Tiket</p>
              <p class="col-lg-9 col-md-8">23-100</p>
            </div>

          </div>

          <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

            <!-- Profile Edit Form -->
            <form>
              <div class="row mb-3">
                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                <div class="col-md-8 col-lg-9">
                  <img src="assets/img/profile-img.jpg" alt="Profile">
                  <div class="pt-2">
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <label for="namaLengkap" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                <div class="col-md-8 col-lg-9">
                  <input name="namaLengkap" type="text" class="form-control" id="namaLengkap" value="Kevin Anderson">
                </div>
              </div>

              <div class="row mb-3">
                <label for="email" class="col-md-4 col-lg-3 col-form-label">E-mail</label>
                <div class="col-md-8 col-lg-9">
                  <input name="email" type="text" class="form-control" id="email" value="Lueilwitz, Wisoky and Leuschke">
                </div>
              </div>

              <div class="row mb-3">
                <label for="nomor" class="col-md-4 col-lg-3 col-form-label">Nomor WA</label>
                <div class="col-md-8 col-lg-9">
                  <input name="nomor" type="text" class="form-control" id="nomor" value="Web Designer">
                </div>
              </div>

              <div class="row mb-3">
                <label for="asal" class="col-md-4 col-lg-3 col-form-label">Asal Instansi</label>
                <div class="col-md-8 col-lg-9">
                  <input name="asal" type="text" class="form-control" id="asal" value="USA">
                </div>
              </div>

              <div class="row mb-3">
                <label for="profesi" class="col-md-4 col-lg-3 col-form-label">Profesi</label>
                <div class="col-md-8 col-lg-9">
                  <input name="profesi" type="text" class="form-control" id="profesi" value="A108 Adam Street, New York, NY 535022">
                </div>
              </div>

              <div class="row mb-3">
                <label for="seminar" class="col-md-4 col-lg-3 col-form-label">Seminar</label>
                <div class="col-md-8 col-lg-9">
                  <input name="seminar" type="text" class="form-control" id="seminar" value="(436) 486-3538 x29071">
                </div>
              </div>

              <div class="row mb-3">
                <label for="pembayaran" class="col-md-4 col-lg-3 col-form-label">Pembayaran</label>
                <div class="col-md-8 col-lg-9">
                  <input name="pembayaran" type="text" class="form-control" id="pembayaran" value="k.anderson@example.com">
                </div>
              </div>

              <div class="row mb-3">
                <label for="tiket" class="col-md-4 col-lg-3 col-form-label">Tiket</label>
                <div class="col-md-8 col-lg-9">
                  <input name="tiket" type="text" class="form-control" id="tiket" value="k.anderson@example.com">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                <div class="col-md-8 col-lg-9">
                  <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                <div class="col-md-8 col-lg-9">
                  <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                <div class="col-md-8 col-lg-9">
                  <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                <div class="col-md-8 col-lg-9">
                  <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </form><!-- End Profile Edit Form -->

          </div>

          <div class="tab-pane fade pt-3" id="profile-settings">

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

          </div>

          <div class="tab-pane fade pt-3" id="profile-change-password">
            <!-- Change Password Form -->
            <form>

              <div class="row mb-3">
                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="password" type="password" class="form-control" id="currentPassword">
                </div>
              </div>

              <div class="row mb-3">
                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="newpassword" type="password" class="form-control" id="newPassword">
                </div>
              </div>

              <div class="row mb-3">
                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Change Password</button>
              </div>
            </form><!-- End Change Password Form -->

          </div>

        </div><!-- End Bordered Tabs -->

      </div>
    </div>
  </div>
</main>
    
@endsection