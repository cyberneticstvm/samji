<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-hover" data-theme-mode="light" style="--primary-rgb: 135, 20, 99;">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Cybernetics">
    <meta name="description" content="Samji Web Portal - Directory and Classifieds Multipurpose Listing HTML Template">
    <meta name="keywords" content="bootstrap 5 html template, classifieds, listing, directory template website, directory listing website, list template website, list item template, list template in html, list design template html, classifieds, classified advertisement, advertisement, classified ads website, classified listing websites, classified web designs, classified ads posting, classifieds websites">
    <!-- TITLE -->
    <title>{{ $page_title ?? '' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/assets/images/brand/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/images/brand/favicon.ico') }}">
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- STYLE CSS -->
    <link href="{{ asset('/assets/css/styles.css') }}" rel="stylesheet">
    <!-- Simonwep-picker CSS -->
    <link href="{{ asset('/assets/libs/@simonwep/pickr/themes/classic.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/libs/@simonwep/pickr/themes/monolith.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/libs/@simonwep/pickr/themes/nano.min.css') }}" rel="stylesheet">
    <!-- ICONS CSS -->
    <link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <!-- Swiper CSS-->
    <link rel="stylesheet" href="{{ asset('/assets/libs/swiper/swiper-bundle.min.css') }}">
    <!-- Main Theme Js -->
    <meta http-equiv="imagetoolbar" content="no">


</head>

<body class="main-body light-theme">
    <div class="page">
        @include('nav')
        <div class="main-content app-content">
            @yield('content')
        </div>
        <!-- Start::footer -->
        <footer class="footer-dark text-white">
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <a href="{{ route('index') }}"> <img src="{{ asset('/assets/images/brand/logo.png') }}" alt="logo" class="mb-3 footer-logo-img"> </a>
                            <p class="mb-3 text-white-50">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit aliquid provident iusto ab deleniti nam reprehenderit aliquam soluta possimus distinctio doloribus eius</p>
                            <ul class="social mb-lg-0">
                                <li><a aria-label="anchor" class="social-icon" href="javascript:void(0);"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a aria-label="anchor" class="social-icon" href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a aria-label="anchor" class="social-icon" href="javascript:void(0);"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a aria-label="anchor" class="social-icon" href="javascript:void(0);"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a aria-label="anchor" class="social-icon" href="javascript:void(0);"><i class="fa-brands fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <h6>Business</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i> Company</a></li>
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Colleges</a></li>
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Hospital</a></li>
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Factories</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <h6>Classifieds</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Real Estate</a></li>
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Computer</a></li>
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Clothing</a></li>
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Jobs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <h6 class="">Get In Touch</h6>
                            <ul class="list-unstyled mb-lg-0 address-icons">
                                <li> <a href="javascript:void(0)"><i class="fa fa-map-location-dot me-2"></i> New York, NY 10012,US-52014</a> </li>
                                <li> <a href="javascript:void(0)"><i class="fa-solid fa-envelope-open-text me-2"></i> info12323@example.com</a> </li>
                                <li> <a href="javascript:void(0)"><i class="fa fa-headset me-2"></i> + 01 234 567 88, + 01 234 567 88</a> </li>
                                <li> <a href="javascript:void(0)"><i class="fa fa-print me-2"></i> + 01 234 567 89, + 01 234 567 89</a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <h6>Subscribe</h6>
                            <p class="mb-2 text-white-50">Subscribe to our newsletter and stay up-to-date with our latest updates.</p>
                            <input type="text" class="form-control mb-2" placeholder="Email"> <button type="button" class="btn btn-secondary w-100"> Subscribe </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-white p-0 ">
                <div class="d-flex container p-0 flex-wrap">
                    <div class="text-start footer-links d-flex flex-wrap justify-content-center"> <a href="javascript:void(0)" class="btn btn-link my-auto">About Us</a> <a href="javascript:void(0)" class="btn btn-link my-auto">Pricing</a> <a href="javascript:void(0)" class="btn btn-link my-auto">Privacy Policy</a> <a href="javascript:void(0)" class="btn btn-link my-auto">Blog</a> <a href="javascript:void(0)" class="btn btn-link my-auto">Contact Us</a> </div>
                    <div class="ms-auto">
                        <ul class="payments mb-0 d-flex list-unstyled flex-wrap">
                            <li><a aria-label="anchor" class="payment-icon" href="javascript:void(0);"><i class="fa-brands fa-cc-amex"></i></a></li>
                            <li><a aria-label="anchor" class="payment-icon" href="javascript:void(0);"><i class="fa-solid fa-credit-card"></i></a></li>
                            <li><a aria-label="anchor" class="payment-icon" href="javascript:void(0);"><i class="fa-brands fa-cc-mastercard"></i></a></li>
                            <li><a aria-label="anchor" class="payment-icon" href="javascript:void(0);"><i class="fa-brands fa-cc-visa"></i></a></li>
                            <li><a aria-label="anchor" class="payment-icon" href="javascript:void(0);"><i class="fa-brands fa-cc-paypal"></i></a></li>
                            <li><a aria-label="anchor" class="payment-icon" href="javascript:void(0);"><i class="fa-brands fa-cc-discover"></i></a></li>
                            <li><a aria-label="anchor" class="payment-icon" href="javascript:void(0);"><i class="fa-brands fa-cc-apple-pay"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-fixed-white p-0 border-top">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12 my-3 text-center"> Copyright © <span id="year"></span> <a href="javascript:void(0)" class="text-secondary fw-semibold fs-16"> Roxlist</a> . Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);" class="text-secondary fw-semibold fs-16"> Spruko </a> All rights reserved. </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End::footer -->
    </div>
    <!-- Scroll To Top -->
    <div class="scrollToTop rounded-circle shadow all-ease-03 fade-in"> <i class="fa fa-up-long"></i> </div>
    <!-- Scroll To Top --> <!-- Bootstrap js -->

    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>

    <script src="{{ asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <script src="{{ asset('/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>


    <script src="{{ asset('/assets/js/defaultmenu.js') }}"></script>

    <!-- Simonwep-picker JS -->

    <script src="{{ asset('/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <script src="{{ asset('/assets/js/picker.js') }}"></script>
    <!-- Swiper JS -->

    <script src="{{ asset('/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/swiper.js') }}"></script>

    <script src="{{ asset('/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <script src="{{ asset('/assets/libs/rater-js/index.js') }}"></script>

    <script src="{{ asset('/assets/js/sticky.js') }}"></script>

    <script src="{{ asset('/assets/js/custom.js') }}"></script>

    <script src="{{ asset('/assets/js/custom-switcher.js') }}"></script>

    @include("message")
</body>

</html>