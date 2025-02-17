@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">Create</h1>
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
            <div class="heading-title">Create <span class="text-primary">Religion / Caste / Subcaste</span></div>
        </div>
        {{ html()->form('POST', route('caste.save'))->class('row justify-content-center align-items-center needs-validation')->open() }}
        <div class="col-xl-12 col-lg-12">
            <div class="card border mb-0">
                <div class="card-body p-sm-6">
                    <div class="form-horizontal">
                        <div class="row">
                            <input type="hidden" name="type" value="religion" />
                            <input type="hidden" name="parent" value="0" />
                            <div class="col-sm-12 mb-3">
                                <label class="mb-2 form-label">Religion Name <span class="text-danger ms-1">*</span></label>
                                {{ html()->text('name', old('name'))->class("form-control ms-0")->maxlength('50')->placeholder("Religion Name") }}
                                @error('name')
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-3 text-end">
                                    {{ html()->submit('Save Religion')->class('btn btn-submit btn-primary') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ html()->form()->close() }}
        {{ html()->form('POST', route('caste.save'))->class('row justify-content-center align-items-center needs-validation')->open() }}
        <div class="col-xl-12 col-lg-12">
            <div class="card border mb-0">
                <div class="card-body p-sm-6">
                    <div class="form-horizontal">
                        <div class="row">
                            <input type="hidden" name="type" value="caste" />
                            <div class="col-sm-6 mb-3">
                                <label for="caste" class="form-label mb-2">Religion <span class="text-danger ms-1">*</span></label>
                                {{ html()->select('parent', $religions, old('parent'))->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('parent')
                                <small class="text-danger">{{ $errors->first('parent') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="mb-2 form-label">Caste Name <span class="text-danger ms-1">*</span></label>
                                {{ html()->text('name', old('name'))->class("form-control ms-0")->maxlength('50')->placeholder("Caste Name") }}
                                @error('name')
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-3 text-end">
                                    {{ html()->submit('Save Caste')->class('btn btn-submit btn-primary') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ html()->form()->close() }}
        {{ html()->form('POST', route('caste.save'))->class('row justify-content-center align-items-center needs-validation')->open() }}
        <div class="col-xl-12 col-lg-12">
            <div class="card border mb-0">
                <div class="card-body p-sm-6">
                    <div class="form-horizontal">
                        <div class="row">
                            <input type="hidden" name="type" value="subcaste" />
                            <div class="col-sm-6 mb-3">
                                <label for="caste" class="form-label mb-2">Caste <span class="text-danger ms-1">*</span></label>
                                {{ html()->select('parent', $castes, old('parent'))->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('parent')
                                <small class="text-danger">{{ $errors->first('parent') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="mb-2 form-label">Subcaste Name <span class="text-danger ms-1">*</span></label>
                                {{ html()->text('name', old('name'))->class("form-control ms-0")->maxlength('50')->placeholder("Subcaste Name") }}
                                @error('name')
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-3 text-end">
                                    {{ html()->submit('Save Subcaste')->class('btn btn-submit btn-primary') }}
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