@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">ABOUT US</h1>
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
    <div class="text-center"> <span class="section-bg-title">About</span> </div>
    <div class="container">
        <div class="section-title center-block text-center mb-4">
            <h2>SAMJIAPP IS INDIA'S FIRST NATIONAL CLASSIFIED COMBINED PORTAL</h2>
        </div>
        <p><a href="{{ route('index') }}" class="text-primary">www.samjiapp.com</a> is India's first National classified combined portal. It provides more than 100 services at one login and thus it meets all services which required to meet even essential and formal service too. The service of Real estate,matrimony, education, professional,tours & travel,vehicle,hotel & restaurant,shopping, job vacancies,construction, hospital & health and other services. Further it provides all information of any shops and private institutions also.</p>
        <p>You can get A to Z information of any kind of services of all the States of India, by downloading Samjiapp in your mobile as and when the situation arise. Samjiapp can be downloaded through the website www.samjiapp.com & also from Google Play Store.</p>
        <p>"One registration One login" is our concept and hence registration is free of cost. For posting advertisement we are having norms. This app makes you great satisfaction and give you up to date information and hassle free action. We expect your kind cooperation</p>
    </div>
</section>
@endsection('content')