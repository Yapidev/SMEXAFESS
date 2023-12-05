<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesdesign.in/lizehen/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 03:24:19 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Slebew</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- css -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Pe-icon-7 icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/pe-icon-7-stroke.css') }}">
    <!--Slider-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/owl.theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/owl.transitions.css') }}" />
    <!-- magnific pop-up -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/magnific-popup.css') }}" />
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbarCollapse">

    <!-- TAGLINE HEADER START-->

    <!-- Static navbar -->

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="dist/images/logo-dark.png" alt="" height="22">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="mySidenav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#home" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Home <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.html">Home One</a></li>
                            <li><a class="dropdown-item" href="index-2.html">Home Two</a></li>
                            <li><a class="dropdown-item" href="index-3.html">Home Three</a></li>
                            <li><a class="dropdown-item" href="index-4.html">Home Four</a></li>
                            <li><a class="dropdown-item" href="index-5.html">Home Five</a></li>
                            <li><a class="dropdown-item" href="index-6.html">Home Six</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link smoothlink">Services</a>
                    </li>
                    <li>
                        <a href="#pricing" class="nav-link smoothlink">Pricing</a>
                    </li>
                    <li>
                        <a href="#team" class="nav-link smoothlink">Team</a>
                    </li>
                    <li>
                        <a href="#contact" class="nav-link smoothlink">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-center">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Log In</a>
                    </li>
                    <li class="nav-item d-inline-block d-lg-none">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                </ul>
                <div class="navbar-button d-none d-lg-inline-block">
                    <a href="{{ route('login') }}" class="btn btn-sm btn-soft-primary btn-round">Log In</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- END HOME -->
    <section class="bg-home" id="home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="home-content">
                                <div class="home-badge">
                                    <p class="f-13"><span class="text-primary">70% Off</span> for first 3 month</p>
                                </div>
                                <h1 class="home-title">Mau confess? atau mengirim pesan secara anonim?</h1>
                                <p class="text-muted mt-3 f-20"> Smexafess datang untuk kalian yang ingin mengirim pesan kepada seseorang tanpa diketahui.
                                    Bisa juga untuk kalian confess, tidak perlu lagi menggunakan Instagram. Smexafess datang memberi Evolusi!.
                                </p>
                                <div class="mt-5">
                                    <a href="#" class="btn btn-primary">Get Started <span class="text-white-50">- For
                                            Free</span> <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="home-img">
                                <img src="dist/images/features/img-2.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <!-- START CLIENT-IMG -->
    <section class="section pt-0">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-3">
                    <div class="client-images mt-4">
                        <img src="dist/images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="client-images mt-4">
                        <img src="dist/images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="client-images mt-4">
                        <img src="dist/images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="client-images mt-4">
                        <img src="dist/images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CLIENT IMG -->

    <!-- START HOW IT WORK -->
    <section class="section pt-5" id="how-it-work">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h6 class="title-sub-title mb-0 text-primary f-17">Bagaimana caranya?</h6>
                        <h3 class="title-heading mt-4">Mari kita mulai dengan 3 cara mudah
                            <br> 
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="work-box text-center p-3">
                        <div class="arrow">
                            <img src="dist/images/arrow-1.png" alt="">
                        </div>
                        <div class="work-count">
                            <p class="mb-0">1</p>
                        </div>
                        <div class="work-icon">
                            <i class="pe-7s-light mdi mdi-send"></i>
                        </div>
                        <h5 class="mt-4">Kirim Pesan kamu</h5>
                        <p class="text-muted mt-3">
                            Silahkan kalian isi pesan sesuai kemauan, kalian juga bisa memasukkan gambar.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="work-box text-center p-3">
                        <div class="arrow">
                            <img src="dist/images/arrow-2.png" alt="">
                        </div>
                        <div class="work-count">
                            <p class="mb-0">2</p>
                        </div>
                        <div class="work-icon">
                            <i class="pe-7s-pen mdi mdi-send-clock"></i>
                        </div>
                        <h5 class="mt-4">Menunggu Konfirmasi Admin</h5>
                        <p class="text-muted mt-3">
                            Setelah kalian berhasil mengirim pesan, kalian harus menunggu konfirmasi admin. Jika sudah di konfirmasi maka akan di tampilkan.
                        </p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="work-box text-center p-3">
                        <div class="work-count">
                            <p class="mb-0">3</p>
                        </div>
                        <div class="work-icon">
                            <i class="pe-7s-monitor mdi mdi-send-check"></i>
                        </div>
                        <h5 class="mt-4">Kamu Berhasil Mengirim Pesan</h5>
                        <p class="text-muted mt-3">
                            Pesanmu akan ditampilkan dihalaman Home, Pesanmu bisa dilike, komen, dan disimpan oleh orang lain.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END HOE IT WORK -->

    <!-- START SERVICES -->
    {{-- <section class="section bg-light" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h6 class="title-sub-title mb-0 text-primary f-17">Services</h6>
                        <h3 class="title-heading mt-4">Best Web Services For Effective <br> Business</h3>
                    </div>
                </div>
            </div>


            <div class="row align-items-center mt-5">

                <div class="col-lg-6">
                    <div class="tab-content mt-4" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-gen-ques" role="tabpanel" aria-labelledby="v-pills-gen-ques-tab" tabindex="0">
                            <div class="services-img">
                                <img src="dist/images/features/img-4.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel" aria-labelledby="v-pills-privacy-tab" tabindex="0">
                            <div class="services-img">
                                <img src="dist/images/features/img-5.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-support" role="tabpanel" aria-labelledby="v-pills-support-tab" tabindex="0">
                            <div class="services-img">
                                <img src="dist/images/features/img-6.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-gen-ques-tab" data-bs-toggle="pill" href="#v-pills-gen-ques" type="button" role="tab" aria-controls="v-pills-gen-ques" aria-selected="true">
                            <div class="p-3">
                                <div class="d-flex">
                                    <div class="services-title flex-shrink-0">
                                        <i class="mdi mdi-wordpress"></i>
                                    </div>
                                    <div class="flex-grow-1 ps-4">
                                        <h5 class="mb-2 services-title mt-2">
                                            Wordpress Development</h5>
                                        <p class="mb-0"> Nulla et urna mauris Phasellus varius odio ut quam pharetra tristique Quisque lobortis velit felis nec aliquet est ursus velit ac tincidunt urna.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-privacy-tab" data-bs-toggle="pill" href="#v-pills-privacy" type="button" role="tab" aria-controls="v-pills-privacy" aria-selected="false">
                            <div class="p-3">
                                <div class="d-flex">
                                    <div class="services-title flex-shrink-0">
                                        <i class="mdi mdi-security"></i>
                                    </div>
                                    <div class="flex-grow-1 ps-4">
                                        <h5 class="mb-2 services-title mt-2">Backup solution</h5>
                                        <p class="mb-0"> Vestibulum euismod tincidunt ligula at pharetra velit. Mauris nisi diam ornare dignissim metus ac vehicula imperdiet tortor Mauris a consequat mi.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-support-tab" data-bs-toggle="pill" href="#v-pills-support" type="button" role="tab" aria-controls="v-pills-support" aria-selected="false">
                            <div class="p-3">
                                <div class="d-flex">
                                    <div class="services-title flex-shrink-0">
                                        <i class="mdi mdi-cloud-download-outline"></i>
                                    </div>
                                    <div class="flex-grow-1 ps-4">
                                        <h5 class="mb-2 f-18 services-title mt-2">Cloud Hosting</h5>
                                        <p class="mb-0"> Laoreet est eleifend Phasellus nec mi eget libero ornare venenatis sit amet id turpis Interdum et malesuada fames ac ante primis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
    <!-- END SERVICES -->

    <!-- START COUNTER -->
    <section class="section bg-light pt-5">
        <div class="container">
            <div class="row" id="counter">
                <div class="col-lg-5">
                    <div class="counter-info mt-4">
                        <h3>Smexafess ingin membuat perbedaan dari menfess-menfess lainnya.</h3>
                        <p class="text-muted mt-4">Tidak lagi menggunakan Instagram untuk menfess kali ini Siswa SMKN 1 Probolinggo bisa menggunakan web SMEXAFESS.</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-primary">Learn More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="counter-box mt-4">
                                <div class="d-flex box-shadow bg-white p-4 rounded">
                                    <div class="counter-icon me-3 flex-shrink-0">
                                        <i class="mdi mdi-send text-primary h2"></i>
                                    </div>
                                    <div class="flex-grow-1 ps-2">
                                        <h3 class="counter-count"> <span class="counter-value" data-count="370">0</span>
                                            +</h3>
                                        <h5 class="mt-2 mb-0 f-17">Pesan Terkirim </h5>
                                        <p class="text-muted mb-0 mt-2 f-15">Daftar sekarang untuk melihat pesan pesan anonim.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="counter-box mt-4">
                                <div class="d-flex box-shadow bg-white p-4 rounded">
                                    <div class="counter-icon me-3 flex-shrink-0">
                                        <i class="mdi mdi-progress-download text-primary h2"></i>
                                    </div>
                                    <div class="flex-grow-1 ps-2">
                                        <h3 class="counter-count"> <span class="counter-value" data-count="2">0</span> M
                                        </h3>
                                        <h5 class="mt-2 mb-0 f-17">Download </h5>
                                        <p class="text-muted mb-0 mt-2 f-15">2 Juta Orang telah mendownload FreeFire.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-lg-6">
                            <div class="counter-box mt-4">
                                <div class="d-flex box-shadow bg-white p-4 rounded">
                                    <div class="counter-icon me-3 flex-shrink-0">
                                        <i class="mdi mdi-emoticon-outline text-primary h2"></i>
                                    </div>
                                    <div class="flex-grow-1 ps-2">
                                        <h3 class="counter-count"> <span class="counter-value" data-count="948">0</span> +
                                        </h3>
                                        <h5 class="mt-2 mb-0 f-17">Siswa Terdaftar </h5>
                                        <p class="text-muted mb-0 mt-2 f-15">Semakin banyak semakin seruuuu.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="counter-box mt-4">
                                <div class="d-flex box-shadow bg-white p-4 rounded">
                                    <div class="counter-icon me-3 flex-shrink-0">
                                        <i class="mdi mdi-timer text-primary h2"></i>
                                    </div>
                                    <div class="flex-grow-1 ps-2">
                                        <h3 class="counter-count"> <span class="counter-value" data-count="5">0</span> +
                                        </h3>
                                        <h5 class="mt-2 mb-0 f-17">Konfirmasi Admin Cepat. </h5>
                                        <p class="text-muted mb-0 mt-2 f-15">Di Smexafess lebih cepat dan mudah.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END COUNTER -->

    <!-- START PRICING -->
    <section class="section" id="pricing">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h6 class="title-sub-title mb-0 text-primary f-17">Pricing</h6>
                        <h3 class="title-heading mt-4">Paket Harga Terbaik Mulai <br> Premium</h3>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-lg-4">
                    <div class="pricing-box mt-4 rounded">
                        <div class="pricing-content">
                            <h4 class="text-uppercase">Starter</h4>
                            <p class="text-muted mb-4 pb-1">Pilihan harga premium termurah dengan fitur yang tersedia dibawah ini.
                            </p>
                            <hr>
                            <div class="pricing-plan mt-4 text-primary text-center">
                                <h1><sup class="text-muted">Rp </sup>15 <small class="f-16 text-muted">000 / Bln</small></h1>
                            </div>
                            <hr>

                            <div class="pricing-features pt-3">
                                <p class="text-muted"><strong class="text-dark">3</strong> Pesan Perhari</p>
                                <p class="text-muted"><strong class="text-dark">10x</strong> Save</p>
                                <p class="text-muted">Bisa Melihat<strong class="text-dark"> Zodiak</strong> User</p>
                            </div>
                            <div class="pricing-border mt-3"></div>
                            <div class="mt-4 pt-2 text-center">
                                <a href="#" class="btn btn-primary btn-round">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="pricing-box border border-primary mt-4 rounded">
                        <div class="pricing-content">

                            <div class="pricing-lable">Popular</div>
                            <h4 class="text-uppercase">Platinum</h4>
                            <p class="text-muted mb-4 pb-1">Terdapat fitur yang bisa membuat kamu tidak penasaran lagi siapa pengirim pesannya.
                            </p>
                            <hr>
                            <div class="pricing-plan mt-4 text-primary text-center">
                                <h1><sup class="text-muted">Rp </sup>50 <small class="f-16 text-muted">000 / Bln</small></h1>
                            </div>

                            <hr>
                            <div class="pricing-features pt-3">
                                <p class="text-muted"><strong class="text-dark">7</strong> Pesan Perhari</p>
                                <p class="text-muted"><strong class="text-dark">30x</strong> Save</p>
                                <p class="text-muted">Bisa Melihat<strong class="text-dark"> Zodiak</strong> User</p>
                                <p class="text-muted">Bisa Melihat Nama<strong class="text-dark"> Pengirim Pesan</strong></p>
                            </div>
                            <div class="pricing-border mt-3"></div>
                            <div class="mt-4 pt-2 text-center">
                                <a href="#" class="btn btn-primary btn-round">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="pricing-box mt-4 rounded">
                        <div class="pricing-content">
                            <h4 class="text-uppercase">Ultimate</h4>
                            <p class="text-muted mb-4 pb-1">Terdapat banyak fitur gokil yang mungkin bisa membuatmu lebih tidak penasaran lagi.
                            </p>
                            <hr>
                            <div class="pricing-plan mt-4 text-primary text-center">
                                <h1><sup class="text-muted">Rp </sup>120 <small class="f-16 text-muted">000 / Bln</small></h1>
                            </div>
                            <hr>
                            <div class="pricing-features pt-3">
                                <p class="text-muted"><strong class="text-dark">15</strong> Pesan Perhari</p>
                                <p class="text-muted"><strong class="text-dark">50x</strong> Save</p>
                                <p class="text-muted">Bisa Melihat<strong class="text-dark"> Zodiak</strong> User</p>
                                <p class="text-muted">Bisa Melihat Nama<strong class="text-dark"> Pengirim Pesan</strong></p>
                                <p class="text-muted">Lebih Cepat Di<strong class="text-dark"> Konfirmasi</strong> oleh Admin</p>
                            </div>
                            <div class="pricing-border mt-3"></div>
                            <div class="mt-4 pt-2 text-center">
                                <a href="#" class="btn btn-primary btn-round">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END PRICING -->

    {{-- <!-- START TESTIMONIAL -->
    <section class="section bg-testimonial" id="testimonial">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h6 class="title-sub-title mb-0 text-primary f-17">Testimonial</h6>
                        <h3 class="title-heading mt-4">What they say about us <br> honest reviews</h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="testi-carousel">

                        <div class="testimonial-box text-center p-4">
                            <div class="testi-img-user">
                                <img src="dist/images/users/img-1.jpg" alt="" class="rounded-circle testi-user mx-auto d-block">
                            </div>
                            <img src="dist/images/client-quote.png" class="mt-4 pt-2" alt="">

                            <h4 class="font-italic mt-4 pt-2">The European languages are members of the same family
                                Their
                                separate existence is a myth For science, music, sport, etc, europe their Eopean
                                languages common the theory of popular words.</h4>

                            <div class="testi-border mt-4"></div>
                            <p class="text-uppercase text-muted mb-0 mt-4 f-14">Developer</p>
                            <h5 class="mt-2">Jeremiah Eskew</h5>
                        </div>

                        <div class="testimonial-box text-center p-4">
                            <div class="testi-img-user">
                                <img src="dist/images/users/img-2.jpg" alt="" class="rounded-circle testi-user mx-auto d-block">
                            </div>
                            <img src="dist/images/client-quote.png" class="mt-4 pt-2" alt="">

                            <h4 class="font-italic mt-4 pt-2">The European languages are members of the same family
                                Their
                                separate existence is a myth For science, music, sport, etc, europe their Eopean
                                languages common the theory of popular words.</h4>

                            <div class="testi-border mt-4"></div>
                            <p class="text-uppercase text-muted mb-0 mt-4 f-14">Designer</p>
                            <h5 class="mt-2">Cameron Green</h5>
                        </div>

                        <div class="testimonial-box text-center p-4">
                            <div class="testi-img-user">
                                <img src="dist/images/users/img-3.jpg" alt="" class="rounded-circle testi-user mx-auto d-block">
                            </div>
                            <img src="dist/images/client-quote.png" class="mt-4 pt-2" alt="">

                            <h4 class="font-italic mt-4 pt-2">The European languages are members of the same family
                                Their
                                separate existence is a myth For science, music, sport, etc, europe their Eopean
                                languages common the theory of popular words.</h4>

                            <div class="testi-border mt-4"></div>
                            <p class="text-uppercase text-muted mb-0 mt-4 f-14">Manager</p>
                            <h5 class="mt-2">Sammy Randolph</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TESTIMONIAL --> --}}

    {{-- <!-- START VIDEO -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h6 class="text-uppercase desc-white f-14">Why you need Lizehen</h6>
                        <h2 class="line-height_1_4 mt-4">Join millions of users and grow your <br> business.</h2>
                        <p class="mt-3 desc-white">Join the free trial now. </p>
                        <div class="mt-4 pt-2">
                            <a href="http://vimeo.com/99025203" class="video-play-icon text-white">
                                <i class="mdi mdi-play play-icon-circle text-white me-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END VIDEO --> --}}

    <!-- START TEAM -->
    <section class="section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h6 class="title-sub-title mb-0 text-primary f-17">Team</h6>
                        <h3 class="title-heading mt-4">Meet our expert people of <br> payonline</h3>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-2">
                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="dist/images/users/img-1.jpg" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="team-social-icon">
                            <i class="mdi mdi-email"></i>
                        </div>
                        <h5 class="f-18 mt-4 mb-2">Lora Scott</h5>
                        <p class="text-muted">CEO</p>
                        <hr>
                        <div class="team-social mt-2">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="dist/images/users/img-2.jpg" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="team-social-icon">
                            <i class="mdi mdi-email"></i>
                        </div>
                        <h5 class="f-18 mt-4 mb-2">Andrew Schimke</h5>
                        <p class="text-muted">Developer</p>
                        <hr>
                        <div class="team-social mt-2">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="dist/images/users/img-3.jpg" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="team-social-icon">
                            <i class="mdi mdi-email"></i>
                        </div>
                        <h5 class="f-18 mt-4 mb-2">Mary Rivers</h5>
                        <p class="text-muted">Manager</p>
                        <hr>
                        <div class="team-social mt-2">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="dist/images/users/img-4.jpg" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="team-social-icon">
                            <i class="mdi mdi-email"></i>
                        </div>
                        <h5 class="f-18 mt-4 mb-2">John Wright</h5>
                        <p class="text-muted">Designer</p>
                        <hr>
                        <div class="team-social mt-2">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TEAM -->

    <!-- START BLOG -->
    <section class="section bg-light" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h6 class="title-sub-title mb-0 text-primary f-17">Blogs</h6>
                        <h3 class="title-heading mt-4">Our latest blog posts <br> insights articles</h3>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="blog-box mt-4">
                        <div class="blog-img">
                            <img src="dist/images/blog/img-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="blog-content mt-3">
                            <div class="blog-lable">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-share-variant me-1"></i>12</li>
                                    <li class="list-inline-item"><i class="mdi mdi-account me-1"></i>15</li>
                                </ul>
                            </div>
                            <h6 class="f-13 text-muted">UI & UX Design</h6>
                            <h5 class="mt-2">
                                <a href="#" class="blog-title">Doing a cross country road trip</a>
                            </h5>
                            <p class="text-muted mt-3">Curabitur lacus maximus suscipit curtur eget lectus lacinia consectetur dolor id volutpat magna fermentum bibendum.</p>
                            <div class="mt-4">
                                <a href="#" class="btn btn-sm btn-primary btn-round">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-box mt-4">
                        <div class="blog-img">
                            <img src="dist/images/blog/img-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="blog-content mt-3">
                            <div class="blog-lable">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-share-variant me-1"></i>12</li>
                                    <li class="list-inline-item"><i class="mdi mdi-account me-1"></i>15</li>
                                </ul>
                            </div>
                            <h6 class="f-13 text-muted">Digital Marketing</h6>
                            <h5 class="mt-2">
                                <a href="#" class="blog-title">New exhibition at our Museum</a>
                            </h5>
                            <p class="text-muted mt-3">The wise man therefore always holds in these matters to this principle of selection rejects pleasures secure other pains.</p>
                            <div class="mt-4">
                                <a href="#" class="btn btn-sm btn-primary btn-round">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-box mt-4">
                        <div class="blog-img">
                            <img src="dist/images/blog/img-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="blog-content mt-3">
                            <div class="blog-lable">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-share-variant me-1"></i>12</li>
                                    <li class="list-inline-item"><i class="mdi mdi-account me-1"></i>15</li>
                                </ul>
                            </div>
                            <h6 class="f-13 text-muted">Travelling</h6>
                            <h5 class="mt-2">
                                <a href="#" class="blog-title">Why are so many people..</a>
                            </h5>
                            <p class="text-muted mt-3">Juis autem vel eumat reprehenderit voluptate velit esse quam nihil molestiae consequatur fugiat voluptas nulla pariatur.</p>
                            <div class="mt-4">
                                <a href="#" class="btn btn-sm btn-primary btn-round">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END BLOG -->

    <!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h6 class="title-sub-title mb-0 text-primary f-17">Contact us</h6>
                        <h3 class="title-heading mt-4">Have a project on mind? </h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="contact-info bg-light p-4 rounded mt-4">
                        <h5 class="f-18">Contact Details</h5>
                        <p class="text-muted">Faucibus orci luctus atet ultrices posuere duiorci sollicitudin luctus.</p>
                        <div class="mt-4">
                            <div class="d-flex">
                                <i class="pe-7s-home h4 flex-shrink-0"></i>
                                <div class="flex-grow-1 ps-3">
                                    <h5 class="mt-0 f-17">Head Office</h5>
                                    <p class="text-muted mb-0">2301 Finwood Road Monmouth Junction, NJ 08852</p>
                                </div>
                            </div>

                            <div class="mt-4 pt-1">
                                <div class="d-flex">
                                    <i class="pe-7s-mail-open-file h4 flex-shrink-0"></i>
                                    <div class="flex-grow-1 ps-3">
                                        <h5 class="mt-0 f-17">Email Us</h5>
                                        <p class="text-muted mb-0">RuthJSimpson@armyspy.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-1">
                                <div class="d-flex">
                                    <i class="pe-7s-call h4 flex-shrink-0"></i>
                                    <div class="flex-grow-1 ps-3">
                                        <h5 class="mt-0 f-17">Call Support</h5>
                                        <p class="text-muted mb-0">
                                            +001 513-965-6401
                                        </p>
                                        <p class="text-muted mb-0">
                                            +225 303-760-9330
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ps-0 ps-lg-2 mt-4">
                        <h5 class="f-18">Send a Message</h5>

                        <div class="custom-form mt-3">
                            <form method="post" onsubmit="return validateForm()" class="contact-form" name="myForm" id="myForm">
                                <span id="error-msg"></span>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mt-4 pt-2">
                                            <label class="contact-lable">First Name</label>
                                            <input name="name" id="name" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mt-4 pt-2">
                                            <label class="contact-lable">Last Name</label>
                                            <input name="name" id="lastname" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-4 pt-2">
                                            <label class="contact-lable">Email Address</label>
                                            <input name="email" id="email" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-4 pt-2">
                                            <label class="contact-lable">Subject</label>
                                            <input name="subject" id="subject" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-4 pt-2">
                                            <label class="contact-lable">Your Message</label>
                                            <textarea name="comments" id="comments" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mt-4 text-end">
                                        <input id="submit" name="send" class="submitBnt btn btn-primary btn-round" value="Send Message" type="submit">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END CONTACT -->

    <!-- START FOOTER -->
    <section class="py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-info mt-4">
                        <img src="dist/images/logo-dark.png" alt="" height="22">
                        <p class="text-muted mt-4 mb-2">Pretium viverra tinunt sagittis tempor.</p>
                        <img src="dist/images/features/img-1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <div class="row ps-0 ps-lg-3">
                        <div class="col-lg-3">
                            <div class="mt-4">
                                <h5 class="text-uppercase f-16">Product</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Credit</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mt-4">
                                <h5 class="text-uppercase f-16">Company</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#">Missions</a></li>
                                    <li><a href="#">Carrers</a></li>
                                    <li><a href="#">Investors</a></li>
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="mt-4">
                                <h5 class="text-uppercase f-16">More Info</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">For Marketing</a></li>
                                    <li><a href="#">For CEOs</a></li>
                                    <li><a href="#">For Agencies</a></li>
                                    <li><a href="#">Our Apps</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mt-4">
                                <h5 class="text-uppercase f-16">Resources</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#">Form validation</a></li>
                                    <li><a href="#">Visibility</a></li>
                                    <li><a href="#">Accessibility</a></li>
                                    <li><a href="#">Design Defined</a></li>
                                    <li><a href="#">Marketplace</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-muted mb-0"><script>document.write(new Date().getFullYear())</script> © Lizehen. Design by Themesdesign</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END FOOTER -->

    <!-- javascript -->
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.mb.YTPlayer.js') }}"></script>
    <!-- Portfolio -->
    <script src="{{ asset('dist/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- contact init -->
    <script src="{{ asset('dist/js/contact.init.js') }}"></script>
    <!-- counter init -->
    <script src="{{ asset('dist/js/counter.init.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('dist/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.js') }}"></script>

</body>


<!-- Mirrored from themesdesign.in/lizehen/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 03:24:29 GMT -->
</html> 