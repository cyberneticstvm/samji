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
            <div class="heading-title">Post your <span class="text-primary">Ad</span></div>
        </div>
        {{ html()->form('POST', route('post.ad.real.estate.save'))->class('row justify-content-center align-items-center needs-validation')->attribute('id', 'myForm')->acceptsFiles()->open() }}
        <div class="col-xl-12 col-lg-12">
            <div class="card border mb-0">
                <div class="card-body p-sm-6">
                    <div class="form-horizontal">
                        <div class="row">
                            <input type="hidden" name="category_id" value="{{ $category->id }}" />
                            <div class="col-sm-12 mb-3">
                                <label class="mb-2 form-label">Ad Title <span class="text-danger ms-1">*</span></label>
                                {{ html()->text('title', old('title'))->class("form-control ms-0")->maxlength('150')->placeholder("Ad Title") }}
                                @error('title')
                                <small class="text-danger">{{ $errors->first('title') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-12 mb-3">
                                <label class="mb-2 form-label">Ad Description <span class="text-danger ms-1">*</span></label>
                                {{ html()->textarea('description', old('description'))->class("form-control ms-0")->rows('5')->placeholder("Ad Description") }}
                                @error('description')
                                <small class="text-danger">{{ $errors->first('description') }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="AdType" class="form-label mb-3">Type</label>
                                {{ html()->select('type', $extras->where('name', 'type')->pluck('value', 'id'), old('type'))->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('type')
                                <small class="text-danger">{{ $errors->first('type') }}</small>
                                @enderror
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="AdType" class="form-label mb-3">Category</label>
                                <div class="d-md-flex">
                                    @forelse($extras->where('name', 'category') as $key => $item)
                                    <div class="form-check me-4">
                                        {{ html()->radio('category')->class('form-check-input')->attribute('id', 'flexRadioDefault_'.$item->id)->attribute('value', $item->id)->checked() }}
                                        <label class="form-check-label" for="flexRadioDefault_{{ $item->id }}"> {{ $item->value }} </label>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label class="mb-2 form-label">No. of Beds</label>
                                {{ html()->number('number_of_beds', old('number_of_beds'))->class("form-control ms-0")->placeholder("0") }}
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label class="mb-2 form-label">No. of Baths</label>
                                {{ html()->number('number_of_baths', old('number_of_baths'))->class("form-control ms-0")->placeholder("0") }}
                            </div>
                            <div class="col-xl-4 mb-3">
                                <label class="mb-2 form-label">No. of Washrooms </label><span class="text-primary small">(Applicable for Shop & Offices)</span>
                                {{ html()->number('number_of_washrooms', old('number_of_washrooms'))->class("form-control ms-0")->placeholder("0") }}
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label class="mb-2 form-label">Furnished</label>
                                {{ html()->select('furnished', $extras->where('name', 'furnish')->pluck('value', 'id'), old('furnished'))->class("form-control ms-0 select2")->placeholder("Select") }}
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label class="mb-2 form-label">Buildup Area (Sqft)</label>
                                {{ html()->number('buildup_area', old('buildup_area'))->class("form-control ms-0")->placeholder("0") }}
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label class="mb-2 form-label">Carpet Area (Sqft)</label>
                                {{ html()->number('carpet_area', old('carpet_area'))->class("form-control ms-0")->placeholder("0") }}
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label class="mb-2 form-label">Number of Floors</label>
                                {{ html()->number('number_of_floors', old('number_of_floors'))->class("form-control ms-0")->placeholder("0") }}
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label class="mb-2 form-label">Number of Car Parkings</label>
                                {{ html()->number('number_of_parkings', old('number_of_parkings'))->class("form-control ms-0")->placeholder("0") }}
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label class="mb-2 form-label">Facing</label>
                                {{ html()->select('facing', $extras->where('name', 'facing')->pluck('value', 'id'), old('facing'))->class("form-control ms-0 select2")->placeholder("Select") }}
                            </div>
                            <div class="col-xl-4 mb-3">
                                <label class="mb-2 form-label">Project Name</label>
                                {{ html()->text('project_name', old('project_name'))->class("form-control ms-0")->placeholder("Project Name") }}
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label class="mb-2 form-label">Price (₹)</label>
                                {{ html()->number('price', old('price'), $min='1', '', $step=1)->class("form-control ms-0")->placeholder("0.00") }}
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="mb-2 form-label">Location</label>
                                {{ html()->text('location', old('location'))->class("form-control ms-0")->maxlength('150')->placeholder("Location") }}
                                @error('location')
                                <small class="text-danger">{{ $errors->first('location') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="mb-2 form-label">Address</label>
                                {{ html()->text('address', old('address'))->class("form-control ms-0")->maxlength('250')->placeholder("Address") }}
                                @error('address')
                                <small class="text-danger">{{ $errors->first('address') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="mb-2 form-label">State <span class="text-danger ms-1">*</span></label>
                                {{ html()->select('state', $states->pluck('name', 'id'), old('state'))->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('state')
                                <small class="text-danger">{{ $errors->first('state') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="mb-2 form-label">District <span class="text-danger ms-1">*</span></label>
                                {{ html()->select('district', $districts->pluck('name', 'id'), old('district'))->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('district')
                                <small class="text-danger">{{ $errors->first('district') }}</small>
                                @enderror
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col-xl-12 mb-3">
                                    <span class="text-primary">Applicable for Land & plots</span>
                                </div>
                                <div class="col-xl-2 mb-3">
                                    <label class="mb-2 form-label">Plot Area </label>
                                    {{ html()->number('plot_area', old('plot_area'))->class("form-control ms-0")->placeholder("0") }}
                                </div>
                                <div class="col-xl-2 mb-3">
                                    <label class="mb-2 form-label">Length</label>
                                    {{ html()->number('length', old('length'))->class("form-control ms-0")->placeholder("0") }}
                                </div>
                                <div class="col-xl-2 mb-3">
                                    <label class="mb-2 form-label">Breadth</label>
                                    {{ html()->number('breadth', old('breadth'))->class("form-control ms-0")->placeholder("0") }}
                                </div>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <label class="mb-2 form-label">Images </label><span class="text-primary small">(Multiple selection enabled. Recommended size is 950px width & 488px height with .webp type and up to 10 images less than 200kb each)</span>
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