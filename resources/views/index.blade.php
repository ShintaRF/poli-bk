<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Temu Janji Pasien</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('OnePage/assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('OnePage/assets/img/logo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('OnePage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('OnePage/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="#">Poliklinik</a></h1>


            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Sistem Temu Janji Pasien - Dokter</h1>
                    <h2>Bimbingan Karir 2023 Bidang Web</h2>
                </div>
            </div>
            <div class="row icon-boxes">
                <div class="col-md-5 col-lg-6 d-flex align-items-center mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-user-line"></i></div>
                        <h4 class="title"><a href="{{ route('pasien.login') }}">Login Sebagai Pasien</a></h4>
                        <p class="description">Apabila Anda adalah seorang Pasien silahkan Login terlebih dahulu untuk
                            melakukan pendaftaran sebagai Pasien</p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-6 d-flex align-items-center mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-user-line"></i></div>
                        <h4 class="title"><a href="{{ route('dokter.dashboard') }}">Login Sebagai Dokter</a></h4>
                        <p class="description">Apabila Anda adalah seorang Dokter silahkan Login terlebih dahulu untuk
                            memulai melayani Pasien</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <p>Sistem Temu Janji Pasien - Dokter</p>
                </div>

                <div class="row content">

                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                        Sistem Temu Janji Pasien - Dokter adalah inovasi canggih dalam layanan kesehatan, 
                        yang memfasilitasi hubungan antara pasien dan dokter dengan cara yang efektif. 
                        Melalui penggunaan teknologi terkini, sistem ini dibuat untuk meningkatkan proses 
                        pencarian, pembuatan, dan pengaturan janji temu antara pasien dan dokter, 
                        memberikan pengalaman yang lebih mulus dan terintegrasi. 
                        Berikut adalah beberapa kata-kata yang dapat digunakan untuk mendeskripsikan 
                        Sistem Temu Janji Pasien - Dokter


                        </p>
                        <a href="#" class="btn-learn-more">Pelajari Lebih Lanjut</a>
                    </div>
                    <div class="col-lg-6">
                        <p>
                            Dalam memberikan layanan temu janji pasien-dokter, kami bangga dengan sejumlah keunggulan
                            yang menjadi ciri khas kami. Berikut adalah beberapa alasan mengapa Anda dapat mempercayakan
                            temu janji dan bimbingan karir bidang web kepada kami:
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Pelayanan Efisien dan Cepat</li>
                            <li><i class="ri-check-double-line"></i> Pengalaman Pengguna yang Ramah</li>
                            <li><i class="ri-check-double-line"></i> Akses Mudah dan Transparan</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimoni Pasien</h2>
                    <p>Para pasien yang setia</p>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    "Saya telah menjadi pasien di Klinik Harmonis selama lebih dari lima tahun, dan pengalaman saya selalu positif. 
                                    Dokter-dokter di sana sangat mengerti kebutuhan kesehatan saya sebagai lansia. Mereka selalu menunjukkan empati dan profesionalisme yang tinggi. 
                                    Fasilitasnya juga sangat nyaman dan mudah diakses. Saya sangat berterima kasih atas perawatan yang telah saya terima."
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('OnePage/assets/img/testimonials/testimonials-1.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Abah Gatot</h3>
                                <h4>Semarang</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Sebagai ibu baru, saya merasa sangat terbantu dengan layanan di Klinik Sehat Bersama. 
                                    Staf mereka sangat ramah dan penyayang, membuat setiap kunjungan bersama bayi saya menjadi pengalaman yang menyenangkan. 
                                    Dokter anak mereka memberikan perhatian penuh dan menjawab semua pertanyaan saya dengan sabar. 
                                    Saya sangat merekomendasikan klinik ini untuk semua keluarga!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('OnePage/assets/img/testimonials/testimonials-5.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Han Seo Hee</h3>
                                <h4>Semarang</h4>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Sebagai atlet profesional, saya membutuhkan dukungan kesehatan yang dapat diandalkan dan cepat tanggap. 
                                    Poliklinik disini memberikan kedua aspek tersebut dengan sempurna. Dari terapi fisik hingga konsultasi nutrisi, tim mereka telah membantu saya mempertahankan performa terbaik. 
                                    Poliklinik ini adalah mitra kesehatan yang saya percayai untuk menjaga kondisi fisik saya tetap optimal.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('OnePage/assets/img/testimonials/testimonials-4.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Stephen</h3>
                                <h4>Ungaran</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <!-- Add more testimonials as needed -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>


            </div>
        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Poliklinik</span></strong>. All Rights Reserved
                </div>

            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('OnePage/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('OnePage/assets/js/main.js') }}"></script>

</body>

</html>
