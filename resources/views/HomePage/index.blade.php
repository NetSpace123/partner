@extends('layouts.master-layout')

@section('title', 'Home Page')

@section('content')

    @include('layouts.partners-header')

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

        @include('layouts.partners-footer')

@endsection


