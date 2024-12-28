<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Extra;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CategoryController extends Controller
{
    function getListing($id)
    {
        return Ad::where('category_id', $id)->where('status', 'approved')->orderByDesc('id')->paginate(10);
    }

    function publicInfo(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        return view('category.public_info', compact('page_title', 'category'));
    }

    function realEstate(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        $items = $this->getListing($category->id);
        return view('category.real_estate', compact('page_title', 'category', 'items'));
    }

    function realEstateDetail(string $id, string $slug)
    {
        $ad = Ad::findOrFail($id);
        $extras = Extra::where('category_id', 2)->get();
        return view('category.real_estate_detail', compact('ad', 'extras'));
    }

    function matrimonial(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        $items = $this->getListing($category->id);
        return view('category.matrimonial', compact('page_title', 'category', 'items'));
    }

    function matrimonialDetail(string $id, string $slug)
    {
        $ad = Ad::findOrFail($id);
        $extras = Extra::where('category_id', 3)->get();
        return view('category.matrimonial_detail', compact('ad', 'extras'));
    }

    function vehicle(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        return view('category.vehicle', compact('page_title', 'category'));
    }

    function education(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        return view('category.education', compact('page_title', 'category'));
    }

    function tourTravel(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        return view('category.tour_and_travel', compact('page_title', 'category'));
    }

    function hotelRestaurant(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        return view('category.hotel_and_restaurant', compact('page_title', 'category'));
    }

    function shopping(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        return view('category.shopping', compact('page_title', 'category'));
    }

    function professional(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        return view('category.professional', compact('page_title', 'category'));
    }

    function job(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        return view('category.job', compact('page_title', 'category'));
    }

    function construction(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        return view('category.construction', compact('page_title', 'category'));
    }

    function healthHospital(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        return view('category.health_and_hospital', compact('page_title', 'category'));
    }

    function service(Request $request)
    {
        $page_title = 'Samji Web Portal';
        $category = Category::where('route', $request->route()->getName())->first();
        return view('category.service', compact('page_title', 'category'));
    }
}
