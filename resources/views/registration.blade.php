@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner2" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">REGISTRATION</h1>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="heading-section">
            <div class="text-center mb-2"> <span class="section-bg-title">Register</span> </div>
            <div class="heading-title">User <span class="text-primary">Registration</span></div>
        </div>
        {{ html()->form('POST', route('registration.save'))->class('row justify-content-center align-items-center needs-validation')->open() }}
        <div class="col-xl-7 col-lg-9 mt-3">
            <div class="card border">
                <div class="card-body p-sm-6">
                    <h4 class="mb-2">Register</h4>
                    <p class="mb-4 text-muted">Register here to continue.</p>
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="mb-2 fw-500">Full Name<span class="text-danger ms-1">*</span></label>
                                    {{ html()->text('name', old('name'))->class("form-control ms-0")->placeholder("Full Name") }}
                                    @error('name')
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="mb-2 fw-500">Role <span class="text-danger ms-1">*</span></label>
                                    {{ html()->select('role', array('agent' => 'Agent', 'user' => 'User'), old('role'))->class("form-control ms-0")->placeholder("Select") }}
                                    @error('role')
                                    <small class="text-danger">{{ $errors->first('role') }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="mb-2 fw-500">Email <span class="text-danger ms-1">*</span></label>
                                    {{ html()->email('email', old('email'))->class("form-control ms-0")->placeholder("Email") }}
                                    @error('email')
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="mb-2 fw-500">Mobile <span class="text-danger ms-1">*</span></label>
                                {{ html()->text('mobile', old('mobile'))->class("form-control ms-0")->maxlength(10)->placeholder("Mobile") }}
                                @error('mobile')
                                <small class="text-danger">{{ $errors->first('mobile') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="mb-2 fw-500">Password <span class="text-danger ms-1">*</span></label>
                                    {{ html()->password('password', '')->class("form-control ms-0")->placeholder("******") }}
                                    @error('password')
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="mb-2 fw-500">Password Confirmation <span class="text-danger ms-1">*</span></label>
                                    {{ html()->password('password_confirmation', '')->class("form-control ms-0")->placeholder("******") }}
                                    @error('password_confirmation')
                                    <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-check mb-3">
                                    <input name="terms" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked">
                                    <label class="form-check-label tx-15" for="flexCheckChecked"> Agree Terms & Conditions </label>
                                    @error('terms')
                                    <small class="text-danger">{{ $errors->first('terms') }}</small>
                                    @enderror
                                </div>
                                <div class="d-grid mb-3">
                                    {{ html()->submit('Create an Account')->class('btn btn-submit btn-primary') }}
                                </div>
                                <div class="text-center">
                                    <p class="mb-0 tx-14">Already have an account ? <a href="{{ route('login') }}" class="text-primary ms-1">Login</a> </p>
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