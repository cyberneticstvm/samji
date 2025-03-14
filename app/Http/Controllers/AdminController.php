<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()
    {
        return view('admin.dashboard');
    }

    function listing(Request $request)
    {
        $listings = Ad::leftJoin('users', 'ads.created_by', 'users.id')->when(!in_array($request->user()->role, array('admin')), function ($q) use ($request) {
            return $q->where('ads.created_by', $request->user()->id);
        })->when(in_array($request->user()->role, array('agent')), function ($q) use ($request) {
            return $q->where('ads.created_by', $request->user()->id)->orWhere('ads.created_by', $request->user()->id);
        })->select('ads.*')->withTrashed()->latest()->get();
        return view('admin.listing', compact('listings'));
    }

    function adStatus(string $id)
    {
        $ad = Ad::findOrFail(decrypt($id));
        return view('admin.ad_status', compact('ad'));
    }

    function adStatusUpdate(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required',
        ]);
        Ad::findOrFail($id)->update(['status' => $request->status]);
        return redirect()->route('listing')->with("success", "Ad status updated successfully!");
    }

    function deleteAd(Request $request, string $id)
    {
        Ad::findOrFail(decrypt($id))->delete();
        return redirect()->back()->with("success", "Ad deleted successfully!");
    }

    function profile()
    {
        return view('admin.profile');
    }
}
