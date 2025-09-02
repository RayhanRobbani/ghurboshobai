<?php

namespace App\Http\Controllers\Admin;

use App\Models\Resort;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ResortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.resorts.index', [
            'resorts' => Resort::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resorts.create', [
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
            'included' => ['required', 'string'],
            'excluded' => ['required', 'string'],
            'image_primary' => ['required'],
            'image_secondary_1' => ['required'],
            'image_secondary_2' => ['required'],
            'image_secondary_3' => ['required'],
            'image_secondary_4' => ['nullable'],
            'image_secondary_5' => ['nullable'],
            'image_secondary_6' => ['nullable'],
            'image_secondary_7' => ['nullable'],
            'image_secondary_8' => ['nullable'],
            'image_secondary_9' => ['nullable'],
            'image_secondary_10' => ['nullable'],
            'image_secondary_11' => ['nullable'],
            'image_secondary_12' => ['nullable'],
            'image_secondary_13' => ['nullable'],
            'image_secondary_14' => ['nullable']
        ]);

        $resort = Resort::create([
            'title' => $request->title,
            'location_id' => $request->location_id,
            'duration' => $request->duration,
            'number_of_individuals' => $request->number_of_individuals,
            'price' => $request->price,
            'about' => $request->about,
            'included' => $request->included,
            'excluded' => $request->excluded
        ]);

        if ($request->hasFile('image_primary')) {
            $name = $resort->id . '-image_primary-' . time() . '.' . $request->image_primary->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_primary'), $name);

            $resort->update([
                'image_primary' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_1')) {
            $name = $resort->id . '-image_secondary_1-' . time() . '.' . $request->image_secondary_1->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_1'), $name);

            $resort->update([
                'image_secondary_1' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_2')) {
            $name = $resort->id . '-image_secondary_2-' . time() . '.' . $request->image_secondary_2->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_2'), $name);

            $resort->update([
                'image_secondary_2' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_3')) {
            $name = $resort->id . '-image_secondary_3-' . time() . '.' . $request->image_secondary_3->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_3'), $name);

            $resort->update([
                'image_secondary_3' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_4')) {
            $name = $resort->id . '-image_secondary_4-' . time() . '.' . $request->image_secondary_4->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_4'), $name);

            $resort->update([
                'image_secondary_4' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_5')) {
            $name = $resort->id . '-image_secondary_5-' . time() . '.' . $request->image_secondary_5->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_5'), $name);

            $resort->update([
                'image_secondary_5' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_6')) {
            $name = $resort->id . '-image_secondary_6-' . time() . '.' . $request->image_secondary_6->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_6'), $name);

            $resort->update([
                'image_secondary_6' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_7')) {
            $name = $resort->id . '-image_secondary_7-' . time() . '.' . $request->image_secondary_7->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_7'), $name);

            $resort->update([
                'image_secondary_7' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_8')) {
            $name = $resort->id . '-image_secondary_8-' . time() . '.' . $request->image_secondary_8->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_8'), $name);

            $resort->update([
                'image_secondary_8' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_9')) {
            $name = $resort->id . '-image_secondary_9-' . time() . '.' . $request->image_secondary_9->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_9'), $name);

            $resort->update([
                'image_secondary_9' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_10')) {
            $name = $resort->id . '-image_secondary_10-' . time() . '.' . $request->image_secondary_10->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_10'), $name);

            $resort->update([
                'image_secondary_10' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_11')) {
            $name = $resort->id . '-image_secondary_11-' . time() . '.' . $request->image_secondary_11->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_11'), $name);

            $resort->update([
                'image_secondary_11' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_12')) {
            $name = $resort->id . '-image_secondary_12-' . time() . '.' . $request->image_secondary_12->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_12'), $name);

            $resort->update([
                'image_secondary_12' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_13')) {
            $name = $resort->id . '-image_secondary_13-' . time() . '.' . $request->image_secondary_13->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_13'), $name);

            $resort->update([
                'image_secondary_13' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_14')) {
            $name = $resort->id . '-image_secondary_14-' . time() . '.' . $request->image_secondary_14->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_14'), $name);

            $resort->update([
                'image_secondary_14' => $name
            ]);
        }

        if ($resort) {
            return redirect()->route('admin.resort.index')->with('success', 'Resort added successfully!');
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
    public function edit(Resort $resort)
    {
        return view('admin.resorts.edit', [
            'resort' => $resort,
            'locations' => Location::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resort $resort)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'location_id' => ['required'],
            'duration' => ['required', 'string'],
            'number_of_individuals' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'about' => ['required', 'string'],
            'included' => ['required', 'string'],
            'excluded' => ['required', 'string'],
            'image_primary' => ['nullable'],
            'image_secondary_1' => ['nullable'],
            'image_secondary_2' => ['nullable'],
            'image_secondary_3' => ['nullable'],
            'image_secondary_4' => ['nullable'],
            'image_secondary_5' => ['nullable'],
            'image_secondary_6' => ['nullable'],
            'image_secondary_7' => ['nullable'],
            'image_secondary_8' => ['nullable'],
            'image_secondary_9' => ['nullable'],
            'image_secondary_10' => ['nullable'],
            'image_secondary_11' => ['nullable'],
            'image_secondary_12' => ['nullable'],
            'image_secondary_13' => ['nullable'],
            'image_secondary_14' => ['nullable']
        ]);

        $resort->update([
            'title' => $request->title,
            'location_id' => $request->location_id,
            'duration' => $request->duration,
            'number_of_individuals' => $request->number_of_individuals,
            'price' => $request->price,
            'about' => $request->about,
            'included' => $request->included,
            'excluded' => $request->excluded
        ]);

        if ($request->hasFile('image_primary')) {
            if ($resort->image_primary) {
                Storage::disk('public')->delete('resort/' . $resort->image_primary);
            }

            $name = $resort->id . '-image_primary-' . time() . '.' . $request->image_primary->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_primary'), $name);

            $resort->update([
                'image_primary' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_1')) {
            if ($resort->image_secondary_1) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_1);
            }

            $name = $resort->id . '-image_secondary_1-' . time() . '.' . $request->image_secondary_1->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_1'), $name);

            $resort->update([
                'image_secondary_1' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_2')) {
            if ($resort->image_secondary_2) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_2);
            }

            $name = $resort->id . '-image_secondary_2-' . time() . '.' . $request->image_secondary_2->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_2'), $name);

            $resort->update([
                'image_secondary_2' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_3')) {
            if ($resort->image_secondary_3) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_3);
            }

            $name = $resort->id . '-image_secondary_3-' . time() . '.' . $request->image_secondary_3->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_3'), $name);

            $resort->update([
                'image_secondary_3' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_4')) {
            if ($resort->image_secondary_4) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_4);
            }

            $name = $resort->id . '-image_secondary_4-' . time() . '.' . $request->image_secondary_4->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_4'), $name);

            $resort->update([
                'image_secondary_4' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_5')) {
            if ($resort->image_secondary_5) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_5);
            }

            $name = $resort->id . '-image_secondary_5-' . time() . '.' . $request->image_secondary_5->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_5'), $name);

            $resort->update([
                'image_secondary_5' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_6')) {
            if ($resort->image_secondary_6) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_6);
            }

            $name = $resort->id . '-image_secondary_6-' . time() . '.' . $request->image_secondary_6->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_6'), $name);

            $resort->update([
                'image_secondary_6' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_7')) {
            if ($resort->image_secondary_7) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_7);
            }

            $name = $resort->id . '-image_secondary_7-' . time() . '.' . $request->image_secondary_7->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_7'), $name);

            $resort->update([
                'image_secondary_7' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_8')) {
            if ($resort->image_secondary_8) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_8);
            }

            $name = $resort->id . '-image_secondary_8-' . time() . '.' . $request->image_secondary_8->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_8'), $name);

            $resort->update([
                'image_secondary_8' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_9')) {
            if ($resort->image_secondary_9) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_9);
            }

            $name = $resort->id . '-image_secondary_9-' . time() . '.' . $request->image_secondary_9->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_9'), $name);

            $resort->update([
                'image_secondary_9' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_10')) {
            if ($resort->image_secondary_10) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_10);
            }

            $name = $resort->id . '-image_secondary_10-' . time() . '.' . $request->image_secondary_10->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_10'), $name);

            $resort->update([
                'image_secondary_10' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_11')) {
            if ($resort->image_secondary_11) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_11);
            }

            $name = $resort->id . '-image_secondary_11-' . time() . '.' . $request->image_secondary_11->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_11'), $name);

            $resort->update([
                'image_secondary_11' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_12')) {
            if ($resort->image_secondary_12) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_12);
            }

            $name = $resort->id . '-image_secondary_12-' . time() . '.' . $request->image_secondary_12->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_12'), $name);

            $resort->update([
                'image_secondary_12' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_13')) {
            if ($resort->image_secondary_13) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_13);
            }

            $name = $resort->id . '-image_secondary_13-' . time() . '.' . $request->image_secondary_13->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_13'), $name);

            $resort->update([
                'image_secondary_13' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_14')) {
            if ($resort->image_secondary_14) {
                Storage::disk('public')->delete('resort/' . $resort->image_secondary_14);
            }

            $name = $resort->id . '-image_secondary_14-' . time() . '.' . $request->image_secondary_14->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('resort', $request->file('image_secondary_14'), $name);

            $resort->update([
                'image_secondary_14' => $name
            ]);
        }

        return redirect()->route('admin.resort.index')->with('success', 'Resort updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resort $resort)
    {
        if ($resort->image_primary) {
            Storage::disk('public')->delete('resort/' . $resort->image_primary);
        }

        if ($resort->image_secondary_1) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_1);
        }

        if ($resort->image_secondary_2) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_2);
        }

        if ($resort->image_secondary_3) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_3);
        }

        if ($resort->image_secondary_4) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_4);
        }

        if ($resort->image_secondary_5) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_5);
        }

        if ($resort->image_secondary_6) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_6);
        }

        if ($resort->image_secondary_7) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_7);
        }

        if ($resort->image_secondary_8) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_8);
        }

        if ($resort->image_secondary_9) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_9);
        }

        if ($resort->image_secondary_10) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_10);
        }

        if ($resort->image_secondary_11) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_11);
        }

        if ($resort->image_secondary_12) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_12);
        }

        if ($resort->image_secondary_13) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_13);
        }

        if ($resort->image_secondary_14) {
            Storage::disk('public')->delete('resort/' . $resort->image_secondary_14);
        }

        $resort->delete();

        return back()->with('success', 'Resort deleted successfully!');
    }
}
