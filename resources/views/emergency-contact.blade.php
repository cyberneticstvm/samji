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
            <h2>Emergency Contacts</h2>
            <p>Coming Soon!</p>
        </div>
    </div>
</section>
<!-- Section-->
@endsection('content')