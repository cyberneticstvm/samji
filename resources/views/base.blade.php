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
    <!-- Nouislider CSS-->
    <link rel="stylesheet" href="{{ asset('/assets/libs/nouislider/nouislider.min.css') }}">
    <!-- ICONS CSS -->
    <link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <!-- Swiper CSS-->
    <link rel="stylesheet" href="{{ asset('/assets/libs/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/samji.css') }}">
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
                            <p class="mb-3 text-white-50">SamjiApp, India’s first national level combined portal, which facilitate buyers & sellers. SamjiApp consists of various services irrerespective of states & local level . By downloading samjiapp more than hundred service providers available at one login.</p>
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
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i> Shopping</a></li>
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Healthcare</a></li>
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Jobs</a></li>
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Public Info</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <h6>Classifieds</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Real Estate</a></li>
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Matrimonial</a></li>
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Tours & Travels</a></li>
                                        <li><a href="javascript:void(0)"><i class="fe fe-chevrons-right me-1"></i>Education</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <h6 class="">Get In Touch</h6>
                            <ul class="list-unstyled mb-lg-0 address-icons">
                                <li> <a href="javascript:void(0)"><i class="fa fa-map-location-dot me-2"></i> SamjiApp, Kowdiar, Thiruvananthapuram</a> </li>
                                <li> <a href="mailto:info@samjiapp.com"><i class="fa-solid fa-envelope-open-text me-2"></i> info@samjiapp.com</a> </li>
                                <li> <a href="tel:+917510621111"><i class="fa fa-headset me-2"></i> +91 7510621111</a> </li>
                                <li> <a href="+917510621111"><i class="fa fa-print me-2"></i> + +91 7510621111</a> </li>
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
                    <div class="text-start footer-links d-flex flex-wrap justify-content-center"> <a href="javascript:void(0)" class="btn btn-link my-auto">Real Estate</a> <a href="javascript:void(0)" class="btn btn-link my-auto">Matrimonial</a> <a href="javascript:void(0)" class="btn btn-link my-auto">Tours & Travels</a> <a href="javascript:void(0)" class="btn btn-link my-auto">Education</a> </div>
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
                        <div class="col-sm-12 my-3 text-center"> Copyright © <span id="year"></span> <a href="javascript:void(0)" class="text-secondary fw-semibold fs-16"> SamjiApp</a> . Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);" class="text-secondary fw-semibold fs-16"> Liexa </a> All rights reserved. </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End::footer -->
    </div>
    <!-- Scroll To Top -->
    <div class="scrollToTop rounded-circle shadow all-ease-03 fade-in"> <i class="fa fa-up-long"></i> </div>
    <!-- Scroll To Top --> <!-- Bootstrap js -->
    <div id="categoryModal" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModalLabel">Select a Category</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-sm-6">
                    <div>
                        <div class="row">
                            @forelse(categories() as $key => $category)
                            <div class="col-md-3">
                                <div class="card cat-card">
                                    <div class="card-body">
                                        <div class="cat-item">
                                            <a aria-label="anchor" href="{{ $category->ad_post_route ? route($category->ad_post_route) : '#' }}"></a>
                                            <div class="cat-img">
                                                <i class="{{ $category->icon }} text-primary"></i>
                                            </div>
                                            <div class="cat-desc">
                                                <p class="fw-bold">{{ $category->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>

    <script src="{{ asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <script src="{{ asset('/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>


    <script src="{{ asset('/assets/js/defaultmenu.js') }}"></script>

    <!-- Simonwep-picker JS -->

    <script src="{{ asset('/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!--<script src="{{ asset('/assets/js/picker.js') }}"></script>-->
    <!-- Swiper JS -->

    <script src="{{ asset('/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/swiper.js') }}"></script>
    <!--<script type="text/javascript">
        z27r("28HOT5g+,wLHN)zybk5.V");
    </script>-->
    <!-- noUiSlider JS -->
    <script src="{{ asset('/assets/libs/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <script src="{{ asset('/assets/libs/rater-js/index.js') }}"></script>

    <script src="{{ asset('/assets/js/sticky.js') }}"></script>

    <script src="{{ asset('/assets/js/custom.js') }}"></script>

    <script src="{{ asset('/assets/js/custom-switcher.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>

    <script async
        src="https://maps.googleapis.com/maps/api/js?key={{config('app.gpak')}}&libraries=places">
    </script>

    <script src="{{ asset('/assets/js/script.js') }}"></script>

    @include("message")
</body>

</html>