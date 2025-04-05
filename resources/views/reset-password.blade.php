@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner2" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">Reset Your Account</h1>
        </div>
    </div>
</section>
<section class="section position-relative bg-white">
    <div class="container">
        <div class="heading-section">
            <div class="text-center mb-2"> <span class="section-bg-title">Reset Password</span> </div>
            <div class="heading-title">Reset your <span class="text-primary">Account Password</span></div>
        </div>
        {{ html()->form('POST', route('reset.password.update'))->class('row justify-content-center align-items-center needs-validation')->open() }}
        <div class="col-xl-4 col-lg-6">
            <div class="card border mb-0">
                <div class="card-body p-sm-6">
                    <h4 class="mb-2">Password</h4>
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Password <span class="text-danger ms-1">*</span></label>
                                        {{ html()->password('password')->class("form-control ms-0")->placeholder("******") }}
                                        @error('password')
                                        <small class="text-danger">{{ $errors->first('password') }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Password Confirmation<span class="text-danger ms-1">*</span></label>
                                        {{ html()->password('password_confirmation')->class("form-control ms-0")->placeholder("******") }}
                                        @error('password_confirmation')
                                        <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="d-grid mb-3">
                                    {{ html()->submit('Reset')->class('btn btn-submit btn-primary') }}
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