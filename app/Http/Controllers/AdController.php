<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\AdImage;
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
            $input['slug'] = strtolower(str_replace(' ', '-', $request->title));;
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
        $page_title = 'Post Free Ad';
        $category = Category::where('ad_post_route', $request->route()->getName())->first();
        return view('ad.matrimonial', compact('page_title', 'category'));
    }

    function saveAdMatrimonial(Request $request)
    {
        //
    }

    function saveImages($ad, $item)
    {
        $path = 'ad-images/' . $ad->category_id . '/' . $ad->id;
        $fname = time() . '_' . $item->getClientOriginalName();
        $item->storeAs($path, $fname, 'public');
        AdImage::insert([
            'ad_id' => $ad->id,
            'image_url' => '/storage/' . $path . '/' . $fname,
        ]);
    }
}
