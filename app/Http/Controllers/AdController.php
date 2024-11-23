<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\AdImage;
use App\Models\Caste;
use App\Models\Category;
use App\Models\District;
use App\Models\Extra;
use App\Models\State;
use Exception;
use Illuminate\Http\Request;

class AdController extends Controller
{
    function viewFormRealEstate(Request $request)
    {
        $page_title = 'Post Free Ad';
        $category = Category::where('ad_post_route', $request->route()->getName())->first();
        $extras = Extra::where('category_id', $category->id)->get();
        $districts = District::all();
        $states = State::all();
        return view('ad.real_estate', compact('page_title', 'category', 'extras', 'districts', 'states'));
    }

    function saveAdRealEstate(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'price' => 'required',
            'state' => 'required',
            'district' => 'required',
        ]);
        try {
            $input = $request->except(array('images'));
            $input['slug'] = strtolower(str_replace(' ', '-', $request->title));
            $input['created_by'] = $request->user()->id;
            $input['updated_by'] = $request->user()->id;
            $input['status'] = 'pending';
            $ad = Ad::create($input);
            if ($request->file('images')):
                $images = $request->file('images');
                foreach ($images as $key => $item):
                    $this->saveImages($ad, $item);
                endforeach;
            endif;
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('index')->with("success", "Ad submitted successfully");
    }

    function viewFormMatrimonial(Request $request)
    {
        $page_title = 'Post Free Profile';
        $category = Category::where('ad_post_route', $request->route()->getName())->first();
        $extras = Extra::where('category_id', $category->id)->get();
        $districts = District::all();
        $states = State::all();
        $casts = Caste::all();
        return view('ad.matrimonial', compact('page_title', 'category', 'extras', 'districts', 'states', 'casts'));
    }

    function saveAdMatrimonial(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'height' => 'required',
            'religion' => 'required',
            'caste' => 'required',
            'qualification' => 'required',
            'occupation' => 'required',
            'income' => 'required',
            'contact_number_1' => 'required',
            'address' => 'required',
            'pincode' => 'required',
            'state' => 'required',
            'district' => 'required',
        ]);
        try {
            $input = $request->except(array('images', 'name'));
            $input['title'] = $request->name;
            $input['registration_id'] = uniqueRegistrationId();
            $input['slug'] = $input['registration_id'];
            $input['created_by'] = $request->user()->id;
            $input['updated_by'] = $request->user()->id;
            $input['status'] = 'pending';
            $ad = Ad::create($input);
            $path = 'ad-files/' . $ad->category_id . '/' . $ad->id;
            if ($request->file('images')):
                $type = 'img';
                $images = $request->file('images');
                foreach ($images as $key => $item):
                    $this->saveFiles($ad, $item, $path, $type, $col = null);
                endforeach;
            endif;
            if ($request->file('biodata')):
                $type = 'doc';
                $item = $request->file('biodata');
                $this->saveFiles($ad, $item, $path, $type, $col = 'biodata');
            endif;
            if ($request->file('horoscope')):
                $type = 'doc';
                $item = $request->file('horoscope');
                $this->saveFiles($ad, $item, $path, $type, $col = 'horoscope');
            endif;
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('index')->with("success", "Profile saved successfully");
    }

    function updateMatrimonial(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'height' => 'required',
            'religion' => 'required',
            'caste' => 'required',
            'qualification' => 'required',
            'occupation' => 'required',
            'income' => 'required',
            'contact_number_1' => 'required',
            'address' => 'required',
            'pincode' => 'required',
            'state' => 'required',
            'district' => 'required',
        ]);
        try {
            $input = $request->except(array('images', 'name'));
            $input['title'] = $request->name;
            $input['updated_by'] = $request->user()->id;
            $input['status'] = 'pending';
            $ad = Ad::findOrFail($id);
            $ad->update($input);
            $path = 'ad-files/' . $ad->category_id . '/' . $ad->id;
            if ($request->file('images')):
                $type = 'img';
                $images = $request->file('images');
                foreach ($images as $key => $item):
                    $this->saveFiles($ad, $item, $path, $type, $col = null);
                endforeach;
            endif;
            if ($request->file('biodata')):
                $type = 'doc';
                $item = $request->file('biodata');
                $this->saveFiles($ad, $item, $path, $type, $col = 'biodata');
            endif;
            if ($request->file('horoscope')):
                $type = 'doc';
                $item = $request->file('horoscope');
                $this->saveFiles($ad, $item, $path, $type, $col = 'horoscope');
            endif;
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('index')->with("success", "Profile updated successfully");
    }

    function editAd(string $id)
    {
        $ad = Ad::findOrFail(decrypt($id));
        $category = Category::find($ad->category_id);
        $extras = Extra::where('category_id', $category->id)->get();
        $districts = District::all();
        $states = State::all();
        $casts = Caste::all();
        $page_title = "Edit Ad";
        return view($category->ad_edit_view, compact('page_title', 'category', 'extras', 'districts', 'states', 'casts', 'ad'));
    }

    function saveFiles($ad, $item, $path, $type, $col)
    {
        $fname = time() . '_' . $item->getClientOriginalName();
        $item->storeAs($path, $fname, 'public');
        if ($type == 'img') {
            AdImage::insert([
                'ad_id' => $ad->id,
                'image_url' => '/storage/' . $path . '/' . $fname,
            ]);
        }
        if ($type == 'doc') {
            $url = '/storage/' . $path . '/' . $fname;
            Ad::where('id', $ad->id)->update([$col => $url]);
        }
    }
}
