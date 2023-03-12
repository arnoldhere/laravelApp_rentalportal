<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rent Portal || about</title>


    {{-- Font awsome kit --}}
    <script src="{{ asset('https://kit.fontawesome.com/7ecf90d6f6.js') }}" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>



    @include('user.navbar');

    <main id="main">

        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        {{-- <div class="title-single-box">
                            <h1 class="title-single">We Do Great Design For Creative Folks</h1>
                        </div> --}}
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    About
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= About Section ======= -->
        <section class="section-about">
            <div class="container">
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
                        <?php $flg = 1; ?>
                        @foreach ($feedbacks as $feedback)
                            <?php if ($flg > 5) {
                                break;
                            } ?>
                            <div class="carousel-item-a swiper-slide">
                                <div class="testimonials-box">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="testimonial-img">
                                                <img src="{{ asset('admin/assets/img/default-avatar.png') }}"
                                                    alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="testimonial-ico">
                                                <i class="bi bi-chat-quote-fill"></i>
                                            </div>
                                            <div class="testimonials-content">
                                                <p class="testimonial-text">
                                                    {{ $feedback->message }}
                                                </p>
                                            </div>
                                            <div class="testimonial-author-box">
                                                <h5 class="testimonial-author">{{ $feedback->name }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End carousel item -->
                            <?php $flg++; ?>
                        @endforeach
                    </div>
                </div> 
                <div class="testimonial-carousel-pagination carousel-pagination"></div>

            </div>
        </section><!-- End Testimonials Section --> --}}

            </div>
        </section>

        <!-- =======Team Section ======= -->
        <section class="section-agents section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Meet Our Team</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box-d">
                            <div class="card-img-d">
                                <img src="{{ asset('assets/img/agent-7.jpg') }}" alt="" class="img-d img-fluid">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="" class="link-two">Dharmik Halani
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
                                            <strong>Email: </strong> dkhalani@gmail.com
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
                                <img src="{{ asset('imgs/arnold.JPG') }}" alt=""
                                    class="img-d img-fluid" height="50rem">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="" class="link-two">Arnold Macwam
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body-d">
                                    <p class="content-d color-text-a">
                                        Very talented Programmer
                                    </p>
                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Phone: </strong> +91 8200781208
                                        </p>
                                        <p>
                                            <strong>Email: </strong> official.arnold.mac.2004@gmail.com
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
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-dribbble" aria-hidden="true"></i>
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
                                <img src="{{ asset('assets/img/agent-5.jpg') }}" alt=""
                                    class="img-d img-fluid">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="" class="link-two">Tirth Panchal
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body-d">
                                    <p class="content-d color-text-a">
                                        A good Content maker
                                    </p>
                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234
                                        </p>
                                        <p>
                                            <strong>Email: </strong> tirthpanchal165@gmail.com
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
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-dribbble" aria-hidden="true"></i>
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
        </section><!-- End About Section-->

    </main><!-- End #main -->

    @include('user.footer');
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
