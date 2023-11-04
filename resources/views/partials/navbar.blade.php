
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #184082;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="assets/Logo Semnas No Text.png" alt="Logo PCC" width="50">
            <h4> Seminar Nasional</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/#hero">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/#speakers">Pembicara</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/#benefit">Benefit</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/#">Timeline</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/#faq">FAQ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://techcomfest.ukmpcc.org">Techcomfest</a>
                </li>
            </ul>
            @auth
            <div class="dropdown">
              <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->profesi }}
              </a>
            
              <ul class="dropdown-menu bg-body">
                <li><a class="dropdown-item text-secondary" href="/dashboard">Dashboard</a></li>
                <li><a class="dropdown-item text-secondary" href="/">Home</a></li>
                <li><hr class="dropdown-divider bg-primary"></li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item text-danger">Logout</button>
                </form>
              </ul>
            </div>
              @else
            <div class="btn btn-primary btn-login">
                <a href="login">Login</a>
            </div>
            @endauth
        </div>
    </div>
</nav>
<!-- End Navbar -->
