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
<section class="section">
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
                                        {{ html()->radio('flexRadioDefault')->class('form-check-input')->attribute('id', 'flexRadioDefault_'.$item->id)->attribute('value', $item->id)->checked() }}
                                        <label class="form-check-label" for="flexRadioDefault_{{ $item->id }}"> {{ $item->value }} </label>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                            @include('ad.section.fields_re')
                            <div class="col-sm-6 mb-3">
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
                                <label class="mb-2 form-label">State</label>
                                {{ html()->select('state', $states->pluck('name', 'id'), old('state'))->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('state')
                                <small class="text-danger">{{ $errors->first('state') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="mb-2 form-label">District</label>
                                {{ html()->select('district', $districts->pluck('name', 'id'), old('district'))->class("form-control ms-0 select2")->placeholder("Select") }}
                                @error('district')
                                <small class="text-danger">{{ $errors->first('district') }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-12 mb-3">
                                <label class="mb-2 form-label">Images (Multiple selection enabled)</label>
                                {{ html()->file('images')->class("form-control ms-0")->multiple(); }}
                            </div>
                            <div class="col-sm-12 preview">

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