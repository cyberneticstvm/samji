@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner2" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">Recover Your Account</h1>
        </div>
    </div>
</section>
<section class="section position-relative bg-white">
    <div class="container">
        <div class="heading-section">
            <div class="text-center mb-2"> <span class="section-bg-title">Forgot Password</span> </div>
            <div class="heading-title">Recover your <span class="text-primary">Account</span></div>
        </div>
        {{ html()->form('POST', route('forgot.password.fetch'))->class('row justify-content-center align-items-center needs-validation')->open() }}
        <div class="col-xl-4 col-lg-6">
            <div class="card border mb-0">
                <div class="card-body p-sm-6">
                    <h4 class="mb-2">Email</h4>
                    <p class="mb-4 text-muted">Enter your registered email id to get password reset link.</p>
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
                            <div class="col-xl-12">
                                <div class="d-grid mb-3">
                                    {{ html()->submit('Get Link')->class('btn btn-submit btn-primary') }}
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