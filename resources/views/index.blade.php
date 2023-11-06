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
                <h4 class="fw-light text-brand">“The Young Generation to Innovate in The Future Technology”</h4>
                <a href="/daftar" class="btn mt-5 text-white">
                        DAFTAR
                </a>
            </div>
            <div class="col-lg-6 my-5 d-flex align-items-center justify-content-center logo order-lg-last order-first">
                <img src="assets/Logo Semnas No Text.png" class="mt-5">
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
                <img src="assets/About.jpg">
            </div>
            <div class="col-lg-6 paragraf">
                <h3 class="fw-bolder">Seminar Nasional</h3>
                <p>Seminar Nasional ini merupakan acara yang dilakukan sekali setiap tahun oleh Polytechnic Computer Club Politeknik Negeri Semarang atau biasa disebut PCC
                    POLINES yang merupakan bagian dari acara Techcomfest 2024. Tema untuk Seminar Nasional pada tahun 2024 ini adalah GOLDANWE: Go Learning Data Analyst With Excel, yang berisi tentang pengenalan data analyst dengan menggunakan aplikasi Excel.</p>
                    <p>Seminar Nasional ini dilaksanakan secara hybrid dengan materi yang akan disampaikan adalah pengetahuan tentang data analyst dan harapannya, setelah materi yang disampaikan dalam Seminar Nasional ini seluruh peserta dapat memperoleh wawasan serta pengalaman baru dalam dunia data analyst.
                    Tujuan dari Seminar Nasional TECHCOMFEST 2024 ini adalah untuk memperkenalkan UKM PCC kepada masyarakat serta meningkatkan pengetahuan masyarakat tentang industri kreatif dalam bidang teknologi sekarang ini. 
                    Selain itu, memberikan informasi, pengetahuan dan pelatihan yang bermanfaat kepada masyarakat luas mengenai industri kreatif dalam bidang IT.</p>
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
                        <img src="assets/user-male.png">
                        <h3>Valencia Dai Fahriyyan</h3>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="card-speak text-center d-flex justify-content-center align-items-md-center">
                    <div>
                        <img src="assets/user-female.png">
                        <h3>Valencia Dai Fahriyyan</h3>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="card-speak text-center d-flex justify-content-center align-items-md-center">
                    <div>
                        <img src="assets/user-male.png">
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
                            Data Analyst yang diikuti oleh beberapa sub materi, yaitu: roadmap untuk menjadi data analyst, manfaat dari data analyst di dunia kerja, pengenalan tools dalam aplikasi excel, data extracting, cara mengolah dan menganalisa data, dan menyusun konsep dan design data visual.
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
                            1) Knowledge 2) Experience 3) E-certificate 4) Relationships 5) Goodie bag 6) Door prize 7) Training

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
                            Seminar dilakukan secara hybrid yaitu secara online via zoom dan offline di Gedung Kerjasama Terpadu Polines dengan alamat Jl. Prof. Sudarto, Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah  atau bisa dilihat dengan link: https://maps.app.goo.gl/SJBbNzSH14CV4AsT7
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
                            Untuk pengisi materi sendiri akan kami umumkan di instargam techcomfest instagram.com/techcomfest , jadi stay tune terus yaaaa
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                            Hal apa saja yang perlu dipersiapkan di Seminar Nasional TECHCOMFEST nanti?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                        <div class="accordion-body">
                            Untuk perlengkapan yang perlu dibawa waktu seminar nasional TECHCOMFEST akan diumumkan menyusul. Jadi stay tune terus yaaa
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
                            <p>Metode pembayaran dapat melalui:</p> 
                            <p>BNI 716085642 a.n Naila Karomatul Ulya</p>
                            <p>Shoppepay 082145288201 a.n Naila Karomatul Ulya</p>
                            <p>Virtual account :</p>
                            <p>&nbsp;&nbsp;&nbsp;BCA - 122082145288201</p>
                            <p>&nbsp;&nbsp;&nbsp;BNI - 8807082145288201</p>  
                            <p>&nbsp;&nbsp;&nbsp;BRI - 112082145288201</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                            HTM untuk Seminar Nasional berapa?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                        <div class="accordion-body">
                            <p>Presale 1: 30k</p>
                            <p>Presale 2: 35k</p>
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
                    <h1>Tentang Kami</h1>
                    <div class="baseline"></div>
                    <h3>Polytechnic Computer Club</h3>
                    <br>
                    <h1>Social Media</h1>
                    <div class="baseline"></div>
                    <h3>Take a look at out social media accounts</h3>
                    <div class="sosmed w-100">
                        <a href="https://www.tiktok.com/@pcc.polines?_t=8gaQhVBXbG5&_r=1"><img src="assets/sosmed/icon tiktok.png" style="width: 30px;"></a>
                        <a href="https://www.youtube.com/c/UKMPCCPOLINES"><img src="assets/sosmed/icon youtube.png" style="width: 30px;"></a>
                        <a href="https://www.instagram.com/pccpolines/"><img src="assets/sosmed/icon ig.png" style="width: 30px;"></a>
                        <a href="https://twitter.com/ukmpcc"><img src="assets/sosmed/icon twitter.png" style="width: 30px;"></a>
                        <a href="https://open.spotify.com/show/6HFgdgTpAlTeLWSZi7323u?si=263bc4172a044efe"><img src="assets/sosmed/icon spotify.png" style="width: 30px;"></a>
                        <a href="https://www.facebook.com/ukmpcc/"><img src="assets/sosmed/icon facebook.png" style="width: 30px;"></a>
                    </div>
                </div>
                <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-12 p-5 pb-0">
                    <h1>Contact Person</h1>
                    <div class="baseline"></div>
                    <h3>Violeta => <a href="https://wa.me/083829136518">083829136518</a></h3>
                    <h3>Wahyu => <a href="https://wa.me/081225355583">081225355583</a></h3>
                    <p>E-mail : </p>
                    <h3>Techcomfest2024@gmail.com</h3>
                </div>
                <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-12 p-5">
                    <h1>Lokasi</h1>
                    <div class="baseline"></div>
                    <h3>Polytechnic Computer Club, Politeknik Negeri Semarang, Tembalang, Kota Semarang, Jawa Tengah</h3>
                    <a href="https://ukmpcc.org/"><h3>www.ukm.pcc.org</h3></a>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.47693402717871!2d110.43566543476956!3d-7.052578982961578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708deedf012ca1%3A0x60ff772cc5f49d9c!2sPCC%20SOLUTION%20(%20Tempatnya%20servis%20laptop%20%26%20Komputer)!5e0!3m2!1sid!2sid!4v1699099519118!5m2!1sid!2sid" width="200" height="200" style="border:1px solid white;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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