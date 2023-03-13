<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rent Portal || Contact</title>


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

    @include('layout.err')
    @include('sweetalert::alert')
    <main id="main">
        <div class="col-sm-12 section-t8 container">
        <div class="bg-info shadow-3 p-3 w-80 m-3 text-center ">
                <h3 class="text-dark">Update Your Profile</h3>
            </div>
                                <form action="{{ route('user.updateProfile') }}" method="post"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="firstname" class="form-control form-control-lg form-control-a" placeholder="Your First Name" required value="{{ $user->firstname }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="lastname" class="form-control form-control-lg form-control-a" placeholder="Your Last Name" required value="{{ $user->lastname }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required value="{{ $user->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input name="phone" type="tel" class="form-control form-control-lg form-control-a" placeholder="Your phone" required value="{{ $user->phone }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span class="text-muted">Profile : </span>
                                                <input type="file" name="avatar" class="form-control form-control-lg form-control-a">
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center m-3">
                                            <button class="btn-lg btn-warning btn" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
    </main>

    @include('user.footer');
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    +
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>