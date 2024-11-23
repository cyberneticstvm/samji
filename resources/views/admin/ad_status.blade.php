@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">Update Ad Status</h1>
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
    <div class="text-center"> <span class="section-bg-title">Update {{ $ad->title }}</span> </div>
    <div class="container">
        <div class="section-title center-block text-center mb-4">
            {{ html()->form('POST', route('ad.status.update', $ad->id))->class('row justify-content-center align-items-center needs-validation')->attribute('id', 'myForm')->open() }}
            <div class="col-xl-12 col-lg-12">
                <div class="card border mb-0">
                    <div class="card-body p-sm-6">
                        <div class="form-horizontal">
                            <div class="row">
                                <div class="col-sm-4 mb-3">
                                    <label for="status" class="form-label mb-2">Status <span class="text-danger ms-1">*</span></label>
                                    @error('status')
                                    <small class="text-danger">{{ $errors->first('status') }}</small>
                                    @enderror
                                    {{ html()->select('status', array('pending' => 'Pending', 'approved' => 'Approved', 'rejected' => 'Rejected'), $ad->status)->class("form-control ms-0")->placeholder("Select") }}
                                    {{ html()->submit('Update')->class('btn btn-submit btn-primary mt-3') }}
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