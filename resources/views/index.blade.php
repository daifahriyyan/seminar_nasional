@extends('layouts.main')

@section('container')

{{-- Navbar --}}
@extends('partials.navbar')
{{-- End Navbar --}}

{{-- Hero section --}}
<section id="hero">
    <div class="container">
        <div class="row tagline d-flex align-items-center">
            <div class="col-lg-6">
                <h1 class="fw-medium">Seminar Nasional <br><span class="pbg">2024</span></h1>
                <h4 class="fw-light text-brand">“ The Young Generation to Innovate in The Future Technology”</h4>
                    <button class="btn mt-5">
                        <h5>DAFTAR</h5>
                    </button>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center logo order-lg-last order-first">
                <img src="assets/Logo.png">
            </div>
        </div>
    </div>
</section>
{{-- End Hero Section --}}

<!-- About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="title position-relative p-5 d-flex justify-content-center align-items-center">
                <h1 class="fw-bold">About</h1>
                <div class="baseline position-absolute"></div>
            </div>
            <div class="col-lg-6 foto d-flex justify-content-center">
                <img src="assets/contoh.JPG">
            </div>
            <div class="col-lg-6 mt-5 paragraf">
                <h3 class="fw-bolder">Seminar Nasional</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam velit neque labore ea amet quisquam illo voluptates vel architecto excepturi? Necessitatibus hic natus consequatur animi assumenda voluptatum impedit voluptate labore sed dolores, eveniet voluptatem voluptates doloremque aspernatur illo corrupti officiis qui. Quia cupiditate perspiciatis pariatur libero ratione quam soluta dolor.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cupiditate officia assumenda asperiores laborum deserunt magnam officiis rem autem modi, est recusandae, error tempore reprehenderit tempora ipsam accusamus, expedita voluptates pariatur vero dolor beatae iusto ea. Ratione excepturi autem perferendis dolore aperiam incidunt debitis sapiente, totam dignissimos, accusantium alias ullam.</p>
            </div>
        </div>
    </div>
</section>
<hr>
<!-- End About -->

<!-- Speakers -->
<section id="speakers">
    <div class="container">
            <div class="title position-relative p-5 d-flex justify-content-center align-items-center">
                <h1 class="fw-bold">Speakers</h1>
                <div class="baseline position-absolute"></div>
            </div>
        <div class="row">
            <div class="col col-lg-4 foto">
                <div class="card-speak text-center d-flex justify-content-center align-items-md-center">
                    <div>
                        <img src="assets/speakers.png">
                        <h3>Valencia Dai Fahriyyan</h3>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="card-speak text-center d-flex justify-content-center align-items-md-center">
                    <div>
                        <img src="assets/speakers.png">
                        <h3>Valencia Dai Fahriyyan</h3>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="card-speak text-center d-flex justify-content-center align-items-md-center">
                    <div>
                        <img src="assets/speakers.png">
                        <h3>Valencia Dai Fahriyyan</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<!-- End Speakers -->

<!-- Benefits -->
<section id="benefit">
    <div class="container">
        <div class="title position-relative p-5 d-flex justify-content-center align-items-center">
            <h1 class="fw-bold">Benefits</h1>
            <div class="baseline position-absolute"></div>
        </div>
        <div class="row">
            <div class="col col-lg-4 text-center d-flex justify-content-center align-items-md-center my-5">
                <div class="box-benefits d-flex justify-content-center align-items-md-center">
                    <div class="row d-flex justify-content-center align-items-md-center">
                        <img src="assets/icon/Knowledge transfer.png" width="300">
                        <h3>Knowledge</h3>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 text-center d-flex justify-content-center align-items-md-center my-5">
                <div class="box-benefits d-flex justify-content-center align-items-md-center">
                    <div class="row d-flex justify-content-center align-items-md-center">
                        <img src="assets/icon/Workshop.png" width="300">
                        <h3>Training</h3>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 text-center d-flex justify-content-center align-items-md-center my-5">
                <div class="box-benefits d-flex justify-content-center align-items-md-center">
                    <div class="row d-flex justify-content-center align-items-md-center">
                        <img src="assets/icon/Certificate.png" width="300">
                        <h3>E-Certificate</h3>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 text-center d-flex justify-content-center align-items-md-center my-5">
                <div class="box-benefits d-flex justify-content-center align-items-md-center">
                    <div class="row d-flex justify-content-center align-items-md-center">
                        <img src="assets/icon/icon relation.png" width="300">
                        <h3>Relationship</h3>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 text-center d-flex justify-content-center align-items-md-center my-5">
                <div class="box-benefits d-flex justify-content-center align-items-md-center">
                    <div class="row d-flex justify-content-center align-items-md-center">
                        <img src="assets/icon/User experience.png" width="300">
                        <h3>Experience</h3>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 text-center d-flex justify-content-center align-items-md-center my-5">
                <div class="box-benefits d-flex justify-content-center align-items-md-center">
                    <div class="row d-flex justify-content-center align-items-md-center">
                        <img src="assets/icon/Group.png" width="300">
                        <h3>Goodie Bag</h3>
                    </div>
                </div>
            </div>
            <div class="col col-lg-12 text-center d-flex justify-content-center align-items-md-center my-5">
                <div class="box-benefits d-flex justify-content-center align-items-md-center">
                    <div class="row d-flex justify-content-center align-items-md-center">
                        <img src="assets/icon/Prize.png" width="300">
                        <h3>Doorprize</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- End Benefits -->
    
    <!-- FAQ -->
    
<section id="faq" class="section-padding border-top">
    <div class="container">
        <div class="title position-relative p-5 d-flex justify-content-center align-items-center">
            <h1 class="fw-bold">FAQ</h1>
            <div class="baseline position-absolute"></div>
        </div>
        <div class="container" style="color: black;" data-aos="fade-up" data-aos-delay="150">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" style="background-color: #2867ba; color: white;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Apa itu Seminar Nasional?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            Seminar Nasional merupakan salah satu wujud misi dan peran aktif UKM Polytechnic Computer Club dalam mengikuti perkembangan teknologi dalam bidang IT melalui lomba SMA/ SMK sederajat dan   Mahasiswa Umum Se-Indonesia.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Materi apa yang akan disampaikan di Seminar Nasional?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            Peserta dapat melakukan pendaftaran di website techcomfest
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Apa saja benefit yang akan didapat dari Seminar Nasional ini?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            Peserta dapat mengunduh pedoman di website techcomfest
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                            Seminar Nasional akan dilaksanakan dimana saja?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            Ada 3 bidang yang dilombakan yaitu Capture the Flag Competition, Design Infografis, dan Web Design
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                            Siapa pengisi materi di Seminar Nasional nanti?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                        <div class="accordion-body">
                            Satu tim satu alamat email
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                            Hal apa saja yang perlu dipersiapkan di Seminar Nasional nanti?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                        <div class="accordion-body">
                            Boleh
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                            Metode pembayarannya bagaimana?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                        <div class="accordion-body">
                            Uang pembinaan, Piala, Sertifikat
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                            HTM untuk Seminar Nasional offline dan online berapa?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                        <div class="accordion-body">
                            Tidak boleh
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                            Apakah karya Design Infografis dan Design Web yang dikirim akan menjadi hak milik panitia?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
                        <div class="accordion-body">
                            Iya, karya Design Infografis dan Design Web akan menjadi hak milik panitia
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
                            Apakah ada biaya pendaftaran lomba?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTen">
                        <div class="accordion-body">
                            Ada, untuk mata lomba Design Infografis sebesar Rp 60.000 per tim , Captire The Flag Competition Rp 85.000 per tim.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- End FAQ -->

<!-- Footer -->
<section class="mt-lg-5" style="margin-bottom: -10px;">
    <div class="footer">
        <div class="container">
            
            <div class="row">
                <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-12 p-5">
                    <h1>Social Media</h1>
                    <div class="baseline"></div>
                    <h3>Take a look at out social media accounts</h3>
                    <div class="sosmed w-100">
                        <img src="assets/sosmed/icon ig.png" style="width: 30px;">
                        <img src="assets/sosmed/icon youtube.png" style="width: 30px;">
                        <img src="assets/sosmed/icon tiktok.png" style="width: 30px;">
                        <img src="assets/sosmed/icon twitter.png" style="width: 30px;">
                        <img src="assets/sosmed/icon spotify.png" style="width: 30px;">
                        <img src="assets/sosmed/icon facebook.png" style="width: 30px;">
                    </div>
                </div>
                <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-12 p-5 pb-0">
                    <h1>Tentang Kami</h1>
                    <div class="baseline"></div>
                    <h3>Polytechnic Computer Club</h3>
                    <h3>No CP : 088811122233</h3>
                    <h3>Semarang, Politeknik Negeri Semarang</h3>
                </div>
                <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-12 p-5">
                    <h1>Lokasi</h1>
                    <div class="baseline"></div>
                    <h3>Semarang, Indonesia Politeknik Negeri Semarang</h3>
                    <h3>www.ukm.pcc.org</h3>
                </div>
                <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-12 p-5">
                    <h1>Saran</h1>
                    <div class="baseline"></div>
                    <textarea name="saran" id="saran" rows="3" placeholder="Ketikkan Saran..."></textarea>
                    <button type="submit" class="btn btn-primary">Enter</button>
                </div>
            </div>
            <hr>
            <h3 class="copyright">Copyright <span class="ri-copyright-line"></span>PCC Polines 2023/2024</h3>
        </div>
    </div>
</section>

<!-- End Footer -->    
@endsection