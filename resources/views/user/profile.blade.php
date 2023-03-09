<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rent Portal || User Profile</title>


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

    @include('layout.err');
    @include('sweetalert::alert');
    @include('user.navbar');


    {{-- main content --}}

    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row bg-success" style="height:200px">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="{{ asset('/userAvatars/'.Auth::user()->avatar) }}" alt="Avatar Image" class="img-fluid img-thumbnail mt-2 mb-2" style="width: 200px; z-index: 1">
                                <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                                    Edit profile
                                </button>
                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                                <h4 class="text-dark">
                                    {{ 
                                       Auth::user()->firstname;     
                                     }}
                                     </h4>
                                     <h6 class="text-dark b-50">
                                        {{ Auth::user()->lastname }}
                                     </h6>
                                <p></p>
                            </div>
                        </div>
                        <div class="p-4 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1">

                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1 p-2">About</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <p class="font-italic mb-1"> 
                                        <span class="text-danger">Email :</span> 
                                        <a href="mailto:{{ Auth::user()->email }}" class="link-item "> {{ Auth::user()->email }}</a>
                                    </p>
                                    <p class="font-italic mb-1">
                                        <span class="text-danger">Phone :</span>
                                        {{ Auth::user()->phone }}
                                    </p>
                                    {{-- <p class="font-italic mb-0">Photographer</p> --}}
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0">Recent photos</p>
                                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                                <div class="col mb-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                                <div class="col">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(114).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('user.footer');
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>