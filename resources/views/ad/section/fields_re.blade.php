<div class="row handa">
    <div class="col-xl-2 mb-3">
        <label class="mb-2 form-label">No. of Beds</label>
        {{ html()->number('number_of_beds', old('number_of_beds'))->class("form-control ms-0")->placeholder("0") }}
    </div>
    <div class="col-xl-2 mb-3">
        <label class="mb-2 form-label">No. of Baths</label>
        {{ html()->number('number_of_baths', old('number_of_baths'))->class("form-control ms-0")->placeholder("0") }}
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
    <div class="col-xl-6 mb-3">
        <label class="mb-2 form-label">Project Name</label>
        {{ html()->text('project_name', old('project_name'))->class("form-control ms-0")->placeholder("Project Name") }}
    </div>
    <div class="col-xl-2 mb-3">
        <label class="mb-2 form-label">Price (₹)</label>
        {{ html()->number('price', old('price'), $min='1', '', $step=1)->class("form-control ms-0")->placeholder("0.00") }}
    </div>
</div>
<div class="row sando">

</div>
<div class="row landp">

</div>