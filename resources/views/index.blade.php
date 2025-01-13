@extends('base')
@section('content')

<!--Banner Section-->
<section class="section banner-1 cover-image pt-sm-10p pb-sm-9 py-5"
    data-bs-image-src="{{ asset('/assets/images/banners/21.png') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-md-12 my-auto">
                <div class="text-fixed-white">
                    <p class="mb-3 fs-13 text-uppercase text-secondary fw-semibold section-bg-title text-start ms-3">
                        Business Towards Success
                    </p>
                    <h1 class="mb-3 fw-semibold text-fixed-white">Unveiling the India's Largest <span class="text-secondary">Business Directory</span> for Global Entrepreneurs</h1>
                    <p class="mb-5 sub-text text-fixed-white">Are you looking for a comprehensive classifieds business directory that offers listings for real estate, matrimonials, jobs, education, and more </p>
                </div>
                <div class="form d-md-flex  bg-white w-100 rounded-1 shadow-primary-sm banner-input-group text-start">
                    <input type="text" class="form-control form-control-lg rounded-0" id="sale-text"
                        placeholder="looking For" autocomplete="off">
                    <select class="form-control" data-trigger name="choices-single-default"
                        id="choices-single-default">
                        <option value="">Category</option>
                        @forelse(categories() as $key => $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @empty
                        @endforelse
                    </select>
                    <div class="form-group mb-sm-0 location w-100">
                        <input type="text" class="form-control form-control-lg rounded-0" id="sale-location"
                            placeholder="Location">
                        <span>
                            <button aria-label="button" type="button" class="btn btn-primary location-gps"
                                data-bs-toggle="modal" data-bs-target="#locationModal">
                                <i class="fe fe-map-pin"></i>
                            </button>
                        </span>
                    </div>
                    <div class="mb-sm-0">
                        <a href="javascript:void(0)" class="btn btn-block btn-secondary h-100 w-100 btn-lg search-btn">
                            <i class="fa fa-search  me-2"></i> Search Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 text-lg-end my-auto text-center my-auto">
                <div class="my-auto">
                    <!--<img src="{{ asset('/assets/images/banners/1.png') }}" class="main-banner-png" alt="img">-->
                    <iframe title="" class="w-100" height="400"
                        src="https://www.youtube.com/embed/SBMlfhq5-Hg"
                        allow="accelerometer; autoplay;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Shape Start -->
    <svg style="display:none;">
        <symbol id="svg-shape" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="var(--custom-white)" d="M0,96L1440,320L1440,320L0,320Z"></path>
        </symbol>
    </svg>
    <svg class="position-absolute w-100 svg-shape">
        <use xlink:href="#svg-shape"></use>
    </svg>
    <!--Shape End-->
</section>
<!--Banner Section-->
<section class="section position-relative bg-white">
    <div class="container">
        <!-- Start:: row-1 -->
        <div class="row">
            <div class="section-title center-block text-center mb-6">
                <h2>Latest News</h2>
            </div>
            <div class="card bg-primary-transparent01">
                <div class="card-body">
                    <blockquote class="quote mb-0">
                        <marquee behavious="scroll" direction="left">
                            <p class="text-primary">FREE REGISTRATION!!!. <a href="{{ route('index') }}">www.samjiapp.com</a> more than hundred service providers available at one login. Download Samji App from link. </p>
                        </marquee>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section position-relative bg-white">
    <div class="container">
        <!-- Start:: row-1 -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between flex-wrap gap-2">
                        <h5 class="card-title my-auto">
                            Advertise Here!
                        </h5>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockquote secondary mb-0 text-center">
                            <h6>The future belongs to those who believe in the beauty of their dreams..</h6>
                            <footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
                            <span class="quote-icon"><i class="ri-information-line"></i></span>
                        </blockquote>
                    </div>
                    <div class="card-footer d-none border-top-0">
                        <!-- Prism Code -->
                        <pre class="language-html"><code class="language-html">&lt;blockquote class="blockquote custom-blockquote secondary mb-0 text-center"&gt;&lt;h6&gt;The future belongs to those who believe in the beauty of their dreams..&lt;/h6&gt;&lt;footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0"&gt;Someone famous as &lt;cite title="Source Title"&gt;-Eleanor Roosevelt&lt;/cite&gt;&lt;/footer&gt;&lt;span class="quote-icon"&gt;&lt;i class="ri-information-line"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/blockquote&gt;</code></pre>
                        <!-- Prism Code -->
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between flex-wrap gap-2">
                        <h5 class="card-title my-auto">
                            Advertise Here!
                        </h5>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockquote secondary mb-0 text-center">
                            <h6>The future belongs to those who believe in the beauty of their dreams..</h6>
                            <footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
                            <span class="quote-icon"><i class="ri-information-line"></i></span>
                        </blockquote>
                    </div>
                    <div class="card-footer d-none border-top-0">
                        <!-- Prism Code -->
                        <pre class="language-html"><code class="language-html">&lt;blockquote class="blockquote custom-blockquote secondary mb-0 text-center"&gt;&lt;h6&gt;The future belongs to those who believe in the beauty of their dreams..&lt;/h6&gt;&lt;footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0"&gt;Someone famous as &lt;cite title="Source Title"&gt;-Eleanor Roosevelt&lt;/cite&gt;&lt;/footer&gt;&lt;span class="quote-icon"&gt;&lt;i class="ri-information-line"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/blockquote&gt;</code></pre>
                        <!-- Prism Code -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Categories-->
<section class="section bg-white position-relative">
    <div class="text-center"> <span class="section-bg-title">Areas</span> </div>
    <div class="container">
        <div class="section-title center-block text-center mb-6">
            <h2>Categories</h2>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="row">
            @forelse(categories() as $key => $category)
            <div class="col-md-3">
                <div class="card cat-card">
                    <div class="card-body">
                        <div class="cat-item">
                            <a aria-label="anchor" href="{{ $category->route ? route($category->route) : '#' }}"></a>
                            <div class="cat-img">
                                <i class="{{ $category->icon }} text-primary"></i>
                            </div>
                            <div class="cat-desc">
                                <h5 class="">{{ $category->name }}</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</section>
<!--/Categories-->
<section class="section position-relative bg-white">
    <div class="container">
        <!-- Start:: row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between flex-wrap gap-2">
                        <h5 class="card-title my-auto">
                            Advertise Here!
                        </h5>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockquote secondary mb-0 text-center">
                            <h6>The future belongs to those who believe in the beauty of their dreams..</h6>
                            <footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
                            <span class="quote-icon"><i class="ri-information-line"></i></span>
                        </blockquote>
                    </div>
                    <div class="card-footer d-none border-top-0">
                        <!-- Prism Code -->
                        <pre class="language-html"><code class="language-html">&lt;blockquote class="blockquote custom-blockquote secondary mb-0 text-center"&gt;&lt;h6&gt;The future belongs to those who believe in the beauty of their dreams..&lt;/h6&gt;&lt;footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0"&gt;Someone famous as &lt;cite title="Source Title"&gt;-Eleanor Roosevelt&lt;/cite&gt;&lt;/footer&gt;&lt;span class="quote-icon"&gt;&lt;i class="ri-information-line"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/blockquote&gt;</code></pre>
                        <!-- Prism Code -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Search Experience-->
<section class="section bg-white position-relative">
    <div class="text-center"> <span class="section-bg-title">Experience</span> </div>
    <div class="container">
        <div class="section-title center-block text-center mb-8">
            <h2>Simplifying Your Search Experience</h2>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-sm-12">
                <div class="card card-cat-img text-center mb-0 mb-lg-3">
                    <div class="cat-img category-svg d-block bg-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 512 512" viewBox="0 0 512 512" id="Discovery">
                            <path d="M316.833,49.786c-80.031,0-145.149,65.11-145.149,145.149c0,34.435,12.106,66.065,32.216,90.977l-10.788,11.182
                                    l-15.034-15.203c-2.759-2.787-6.509-4.361-10.431-4.368c-0.014,0-0.014,0-0.029,0c-3.908,0-7.673,1.559-10.431,4.339L54.295,385.286
                                    c-5.69,5.726-5.704,14.972-0.029,20.719l51.237,51.841c2.759,2.787,6.509,4.361,10.431,4.368c0.014,0,0.014,0,0.029,0
                                    c3.908,0,7.673-1.559,10.431-4.339l51.713-51.995c0.021-0.021,0.049-0.026,0.07-0.047c0.02-0.021,0.025-0.048,0.045-0.069
                                    l51.063-51.341c5.704-5.726,5.704-14.979,0.029-20.719l-15.505-15.679l10.741-11.134c25.101,20.727,57.264,33.193,92.281,33.193
                                    c80.031,0,145.149-65.11,145.149-145.149S396.864,49.786,316.833,49.786z M115.993,426.602l-30.547-30.906l30.515-30.672
                                    l30.903,30.543L115.993,426.602z M167.621,374.698l-30.901-30.541l30.869-31.029l15.403,15.577c0.013,0.013,0.016,0.029,0.029,0.041
                                    c0.01,0.01,0.024,0.013,0.034,0.022l15.081,15.251L167.621,374.698z M259.716,94.417l21.138,27.441
                                    c4.181,5.41,11.509,7.227,17.716,4.425l19.44-8.808l9.612,15.46L319.75,159.1c-1.408,4.655-0.417,9.699,2.629,13.477l3.463,4.31
                                    l-48.967,15.015c-4.382,1.343-7.888,4.655-9.483,8.959c-1.595,4.296-1.092,9.095,1.351,12.967l7.788,12.306l-17.917,5.697
                                    l1.437-25.022c0.216-3.8-1.049-7.536-3.52-10.424l-40.131-46.719c-1.265-1.473-2.779-2.584-4.398-3.425
                                    C222.179,124.42,238.906,106.289,259.716,94.417z M201.11,194.935c0-5.578,0.533-11.021,1.299-16.391l27.926,32.512l-2.313,40.44
                                    c-0.287,4.835,1.839,9.497,5.661,12.465c2.615,2.026,5.805,3.089,9.023,3.089c1.494,0,3.003-0.23,4.454-0.69l56.439-17.953
                                    c4.354-1.387,7.802-4.698,9.368-8.987c1.566-4.282,1.049-9.045-1.379-12.896l-7.673-12.134l51.338-15.74
                                    c4.67-1.43,8.319-5.086,9.756-9.756c1.437-4.663,0.46-9.742-2.615-13.542l-12.242-15.194l7.558-25.094
                                    c1.221-4.052,0.647-8.427-1.581-12.012l-19.929-32.063c-3.908-6.257-11.825-8.686-18.564-5.64l-20.59,9.318l-8.999-11.682
                                    c9.222-2.374,18.831-3.771,28.784-3.771c46.326,0,86.268,27.426,104.74,66.838l-33.948,16.764
                                    c-5.834,2.881-9.081,9.246-8.003,15.654l4.454,26.186l-21.811,5.402c-4.239,1.049-7.788,3.93-9.699,7.859
                                    c-1.911,3.923-1.968,8.499-0.172,12.479l27.689,61.326c-18.199,11.934-39.909,18.936-63.25,18.936
                                    C253.023,310.657,201.11,258.744,201.11,194.935z M403.28,271.6l-16.804-37.225l17.932-4.44c7.472-1.854,12.256-9.153,10.977-16.746
                                    l-4.914-28.844l20.15-9.953c1.203,6.679,1.934,13.521,1.934,20.542C432.555,224.355,421.429,251.161,403.28,271.6z" fill="rgb(var(--secondary-rgb))" class="color000000 svgShape"></path>
                        </svg>
                    </div>
                    <div class="card-body pt-8 category-card-bg">
                        <h4 class="mb-2">Discover Your Passion</h4>
                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12">
                <div class="card card-cat-img text-center mb-0 mb-lg-3">
                    <div class="cat-img category-svg d-block bg-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72" id="destination">
                            <path d="M64.5 25.9c0-.1-.1-.2-.2-.3-.3-.2-.6-.1-.8.1-.1.1-.1.2-.2.2l-2.5 7.3c-.1.4 0 .8.3 1.1 1.4 1.3 2.2 2.7 2.2 4 0 3.5-5.3 7.3-13.9 9.4-.6.1-1.1-.3-1-.9.2-1.5.3-3.1.4-4.6 0-.3-.1-.5-.3-.7-.2-.2-.5-.3-.7-.6l-2.6-2.6c0 3.5-.2 6.8-.7 9.8-.1.4-.3.7-.7.7-3 .4-6.3.7-9.8.7-3.5 0-6.8-.2-9.8-.7-.4-.1-.7-.3-.7-.7-.4-3-.7-6.3-.7-9.8 0-3.5.2-6.8.7-9.8.1-.4.3-.7.7-.7 3-.4 6.3-.7 9.8-.7l-2.6-2.6c-.2-.2-.4-.4-.6-.7-.2-.2-.4-.4-.7-.3-1.6.1-3.1.2-4.6.4-.6.1-1.1-.5-.9-1C26.7 14.3 30.5 9 34 9c1.4 0 2.8.8 4.1 2.3.2.2.5.3.8.2L46 8.8c.1 0 .2-.1.3-.2.2-.2.3-.6.1-.8l-.3-.3c-3.8-1.5-8-2.4-12.4-2.4C15.4 5.1.5 20 .5 38.3c0 18.3 14.9 33.2 33.2 33.2 18.3 0 33.2-14.9 33.2-33.2 0-4.4-.9-8.6-2.4-12.4zM6.1 28c3-8 9.3-14.3 17.3-17.3.7-.3 1.4.5 1 1.2-1.8 3.2-3.3 7.3-4.3 12.1-.1.3-.3.6-.7.7-4.8 1-9 2.4-12.1 4.3-.7.4-1.5-.3-1.2-1zm12.1.9c.6-.1 1.1.3 1 .9-.3 2.7-.5 5.5-.5 8.5s.2 5.8.5 8.5c.1.6-.5 1.1-1 .9-8.6-2.1-13.9-5.9-13.9-9.4-.1-3.5 5.3-7.3 13.9-9.4zm5.2 37c-8-3-14.3-9.3-17.3-17.3-.3-.7.5-1.4 1.2-1 3.2 1.8 7.3 3.3 12.1 4.3.3.1.6.3.7.7 1 4.8 2.4 9 4.3 12.1.4.7-.3 1.5-1 1.2zm10.3 1.9c-3.5 0-7.3-5.3-9.4-13.9-.1-.6.3-1.1.9-1 2.7.3 5.5.5 8.5.5s5.8-.2 8.5-.5c.6-.1 1.1.5.9 1-2.1 8.5-5.9 13.9-9.4 13.9zm27.6-19.2c-3 8-9.3 14.3-17.3 17.3-.7.3-1.4-.5-1-1.2 1.8-3.2 3.3-7.3 4.3-12.1.1-.3.3-.6.7-.7 4.8-1 9-2.4 12.1-4.3.6-.4 1.4.3 1.2 1z" fill="rgb(var(--secondary-rgb))" class="color000000 svgShape"></path>
                            <path d="m68.2 22.1 2.9-2.9c.5-.5.5-1.4 0-1.9L54.7.9c-.5-.5-1.4-.5-1.9 0l-2.9 2.9c-.5.5-.5 1.4 0 1.9l1.5 1.5c.5.5.5 1.4 0 1.9L48.6 12c-.1.1-.3.3-.5.3l-10 3.4c-.2.1-.4.2-.5.3L34 19.6c-.5.5-.5 1.4 0 1.9l5.6 5.6c.5.5.5 1.4 0 1.9l-11 11c-.1.1-.2.3-.3.4l-.9 2.5c-.3.9.6 1.9 1.5 1.5l2.5-.9c.2-.1.3-.2.4-.3l11-11c.5-.5 1.4-.5 1.9 0l5.6 5.6c.5.5 1.4.5 1.9 0l3.6-3.6c.1-.1.3-.3.3-.5l3.4-10c.1-.2.2-.4.3-.5l2.8-2.8c.5-.5 1.4-.5 1.9 0l1.5 1.5c.8.8 1.7.8 2.2.2z" fill="rgb(var(--secondary-rgb))" class="color000000 svgShape"></path>
                        </svg>
                    </div>
                    <div class="card-body pt-8 category-card-bg">
                        <h4 class="mb-2">Discover Your Destination</h4>
                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12">
                <div class="card card-cat-img text-center mb-0 mb-lg-3">
                    <div class="cat-img category-svg d-block bg-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="contact">
                            <path d="M24.19 23.29a.31.31 0 0 0-.09-.07.88.88 0 0 0-.28-.17s0 0-.05 0l-6.17-1.87a1 1 0 0 0-.94.2 5.36 5.36 0 0 0-.7.73 10.63 10.63 0 0 1-3.69-2.39A10.46 10.46 0 0 1 9.89 16a5.13 5.13 0 0 0 .72-.68 1 1 0 0 0 .21-.95L9 8.23v-.06a1 1 0 0 0-.15-.26l-.08-.1a1 1 0 0 0-.37-.24 4.61 4.61 0 0 0-1.46-.23h-.59a3 3 0 0 0-.5.09 3.28 3.28 0 0 0-.61.18 2 2 0 0 0-.34.13h-.1a3.8 3.8 0 0 0-.55.33 4.13 4.13 0 0 0-.55.41 2.4 2.4 0 0 0-.32.33 4.69 4.69 0 0 0-1.28 2.44c0 .14-.05.29-.06.38a3.77 3.77 0 0 0 0 .58 16.43 16.43 0 0 0 .11 1.92 17.8 17.8 0 0 0 15.7 15.76 16.73 16.73 0 0 0 1.93.11 4.22 4.22 0 0 0 .53 0l.43-.07h.22l.27-.09.34-.12h.1a2.72 2.72 0 0 0 .35-.16.81.81 0 0 0 .18-.1l.11-.07.19-.12a4.87 4.87 0 0 0 .94-.83 5.21 5.21 0 0 0 .69-1v-.06a4.14 4.14 0 0 0 .19-.49 3.5 3.5 0 0 0 .14-.49 2.21 2.21 0 0 0 .07-.3c0-.11 0-.22.05-.36s0-.32 0-.47a4.46 4.46 0 0 0-.22-1.45.88.88 0 0 0-.17-.53Zm-1.55 2.12v.15a.43.43 0 0 0 0 .11 1.3 1.3 0 0 0 0 .13 1.29 1.29 0 0 1-.06.21 1 1 0 0 0 0 .1.52.52 0 0 1-.06.16l-.05.1a2.88 2.88 0 0 1-.42.65 2.94 2.94 0 0 1-.56.49l-.11.07-.1.06a1.48 1.48 0 0 1-.25.12l-.21.08H19.91a9.18 9.18 0 0 1-1.69-.09 15.83 15.83 0 0 1-14-14A14.87 14.87 0 0 1 4 12.21a2.6 2.6 0 0 1 0-.35 1.43 1.43 0 0 1 0-.23 2.89 2.89 0 0 1 .73-1.39l.1-.09L5 10a1.69 1.69 0 0 1 .29-.22 2.26 2.26 0 0 1 .26-.16l.11-.05.12-.06h.14a1.12 1.12 0 0 1 .26-.08h.07c.08 0 .16 0 .3-.05a2.65 2.65 0 0 1 .63 0l1.51 5a2.92 2.92 0 0 1-.54.38l-.07.06A.93.93 0 0 0 8 15a.81.81 0 0 0-.12.14 1.3 1.3 0 0 0-.08.17.64.64 0 0 0-.06.18 1 1 0 0 0 0 .39v.09a12.58 12.58 0 0 0 8.33 8.33H16.37a.93.93 0 0 0 .23 0h.07a1 1 0 0 0 .31-.16A.46.46 0 0 1 17 24a1.2 1.2 0 0 0 .17-.21 2.68 2.68 0 0 1 .36-.52l5 1.5v.35c0 .12.11.21.11.29ZM22.5 9A3.5 3.5 0 1 0 19 5.5 3.5 3.5 0 0 0 22.5 9Zm0-5A1.5 1.5 0 1 1 21 5.5 1.5 1.5 0 0 1 22.5 4Zm2.5 6h-5a5 5 0 0 0-5 5v1a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1v-1a5 5 0 0 0-5-5Zm-8 5a3 3 0 0 1 3-3h5a3 3 0 0 1 3 3Z" data-name="09 contact" fill="rgb(var(--secondary-rgb))" class="color000000 svgShape"></path>
                        </svg>
                    </div>
                    <div class="card-body pt-8 category-card-bg">
                        <h4 class="mb-2">Get In Touch</h4>
                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Search Experience-->

@endsection('content')