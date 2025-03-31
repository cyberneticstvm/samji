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
        <div class="app-content">
            <section class="section position-relative bg-white">
                <div class="container">
                    <div class="heading-section">
                        <div class="text-center mb-2"> <span class="section-bg-title">Login</span> </div>
                        <div class="heading-title">Login to your <span class="text-primary">Account</span></div>
                    </div>
                    {{ html()->form('POST', route('login.auth'))->class('row justify-content-center align-items-center needs-validation')->open() }}
                    <div class="col-xl-4 col-lg-6">
                        <div class="card border mb-0">
                            <div class="card-body p-sm-6">
                                <h4 class="mb-2">Login</h4>
                                <p class="mb-4 text-muted">Sign in to your account to continue.</p>
                                <div class="form-horizontal">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <label class="mb-2 fw-500">Email <span class="text-danger ms-1">*</span></label>
                                                    {{ html()->email('email', old('email'))->class("form-control ms-0")->placeholder("Email") }}
                                                    @error('email')
                                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label class="mb-2 fw-500">Password <span class="text-danger ms-1">*</span></label>
                                                {{ html()->password('password', '')->class("form-control ms-0")->placeholder("******") }}
                                                @error('password')
                                                <small class="text-danger">{{ $errors->first('password') }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="d-flex mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="remember" type="checkbox" value="1" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Remember me </label>
                                                </div>
                                                <div class="ms-auto"> <a href="#" class="text-primary ms-1">Forgot Password?</a> </div>
                                            </div>
                                            <div class="d-grid mb-3">
                                                {{ html()->submit('Login')->class('btn btn-submit btn-primary') }}
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0">Don't have an account yet? <a href="{{ route('registration') }}" class="text-primary ms-1">Create an Account</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ html()->form()->close() }}
                </div>
            </section>
        </div>
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
        src="https://maps.googleapis.com/maps/api/js?key={{config('app.gpak')}}&loading=async&libraries=places">
    </script>

    <script src="{{ asset('/assets/js/script.js') }}"></script>

    @include("message")
</body>

</html>