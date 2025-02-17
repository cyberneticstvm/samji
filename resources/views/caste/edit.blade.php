@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">Update</h1>
        </div>
    </div> <!-- Shape Start --> <svg style="display:none;">
        <symbol id="svg-shape" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="var(--custom-white)" d="M0,96L1440,320L1440,320L0,320Z"></path>
        </symbol>
    </svg> <svg class="position-absolute w-100 svg-shape">
        <use xlink:href="#svg-shape"></use>
    </svg> <!--Shape End-->
</section>
<section class="section bg-white">
    <div class="container">
        <div class="heading-section">
            <div class="heading-title">Update <span class="text-primary">Caste / Subcaste</span></div>
        </div>
        {{ html()->form('POST', route('caste.update', encrypt($caste->id)))->class('row justify-content-center align-items-center needs-validation')->open() }}
        <div class="col-xl-12 col-lg-12">
            <div class="card border mb-0">
                <div class="card-body p-sm-6">
                    <div class="form-horizontal">
                        <input type="hidden" name="type" value="subcaste" />
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label for="caste" class="form-label mb-2">Caste <span class="text-danger ms-1">*</span></label>
                                {{ html()->select('parent', $castes, $caste->parent)->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('parent')
                                <small class="text-danger">{{ $errors->first('parent') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="mb-2 form-label">Subcast Name <span class="text-danger ms-1">*</span></label>
                                {{ html()->text('name', $caste->name)->class("form-control ms-0")->maxlength('50')->placeholder("Subcast Name") }}
                                @error('name')
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-3 text-end">
                                    {{ html()->submit('Update')->class('btn btn-submit btn-primary') }}
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