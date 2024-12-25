@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">CONTACT US</h1>
        </div>
    </div> <!-- Shape Start --> <svg style="display:none;">
        <symbol id="svg-shape" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="var(--custom-white)" d="M0,96L1440,320L1440,320L0,320Z"></path>
        </symbol>
    </svg> <svg class="position-absolute w-100 svg-shape">
        <use xlink:href="#svg-shape"></use>
    </svg> <!--Shape End-->
</section>
<!-- Section-->
<section class="section position-relative bg-white">
    <div class="text-center">
        <span class="section-bg-title">Contact</span>
    </div>
    <div class="container">
        <div class="section-title center-block text-center mb-4">
            <h2>Get In Touch</h2>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="row gy-3">
            <div class="col-md-6 col-xl-3">
                <div class="card mb-md-0">
                    <div class="card-body">
                        <div class="d-flex fw-semibold text-primary flex-wrap gap-3">
                            <span class="avatar avatar-md bg-primary text-secondary fs-18 br-style2"><i class="bi bi-telephone"></i></span>
                            <div class="my-auto">
                                <div class="fs-18">Contact</div>
                            </div>
                        </div>
                        <h6 class="fw-semibold2 mt-3 mb-1 fs-16"><a href="tel:+917510621111">+91 7510621111</a></h6>
                        <p class="mb-0">Free Support!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-md-0">
                    <div class="card-body">
                        <div class="d-flex fw-semibold text-primary flex-wrap gap-3">
                            <span class="avatar avatar-md bg-primary text-secondary fs-18 br-style2"><i class="bi bi-envelope"></i></span>
                            <div class="my-auto">
                                <div class="fs-18">Email</div>
                            </div>
                        </div>
                        <h6 class="fw-semibold2 mt-3 mb-1 fs-16"><a href="mailto:info@samjiapp.com"> info@samjiapp.com</a></h6>
                        <p class="mb-0">Free Support!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-md-0">
                    <div class="card-body">
                        <div class="d-flex fw-semibold text-primary flex-wrap gap-3">
                            <span class="avatar avatar-md bg-primary text-secondary fs-18 br-style2"><i class="bi bi-clock"></i></span>
                            <div class="my-auto">
                                <div class="fs-18">Timings</div>
                            </div>
                        </div>
                        <h6 class="fw-semibold2 mt-3 mb-1 fs-16">Mon-Sat(10:00-19:00)</h6>
                        <p class="mb-0">Working Hours!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-md-0">
                    <div class="card-body">
                        <div class="d-flex fw-semibold text-primary flex-wrap gap-3">
                            <span class="avatar avatar-md bg-primary text-secondary fs-18 br-style2"><i class="bi bi-geo-alt"></i></span>
                            <div class="my-auto">
                                <div class="fs-18">Location</div>
                            </div>
                        </div>
                        <h6 class="fw-semibold2 mt-3 mb-1 fs-16">SamjiApp, Kowdiar</h6>
                        <p class="mb-0">Thiruvananthapuram, Kerala</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section-->
@endsection('content')