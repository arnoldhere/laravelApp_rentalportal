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


    @include('user.navbar')

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
                        @foreach ($properti as $property )
                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="{{ asset('imgs/propertyImgs/'. $property->image ) }}" alt=""  class="img-a img-thumbnail " style="
                                        height: 400px !important;
                                        ">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="">{{ $property->type }}
                                                    <br /> {{ $property->location }}</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">{{ $property->status }} | &#x20B9; {{ $property->currentPrice }}</span>
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
                                                    <span>{{ $property->area }}m
                                                        <sup>2</sup>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                        <!-- End carousel item -->
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
                                <h2 class="title-a">Our Agents</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid d-flex ">
                    <?php $cnt = 1; ?>
                    @foreach ($agents as $agent)
                        <?php if ($cnt > 4) {
                            break;
                        } ?>
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="carousel-item-c swiper-slide">
                                    <div class="row-md">
                                        <div class="col-md mx-2">
                                            <div class="card-box-d">
                                                <div class="card-img-d">
                                                    <img src="{{ asset('admin/agents/' . $agent->profilePhoto) }}"
                                                        alt="agent pic" class="img-d img-fluid"
                                                        style="height: 20rem;">
                                                </div>
                                                <div class="card-overlay card-overlay-hover">
                                                    <div class="card-header-d">
                                                        <div class="card-title-d align-self-center">
                                                            <h3 class="title-d">
                                                                <a href="{{ route('user.agent_single') }}"
                                                                    class="link-two">
                                                                    {{ $agent->name }}
                                                                    <br> </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="card-body-d">
                                                        <p class="content-d color-text-a -3">
                                                            {{ $agent->about }}
                                                        </p>
                                                        <div class="info-agents color-a">
                                                            <p>
                                                                <strong>Phone: </strong> {{ $agent->phone }}
                                                            </p>
                                                            <p>
                                                                <strong>Email: </strong> {{ $agent->email }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer-d">
                                                        <div class="socials-footer d-flex justify-content-center">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a href="#" class="link-one">
                                                                        <i class="bi bi-facebook"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#" class="link-one">
                                                                        <i class="bi bi-twitter"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#" class="link-one">
                                                                        <i class="bi bi-instagram"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#" class="link-one">
                                                                        <i class="bi bi-linkedin"
                                                                            aria-hidden="true"></i>
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
                        <?php $cnt++; ?>
                    @endforeach
                    <div class="news-carousel-pagination carousel-pagination"></div>

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

     
    </main><!-- End #main -->
    
    <!-- ======= Footer ======= -->
    @include('user.footer');
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
