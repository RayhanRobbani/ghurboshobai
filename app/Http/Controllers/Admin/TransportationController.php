<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Transportation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.transportations.index', [
            'transportations' => Transportation::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.transportations.create', [
            'locations' => Location::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'location_id' => ['required'],
            'duration' => ['required', 'string'],
            'number_of_individuals' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'about' => ['required', 'string'],
            'driver_name' => ['required', 'string'],
            'driver_contact' => ['required', 'string'],
            'image_primary' => ['required'],
            'image_secondary_1' => ['required'],
            'image_secondary_2' => ['required'],
            'image_secondary_3' => ['required']
        ]);

        $transportation = Transportation::create([
            'title' => $request->title,
            'location_id' => $request->location_id,
            'duration' => $request->duration,
            'number_of_individuals' => $request->number_of_individuals,
            'price' => $request->price,
            'about' => $request->about,
            'driver_name' => $request->driver_name,
            'driver_contact' => $request->driver_contact
        ]);

        if ($request->hasFile('image_primary')) {
            $name = $transportation->id . '-image_primary-' . time() . '.' . $request->image_primary->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('transportation', $request->file('image_primary'), $name);

            $transportation->update([
                'image_primary' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_1')) {
            $name = $transportation->id . '-image_secondary_1-' . time() . '.' . $request->image_secondary_1->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('transportation', $request->file('image_secondary_1'), $name);

            $transportation->update([
                'image_secondary_1' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_2')) {
            $name = $transportation->id . '-image_secondary_2-' . time() . '.' . $request->image_secondary_2->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('transportation', $request->file('image_secondary_2'), $name);

            $transportation->update([
                'image_secondary_2' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_3')) {
            $name = $transportation->id . '-image_secondary_3-' . time() . '.' . $request->image_secondary_3->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('transportation', $request->file('image_secondary_3'), $name);

            $transportation->update([
                'image_secondary_3' => $name
            ]);
        }

        if ($transportation) {
            return redirect()->route('admin.transportation.index')->with('success', 'Transportation added successfully!');
        }

        return back()->with('error', 'Something went wrong, please try again!');
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
    public function edit(Transportation $transportation)
    {
        return view('admin.transportations.edit', [
            'transportation' => $transportation,
            'locations' => Location::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transportation $transportation)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'location_id' => ['required'],
            'duration' => ['required', 'string'],
            'number_of_individuals' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'about' => ['required', 'string'],
            'driver_name' => ['required', 'string'],
            'driver_contact' => ['required', 'string'],
            'image_primary' => ['nullable'],
            'image_secondary_1' => ['nullable'],
            'image_secondary_2' => ['nullable'],
            'image_secondary_3' => ['nullable']
        ]);

        $transportation->update([
            'title' => $request->title,
            'location_id' => $request->location_id,
            'duration' => $request->duration,
            'number_of_individuals' => $request->number_of_individuals,
            'price' => $request->price,
            'about' => $request->about,
            'driver_name' => $request->driver_name,
            'driver_contact' => $request->driver_contact
        ]);

        if ($request->hasFile('image_primary')) {
            if ($transportation->image_primary) {
                Storage::disk('public')->delete('transportation/' . $transportation->image_primary);
            }

            $name = $transportation->id . '-image_primary-' . time() . '.' . $request->image_primary->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('transportation', $request->file('image_primary'), $name);

            $transportation->update([
                'image_primary' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_1')) {
            if ($transportation->image_secondary_1) {
                Storage::disk('public')->delete('transportation/' . $transportation->image_secondary_1);
            }

            $name = $transportation->id . '-image_secondary_1-' . time() . '.' . $request->image_secondary_1->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('transportation', $request->file('image_secondary_1'), $name);

            $transportation->update([
                'image_secondary_1' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_2')) {
            if ($transportation->image_secondary_2) {
                Storage::disk('public')->delete('transportation/' . $transportation->image_secondary_2);
            }

            $name = $transportation->id . '-image_secondary_2-' . time() . '.' . $request->image_secondary_2->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('transportation', $request->file('image_secondary_2'), $name);

            $transportation->update([
                'image_secondary_2' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_3')) {
            if ($transportation->image_secondary_3) {
                Storage::disk('public')->delete('transportation/' . $transportation->image_secondary_3);
            }

            $name = $transportation->id . '-image_secondary_3-' . time() . '.' . $request->image_secondary_3->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('transportation', $request->file('image_secondary_3'), $name);

            $transportation->update([
                'image_secondary_3' => $name
            ]);
        }

        return redirect()->route('admin.transportation.index')->with('success', 'Transportation updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transportation $transportation)
    {
        if ($transportation->image_primary) {
            Storage::disk('public')->delete('transportation/' . $transportation->image_primary);
        }

        if ($transportation->image_secondary_1) {
            Storage::disk('public')->delete('transportation/' . $transportation->image_secondary_1);
        }

        if ($transportation->image_secondary_2) {
            Storage::disk('public')->delete('transportation/' . $transportation->image_secondary_2);
        }

        if ($transportation->image_secondary_3) {
            Storage::disk('public')->delete('transportation/' . $transportation->image_secondary_3);
        }

        $transportation->delete();

        return back()->with('success', 'Transportation deleted successfully!');
    }
}
