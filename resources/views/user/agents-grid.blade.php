<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rent Portal || agents</title>


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

<body>
    @include('user.navbar');
    <main id="main">
        <!-- =======Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Our Amazing Agents</h1>
                            <span class="color-text-a"></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Agents Grid
                                </li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= Agents Grid ======= -->
        <section class="agents-grid grid">
            <div class="container">
                <div class="row">
                    
                    @foreach ($agents as $agent )
                        
                     <div class="col-md-4">
                        <div class="card-box-d">
                            <div class="card-img-d">
                                <img src="{{ asset('admin/agents/'.$agent->profilePhoto) }}" alt="" class="img-d img-fluid img-thubnail" style="
                                    height:400px !important;
                                    /* width: 250px !important; */
                                    ">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="#" class="link-two"> {{ $agent->name }}
                                                <br>  </a>
                                        </h3>
                                            <hr>
                                            <h6 class="text-dark">
                                                {{ $agent->email }}
                                            </h6>
                                    </div>
                                </div>
                                <div class="card-body-d">
                                    <p class="content-d color-text-a">
                                        {{ $agent->about }}
                                    </p>
                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Phone: </strong> {{ $agent->phone }}
                                        </p>
                                        <p>
                                            {{-- <strong>Email: </strong> agents@example.com --}}
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
                    @endforeach
                </div>

            </div>
        </section><!-- End Agents Grid-->

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
