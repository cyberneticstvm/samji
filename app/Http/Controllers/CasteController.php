<?php

namespace App\Http\Controllers;

use App\Models\Caste;
use Illuminate\Http\Request;

class CasteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $castes = Caste::where('type', 'subcaste')->orderBy('name')->get();
        return view('caste.index', compact('castes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $religions = Caste::where('parent', 0)->pluck('name', 'id');
        $castes = Caste::where('type', 'caste')->pluck('name', 'id');
        return view('caste.create', compact('castes', 'religions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $input = $request->all();
        Caste::create($input);
        return redirect()->route('caste.register')->with("success", "Caste created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $caste = Caste::findOrFail(decrypt($id));
        $religions = Caste::where('parent', 0)->pluck('name', 'id');
        $castes = Caste::where('type', 'caste')->pluck('name', 'id');
        return view('caste.edit', compact('castes', 'religions', 'caste'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'parent' => 'required',
        ]);
        $input = $request->all();
        $cast = Caste::findOrFail(decrypt($id));
        $cast->update($input);
        return redirect()->route('caste.register')->with("success", "Caste updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Caste::findOrFail(decrypt($id))->delete();
        return redirect()->back()->with("success", "Caste deleted successfully!");
    }
}
