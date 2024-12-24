@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">{{ $category->name ?? '' }}</h1>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Categories</h5>
                    </div>
                    <div class="card-body text-center">
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="ComputerOperator"> <label class="form-check-label" for="ComputerOperator"> All </label> <span class="badge bg-light text-dark float-end">14</span> </div>
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Admin"> <label class="form-check-label" for="Admin"> Apartments </label> <span class="badge bg-light text-dark float-end">22</span> </div>
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Chef" checked=""> <label class="form-check-label" for="Chef"> Houses </label> <span class="badge bg-light text-dark float-end">78</span> </div>
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Beautician"> <label class="form-check-label" for="Beautician"> Villas </label> <span class="badge bg-light text-dark float-end">53</span> </div>
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="ITHardware"> <label class="form-check-label" for="ITHardware"> Restaurant </label> <span class="badge bg-light text-dark float-end">20</span> </div>
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Driver"> <label class="form-check-label" for="Driver"> Gardens </label> <span class="badge bg-light text-dark float-end">14</span> </div>
                        <div class="collapse" id="category-more">
                            <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="IT-Software"> <label class="form-check-label" for="IT-Software"> Builder Floors </label> <span class="badge bg-light text-dark float-end">45</span> </div>
                            <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="HRRecruiter"> <label class="form-check-label" for="HRRecruiter"> Lands </label> <span class="badge bg-light text-dark float-end">34</span> </div>
                            <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="BPO"> <label class="form-check-label" for="BPO"> Plots </label> <span class="badge bg-light text-dark float-end">12</span> </div>
                            <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Sales"> <label class="form-check-label" for="Sales"> Shops </label> <span class="badge bg-light text-dark float-end">18</span> </div>
                            <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Teachers"> <label class="form-check-label" for="Teachers"> Offices </label> <span class="badge bg-light text-dark float-end">02</span> </div>
                            <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Insurance"> <label class="form-check-label" for="Insurance"> Farm Houses </label> <span class="badge bg-light text-dark float-end">15</span> </div>
                            <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Delivery"> <label class="form-check-label" for="Delivery"> Office Areas </label> <span class="badge bg-light text-dark float-end">32</span> </div>
                            <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Designer"> <label class="form-check-label" for="Designer"> Farms Property </label> <span class="badge bg-light text-dark float-end">23</span> </div>
                            <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Developer"> <label class="form-check-label" for="Developer"> Agriculture Lands </label> <span class="badge bg-light text-dark float-end">19</span> </div>
                        </div>
                        <a class="show-more-link" data-bs-toggle="collapse" href="#category-more" aria-expanded="false" aria-controls="category-more">Show More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Rating</h5>
                    </div>
                    <div class="card-body text-center">
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Five"> <label class="form-check-label" for="Five"> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> </label> </div>
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Four"> <label class="form-check-label" for="Four"> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-muted op-2"></i> </label> </div>
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Three"> <label class="form-check-label" for="Three"> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-muted op-2"></i> <i class="fas fa-star text-muted op-2"></i> </label> </div>
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Two"> <label class="form-check-label" for="Two"> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-muted op-2"></i> <i class="fas fa-star text-muted op-2"></i> <i class="fas fa-star text-muted op-2"></i> </label> </div>
                        <div class="form-check text-start"> <input class="form-check-input" type="checkbox" value="" id="one"> <label class="form-check-label" for="one"> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-muted op-2"></i> <i class="fas fa-star text-muted op-2"></i> <i class="fas fa-star text-muted op-2"></i> <i class="fas fa-star text-muted op-2"></i> </label> </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Price Range</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Posted Time</h5>
                    </div>
                    <div class="card-body text-center">
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Anytime"> <label class="form-check-label" for="Anytime"> Anytime </label> </div>
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Today"> <label class="form-check-label" for="Today"> Today </label> </div>
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="Yesterday"> <label class="form-check-label" for="Yesterday"> Yesterday </label> </div>
                        <div class="form-check mb-2 text-start"> <input class="form-check-input" type="checkbox" value="" id="days"> <label class="form-check-label" for="days"> 3Days ago </label> </div>
                        <div class="form-check mb-0 text-start"> <input class="form-check-input" type="checkbox" value="" id="week"> <label class="form-check-label" for="week"> One week ago </label> </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="card">
                    <div class="card-body py-3">
                        <div class="item2-gl">
                            <div class="item2-gl-nav d-block  d-sm-flex gap-2">
                                <h6 class="my-auto fw-medium mb-3 mb-sm-auto">Showing {{ $items->count() }} entries</h6>
                                <ul class="nav item2-gl-menu ms-auto my-auto" role="tablist">
                                    <li><a aria-label="anchor" href="#tab-11" class="active show" data-bs-toggle="tab" title="List style" aria-selected="true" role="tab"><i class="ti ti-list"></i></a></li>
                                    <li><a aria-label="anchor" href="#tab-12" data-bs-toggle="tab" title="Grid" aria-selected="false" tabindex="-1" role="tab"><i class="ti ti-layout-grid"></i></a></li>
                                </ul>
                                <div class="d-flex mt-3 mt-sm-0 choices-tab">
                                    <label class="me-2 my-auto">Sort By:</label>
                                    <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner">
                                            <select class="form-control choices__input" data-trigger="" hidden="" tabindex="-1" data-choice="active">
                                                <option value="1" data-custom-properties="[object Object]">Latest</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="1" data-custom-properties="[object Object]" aria-selected="true">Latest</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            <input type="search" name="search_terms" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="This is a placeholder set in the config" placeholder="Search Here">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--nlae-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="1" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Latest</div>
                                                <div id="choices--nlae-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="2" data-select-text="Press to select" data-choice-selectable="">Oldest</div>
                                                <div id="choices--nlae-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="5" data-select-text="Press to select" data-choice-selectable="">Price:Hight-to-Low</div>
                                                <div id="choices--nlae-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="3" data-select-text="Press to select" data-choice-selectable="">Price:Low-to-High</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-lg-0 bg-transparent border-0 shadow-none">
                    <div class="item2-gl">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-11" role="tabpanel">
                                @forelse($items as $key => $item)
                                <div class="card overflow-hidden">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="item-tabcard-img">
                                                    <div class="item-tabcard-imgs"> <a aria-label="anchor" href="{{ route('category.real.estate.detail', ['id' => $item->id, 'slug' => $item->slug]) }}"></a> <img src="{{ $item->images?->first()?->image_url ? url($item->images?->first()?->image_url) : '' }}" alt="img" class="cover-image rounded-1 w-100"> </div>
                                                    <div class="item-tabcard-icons"> <a aria-label="anchor" href="javascript:void(0);" class="item-tabcard-icons1 wishlist" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist" data-bs-placement="top"> <i class="fe fe-heart"></i> </a> </div>
                                                    <div class="item-tabcard-icons2"> <a aria-label="anchor" href="javascript:void(0);" class="item-tabcard-icons1"> New</a> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9 my-auto">
                                                <div class="item-tabcard">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <a href="{{ route('category.real.estate.detail', ['id' => $item->id, 'slug' => $item->slug]) }}" class="text-dark my-auto">
                                                            <h4 class="fw-medium mb-0">{{ $item->title }}</h4>
                                                        </a>
                                                        <div class="d-flex flex-wrap gap-1">
                                                            <div class="rating-stars star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                                                <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                                            </div>
                                                            (78)
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-1 flex-wrap">
                                                        <a href="javascript:void(0);">
                                                            <div class="pb-0 pt-0 me-3"> <i class="fe fe-grid me-2 d-inline-block text-muted" title="category"></i>{{ $item->typeDetail->value }} </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="pb-0 pt-0 me-3"> <i class="fe fe-map-pin me-2 d-inline-block text-muted"></i>{{ $item->location }} </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="pb-0 pt-0"> <i class="bi bi-plus-square-dotted me-2 d-inline-block text-muted" title="square feet"></i> {{ $item->buildup_area }} sqft </div>
                                                        </a>
                                                    </div>
                                                    <div class="d-flex gap-1 flex-wrap">
                                                        <a href="javascript:void(0);">
                                                            <div class="pb-0 pt-0 mt-2 mb-2 me-3"> <i class="fe fe-tag me-2 d-inline-block text-muted"></i>{{ $item->categoryDetail->value }} </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="pb-0 pt-0 mt-2 mb-2"> <i class="fe fe-calendar me-2 d-inline-block text-muted"></i>{{ $item->created_at->format('d M Y') }} </div>
                                                        </a>
                                                    </div>
                                                    <div class="d-flex gap-2 mt-2 align-items-end flex-wrap">
                                                        <h5 class="mb-0 text-pink"> ₹{{ number_format($item->price, 2), ',' }}</h5>
                                                        <div class="ms-auto d-flex gap-2 flex-wrap"> <a href="{{ route('category.real.estate.detail', ['id' => $item->id, 'slug' => $item->slug]) }}" class="btn btn-sm btn-primary"><i class="fe fe-eye me-2"></i> View Details</a> <a href="{{ route('contact') }}" class="btn btn-sm btn-secondary"><i class="fe fe-phone me-2"></i> Contact Us</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                @endforelse
                            </div>
                            <div class="tab-pane" id="tab-12" role="tabpanel">
                                <div class="row">
                                    @forelse($items as $key => $item)
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="card">
                                            <div class="card-body position-relative p-3">
                                                <div class="position-relative mb-3 overflow-hidden"> <a aria-label="anchor" href="{{ route('category.real.estate.detail', ['id' => $item->id, 'slug' => $item->slug]) }}"></a> <img src="{{ $item->images?->first()?->image_url ? url($item->images->first()->image_url) : '' }}" alt="img" class="cover-image w-100 h-100 rounded-1"> <span class="badge bg-secondary blog-badge text-primary">New</span> <span class="badge bg-pink blog-badge2">₹{{ number_format($item->price, 2), ',' }}</span> <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist" data-bs-placement="top" class="badge bg-black-2 blog-badge3"><i class="fa-regular fa-heart"></i></a> </div>
                                                <a href="{{ route('category.real.estate.detail', ['id' => $item->id, 'slug' => $item->slug]) }}" class="text-dark">
                                                    <h5 class="text-dark mb-1">{{ $item->title }}</h5>
                                                </a>
                                                <div class="d-flex flex-wrap align-items-center flex-wrap">
                                                    <div class="rating-stars star-rating" data-rating="4" style="width: 70px; height: 14px; background-size: 14px;">
                                                        <div class="star-value" style="background-size: 14px; width: 80%;"></div>
                                                    </div>
                                                    (78)
                                                </div>
                                                <div class="mt-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="pb-0 pt-0 mb-2"> <i class="fe fe-grid me-2 d-inline-block text-muted" title="category"></i>{{ $item->typeDetail->value }} </div>
                                                    </a>
                                                    <a href="javascript:void(0);">
                                                        <div class="pb-0 pt-0 mb-2"> <i class="fe fe-map-pin me-2 d-inline-block text-muted"></i>{{ $item->location }} </div>
                                                    </a>
                                                    <a href="javascript:void(0);">
                                                        <div class="pb-0 pt-0 mb-2"> <i class="bi bi-plus-square-dotted me-2 d-inline-block text-muted" title="square feet"></i> {{ $item->buildup_area }} sqft </div>
                                                    </a>
                                                    <a href="javascript:void(0);">
                                                        <div class="pb-0 pt-0 mb-2"> <i class="fe fe-tag me-2 d-inline-block text-muted"></i>{{ $item->categoryDetail->value }} </div>
                                                    </a>
                                                    <a href="javascript:void(0);">
                                                        <div class="pb-0 pt-0"> <i class="fe fe-calendar me-2 d-inline-block text-muted"></i>{{ $item->created_at->format('d M Y') }} </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-footer px-3"> <a href="{{ route('category.real.estate.detail', ['id' => $item->id, 'slug' => $item->slug]) }}" class="btn btn-primary w-100 btn-sm">View Details</a> </div>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                            <div class="mb-9">
                                <div class="float-end">
                                    <ul class="pagination ">
                                        {!! $items->withQueryString()->links('pagination::bootstrap-5') !!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')