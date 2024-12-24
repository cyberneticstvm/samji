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
                                <a href="javascript:void(0);" class="icons">₹{{ number_format($ad->price/$ad->buildup_area, 2) }}/sq ft</a>
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
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                                </div>
                                <h5 class="card-title mt-6 mb-3">Contact Info</h5>
                                <div class="item-user mt-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fw-normal"> <span><i class="fe fe-map me-2 mb-2 d-inline-block"></i></span> <a href="javascript:void(0);"> Mp-214, New York, NY 10012</a> </div>
                                            <div class="fw-normal"> <span><i class="fe fe-mail me-2 mb-2 d-inline-block"></i></span> <a href="javascript:void(0);"> robert123@gmail.com</a> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fw-normal"> <span><i class="fe fe-phone me-2 mb-2 d-inline-block"></i></span> <a href="javascript:void(0);"> 0-235-657-24587</a> </div>
                                            <div class="fw-normal"> <span><i class="fe fe-link me-2 d-inline-block"></i></span> <a href="javascript:void(0);">https://spruko.com/</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mt-6 mb-3">More Business Info</h5>
                                <div class="table-responsive features-table">
                                    <table class="table mb-0 table-bordered-0">
                                        <tbody>
                                            <tr>
                                                <td class="fw-semibold px-0 border-bottom-0">Established Year</td>
                                                <td class="border-bottom-0">:</td>
                                                <td class="px-0 border-bottom-0">1981</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold px-0 border-bottom-0">Services</td>
                                                <td class="border-bottom-0">:</td>
                                                <td class="px-0 border-bottom-0">Rent, Lease</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold px-0 border-bottom-0">Payment Methods </td>
                                                <td class="border-bottom-0">:</td>
                                                <td class="px-0 border-bottom-0">VISA, Mastercard, Discover, American Express</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold px-0 border-bottom-0">Fax</td>
                                                <td class="border-bottom-0">:</td>
                                                <td class="px-0 border-bottom-0">+25 485-9865-85</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold px-0 border-bottom-0">TollFree</td>
                                                <td class="border-bottom-0">:</td>
                                                <td class="px-0 border-bottom-0">+25 485-9865-85</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold px-0 border-bottom-0 pb-0"> Certification</td>
                                                <td class="border-bottom-0 pb-0">:</td>
                                                <td class="px-0 border-bottom-0 pb-0">ISO Certified</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane show active" id="video" role="tabpanel"> <iframe title="" class="w-100" height="400" src="https://www.youtube.com/embed/kacyaEXqVhs" allow="accelerometer; autoplay;" allowfullscreen=""></iframe> </div>
                            <div class="tab-pane" id="specifications" role="tabpanel">
                                <h5 class="card-title mb-3">Specifications</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive features-table">
                                            <table class="table row table-borderless w-100 m-0 text-nowrap ">
                                                <tbody class="col-lg-12 col-xl-6 p-0">
                                                    <tr>
                                                        <td class="px-0 border-bottom-0"><span class="fw-semibold"> House Type:</span> Residential</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-0 border-bottom-0"><span class="fw-semibold">Bedrooms :</span> 3</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-0 border-bottom-0"><span class="fw-semibold">BathRooms :</span> 2 </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-0 border-bottom-0 pb-0"><span class="fw-semibold">Gated Secuirity :</span> Yes</td>
                                                    </tr>
                                                </tbody>
                                                <tbody class="col-lg-12 col-xl-6 p-0">
                                                    <tr>
                                                        <td class="px-0 border-bottom-0"><span class="fw-semibold">Furnishing :</span> Semifurnitured</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-0 border-bottom-0"><span class="fw-semibold">Water Supply :</span> Borewell</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-0 border-bottom-0"><span class="fw-semibold">Facing:</span> East</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-0 border-bottom-0 pb-0"><span class="fw-semibold">Non-veg allowed :</span> Yes</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="features" role="tabpanel">
                                <h5 class="card-title mb-3">Features</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive features-table">
                                            <table class="table row table-borderless w-100 text-nowrap">
                                                <tbody class="col-lg-12 col-xl-5">
                                                    <tr class="">
                                                        <td class="fw-semibold px-0">24/7 Security</td>
                                                        <td class="border-bottom-0">:</td>
                                                        <td class=""><i class="fa-regular fa-circle-check text-success"></i> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="fw-semibold px-0">Lift</td>
                                                        <td class="border-bottom-0">:</td>
                                                        <td class=""><i class="fa-regular fa-circle-check text-success"></i> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="fw-semibold px-0">Swimming fool</td>
                                                        <td class="border-bottom-0">:</td>
                                                        <td class=""><i class="fa-regular fa-circle-check text-success"></i> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="fw-semibold px-0 pb-0">Play Area</td>
                                                        <td class="border-bottom-0 pb-0">:</td>
                                                        <td class="pb-0"><i class="fa-regular fa-circle-xmark text-danger"></i> </td>
                                                    </tr>
                                                </tbody>
                                                <tbody class="col-lg-12 col-xl-5">
                                                    <tr class="">
                                                        <td class="fw-semibold px-0">Football Court</td>
                                                        <td class="border-bottom-0">:</td>
                                                        <td class=""><i class="fa-regular fa-circle-check text-success"></i> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="fw-semibold px-0">Garden area</td>
                                                        <td class="border-bottom-0">:</td>
                                                        <td class=""><i class="fa-regular fa-circle-check text-success"></i> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="fw-semibold px-0">Cricket Court</td>
                                                        <td class="border-bottom-0">:</td>
                                                        <td class=""><i class="fa-regular fa-circle-check text-success"></i> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="fw-semibold px-0 pb-0">Play school</td>
                                                        <td class="border-bottom-0 pb-0">:</td>
                                                        <td class="pb-0"><i class="fa-regular fa-circle-xmark text-danger"></i> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="ratings" role="tabpanel">
                                <h4 class="fw-semibold mb-3">Ratings</h4>
                                <div class="mb-3">
                                    <div class="d-flex mb-1">
                                        <div class="badge badge-default bg-light text-primary p-2">5 <i class="bx bxs-star"></i></div>
                                        <div class="ms-auto fw-semibold fs-16 my-auto">9,232</div>
                                    </div>
                                    <div class="progress progress-md h-1">
                                        <div class="progress-bar bg-primary w-100"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex mb-1">
                                        <div class="badge badge-default bg-light text-info p-2">4 <i class="bx bxs-star"></i></div>
                                        <div class="ms-auto fw-semibold fs-16 my-auto">4,758</div>
                                    </div>
                                    <div class="progress progress-md h-1">
                                        <div class="progress-bar bg-info w-70"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex mb-1">
                                        <div class="badge badge-default bg-light text-success p-2">3 <i class="bx bxs-star"></i></div>
                                        <div class="ms-auto fw-semibold fs-16 my-auto">2,658</div>
                                    </div>
                                    <div class="progress progress-md h-1">
                                        <div class="progress-bar bg-success w-55"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex mb-1">
                                        <div class="badge badge-default bg-light text-warning p-2">2 <i class="bx bxs-star"></i></div>
                                        <div class="ms-auto fw-semibold fs-16 my-auto">1,258</div>
                                    </div>
                                    <div class="progress progress-md h-1">
                                        <div class="progress-bar bg-warning w-30"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex mb-1">
                                        <div class="badge badge-default bg-light text-danger p-2">1 <i class="bx bxs-star"></i></div>
                                        <div class="ms-auto fw-semibold fs-16 my-auto">658</div>
                                    </div>
                                    <div class="progress progress-md h-1">
                                        <div class="progress-bar bg-danger w-20p"></div>
                                    </div>
                                </div>
                                <h4 class="fw-semibold mb-3">Reviews</h4>
                                <ul class="ps-0 mb-0">
                                    <li class="d-flex p-3 border bg-white rounded mb-3 gap-1 flex-wrap gap-3">
                                        <img src="../assets/images/faces/male/1.jpg" alt="" class="avatar avatar-md rounded-circle">
                                        <div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-2 fw-semibold">Joanne Scott <span class="tx-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="verified"> <i class="bx bx-check-circle text-success"></i> </span> <span class="tx-14 ms-2 d-inline-block"> 4.5 <i class="fa fa-star text-warning"></i></span> </h6>
                                                <div class="d-flex gap-3 flex-wrap text-muted fs-12">
                                                    <div><i class="fe fe-calendar"></i> Dec 21st </div>
                                                    <div><i class="fe fe-clock"></i> 13.00 </div>
                                                    <div><i class="fe fe-map-pin"></i> Brezil</div>
                                                </div>
                                                <p class="mb-2 mt-2"> Lorem ipsum dolor sit amet, quis Neque porro quisquam est,nostrud exercitation ullamco laboris commodo consequat. </p>
                                                <div class="d-flex gap-1 flex-wrap"> <a class="btn btn-info-light btn-sm" href="javascript:void(0);"><i class="bx bx-like align-middle"></i> Helpful</a> <a class="btn btn-warning-light btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Comment"><i class="bx bx-message-rounded align-middle"></i> Comment</a> <a class="btn btn-danger-light btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#report"><i class="bx bx-info-circle align-middle"></i> Report</a> <a class="btn btn-success-light btn-sm" href="javascript:void(0);"><i class="bx bx-reply align-middle"></i>Reply</a> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex p-3 border bg-white rounded mb-3 gap-1 flex-wrap gap-3">
                                        <img src="../assets/images/faces/female/1.jpg" alt="" class="avatar avatar-md rounded-circle">
                                        <div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-2 fw-semibold">Rose Slater <span class="tx-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="verified"> <i class="bx bx-check-circle text-success"></i> </span> <span class="tx-14 ms-2 d-inline-block"> 4 <i class="fa fa-star text-warning"></i></span> </h6>
                                                <div class="d-flex gap-3 flex-wrap text-muted fs-12">
                                                    <div><i class="fe fe-calendar"></i> Mar 2nd </div>
                                                    <div><i class="fe fe-clock"></i> 15.00 </div>
                                                    <div><i class="fe fe-map-pin"></i> USA</div>
                                                </div>
                                                <p class="mb-2 mt-2"> Lorem ipsum dolor sit amet, quis Neque porro quisquam est,nostrud exercitation ullamco laboris commodo consequat. </p>
                                                <div class="d-flex gap-1 flex-wrap"> <a class="btn btn-info-light btn-sm" href="javascript:void(0);"><i class="bx bx-like align-middle"></i> Helpful</a> <a class="btn btn-warning-light btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Comment"><i class="bx bx-message-rounded align-middle"></i> Comment</a> <a class="btn btn-danger-light btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#report"><i class="bx bx-info-circle align-middle"></i> Report</a> <a class="btn btn-success-light btn-sm" href="javascript:void(0);"><i class="bx bx-reply align-middle"></i>Reply</a> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex p-3 border bg-white rounded flex-wrap gap-3">
                                        <img src="../assets/images/faces/male/2.jpg" alt="" class="avatar avatar-md rounded-circle">
                                        <div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-2 fw-semibold">Edward <span class="tx-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="verified"> <i class="bx bx-check-circle text-success"></i> </span> <span class="tx-14 ms-2 d-inline-block"> 4.2 <i class="fa fa-star text-warning"></i></span> </h6>
                                                <div class="d-flex gap-3 flex-wrap text-muted fs-12">
                                                    <div><i class="fe fe-calendar"></i> Apr 10th </div>
                                                    <div><i class="fe fe-clock"></i> 18.00 </div>
                                                    <div><i class="fe fe-map-pin"></i> ITALY</div>
                                                </div>
                                                <p class="mb-2 mt-2"> Lorem ipsum dolor sit amet, quis Neque porro quisquam est,nostrud exercitation ullamco laboris commodo consequat. </p>
                                                <div class="d-flex gap-1 flex-wrap"> <a class="btn btn-info-light btn-sm" href="javascript:void(0);"><i class="bx bx-like align-middle"></i> Helpful</a> <a class="btn btn-warning-light btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Comment"><i class="bx bx-message-rounded align-middle"></i> Comment</a> <a class="btn btn-danger-light btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#report"><i class="bx bx-info-circle align-middle"></i> Report</a> <a class="btn btn-success-light btn-sm" href="javascript:void(0);"><i class="bx bx-reply align-middle"></i>Reply</a> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top border-bottom py-2">
                        <div class="list-id">
                            <div class="row">
                                <div class="col"> <a class="mb-0">Rent ID : <span class="fw-medium">#8256358</span></a> </div>
                                <div class="col col-auto"> Posted By <a class="mb-0 fw-semibold">Individual</a> / 21st June 2023 </div>
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
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Location Map</h5>
                    </div>
                    <div class="card-body">
                        <div id="google-map" style="position: relative; overflow: hidden;">
                            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                <div><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; outline-offset: 3px; right: 0px; bottom: 0px; transform: translateX(100%);"></button></div>
                                <div tabindex="0" aria-label="Map" aria-roledescription="map" role="region" aria-describedby="88F1F3BD-D720-48A9-8B5B-48FAF8DEABCD" style="position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                    <div id="88F1F3BD-D720-48A9-8B5B-48FAF8DEABCD" style="display: none;">
                                        <span>To navigate the map with touch gestures double-tap and hold your finger on the map, then drag the map.</span>
                                        <div class="LGLeeN-keyboard-shortcuts-view">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td><kbd aria-label="Left arrow">←</kbd></td>
                                                        <td aria-label="Move left.">Move left</td>
                                                    </tr>
                                                    <tr>
                                                        <td><kbd aria-label="Right arrow">→</kbd></td>
                                                        <td aria-label="Move right.">Move right</td>
                                                    </tr>
                                                    <tr>
                                                        <td><kbd aria-label="Up arrow">↑</kbd></td>
                                                        <td aria-label="Move up.">Move up</td>
                                                    </tr>
                                                    <tr>
                                                        <td><kbd aria-label="Down arrow">↓</kbd></td>
                                                        <td aria-label="Move down.">Move down</td>
                                                    </tr>
                                                    <tr>
                                                        <td><kbd>+</kbd></td>
                                                        <td aria-label="Zoom in.">Zoom in</td>
                                                    </tr>
                                                    <tr>
                                                        <td><kbd>-</kbd></td>
                                                        <td aria-label="Zoom out.">Zoom out</td>
                                                    </tr>
                                                    <tr>
                                                        <td><kbd>Home</kbd></td>
                                                        <td aria-label="Jump left by 75%.">Jump left by 75%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><kbd>End</kbd></td>
                                                        <td aria-label="Jump right by 75%.">Jump right by 75%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><kbd>Page Up</kbd></td>
                                                        <td aria-label="Jump up by 75%.">Jump up by 75%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><kbd>Page Down</kbd></td>
                                                        <td aria-label="Jump down by 75%.">Jump down by 75%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                    <div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;">
                                        <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                    <div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -182, -96);">
                                                        <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                <div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -182, -96);">
                                                    <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9374!3i17488!4i256!2m3!1e0!2sm!3i711463383!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCW16SmpzDNLsrP-npQii6_8vBu_EJvEjA&amp;token=123502" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9371!3i17487!4i256!2m3!1e0!2sm!3i711463383!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCW16SmpzDNLsrP-npQii6_8vBu_EJvEjA&amp;token=96860" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9373!3i17487!4i256!2m3!1e0!2sm!3i711463395!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCW16SmpzDNLsrP-npQii6_8vBu_EJvEjA&amp;token=115962" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9372!3i17487!4i256!2m3!1e0!2sm!3i711463383!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCW16SmpzDNLsrP-npQii6_8vBu_EJvEjA&amp;token=37452" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9373!3i17488!4i256!2m3!1e0!2sm!3i711463383!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCW16SmpzDNLsrP-npQii6_8vBu_EJvEjA&amp;token=51839" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9371!3i17488!4i256!2m3!1e0!2sm!3i711463455!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCW16SmpzDNLsrP-npQii6_8vBu_EJvEjA&amp;token=25435" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9372!3i17488!4i256!2m3!1e0!2sm!3i711463455!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCW16SmpzDNLsrP-npQii6_8vBu_EJvEjA&amp;token=97098" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9374!3i17487!4i256!2m3!1e0!2sm!3i711463395!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCW16SmpzDNLsrP-npQii6_8vBu_EJvEjA&amp;token=56554" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                            <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><span id="08087269-D8BC-47EA-9427-0EE6092A3AB5" style="display: none;">To navigate, press the arrow keys.</span></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                            </div>
                                        </div>
                                        <div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; transition-property: opacity, display; opacity: 0; display: none;">
                                            <p class="gm-style-mot"></p>
                                        </div>
                                    </div>
                                    <iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none; opacity: 0;"></iframe>
                                    <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
                                    <div>
                                        <div class="gmnoprint gm-bundled-control" draggable="false" data-control-width="40" data-control-height="81" style="margin: 10px; user-select: none; position: absolute; left: 0px; top: 0px;">
                                            <div class="gmnoprint" data-control-width="40" data-control-height="81" style="position: absolute; left: 0px; top: 0px;">
                                                <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                                    <button draggable="false" aria-label="Zoom in" title="Zoom in" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button>
                                                    <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                    <button draggable="false" aria-label="Zoom out" title="Zoom out" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div><button draggable="false" aria-label="Toggle fullscreen view" title="Toggle fullscreen view" type="button" aria-pressed="false" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div>
                                        <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" data-control-width="0" data-control-height="0" style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 26px; left: 0px;">
                                            <div class="gmnoprint" data-control-width="40" data-control-height="40" style="display: none; position: absolute;">
                                                <div style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px;">
                                                    <button draggable="false" aria-label="Rotate map clockwise" title="Rotate map clockwise" type="button" class="gm-control-active" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"></button>
                                                    <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div>
                                                    <button draggable="false" aria-label="Rotate map counterclockwise" title="Rotate map counterclockwise" type="button" class="gm-control-active" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px; transform: scaleX(-1);"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"></button>
                                                    <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div>
                                                    <button draggable="false" aria-label="Tilt map" title="Tilt map" type="button" class="gm-tilt gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; top: 0px; left: 0px; overflow: hidden; width: 40px; height: 40px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" data-control-width="0" data-control-height="0" style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 14px; right: 0px;"><button draggable="false" aria-label="Drag Pegman onto the map to open Street View" title="Drag Pegman onto the map to open Street View" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; left: 0px; top: 0px;"></button></div>
                                    </div>
                                    <div>
                                        <div style="margin: 0px 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                            <a target="_blank" rel="noopener" title="Open this area in Google Maps (opens a new window)" aria-label="Open this area in Google Maps (opens a new window)" href="https://maps.google.com/maps?ll=-12.043333,-77.028333&amp;z=15&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" style="display: inline;">
                                                <div style="width: 66px; height: 26px;"><img alt="Google" src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2069%2029%22%3E%3Cg%20opacity%3D%22.6%22%20fill%3D%22%23fff%22%20stroke%3D%22%23fff%22%20stroke-width%3D%221.5%22%3E%3Cpath%20d%3D%22M17.4706%207.33616L18.0118%206.79504%2017.4599%206.26493C16.0963%204.95519%2014.2582%203.94522%2011.7008%203.94522c-4.613699999999999%200-8.50262%203.7551699999999997-8.50262%208.395779999999998C3.19818%2016.9817%207.0871%2020.7368%2011.7008%2020.7368%2014.1712%2020.7368%2016.0773%2019.918%2017.574%2018.3689%2019.1435%2016.796%2019.5956%2014.6326%2019.5956%2012.957%2019.5956%2012.4338%2019.5516%2011.9316%2019.4661%2011.5041L19.3455%2010.9012H10.9508V14.4954H15.7809C15.6085%2015.092%2015.3488%2015.524%2015.0318%2015.8415%2014.403%2016.4629%2013.4495%2017.1509%2011.7008%2017.1509%209.04835%2017.1509%206.96482%2015.0197%206.96482%2012.341%206.96482%209.66239%209.04835%207.53119%2011.7008%207.53119%2013.137%207.53119%2014.176%208.09189%2014.9578%208.82348L15.4876%209.31922%2016.0006%208.80619%2017.4706%207.33616z%22/%3E%3Cpath%20d%3D%22M24.8656%2020.7286C27.9546%2020.7286%2030.4692%2018.3094%2030.4692%2015.0594%2030.4692%2011.7913%2027.953%209.39011%2024.8656%209.39011%2021.7783%209.39011%2019.2621%2011.7913%2019.2621%2015.0594c0%203.25%202.514499999999998%205.6692%205.6035%205.6692zM24.8656%2012.8282C25.8796%2012.8282%2026.8422%2013.6652%2026.8422%2015.0594%2026.8422%2016.4399%2025.8769%2017.2905%2024.8656%2017.2905%2023.8557%2017.2905%2022.8891%2016.4331%2022.8891%2015.0594%2022.8891%2013.672%2023.853%2012.8282%2024.8656%2012.8282z%22/%3E%3Cpath%20d%3D%22M35.7511%2017.2905v0H35.7469C34.737%2017.2905%2033.7703%2016.4331%2033.7703%2015.0594%2033.7703%2013.672%2034.7343%2012.8282%2035.7469%2012.8282%2036.7608%2012.8282%2037.7234%2013.6652%2037.7234%2015.0594%2037.7234%2016.4439%2036.7554%2017.2962%2035.7511%2017.2905zM35.7387%2020.7286C38.8277%2020.7286%2041.3422%2018.3094%2041.3422%2015.0594%2041.3422%2011.7913%2038.826%209.39011%2035.7387%209.39011%2032.6513%209.39011%2030.1351%2011.7913%2030.1351%2015.0594%2030.1351%2018.3102%2032.6587%2020.7286%2035.7387%2020.7286z%22/%3E%3Cpath%20d%3D%22M51.953%2010.4357V9.68573H48.3999V9.80826C47.8499%209.54648%2047.1977%209.38187%2046.4808%209.38187%2043.5971%209.38187%2041.0168%2011.8998%2041.0168%2015.0758%2041.0168%2017.2027%2042.1808%2019.0237%2043.8201%2019.9895L43.7543%2020.0168%2041.8737%2020.797%2041.1808%2021.0844%2041.4684%2021.7772C42.0912%2023.2776%2043.746%2025.1469%2046.5219%2025.1469%2047.9324%2025.1469%2049.3089%2024.7324%2050.3359%2023.7376%2051.3691%2022.7367%2051.953%2021.2411%2051.953%2019.2723v-8.8366zm-7.2194%209.9844L44.7334%2020.4196C45.2886%2020.6201%2045.878%2020.7286%2046.4808%2020.7286%2047.1616%2020.7286%2047.7866%2020.5819%2048.3218%2020.3395%2048.2342%2020.7286%2048.0801%2021.0105%2047.8966%2021.2077%2047.6154%2021.5099%2047.1764%2021.7088%2046.5219%2021.7088%2045.61%2021.7088%2045.0018%2021.0612%2044.7336%2020.4201zM46.6697%2012.8282C47.6419%2012.8282%2048.5477%2013.6765%2048.5477%2015.084%2048.5477%2016.4636%2047.6521%2017.2987%2046.6697%2017.2987%2045.6269%2017.2987%2044.6767%2016.4249%2044.6767%2015.084%2044.6767%2013.7086%2045.6362%2012.8282%2046.6697%2012.8282zM55.7387%205.22083v-.75H52.0788V20.4412H55.7387V5.220829999999999z%22/%3E%3Cpath%20d%3D%22M63.9128%2016.0614L63.2945%2015.6492%2062.8766%2016.2637C62.4204%2016.9346%2061.8664%2017.3069%2061.0741%2017.3069%2060.6435%2017.3069%2060.3146%2017.2088%2060.0544%2017.0447%2059.9844%2017.0006%2059.9161%2016.9496%2059.8498%2016.8911L65.5497%2014.5286%2066.2322%2014.2456%2065.9596%2013.5589%2065.7406%2013.0075C65.2878%2011.8%2063.8507%209.39832%2060.8278%209.39832%2057.8445%209.39832%2055.5034%2011.7619%2055.5034%2015.0676%2055.5034%2018.2151%2057.8256%2020.7369%2061.0659%2020.7369%2063.6702%2020.7369%2065.177%2019.1378%2065.7942%2018.2213L66.2152%2017.5963%2065.5882%2017.1783%2063.9128%2016.0614zM61.3461%2012.8511L59.4108%2013.6526C59.7903%2013.0783%2060.4215%2012.7954%2060.9017%2012.7954%2061.067%2012.7954%2061.2153%2012.8161%2061.3461%2012.8511z%22/%3E%3C/g%3E%3Cpath%20d%3D%22M11.7008%2019.9868C7.48776%2019.9868%203.94818%2016.554%203.94818%2012.341%203.94818%208.12803%207.48776%204.69522%2011.7008%204.69522%2014.0331%204.69522%2015.692%205.60681%2016.9403%206.80583L15.4703%208.27586C14.5751%207.43819%2013.3597%206.78119%2011.7008%206.78119%208.62108%206.78119%206.21482%209.26135%206.21482%2012.341%206.21482%2015.4207%208.62108%2017.9009%2011.7008%2017.9009%2013.6964%2017.9009%2014.8297%2017.0961%2015.5606%2016.3734%2016.1601%2015.7738%2016.5461%2014.9197%2016.6939%2013.7454h-4.9931V11.6512h7.0298C18.8045%2012.0207%2018.8456%2012.4724%2018.8456%2012.957%2018.8456%2014.5255%2018.4186%2016.4637%2017.0389%2017.8434%2015.692%2019.2395%2013.9838%2019.9868%2011.7008%2019.9868z%22%20fill%3D%22%234285F4%22/%3E%3Cpath%20d%3D%22M29.7192%2015.0594C29.7192%2017.8927%2027.5429%2019.9786%2024.8656%2019.9786%2022.1884%2019.9786%2020.0121%2017.8927%2020.0121%2015.0594%2020.0121%2012.2096%2022.1884%2010.1401%2024.8656%2010.1401%2027.5429%2010.1401%2029.7192%2012.2096%2029.7192%2015.0594zM27.5922%2015.0594C27.5922%2013.2855%2026.3274%2012.0782%2024.8656%2012.0782S22.1391%2013.2937%2022.1391%2015.0594C22.1391%2016.8086%2023.4038%2018.0405%2024.8656%2018.0405S27.5922%2016.8168%2027.5922%2015.0594z%22%20fill%3D%22%23E94235%22/%3E%3Cpath%20d%3D%22M40.5922%2015.0594C40.5922%2017.8927%2038.4159%2019.9786%2035.7387%2019.9786%2033.0696%2019.9786%2030.8851%2017.8927%2030.8851%2015.0594%2030.8851%2012.2096%2033.0614%2010.1401%2035.7387%2010.1401%2038.4159%2010.1401%2040.5922%2012.2096%2040.5922%2015.0594zM38.4734%2015.0594C38.4734%2013.2855%2037.2087%2012.0782%2035.7469%2012.0782%2034.2851%2012.0782%2033.0203%2013.2937%2033.0203%2015.0594%2033.0203%2016.8086%2034.2851%2018.0405%2035.7469%2018.0405%2037.2087%2018.0487%2038.4734%2016.8168%2038.4734%2015.0594z%22%20fill%3D%22%23FABB05%22/%3E%3Cpath%20d%3D%22M51.203%2010.4357v8.8366C51.203%2022.9105%2049.0595%2024.3969%2046.5219%2024.3969%2044.132%2024.3969%2042.7031%2022.7955%2042.161%2021.4897L44.0417%2020.7095C44.3784%2021.5143%2045.1997%2022.4588%2046.5219%2022.4588%2048.1479%2022.4588%2049.1499%2021.4487%2049.1499%2019.568V18.8617H49.0759C48.5914%2019.4612%2047.6552%2019.9786%2046.4808%2019.9786%2044.0171%2019.9786%2041.7668%2017.8352%2041.7668%2015.0758%2041.7668%2012.3%2044.0253%2010.1319%2046.4808%2010.1319%2047.6552%2010.1319%2048.5914%2010.6575%2049.0759%2011.2323H49.1499V10.4357H51.203zM49.2977%2015.084C49.2977%2013.3512%2048.1397%2012.0782%2046.6697%2012.0782%2045.175%2012.0782%2043.9267%2013.3429%2043.9267%2015.084%2043.9267%2016.8004%2045.175%2018.0487%2046.6697%2018.0487%2048.1397%2018.0487%2049.2977%2016.8004%2049.2977%2015.084z%22%20fill%3D%22%234285F4%22/%3E%3Cpath%20d%3D%22M54.9887%205.22083V19.6912H52.8288V5.220829999999999H54.9887z%22%20fill%3D%22%2334A853%22/%3E%3Cpath%20d%3D%22M63.4968%2016.6854L65.1722%2017.8023C64.6301%2018.6072%2063.3244%2019.9869%2061.0659%2019.9869%2058.2655%2019.9869%2056.2534%2017.827%2056.2534%2015.0676%2056.2534%2012.1439%2058.2901%2010.1483%2060.8278%2010.1483%2063.3818%2010.1483%2064.6301%2012.1768%2065.0408%2013.2773L65.2625%2013.8357%2058.6843%2016.5623C59.1853%2017.5478%2059.9737%2018.0569%2061.0741%2018.0569%2062.1746%2018.0569%2062.9384%2017.5067%2063.4968%2016.6854zM58.3312%2014.9115L62.7331%2013.0884C62.4867%2012.4724%2061.764%2012.0454%2060.9017%2012.0454%2059.8012%2012.0454%2058.2737%2013.0145%2058.3312%2014.9115z%22%20fill%3D%22%23E94235%22/%3E%3C/svg%3E" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div></div>
                                    <div>
                                        <div style="display: inline-flex; position: absolute; right: 0px; bottom: 0px;">
                                            <div class="gmnoprint" style="z-index: 1000001;">
                                                <div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                    </div>
                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit;">Keyboard shortcuts</button></div>
                                                </div>
                                            </div>
                                            <div class="gmnoprint" style="z-index: 1000001;">
                                                <div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                    </div>
                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Map Data" title="Map Data" type="button" style="background: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit; display: none;">Map Data</button><span style="">Map data ©2024 Google</span></div>
                                                </div>
                                            </div>
                                            <div class="gmnoscreen">
                                                <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2024 Google</div>
                                            </div>
                                            <button draggable="false" aria-label="Map Scale: 200 m per 43 pixels" title="Map Scale: 200 m per 43 pixels" type="button" class="gm-style-cc" aria-describedby="A9CA5294-61FF-43A1-801D-CDE70D72C3A4" style="background: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; height: 14px; line-height: 14px;">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                </div>
                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                    <span style="color: rgb(0, 0, 0);">200 m&nbsp;</span>
                                                    <div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 47px;">
                                                        <div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px; background-color: rgb(245, 245, 245);"></div>
                                                        <div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(245, 245, 245);"></div>
                                                        <div style="width: 4px; height: 8px; position: absolute; background-color: rgb(245, 245, 245); right: 0px; bottom: 0px;"></div>
                                                        <div style="position: absolute; background-color: rgb(0, 0, 0); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div>
                                                        <div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(0, 0, 0);"></div>
                                                        <div style="width: 2px; height: 6px; position: absolute; background-color: rgb(0, 0, 0); bottom: 1px; right: 1px;"></div>
                                                    </div>
                                                </div>
                                                <span id="A9CA5294-61FF-43A1-801D-CDE70D72C3A4" style="display: none;">Click to toggle between metric and imperial units</span>
                                            </button>
                                            <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                </div>
                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms</a></div>
                                            </div>
                                            <div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px; display: none;">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                </div>
                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" dir="ltr" href="https://www.google.com/maps/@-12.043333,-77.028333,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; text-decoration: none; position: relative; color: rgb(0, 0, 0);">Report a map error</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
                                <div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div>
                                <div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load Google Maps correctly.</span></div>
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="line-height: 16px; vertical-align: middle;"><a href="http://g.co/dev/maps-no-account" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own this website?</a></td>
                                        <td style="text-align: right;"><button class="dismissButton">OK</button></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Related Posts</h5>
                    </div>
                    <div class="card-body">
                        <div class="swiper related swiper-initialized swiper-horizontal swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-10cf935b7c28f8aff" aria-live="off" style="transition-duration: 300ms; transform: translate3d(-831px, 0px, 0px);">
                                <div class="swiper-slide" role="group" aria-label="6 / 6" data-swiper-slide-index="5" style="width: 247px; margin-right: 30px;">
                                    <div class="card mb-0">
                                        <div class="card-body position-relative p-3">
                                            <div class="position-relative mb-3 overflow-hidden"> <a aria-label="anchor" href="realestate.html"></a> <img src="../assets/images/products/products/15.jpg" alt="img" class="cover-image w-100 h-100 rounded-1"> <span class="badge bg-primary blog-badge2">$149.00</span> <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist" data-bs-placement="top" class="badge bg-black-2 blog-badge3"><i class="fa-regular fa-heart"></i></a> </div>
                                            <a href="realestate.html" class="text-dark">
                                                <h5 class="text-dark mb-0">Best Villas</h5>
                                            </a>
                                            <div class="d-flex flex-wrap align-items-center flex-wrap">
                                                <div class="rating-stars star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                                    <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                                </div>
                                                (78)
                                            </div>
                                            <div class="mt-3">
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0 mb-2"> <i class="fe fe-map-pin me-2 d-inline-block text-muted"></i>Los Angles </div>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0 mb-2"> <i class="fe fe-phone me-2 d-inline-block text-muted"></i>+63 658-965-865 </div>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0"> <i class="fe fe-grid me-2 d-inline-block text-muted"></i>Rent </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-footer px-3"> <a href="realestate.html" class="btn btn-primary w-100 btn-sm">View Details</a> </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="1 / 6" data-swiper-slide-index="0" style="width: 247px; margin-right: 30px;">
                                    <div class="card mb-0">
                                        <div class="card-body position-relative p-3">
                                            <div class="position-relative mb-3 overflow-hidden"> <a aria-label="anchor" href="realestate.html"></a> <img src="../assets/images/products/products/11.jpg" alt="img" class="cover-image w-100 h-100 rounded-1"> <span class="badge bg-secondary blog-badge text-primary">Rent</span> <span class="badge bg-primary blog-badge2">$263.99</span> <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist" data-bs-placement="top" class="badge bg-black-2 blog-badge3"><i class="fa-regular fa-heart"></i></a> </div>
                                            <a href="realestate.html" class="text-dark">
                                                <h5 class="text-dark mb-0">Beach side Hotel</h5>
                                            </a>
                                            <div class="d-flex flex-wrap align-items-center flex-wrap">
                                                <div class="rating-stars star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                                    <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                                </div>
                                                (78)
                                            </div>
                                            <div class="mt-3">
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0 mb-2"> <i class="fe fe-map-pin me-2 d-inline-block text-muted"></i>Hyderabad </div>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0 mb-2"> <i class="fe fe-phone me-2 d-inline-block text-muted"></i>+63 658-965-865 </div>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0"> <i class="fe fe-grid me-2 d-inline-block text-muted"></i>Rent </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-footer px-3"> <a href="realestate.html" class="btn btn-primary w-100 btn-sm">View Details</a> </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 6" data-swiper-slide-index="1" style="width: 247px; margin-right: 30px;">
                                    <div class="card mb-0">
                                        <div class="card-body position-relative p-3">
                                            <div class="position-relative mb-3 overflow-hidden">
                                                <a aria-label="anchor" href="realestate.html"></a>
                                                <div class="ribbon ribbon-top-left text-fixed-white"><span class="bg-danger">Featured</span></div>
                                                <img src="../assets/images/products/products/17.jpg" alt="img" class="cover-image w-100 h-100 rounded-1"> <span class="badge bg-primary blog-badge2">$263.99</span> <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist" data-bs-placement="top" class="badge bg-black-2 blog-badge3"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <a href="realestate.html" class="text-dark">
                                                <h5 class="text-dark mb-0">Beach side Hotel</h5>
                                            </a>
                                            <div class="d-flex flex-wrap align-items-center flex-wrap">
                                                <div class="rating-stars star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                                    <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                                </div>
                                                (78)
                                            </div>
                                            <div class="mt-3">
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0 mb-2"> <i class="fe fe-map-pin me-2 d-inline-block text-muted"></i>Hyderabad </div>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0 mb-2"> <i class="fe fe-phone me-2 d-inline-block text-muted"></i>+63 658-965-865 </div>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0"> <i class="fe fe-grid me-2 d-inline-block text-muted"></i>Sale </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-footer px-3"> <a href="realestate.html" class="btn btn-primary w-100 btn-sm">View Details</a> </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 6" data-swiper-slide-index="2" style="width: 247px; margin-right: 30px;">
                                    <div class="card mb-0">
                                        <div class="card-body position-relative p-3">
                                            <div class="position-relative mb-3 overflow-hidden">
                                                <a aria-label="anchor" href="realestate.html"></a>
                                                <div class="ribbon ribbon-top-left text-fixed-white"><span class="bg-danger">Featured</span></div>
                                                <img src="../assets/images/products/products/12.jpg" alt="img" class="cover-image w-100 h-100 rounded-1"> <span class="badge bg-primary blog-badge2">$149.00</span> <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist" data-bs-placement="top" class="badge bg-black-2 blog-badge3"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <a href="realestate.html" class="text-dark">
                                                <h5 class="text-dark mb-0">House For Sale</h5>
                                            </a>
                                            <div class="d-flex flex-wrap align-items-center flex-wrap">
                                                <div class="rating-stars star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                                    <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                                </div>
                                                (78)
                                            </div>
                                            <div class="mt-3">
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0 mb-2"> <i class="fe fe-map-pin me-2 d-inline-block text-muted"></i>Hyderabad </div>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0 mb-2"> <i class="fe fe-phone me-2 d-inline-block text-muted"></i>+63 658-965-865 </div>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0"> <i class="fe fe-grid me-2 d-inline-block text-muted"></i>Sale </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-footer px-3"> <a href="realestate.html" class="btn btn-primary w-100 btn-sm">View Details</a> </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="4 / 6" data-swiper-slide-index="3" style="width: 247px; margin-right: 30px;">
                                    <div class="card mb-0">
                                        <div class="card-body position-relative p-3">
                                            <div class="position-relative mb-3 overflow-hidden"> <a aria-label="anchor" href="realestate.html"></a> <img src="../assets/images/products/products/13.jpg" alt="img" class="cover-image w-100 h-100 rounded-1"> <span class="badge bg-primary blog-badge2">$149.00</span> <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist" data-bs-placement="top" class="badge bg-black-2 blog-badge3"><i class="fa-regular fa-heart"></i></a> </div>
                                            <a href="realestate.html" class="text-dark">
                                                <h5 class="text-dark mb-0">Duplex House</h5>
                                            </a>
                                            <div class="d-flex flex-wrap align-items-center flex-wrap">
                                                <div class="rating-stars star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                                    <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                                </div>
                                                (78)
                                            </div>
                                            <div class="mt-3">
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0 mb-2"> <i class="fe fe-map-pin me-2 d-inline-block text-muted"></i>Los Angles </div>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0 mb-2"> <i class="fe fe-phone me-2 d-inline-block text-muted"></i>+63 658-965-865 </div>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0"> <i class="fe fe-grid me-2 d-inline-block text-muted"></i>Sale </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-footer px-3"> <a href="realestate.html" class="btn btn-primary w-100 btn-sm">View Details</a> </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 6" data-swiper-slide-index="4" style="width: 247px; margin-right: 30px;">
                                    <div class="card mb-0">
                                        <div class="card-body position-relative p-3">
                                            <div class="position-relative mb-3 overflow-hidden"> <a aria-label="anchor" href="realestate.html"></a> <img src="../assets/images/products/products/14.jpg" alt="img" class="cover-image w-100 h-100 rounded-1"> <span class="badge bg-primary blog-badge2">$149.00</span> <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist" data-bs-placement="top" class="badge bg-black-2 blog-badge3"><i class="fa-regular fa-heart"></i></a> </div>
                                            <a href="realestate.html" class="text-dark">
                                                <h5 class="text-dark mb-0">GilkonStar Hotel</h5>
                                            </a>
                                            <div class="d-flex flex-wrap align-items-center flex-wrap">
                                                <div class="rating-stars star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                                    <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                                </div>
                                                (78)
                                            </div>
                                            <div class="mt-3">
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0 mb-2"> <i class="fe fe-map-pin me-2 d-inline-block text-muted"></i>Los Angles </div>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0 mb-2"> <i class="fe fe-phone me-2 d-inline-block text-muted"></i>+63 658-965-865 </div>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="pb-0 pt-0"> <i class="fe fe-grid me-2 d-inline-block text-muted"></i>Sale </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-footer px-3"> <a href="realestate.html" class="btn btn-primary w-100 btn-sm">View Details</a> </div>
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Frequently Asked Questions</h5>
                    </div>
                    <div class="card-body">
                        <div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingcustomicon1Three"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three" aria-expanded="false" aria-controls="collapsecustomicon1Three"> What is a renter's market? </button> </h5>
                                <div id="collapsecustomicon1Three" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Three" data-bs-parent="#accordioncustomicon1Example">
                                    <div class="accordion-body">
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingcustomicon15"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon15" aria-expanded="false" aria-controls="collapsecustomicon15"> What is a stratified market? </button> </h5>
                                <div id="collapsecustomicon15" class="accordion-collapse collapse" aria-labelledby="headingcustomicon15" data-bs-parent="#accordioncustomicon1Example">
                                    <div class="accordion-body">
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingcustomicon1Two"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two" aria-expanded="false" aria-controls="collapsecustomicon1Two"> How long does it take to rent a home? </button> </h5>
                                <div id="collapsecustomicon1Two" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Two" data-bs-parent="#accordioncustomicon1Example">
                                    <div class="accordion-body">
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingcustomicon1One"> <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1One" aria-expanded="true" aria-controls="collapsecustomicon1One"> What the first step of the home rent a process? </button> </h5>
                                <div id="collapsecustomicon1One" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example">
                                    <div class="accordion-body">
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingcustomicon14"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon14" aria-expanded="false" aria-controls="collapsecustomicon14"> What is a agent's market? </button> </h5>
                                <div id="collapsecustomicon14" class="accordion-collapse collapse" aria-labelledby="headingcustomicon14" data-bs-parent="#accordioncustomicon1Example">
                                    <div class="accordion-body">
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-lg-0">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Leave a reply</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex gap-1 flex-wrap">
                            <p class="mb-0 fs-16 fw-semibold my-auto">Over All Rating</p>
                            <div class="rating-stars2 ms-5 star-rating" data-rating="4" style="width: 120px; height: 24px; background-size: 24px;">
                                <div class="star-value" style="background-size: 24px; width: 80%;"></div>
                            </div>
                            <div class="ms-auto">
                                <h5 class="mb-0">4.5</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex mb-2 flex-wrap">
                                    <p class="mb-0">Services</p>
                                    <div class="rating-stars ms-5 star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                        <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex mb-2 flex-wrap">
                                    <p class="mb-0">Comfort</p>
                                    <div class="rating-stars ms-5 star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                        <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex mb-2 flex-wrap">
                                    <p class="mb-0">Hospitality</p>
                                    <div class="rating-stars ms-5 star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                        <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex mb-2 flex-wrap">
                                    <p class="mb-0">Safety</p>
                                    <div class="rating-stars ms-5 star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                        <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex mb-2 flex-wrap">
                                    <p class="mb-0">Location</p>
                                    <div class="rating-stars ms-5 star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                        <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex mb-2 flex-wrap">
                                    <p class="mb-0">Rating</p>
                                    <div class="rating-stars ms-5 star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                        <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title my-3">Review</h5>
                        <div>
                            <div class="form-group mb-3"> <input type="text" class="form-control" placeholder="Your Name"> </div>
                            <div class="form-group mb-3"> <input type="email" class="form-control" placeholder="Email Address"> </div>
                            <div class="form-group mb-3"> <textarea class="form-control" rows="4" placeholder="Comment"></textarea> </div>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light">Send Reply</a>
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
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Search Properties</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3"> <input type="text" class="form-control" id="text2" placeholder="What are you looking for?"> </div>
                            <div class="form-group mb-3">
                                <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner">
                                        <select class="form-control choices__input" data-trigger="" hidden="" tabindex="-1" data-choice="active">
                                            <option value="0" data-custom-properties="[object Object]">Property Type</option>
                                        </select>
                                        <div class="choices__list choices__list--single">
                                            <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="0" data-custom-properties="[object Object]" aria-selected="true">Property Type</div>
                                        </div>
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <input type="search" name="search_terms" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="This is a placeholder set in the config" placeholder="Search Here">
                                        <div class="choices__list" role="listbox">
                                            <div id="choices--v4wj-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="14" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Bacheolors</div>
                                            <div id="choices--v4wj-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="7" data-select-text="Press to select" data-choice-selectable="">College Space</div>
                                            <div id="choices--v4wj-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="13" data-select-text="Press to select" data-choice-selectable="">Co-working Space</div>
                                            <div id="choices--v4wj-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="8" data-select-text="Press to select" data-choice-selectable="">Hostel Buildings</div>
                                            <div id="choices--v4wj-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="3" data-select-text="Press to select" data-choice-selectable="">Hostels</div>
                                            <div id="choices--v4wj-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="9" data-select-text="Press to select" data-choice-selectable="">Hotels</div>
                                            <div id="choices--v4wj-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="11" data-select-text="Press to select" data-choice-selectable="">Industrail</div>
                                            <div id="choices--v4wj-item-choice-8" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="8" data-value="12" data-select-text="Press to select" data-choice-selectable="">Land Or Flots</div>
                                            <div id="choices--v4wj-item-choice-9" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="9" data-value="4" data-select-text="Press to select" data-choice-selectable="">Office Space</div>
                                            <div id="choices--v4wj-item-choice-10" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="10" data-value="0" data-select-text="Press to select" data-choice-selectable="">Property Type</div>
                                            <div id="choices--v4wj-item-choice-11" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="11" data-value="1" data-select-text="Press to select" data-choice-selectable="">Residential</div>
                                            <div id="choices--v4wj-item-choice-12" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="12" data-value="5" data-select-text="Press to select" data-choice-selectable="">Retail Space</div>
                                            <div id="choices--v4wj-item-choice-13" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="13" data-value="6" data-select-text="Press to select" data-choice-selectable="">School Space</div>
                                            <div id="choices--v4wj-item-choice-14" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="14" data-value="10" data-select-text="Press to select" data-choice-selectable="">Ware house</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=""> <a href="javascript:void(0);" class="btn btn-primary btn-block waves-effect waves-light">Search</a> </div>
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