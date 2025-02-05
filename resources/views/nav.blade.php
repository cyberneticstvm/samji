<!-- Start::Header -->
<div class="sticky listing-header-menu sticky-pin">
    <div class="head_menu_container">
        <header class="main-header" id="stickyHeader">
            <!-- Start::main-brand-header -->
            <div class="main-brand-header">
                <div class="container brand-header-container">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <!-- Start::header-element -->
                        <div class="header-element me-1">
                            <!-- Start::header-link --> <a aria-label="anchor" href="javascript:void(0);" class="sidemenu-toggle header-link" data-bs-toggle="sidebar"> <span class="open-toggle"> <i class="bi bi-text-indent-left header-link-icon"></i> </span> </a> <!-- End::header-link -->
                        </div>
                        <!-- End::header-element --> <a href="{{ route('index') }}" class="brand-main"> <img src="{{ asset('/assets/images/brand/logo.png') }}" alt="img" class="desktop-logo logo-dark"> <img src="{{ asset('/assets/images/brand/logo.png') }}" alt="img" class="mobile-logo mobile-dark mx-3"> <img src="{{ asset('/assets/images/brand/logo.png') }}" alt="img" class="desktop-logo logo-color"> <img src="{{ asset('/assets/images/brand/logo.png') }}" alt="img" class="mobile-logo mobile-color"> </a> <!-- Start::app-sidebar -->
                        <aside class="app-sidebar" id="sidebar">
                            <!-- Start::main-sidebar -->
                            <div class="main-sidebar" id="sidebar-scroll">
                                <!-- Start::nav -->
                                <nav class="main-menu-container nav nav-pills sub-open">
                                    <ul class="main-menu">
                                        <li class="slide"> <a href="{{ route('index') }}" class="side-menu__item"> <span class="side-menu__label">Home</span> </a> </li>
                                        <li class="slide"> <a href="{{ route('about') }}" class="side-menu__item"> <span class="side-menu__label">About</span> </a> </li>
                                        <!-- End::slide --> <!-- Start::slide -->
                                        <li class="slide has-sub">
                                            <a href="javascript:void(0);" class="side-menu__item"> <span class="side-menu__label">Categories</span> <i class="fe fe-chevron-down side-menu__angle"></i> </a>
                                            <ul class="slide-menu child1 mega-slide-menu mega-slide-menu2 mega-slide-menu-onefr border-0 container-lg active" data-popper-placement="bottom" style="position: relative; left: 0px; top: 0px; margin: 0px; box-sizing: border-box; transform: translate3d(476px, 758.4px, 0px); display: none;">
                                                <li class="mega-menu mega-menu-one row mx-0 p-0 overflow-hidden">
                                                    @forelse(categories() as $key => $category)
                                                    <div class="col-md-3 py-lg-1">
                                                        <ul>
                                                            <li>
                                                                <p class="mb-1 d-flex align-items-center menu-label"> <i class="{{ $category->icon }} text-primary rounded-circle bg-secondary menu-heading-icon"></i> <span class=""><a href="{{ $category->route ? route($category->route) : '#' }}">{{ $category->name }}</a></span> </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    @empty
                                                    @endforelse
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="slide"> <a href="{{ route('econtact') }}" class="side-menu__item"> <span class="side-menu__label">Emergency Contacts</span> </a> </li>
                                        <li class="slide"> <a href="{{ route('contact') }}" class="side-menu__item"> <span class="side-menu__label">Contact Us</span> </a> </li>
                                        @auth
                                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <span class="side-menu__label">{{ Auth::user()->name }}'s Profile </span> <i class="fe fe-chevron-down side-menu__angle"></i> </a>
                                            <ul class="slide-menu child1 without-icon active" data-popper-placement="bottom" style="position: relative; left: 0px; top: 0px; margin: 0px; box-sizing: border-box; transform: translate(900px, 56px); display: none;">
                                                <li class="slide"> <a href="{{ route('dashboard') }}" class="side-menu__item"> <i class="bi bi-star me-2 fs-10p menu-smalll-icon"></i> <span class="">Dashboard</span> </a> </li>
                                                <li class="slide"> <a href="{{ route('listing') }}" class="side-menu__item"> <i class="bi bi-star me-2 fs-10p menu-smalll-icon"></i> <span class="">Listings</span> </a> </li>
                                                <li class="slide"> <a href="{{ route('profile') }}" class="side-menu__item"> <i class="bi bi-star me-2 fs-10p menu-smalll-icon"></i> <span class="">Profile</span> </a> </li>
                                            </ul>
                                        </li>
                                        @endauth
                                    </ul>
                                </nav>
                                <!-- End::nav -->
                            </div>
                            <!-- End::main-sidebar -->
                        </aside>
                        <!-- End::app-sidebar -->
                        <ul class="mb-0 gap-2 list-unstyled d-xl-inline-flex flex-shrink-0 d-none">
                            <li aria-haspopup="true" class=""> <span>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal"><i class="fe fe-plus-circle me-2"></i>Post Free Ad</button>
                                </span> </li>
                            @auth
                            <li aria-haspopup="true" class=""> <span><a class="btn btn-secondary" href="{{ route('logout') }}"><i class="fe fe-log-in me-2"></i>Sign Out</a></span> </li>
                            @else
                            <li aria-haspopup="true" class=""> <span><a class="btn btn-secondary" href="{{ route('login') }}"><i class="fe fe-log-out me-2"></i>Sign In</a></span> </li>
                            @endauth
                        </ul>
                        <div class="d-xl-none d-flex gap-2">
                            <a class="btn btn-secondary" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#categoryModal">Post</a>
                            @auth
                            <a class="btn btn-secondary btn-icon" href="{{ route('logout') }}"><i class="fe fe-log-out"></i></a>
                            @else
                            <a class="btn btn-secondary btn-icon" href="{{ route('login') }}"><i class="fe fe-log-in"></i></a>
                            @endauth
                        </div>
                        <!-- <ul class="mb-0 gap-2 list-unstyled d-lg-none d-block">
                              <li aria-haspopup="true" class="">
                                  <span><a class="btn btn-primary btn-icon" href="ad-posts.html"><i
                                              class="fe fe-plus-circle me-2"></i></span>
                              </li>
                              </ul> -->
                    </div>
                </div>
            </div>
            <!-- End::main-brand-header -->
        </header>
    </div>
</div>
<div class="jumps-prevent" style="padding-top: 0px;"></div>
<!-- End::Header -->