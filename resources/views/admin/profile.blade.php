@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">My Profile</h1>
        </div>
    </div> <!-- Shape Start --> <svg style="display:none;">
        <symbol id="svg-shape" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="var(--custom-white)" d="M0,96L1440,320L1440,320L0,320Z"></path>
        </symbol>
    </svg> <svg class="position-absolute w-100 svg-shape">
        <use xlink:href="#svg-shape"></use>
    </svg> <!--Shape End-->
</section>
<section class="section position-relative bg-white">
    <div class="text-center"> <span class="section-bg-title">Profile</span> </div>
    <div class="container">
        <div class="section-title center-block text-center mb-4">
            <h2>Update Profile</h2>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-4 col-xl-3">
                        <img src="{{ asset('/assets/images/faces/doctors/2.jpg') }}" class="img-fluid mb-3 mb-md-0 bg-light rounded-1 " alt="user">
                    </div>
                    <div class="item-det col-md-8 col-xl-9">
                        <a href="javascript:void(0);" class="text-dark mb-2">
                            <h3 class="">{{ Auth::user()->name }}</h3>
                        </a>
                        <div class="d-flex mb-2 flex-wrap">
                            <ul class="mb-0 d-flex list-unstyled flex-wrap gap-1">
                                <li class="me-3"><a href="javascript:void(0);" class="d-inline-flex"><i class="ri-briefcase-4-line text-muted me-1"></i>{{ Auth::user()->role }}</a></li>
                            </ul>
                        </div>
                        <p class="mb-2 text-muted fs-12">
                            &nbsp;
                        </p>
                        <div class="d-flex gap-3 flex-wrap">
                            <!--<a href="javascript:void(0);" class="btn-sm btn btn-secondary d-inline-flex"> <i class="ri-arrow-right-line me-1"></i>Book An Appointment</a>-->
                            <a href="{{ route('delete.my.account') }}" class="btn-sm btn btn-primary d-inline-flex proceed"><i class="ri-delete-bin-line me-1"></i>Delete My Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')