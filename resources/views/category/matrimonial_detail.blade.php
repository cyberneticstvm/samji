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
<div class="section position-relative bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card overflow-hidden">
                    <div class="ribbon ribbon-top-right"><span class="bg-danger text-fixed-white">Offer</span></div>
                    <div class="card-body">
                        <div class="details-gallery mb-3">
                            <div class="swiper thumb-1 swiper-initialized swiper-horizontal swiper-backface-hidden">
                                <div class="swiper-wrapper" id="swiper-wrapper-e5b3d52589e2aa6d" aria-live="off" style="transition-duration: 300ms; transform: translate3d(-3244px, 0px, 0px);">
                                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="{{ $ad->images->count() }} / {{ $ad->images->count() }}" data-swiper-slide-index="{{ $ad->images->count() - 1 }}" style="width: 801px; margin-right: 10px;">
                                        <a href="{{ url($ad->images?->first()?->image_url) }}" class="glightbox" data-gallery="gallery1"> <img src="{{ url($ad->images->first()->image_url) }}" alt="image">
                                        </a>
                                    </div>
                                    @forelse($ad->images as $key => $item)
                                    <div class="swiper-slide" role="group" aria-label="{{ $key + 1 }} / {{ $ad->images?->count() }}" data-swiper-slide-index="{{ $key }}" style="width: 801px; margin-right: 10px;"> <a href="{{ url($item?->image_url) }}" class="glightbox" data-gallery="gallery1"> <img src="{{ url($item->image_url) }}" alt="image"> </a> </div>
                                    @empty
                                    @endforelse
                                </div>
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e5b3d52589e2aa6d"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e5b3d52589e2aa6d"></div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                            <div class="swiper thumb-2 swiper-initialized swiper-horizontal swiper-free-mode swiper-watch-progress swiper-backface-hidden swiper-thumbs">
                                <div class="swiper-wrapper" id="swiper-wrapper-37dc8d1098ee103b76" aria-live="off" style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                    @forelse($ad->images as $key1 => $item)
                                    <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible {{ $key1 == 0 ? 'swiper-slide-active' : 'swiper-slide-next' }}" role="group" aria-label="{{ $key1 + 1 }} / {{ $ad->images?->count() }}" data-swiper-slide-index="{{ $key1 }}" style="width: 152.2px; margin-right: 10px;"> <img src="{{ url($item?->image_url) }}" alt="image"> </div>
                                    @empty
                                    @endforelse
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between gap-1 flex-wrap">
                            <div class="my-auto">
                                <a href="javascript:void(0);" class="text-dark">
                                    <h3 class="fw-semibold">{{ $ad->title }}</h3>
                                </a>
                                <div class="d-flex align-items-center flex-wrap">
                                    <ul class="d-flex list-unstyled mb-0 flex-wrap">
                                        <li class="me-4"> <a href="javascript:void(0);" class="icons"> <i class="fe fe-map-pin text-muted me-1"></i>{{ $ad->location }} </a> </li>
                                        <li class="me-4"> <a href="javascript:void(0);" class="icons"> <i class="fe fe-calendar text-muted me-1"></i>{{ $ad->created_at->format('d M Y') }} </a> </li>
                                    </ul>
                                    <div class="d-flex flex-wrap align-items-center flex-wrap">
                                        <div class="rating-stars star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                            <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                        </div>
                                        (78)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Description</h5>
                        <div class="mb-0">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                        </div>
                        <h5 class="card-title mt-4 mb-3">Specifications</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-bordered-0">
                                        <tbody>
                                            <tr>
                                                <td class="fw-semibold px-0 border-bottom-0">Guests </td>
                                                <td class="border-bottom-0">:</td>
                                                <td class="px-0 border-bottom-0">150</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold px-0 border-bottom-0">Capacity </td>
                                                <td class="border-bottom-0">:</td>
                                                <td class="px-0 border-bottom-0">1500</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold px-0 border-bottom-0">Wifi </td>
                                                <td class="border-bottom-0">:</td>
                                                <td class="px-0 border-bottom-0">Access</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold px-0 border-bottom-0">Parking </td>
                                                <td class="border-bottom-0">:</td>
                                                <td class="px-0 border-bottom-0">Yes</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold px-0 border-bottom-0">Style </td>
                                                <td class="border-bottom-0">:</td>
                                                <td class="px-0 border-bottom-0"> Outdoor , Beach</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold px-0 border-bottom-0 pb-0">Transportation </td>
                                                <td class="border-bottom-0 pb-0">:</td>
                                                <td class="px-0 border-bottom-0 pb-0">Near By</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top border-bottom py-2">
                        <div class="list-id">
                            <div class="row">
                                <div class="col"> <a class="mb-0">Venue ID : #6235986</a> </div>
                                <div class="col col-auto"> Posted By <a class="mb-0 fw-semibold">Individual</a> / 21st June 2023 </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <div class="gap-1 d-flex flex-wrap">
                            <div class="d-flex gap-2 flex-wrap"> <a aria-label="anchor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share" href="javascript:void(0);" class="btn btn-light btn-icon"><i class="fe fe-share-2 fs-16 leading-normal"></i></a> <a aria-label="anchor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Wishlist" href="javascript:void(0);" class="btn btn-light btn-icon"><i class="fe fe-heart fs-16 leading-normal"></i></a> <a aria-label="anchor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print" href="javascript:void(0);" class="btn btn-light btn-icon"><i class="fe fe-printer fs-16 leading-normal"></i></a> <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="modal" data-bs-target="#report"><i class="fe fe-info fs-16 leading-normal"></i></a> </div> <a href="javascript:void(0);" class="btn btn-primary px-5 ms-auto">contact Us</a>
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
                                <img src="../assets/images/faces/male/2.jpg" class="rounded-circle" alt="user">
                                <div class="">
                                    <a href="userprofile.html" class="text-dark">
                                        <h4 class="mt-3 mb-1 fw-semibold fs-18">Robert McLean</h4>
                                    </a>
                                    <p class="mb-1">Roxlist property Agent</p>
                                    <span class="text-muted">Member Since November 2008</span>
                                    <div> <a href="ad-list.html" class="btn btn-primary waves-effect waves-light mt-3">See All Properties</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body item-user">
                            <h4 class="mb-3 fs-18">Contact Info</h4>
                            <div>
                                <p class="mb-3"><span><i class="fe fe-map-pin me-2 d-inline-block"></i></span><a href="javascript:void(0);" class="text-default"> 7981 Aspen Ave. Hammonton, USA</a></p>
                                <p class="mb-3"><span><i class="fe fe-mail me-2 d-inline-block"></i></span><a href="javascript:void(0);" class="text-default"> robert123@gmail.com</a></p>
                                <p class="mb-3"><span><i class="fe fe-phone me-2 d-inline-block"></i></span><a href="javascript:void(0);" class="text-default"> 0-235-657-24587</a></p>
                                <p class="mb-0"><span><i class="fe fe-link me-2 d-inline-block"></i></span><a href="javascript:void(0);" class="text-default">http://spruko.com/</a></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-start d-flex justify-content-center gap-3 flex-wrap"> <a href="javascript:void(0);" class="btn btn-success waves-effect waves-light my-1"><i class="fe fe-mail"></i> Chat</a> <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light my-1" data-bs-toggle="modal" data-bs-target="#contact"><i class="fe fe-user"></i> Contact Me</a> <a href="javascript:void(0);" class="btn btn-info waves-effect waves-light my-1"><i class="fe fe-share-2"></i> Share</a> </div>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-body">
                            <h6 class="fw-semibold mt-0">Need Help for any Details?</h6>
                            <div class="support-service bg-primary-transparent rounded mt-3 d-flex gap-3 flex-wrap">
                                <i class="fe fe-phone bg-primary text-secondary fs-16"></i>
                                <div>
                                    <h6 class="text-default fw-semibold fs-16 mt-1 mb-1">+68 872-627-9735</h6>
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