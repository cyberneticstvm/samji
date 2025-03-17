@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">{{ $category->name }}</h1>
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
            <div class="heading-title">Post your <span class="text-primary">Profile</span></div>
        </div>
        {{ html()->form('POST', route('post.ad.matrimonial.save'))->class('row justify-content-center align-items-center needs-validation')->attribute('id', 'myForm')->acceptsFiles()->open() }}
        <div class="col-xl-12 col-lg-12">
            <div class="card border mb-0">
                <div class="card-body p-sm-6">
                    <div class="form-horizontal">
                        <div class="row">
                            <input type="hidden" name="category_id" value="{{ $category->id }}" />
                            <div class="col-sm-4 mb-3">
                                <label class="mb-2 form-label">Full Name <span class="text-danger ms-1">*</span></label>
                                {{ html()->text('name', old('name'))->class("form-control ms-0")->maxlength('50')->placeholder("Full Name") }}
                                @error('name')
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-2 mb-3">
                                <label class="mb-2 form-label">Date of Birth <span class="text-danger ms-1">*</span></label>
                                {{ html()->date('dob', old('dob') ?? date('Y-m-d'))->class("form-control ms-0") }}
                                @error('dob')
                                <small class="text-danger">{{ $errors->first('dob') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-2 mb-3">
                                <label class="mb-2 form-label">Height in CM <span class="text-danger ms-1">*</span></label>
                                {{ html()->number('height', old('height'))->class("form-control ms-0")->placeholder("0") }}
                                @error('height')
                                <small class="text-danger">{{ $errors->first('height') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-2 mb-3">
                                <label for="religion" class="form-label mb-2">Religion <span class="text-danger ms-1">*</span></label>
                                {{ html()->select('religion', $casts->where('type', 'religion')->pluck('name', 'id'), old('religion'))->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('religion')
                                <small class="text-danger">{{ $errors->first('religion') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-2 mb-3">
                                <label for="caste" class="form-label mb-2">Caste <span class="text-danger ms-1">*</span></label>
                                {{ html()->select('caste', $casts->where('type', 'caste')->pluck('name', 'id'), old('caste'))->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('caste')
                                <small class="text-danger">{{ $errors->first('caste') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-2 mb-3">
                                <label for="subcaste" class="form-label mb-2">Subcaste</label>
                                {{ html()->select('subcaste', $casts->where('type', 'subcaste')->pluck('name', 'id'), old('subcaste'))->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('subcaste')
                                <small class="text-danger">{{ $errors->first('subcaste') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="Qualification" class="form-label mb-2">Qualification <span class="text-danger ms-1">*</span></label>
                                {{ html()->select('qualification', $extras->where('name', 'qualification')->pluck('value', 'id'), old('qualification'))->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('qualification')
                                <small class="text-danger">{{ $errors->first('qualification') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="Occupation" class="form-label mb-2">Occupation <span class="text-danger ms-1">*</span></label>
                                {{ html()->select('occupation', $extras->where('name', 'occupation')->pluck('value', 'id'), old('occupation'))->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('occupation')
                                <small class="text-danger">{{ $errors->first('occupation') }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label class="mb-2 form-label">Annual Income <span class="text-danger ms-1">*</span></label>
                                {{ html()->number('income', old('income'))->class("form-control ms-0")->placeholder("0.00") }}
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label class="mb-2 form-label">Contact Number 1 <span class="text-danger ms-1">*</span></label>
                                {{ html()->text('contact_number_1', old('contact_number_1'))->class("form-control ms-0")->maxlength(10)->placeholder("xxxxxxxxxx") }}
                                @error('contact_number_1')
                                <small class="text-danger">{{ $errors->first('contact_number_1') }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label class="mb-2 form-label">Contact Number 2</label>
                                {{ html()->text('contact_number_2', old('contact_number_2'))->class("form-control ms-0")->maxlength(10)->placeholder("xxxxxxxxxx") }}
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="mb-2 form-label">Address <span class="text-danger ms-1">*</span></label>
                                {{ html()->text('address', old('address'))->class("form-control ms-0")->placeholder("Address") }}
                                @error('address')
                                <small class="text-danger">{{ $errors->first('address') }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-4 mb-3">
                                <label class="mb-2 form-label">Location <span class="text-danger ms-1">*</span></label> <span class="text-primary small">(Pick a location from the list)</span>
                                {{ html()->text('choose_location', old('choose_location'))->class("form-control ms-0")->attribute('id', 'choose_location')->placeholder("Location") }}
                                @error('choose_location')
                                <small class="text-danger">{{ $errors->first('choose_location') }}</small>
                                @enderror
                                <input type="hidden" name="location_lat" id="location_lat" value="{{ old('location_lat') }}" />
                                <input type="hidden" name="location_lng" id="location_lng" value="{{ old('location_lng') }}" />
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="mb-2 form-label">Biodata </label><span class="text-primary small">(Allowed file types are .docx and .pdf)</span>
                                {{ html()->file('biodata')->class("form-control ms-0") }}
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="mb-2 form-label">Horoscope</label> <span class="text-primary small">(Allowed file types are .docx, .pdf, .jpeg, .jpg, .png, .webp)</span>
                                {{ html()->file('horoscope')->class("form-control ms-0") }}
                            </div>
                            <div class="col-sm-12 mb-3">
                                <label class="mb-2 form-label">Images </label><span class="text-primary small">(Multiple selection enabled. Recommended size is 950px width & 488px height with .webp type and up to 5 images less than 200kb each)</span>
                                {{ html()->file('images[]')->class("form-control ms-0 multi_img")->multiple()->required() }}
                            </div>
                            <div class="col-sm-12" id="multi_img">

                            </div>
                            <div class="col-xl-12 mt-5">
                                <div class="d-grid mb-3">
                                    {{ html()->submit('Post')->class('btn btn-submit btn-primary') }}
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