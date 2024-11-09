@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner2" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">LOGIN</h1>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="heading-section">
            <div class="text-center mb-2"> <span class="section-bg-title">Login</span> </div>
            <div class="heading-title">Login to your <span class="text-primary">Account</span></div>
        </div>
        {{ html()->form('POST', route('login.auth'))->class('row justify-content-center align-items-center needs-validation')->open() }}
        <div class="col-xl-4 col-lg-6">
            <div class="card border mb-0">
                <div class="card-body p-sm-6">
                    <h4 class="mb-2">Login</h4>
                    <p class="mb-4 text-muted">Sign in to your account to continue.</p>
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Email <span class="text-danger ms-1">*</span></label>
                                        {{ html()->email('email', old('email'))->class("form-control ms-0")->placeholder("Email") }}
                                        @error('email')
                                        <small class="text-danger">{{ $errors->first('email') }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="mb-2 fw-500">Password <span class="text-danger ms-1">*</span></label>
                                    {{ html()->password('password', '')->class("form-control ms-0")->placeholder("******") }}
                                    @error('password')
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="d-flex mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" name="remember" type="checkbox" value="1" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Remember me </label>
                                    </div>
                                    <div class="ms-auto"> <a href="#" class="text-primary ms-1">Forgot Password?</a> </div>
                                </div>
                                <div class="d-grid mb-3">
                                    {{ html()->submit('Let Me In')->class('btn btn-submit btn-primary') }}
                                </div>
                                <div class="text-center">
                                    <p class="mb-0">Don't have an account yet? <a href="{{ route('registration') }}" class="text-primary ms-1">Create an Account</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ html()->form()->close() }}
    </div>
</section>
@endsection('content')