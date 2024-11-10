<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\District;
use App\Models\Extra;
use App\Models\State;
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
        //
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
}
