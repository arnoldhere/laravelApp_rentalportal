<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rental Portal</title>

    {{-- Font awsome kit --}}
    <script src="{{ asset('https://kit.fontawesome.com/7ecf90d6f6.js') }}" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ 'assets/vendor/swiper/swiper-bundle.min.css' }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>


    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="{{ route('user.index') }}">Rent<span
                    class="color-b">Portal</span></a>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('user.index') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('user.about') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('user.blog_grid') }}">Blog</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item " href="{{ route('user.property_single') }}">Property Single</a>
                            <a class="dropdown-item " href="{{ route('user.blog_single') }}">Blog Single</a>
                            <a class="dropdown-item " href="{{ route('user.agents_grid') }}">Agents Grid</a>
                            <a class="dropdown-item " href="{{ route('user.agent_single') }}">Agent Single</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('user.contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <li class="nav-item dropdown" style="list-style: none">
                <a href="" class="nav-link dropdown-toggle" id="userDropdown" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="fa-solid fa-user"></i></a>
                <div class="dropdown-menu">
                    <a href="" class="dropdown-item">Show Profile</a>
                    <a href="{{ route('logout') }}" class="dropdown-item">Log out</a>
                </div>
            </li>
        </div>
    </nav><!-- End Header/Navbar -->

    <!-- ======= Intro Section ======= -->
    <div class="intro intro-carousel swiper position-relative">

        <div class="swiper-wrapper">

            <div class="swiper-slide carousel-item-a intro-item bg-image"
                style="background-image: url(assets/img/slide-1.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Jaipur
                                            <br> 302005
                                        </p>
                                        <h1 class="intro-title mb-4 ">
                                            <span class="color-b">204 </span>
                                            <br> Olive Road Two
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">rent | &#x20B9; 4500</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide carousel-item-a intro-item bg-image"
                style="background-image: url(assets/img/slide-2.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top"> New Goa
                                            <br> 403 801
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">696 </span> Rino
                                            <br> Venda Road Five
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">rent | &#x20B9; 7500</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide carousel-item-a intro-item bg-image"
                style="background-image: url(assets/img/slide-3.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top"> Mount Abu
                                            <br> 307501
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">901 </span> Alira
                                            <br> Roan Road One
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">rent | &#x20B9; 3500</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div><!-- End Intro Section -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section class="section-services section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Our Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box-c foo ">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <span class="bi bi-cart"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Better Lifestyle</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c">
                                    Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent
                                    sapien massa,
                                    convallis a pellentesque
                                    nec, egestas non nisi.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-c foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <span class="bi bi-calendar4-week"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Better property </h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c">
                                    Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit.
                                    Mauris blandit
                                    aliquet elit, eget tincidunt
                                    nibh pulvinar a.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-c foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <span class="bi bi-card-checklist"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Sell</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c">
                                    Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent
                                    sapien massa,
                                    convallis a pellentesque
                                    nec, egestas non nisi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Latest Properties Section ======= -->
        <section class="section-property section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Update On latest Properties</h2>
                            </div>
                            <div class="title-link">
                                <a href="{{ route('user.property_grid') }}">All Property
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="property-carousel" class="swiper">
                    <div class="swiper-wrapper">

                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="assets/img/property-6.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="">206 Mount
                                                    <br /> Olive Road Two</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">rent | &#x20B9; 3599</span>
                                            </div>
                                            <a href="{{ route('user.property_grid') }}" class="link-a">Click here to
                                                view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Area</h4>
                                                    <span>340m
                                                        <sup>2</sup>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Beds</h4>
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Baths</h4>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Garages</h4>
                                                    <span>1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="assets/img/property-3.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="">157 West
                                                    <br /> Central Park</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">rent | &#x20B9; 9999</span>
                                            </div>
                                            <a href="{{ route('user.property_single') }}" class="link-a">Click here
                                                to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Area</h4>
                                                    <span>340m
                                                        <sup>2</sup>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Beds</h4>
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Baths</h4>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Garages</h4>
                                                    <span>1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="assets/img/property-7.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="">245 Azabu
                                                    <br /> Nishi Park let</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">rent | &#x20B9; 6499</span>
                                            </div>
                                            <a href="{{ route('user.property_single') }}l" class="link-a">Click here
                                                to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Area</h4>
                                                    <span>340m
                                                        <sup>2</sup>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Beds</h4>
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Baths</h4>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Garages</h4>
                                                    <span>1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="assets/img/property-10.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="">204 Montal
                                                    <br /> South Bela Two</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">rent | &#x20B9; 4999</span>
                                            </div>
                                            <a href="{{ route('user.property_single') }}" class="link-a">Click here
                                                to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Area</h4>
                                                    <span>340m
                                                        <sup>2</sup>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Beds</h4>
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Baths</h4>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Garages</h4>
                                                    <span>1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->
                    </div>
                </div>
                <div class="propery-carousel-pagination carousel-pagination"></div>

            </div>
        </section><!-- End Latest Properties Section -->

        <!-- ======= Agents Section ======= -->
        <section class="section-agents section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Best Agents</h2>
                            </div>
                            <div class="title-link">
                                <a href="{{ route('user.agents_grid') }}">All Agents
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box-d">
                            <div class="card-img-d">
                                <img src="assets/img/agent-4.jpg" alt="" class="img-d img-fluid">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="{{ route('user.agent_single') }}" class="link-two">Tirth Panchal
                                                <br> </a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body-d">
                                    <p class="content-d color-text-a">
                                        Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                    </p>
                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234
                                        </p>
                                        <p>
                                            <strong>Email: </strong> agents@example.com
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer-d">
                                    <div class="socials-footer d-flex justify-content-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-d">
                            <div class="card-img-d">
                                <img src="assets/img/agent-1.jpg" alt="" class="img-d img-fluid">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="agent-single.html" class="link-two">Arnold Macwan
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body-d">
                                    <p class="content-d color-text-a">
                                        Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                    </p>
                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234
                                        </p>
                                        <p>
                                            <strong>Email: </strong> agents@example.com
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer-d">
                                    <div class="socials-footer d-flex justify-content-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-d">
                            <div class="card-img-d">
                                <img src="assets/img/agent-5.jpg" alt="" class="img-d img-fluid">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="agent-single.html" class="link-two">Dharmik Halani</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body-d">
                                    <p class="content-d color-text-a">
                                        Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                    </p>
                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234
                                        </p>
                                        <p>
                                            <strong>Email: </strong> agents@example.com
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer-d">
                                    <div class="socials-footer d-flex justify-content-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Agents Section -->

        <!-- ======= Latest News Section ======= -->
        <section class="section-news section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest News</h2>
                            </div>
                            <div class="title-link">
                                <a href="blog-grid.html">All News
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="news-carousel" class="swiper">
                    <div class="swiper-wrapper">

                        <div class="carousel-item-c swiper-slide">
                            <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                    <img src="assets/img/post-2.jpg" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="" class="category-b">House on rent soon</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="blog-single.html">House is comming at Maldives
                                                    <br> new</a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b">18 feb. 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                        <div class="carousel-item-c swiper-slide">
                            <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                    <img src="assets/img/post-7.jpg" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">Home to Sell</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="blog-single.html">Home on sell in Goa
                                                    <br> new</a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b">25 mar. 2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                        <div class="carousel-item-c swiper-slide">
                            <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                    <img src="assets/img/post-3.jpg" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">Travel</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="#">Travel packages are comming
                                                    <br> new</a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b">18 Sep. 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                    </div>
                </div>

                <div class="news-carousel-pagination carousel-pagination"></div>
            </div>
        </section><!-- End Latest News Section -->

        <!-- ======= Testimonials Section ======= -->
        <section class="section-testimonials section-t8 nav-arrow-a">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Testimonials</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="testimonial-carousel" class="swiper">
                    <div class="swiper-wrapper">

                        <div class="carousel-item-a swiper-slide">
                            <div class="testimonials-box">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial-img">
                                            <img src="assets/img/testimonial-1.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial-ico">
                                            <i class="bi bi-chat-quote-fill"></i>
                                        </div>
                                        <div class="testimonials-content">
                                            <p class="testimonial-text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
                                                cupiditate ea nam praesentium
                                                debitis hic ber quibusdam
                                                voluptatibus officia expedita corpori.
                                            </p>
                                        </div>
                                        <div class="testimonial-author-box">
                                            <img src="assets/img/mini-testimonial-1.jpg" alt=""
                                                class="testimonial-avatar">
                                            <h5 class="testimonial-author">Albert & Erika</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                        <div class="carousel-item-a swiper-slide">
                            <div class="testimonials-box">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial-img">
                                            <img src="assets/img/testimonial-2.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial-ico">
                                            <i class="bi bi-chat-quote-fill"></i>
                                        </div>
                                        <div class="testimonials-content">
                                            <p class="testimonial-text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
                                                cupiditate ea nam praesentium
                                                debitis hic ber quibusdam
                                                voluptatibus officia expedita corpori.
                                            </p>
                                        </div>
                                        <div class="testimonial-author-box">
                                            <img src="assets/img/mini-testimonial-2.jpg" alt=""
                                                class="testimonial-avatar">
                                            <h5 class="testimonial-author">Pablo & Emma</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                    </div>
                </div>
                <div class="testimonial-carousel-pagination carousel-pagination"></div>

            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <section class="section-footer bg-secondary text-white">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">RentPortal</h3>
                        </div>
                        <div class="w-body-a">
                            <p class="w-text-a color-text-a">
                                Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo
                                consequat duis
                                sed aute irure.
                            </p>
                        </div>
                        <div class="w-footer-a">
                            <ul class="list-unstyled">
                                <li class="color-a">
                                    <span class="color-text-a">Phone .</span>  + 02 65685457002
                                </li>
                                <li class="color-a">
                                    <span class="color-text-a">Email .</span> rentportal@outlook.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">The Company</h3>
                        </div>
                        <div class="w-body-a">
                            <div class="w-body-a">
                                <ul class="list-unstyled">
                                    <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="#">Site Map</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="#">Legal</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="#">Agent Admin</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="#">Careers</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="#">Affiliate</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="socials-a">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com" target="_blank">
                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.twitter.com" target="_blank">
                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com" target="_blank">
                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com" target="_blank">
                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright-footer">
                        <p class="copyright color-text-a">
                            &copy; Copyright
                            <span class="color-a">RentalPortal</span> All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
