<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.locations.index', [
            'locations' => Location::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'image' => ['required']
        ]);

        $location = Location::create([
            'name' => $request->name
        ]);

        if ($request->hasFile('image')) {
            $name = $location->id . '-image-' . time() . '.' . $request->image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('location', $request->file('image'), $name);

            $location->update([
                'image' => $name
            ]);
        }

        if ($location) {
            return redirect()->route('admin.location.index')->with('success', 'Location added successfully!');
        }

        return back()->with('error', 'Something went wrong, please try again!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        if ($location->image) {
            Storage::disk('public')->delete('location/' . $location->image);
        }
        $location->delete();

        return back()->with('success', 'Location deleted successfully!');
    }
}
