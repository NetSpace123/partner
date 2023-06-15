<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Parnter</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="#" rel="icon">
    <link href="#" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/assets/css/variables.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">


</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between header-container">

        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <h1>LankaParnter<span>.</span></h1>
        </a>

        <div class="float-right">
            <nav id="navbar" class="navbar float-right">
                <ul>
                    <div class="float-right">
                        <form action="{{route('user-login')}}">
                            <button type="submit"
                                    class="btn btn-primary me-3  heder-btn-item btn-square mobile-nav-btn">
                                Login
                            </button>
                        </form>
                    </div>
                    <div class="float-right">
                        <form action="{{route('user-register')}}">
                            <button type="submit"
                                    class="btn btn-primary me-3  heder-btn-item btn-square mobile-nav-btn">
                                Register
                            </button>
                        </form>
                    </div>
                    <div class="float-right">
                        <form action="">
                            <button type="submit"
                                    class="btn btn-warning me-3  heder-btn-item btn-square mobile-nav-btn">
                                Post your Ad
                                Free
                            </button>
                        </form>
                    </div>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->
        </div>
    </div>

    <div id="demo" class="carousel slide mt-2 mb-4" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/hero.jpg" alt="Los Angeles" width="100%" height="350px">
            </div>
            <div class="carousel-item">
                <img src="assets/img/hero.jpg" alt="Chicago" width="100%" height="350px">
            </div>
            <div class="carousel-item">
                <img src="assets/img/hero.jpg" alt="New York" width="100%" height="350px">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


    <div class="position-relative search-bar-new mx-auto animated slideInDown">
        <input class="form-control border-2 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Vezel Car">
        <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                style="margin-top: 7px;">Search
        </button>
    </div>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0 tree-of-col">
                    <div class="icon-box">
                        <i class="bi bi-car-front" style="color: #5578ff;"></i>
                        <h3><a href="">Vehicles</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0 tree-of-col">
                    <div class="icon-box">
                        <i class="bi bi-house-add-fill" style="color: #5578ff;"></i>
                        <h3><a href="">Property</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0 tree-of-col">
                    <div class="icon-box">
                        <i class="bi bi-phone" style="color: #e80368;"></i>
                        <h3><a href="">Electronics</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0 tree-of-col">
                    <div class="icon-box">
                        <i class="bi bi-tools" style="color: #e361ff;"></i>
                        <h3><a href="">Home & Living</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 tree-of-col">
                    <div class="icon-box">
                        <i class="bi bi-bag" style="color: #47aeff;"></i>
                        <h3><a href="">Fashion</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 tree-of-col">
                    <div class="icon-box">
                        <i class="bi bi-book" style="color: #ffa76e;"></i>
                        <h3><a href="">Books</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 tree-of-col">
                    <div class="icon-box">
                        <i class="bi bi-flower2" style="color: #11dbcf;"></i>
                        <h3><a href="">Ayurvedic</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 tree-of-col">
                    <div class="icon-box">
                        <i class="bi bi-apple" style="color: #4233ff;"></i>
                        <h3><a href="">Foods</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 tree-of-col">
                    <div class="icon-box">
                        <i class="bi bi-bicycle" style="color: #b2904f;"></i>
                        <h3><a href="">Sports Item</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 tree-of-col">
                    <div class="icon-box">
                        <i class="bi bi-flower2" style="color: #b20969;"></i>
                        <h3><a href="">Jewellery</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 tree-of-col">
                    <div class="icon-box">
                        <i class="bi bi-play-circle" style="color: #ff5828;"></i>
                        <h3><a href="">Verdo Park</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 tree-of-col">
                    <div class="icon-box">
                        <i class="bi bi-play-circle" style="color: #29cc61;"></i>
                        <h3><a href="">Flavor Nivelanda</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <ul class="nav nav-tabs row gy-4 d-flex">

                <li class="nav-item col-6 col-md-4 col-lg-2">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <i class="bi bi-binoculars color-cyan"></i>
                        <h4>Modinest</h4>
                    </a>
                </li><!-- End Tab 1 Nav -->

                <li class="nav-item col-6 col-md-4 col-lg-2">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <i class="bi bi-box-seam color-indigo"></i>
                        <h4>Undaesenti</h4>
                    </a>
                </li><!-- End Tab 2 Nav -->

                <li class="nav-item col-6 col-md-4 col-lg-2">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <i class="bi bi-brightness-high color-teal"></i>
                        <h4>Pariatur</h4>
                    </a>
                </li><!-- End Tab 3 Nav -->

                <li class="nav-item col-6 col-md-4 col-lg-2">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <i class="bi bi-command color-red"></i>
                        <h4>Nostrum</h4>
                    </a>
                </li><!-- End Tab 4 Nav -->

                <li class="nav-item col-6 col-md-4 col-lg-2">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                        <i class="bi bi-easel color-blue"></i>
                        <h4>Adipiscing</h4>
                    </a>
                </li><!-- End Tab 5 Nav -->

                <li class="nav-item col-6 col-md-4 col-lg-2">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                        <i class="bi bi-map color-orange"></i>
                        <h4>Reprehit</h4>
                    </a>
                </li><!-- End Tab 6 Nav -->

            </ul>

            <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                            <h3>Modinest</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et
                                dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo
                                    consequat.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo
                                    consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                                    dolore eu fugiat
                                    nulla pariatur.
                                </li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in
                                voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt
                                in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/features-1.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 1 -->

                <div class="tab-pane" id="tab-2">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1">
                            <h3>Undaesenti</h3>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in
                                voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt
                                in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et
                                dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo
                                    consequat.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores
                                    dolores quos qui
                                    a. Ipsum neque dolor voluptate nisi sed.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo
                                    consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                                    dolore eu fugiat
                                    nulla pariatur.
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-2.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 2 -->

                <div class="tab-pane" id="tab-3">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1">
                            <h3>Pariatur</h3>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in
                                voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt
                                in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo
                                    consequat.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores
                                    dolores quos qui
                                    a. Ipsum neque dolor voluptate nisi sed.
                                </li>
                            </ul>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et
                                dolore
                                magna aliqua.
                            </p>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-3.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 3 -->

                <div class="tab-pane" id="tab-4">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1">
                            <h3>Nostrum</h3>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in
                                voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt
                                in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et
                                dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo
                                    consequat.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo
                                    consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                                    dolore eu fugiat
                                    nulla pariatur.
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-4.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 4 -->

                <div class="tab-pane" id="tab-5">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1">
                            <h3>Adipiscing</h3>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in
                                voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt
                                in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et
                                dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo
                                    consequat.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo
                                    consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                                    dolore eu fugiat
                                    nulla pariatur.
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-5.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 5 -->

                <div class="tab-pane" id="tab-6">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1">
                            <h3>Reprehit</h3>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in
                                voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt
                                in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et
                                dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo
                                    consequat.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo
                                    consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                                    dolore eu fugiat
                                    nulla pariatur.
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-6.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 6 -->

            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>HeroBiz</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>LankaParnter</span></strong>. All Rights Reserved
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
