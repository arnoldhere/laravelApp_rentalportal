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

    @include('layout.err');
    @include('sweetalert::alert');
    @include('user.navbar');
    <main id="main">

        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Contact US</h1>
                            <span class="color-text-a">Aut voluptas consequatur unde sed omnis ex placeat quis eos. Aut
                                natus officia corrupti qui autem fugit consectetur quo. Et ipsum eveniet laboriosam
                                voluptas beatae possimus qui ducimus. Et voluptatem deleniti. Voluptatum voluptatibus
                                amet. Et esse sed omnis inventore hic culpa.</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Contact
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= Contact Single ======= -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-map box">
                            <div id="map" class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 section-t8">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="{{ route('user.storeFeedback') }}" method="post" role="form" class="php-email-form" name="contactform">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-3">
                                            <div class="mb-3">
                                                <div class="loading">Loading</div>
                                                <div class="error-message"></div>
                                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-a">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 section-md-t3">
                                <div class="icon-box section-b2">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-envelope"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Say Hello</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <p class="mb-1">Email.
                                                <span class="color-a">contact.rentportal@gmail.com</span>
                                            </p>
                                            <p class="mb-1">Phone.
                                                <span class="color-a">+001 820781200</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box section-b2">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-geo-alt"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Find us in</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <p class="mb-1">
                                                Manhattan, New York 10036,
                                                <br> EE. UU.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-share"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Social networks</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <div class="socials-footer">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="https://www.facebook.com" class="link-one" title="" target="_blank">
                                                            <i class="bi bi-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="https://www.twitter.com" class="link-one" title="" target="_blank">
                                                            <i class="bi bi-twitter" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="https://www.instagram.com" class="link-one" title="" target="_blank">
                                                            <i class="bi bi-instagram" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="https://www.linkedin.com" class="link-one" title="" target="_blank">
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
                </div>
            </div>
        </section><!-- End Contact Single-->

    </main><!-- End #main -->

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