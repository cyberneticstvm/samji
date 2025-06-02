@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">{{ $ad->mainCategory->name ?? '' }}</h1>
        </div>
    </div> <!-- Shape Start --> <svg style="display:none;">
        <symbol id="svg-shape" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="var(--custom-white)" d="M0,96L1440,320L1440,320L0,320Z"></path>
        </symbol>
    </svg> <svg class="position-absolute w-100 svg-shape">
        <use xlink:href="#svg-shape"></use>
    </svg> <!--Shape End-->
</section>
<div class="section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card overflow-hidden">
                    <div class="ribbon ribbon-top-right"><span class="bg-danger text-fixed-white">Offer</span></div>
                    <div class="card-body">
                        <div class="details-gallery mb-3">
                            <div class="swiper thumb-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="{{ asset($ad->images?->first()?->image_url) }}" class="glightbox" data-gallery="gallery1">
                                            <img src="{{ asset($ad->images?->first()?->image_url) }}" alt="image">
                                        </a>
                                    </div>
                                    @forelse($ad->images as $key => $item)
                                    <div class="swiper-slide">
                                        <a href="{{ asset($item?->image_url) }}" class="glightbox" data-gallery="gallery1">
                                            <img src="{{ asset($item?->image_url) }}" alt="image">
                                        </a>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="swiper thumb-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset($ad->images?->first()?->image_url) }}" alt="image">
                                    </div>
                                    @forelse($ad->images as $key => $item)
                                    <div class="swiper-slide">
                                        <img src="{{ asset($item?->image_url) }}" alt="image">
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between gap-1 flex-wrap">
                            <div class="my-auto">
                                <a href="javascript:void(0);" class="text-dark">
                                    <h3 class="fw-semibold">{{ $ad->title }}</h3>
                                </a>
                                <div class="d-flex align-items-center flex-wrap">
                                    <ul class="d-flex list-unstyled mb-0 flex-wrap">
                                        <li class="me-4"> <a href="javascript:void(0);" class="icons"> <i class="fe fe-grid text-muted me-1"></i>{{ $ad->typeDetail?->value }} </a> </li>
                                        <li class="me-4"> <a href="javascript:void(0);" class="icons"> <i class="fe fe-map-pin text-muted me-1"></i>{{ $ad->location }} </a> </li>
                                        <li class="me-4"> <a href="javascript:void(0);" class="icons"> <i class="fe fe-calendar text-muted me-1"></i>{{ $ad->created_at->format('d M Y') }} </a> </li>
                                        <li class="me-4"> <a href="javascript:void(0);" class="icons"> <i class="fe fe-eye text-muted me-1"></i>765 </a> </li>
                                    </ul>
                                    <div class="d-flex flex-wrap align-items-center flex-wrap">
                                        <div class="rating-stars star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                            <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                        </div>
                                        (78)
                                    </div>
                                </div>
                            </div>
                            <div class=" my-auto text-center">
                                <a href="javascript:void(0);" class="text-dark">
                                    <h4 class="fw-semibold my-auto">₹{{ number_format($ad->price, 2), ',' }}</h4>
                                </a>
                                <a href="javascript:void(0);" class="icons">₹{{ ($ad->price > 0 && $ad->buildup_area > 0) ? number_format($ad->price/$ad->buildup_area, 2) : 0.00 }}/sq ft</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-3 nav-justified nav-style-1 d-flex gap-2" role="tablist">
                            <li class="nav-item" role="presentation"> <a class="nav-link" data-bs-toggle="tab" role="tab" href="#overview" aria-selected="false" tabindex="-1"><i class="fe fe-user me-1 "></i>Overview</a> </li>
                            <li class="nav-item" role="presentation"> <a class="nav-link active" data-bs-toggle="tab" role="tab" href="#video" aria-selected="true"><i class="fe fe-video me-1"></i>Video</a> </li>
                            <li class="nav-item active" role="presentation"> <a class="nav-link" data-bs-toggle="tab" role="tab" href="#specifications" aria-selected="false" tabindex="-1"><i class="fe fe-list me-1"></i>Specifications</a> </li>
                            <li class="nav-item" role="presentation"> <a class="nav-link" data-bs-toggle="tab" role="tab" href="#features" aria-selected="false" tabindex="-1"><i class="fe fe-grid me-1"></i>Features</a> </li>
                            <li class="nav-item" role="presentation"> <a class="nav-link" data-bs-toggle="tab" role="tab" href="#ratings" aria-selected="false" tabindex="-1"><i class="fe fe-star me-1"></i>Ratings and Reviews</a> </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="overview" role="tabpanel">
                                <h5 class="card-title mb-3">Overview</h5>
                                <div class="mb-0">
                                    {!! $ad->description !!}
                                </div>
                            </div>
                            <div class="tab-pane show active" id="video" role="tabpanel"></div>
                            <div class="tab-pane" id="specifications" role="tabpanel">
                                <h5 class="card-title mb-3">Specifications</h5>
                            </div>
                            <div class="tab-pane" id="features" role="tabpanel">
                                <h5 class="card-title mb-3">Features</h5>
                            </div>
                            <div class="tab-pane" id="ratings" role="tabpanel">
                                <h4 class="fw-semibold mb-3">Ratings</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top border-bottom py-2">
                        <div class="list-id">
                            <div class="row">
                                <div class="col"> <a class="mb-0">Ad ID : <span class="fw-medium">#{{ $ad->id }}</span></a> </div>
                                <div class="col col-auto"> Posted By <a class="mb-0 fw-semibold">{{ $ad->user->name }}</a> / {{ $ad->created_at->format('d M, Y') }} </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <div class="gap-1 d-flex flex-wrap">
                            <div class="d-flex gap-2 flex-wrap"> <a aria-label="anchor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share" href="javascript:void(0);" class="btn btn-light btn-icon"><i class="fe fe-share-2 fs-16 leading-normal"></i></a> <a aria-label="anchor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Wishlist" href="javascript:void(0);" class="btn btn-light btn-icon"><i class="fe fe-heart fs-16 leading-normal"></i></a> <a aria-label="anchor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print" href="javascript:void(0);" class="btn btn-light btn-icon"><i class="fe fe-printer fs-16 leading-normal"></i></a> <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="modal" data-bs-target="#report"><i class="fe fe-info fs-16 leading-normal"></i></a> </div>
                            <a href="javascript:void(0);" class="btn btn-primary px-5 ms-auto ">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="position-sticky top-0 mt-3 mt-lg-0">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Posted By</h5>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-0">
                                <img src="{{ asset('/assets/images/faces/male/avatar.png') }}" class="rounded-circle" width="30%" alt="user">
                                <div class="">
                                    <a href="userprofile.html" class="text-dark">
                                        <h4 class="mt-3 mb-1 fw-semibold fs-18">{{ $ad->user->name }}</h4>
                                    </a>
                                    <p class="mb-1">Samji Property Agent</p>
                                    <span class="text-muted">Member Since {{ $ad->user->created_at->format('M Y') }}</span>
                                    <div> <a href="{{ route('category.real.estate') }}" class="btn btn-primary waves-effect waves-light mt-3">See All Properties</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body item-user">
                            <h4 class="mb-3 fs-18">Contact Info</h4>
                            <div>
                                <p class="mb-3"><span><i class="fe fe-map-pin me-2 d-inline-block"></i></span><a href="javascript:void(0);" class="text-default"> {{ $ad->location }}</a></p>
                                <p class="mb-3"><span><i class="fe fe-mail me-2 d-inline-block"></i></span><a href="javascript:void(0);" class="text-default"> info@samjiapp.com</a></p>
                                <p class="mb-3"><span><i class="fe fe-phone me-2 d-inline-block"></i></span><a href="javascript:void(0);" class="text-default"> {{ $ad->contact_number_1 }}</a></p>
                                <p class="mb-0"><span><i class="fe fe-link me-2 d-inline-block"></i></span><a href="{{ route('index') }}" class="text-default">http://samjiapp.com/</a></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-start d-flex justify-content-center gap-3 flex-wrap"> <a href="javascript:void(0);" class="btn btn-success waves-effect waves-light my-1"><i class="fe fe-mail"></i> Chat</a> <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light my-1" data-bs-toggle="modal" data-bs-target="#contact"><i class="fe fe-user"></i> Contact Me</a> <a href="javascript:void(0);" class="btn btn-info waves-effect waves-light my-1"><i class="fe fe-share-2"></i> Share</a> </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Search Properties</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="text2" placeholder="What are you looking for?">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="text3" placeholder="Location">
                            </div>
                            <div class="form-group mb-3">
                                <select class="form-control" data-trigger>
                                    @forelse($extras->where('name', 'type') as $key => $ex)
                                    <option value="{{ $ex->id }}">{{ $ex->value }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="">
                                <a href="javascript:void(0);" class="btn btn-primary btn-block waves-effect waves-light">Search</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-body">
                            <h6 class="fw-semibold mt-0">Need Help for any Details?</h6>
                            <div class="support-service bg-primary-transparent rounded mt-3 d-flex gap-3 flex-wrap">
                                <i class="fe fe-phone bg-primary text-secondary fs-16"></i>
                                <div>
                                    <h6 class="text-default fw-semibold fs-16 mt-1 mb-1"><a href="tel:+919446063521"> +91 9446063521</a></h6>
                                    <p class="text-default mb-0 fs-12 text-uppercase">Free Support!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')