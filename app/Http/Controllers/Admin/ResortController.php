<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resort;
use Illuminate\Http\Request;
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
        return view('admin.resorts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'location' => ['required', 'string'],
            'duration' => ['required', 'string'],
            'number_of_individuals' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'about' => ['required', 'string'],
            'included' => ['required', 'string'],
            'excluded' => ['required', 'string'],
            'image_primary' => ['required'],
            'image_secondary_1' => ['required'],
            'image_secondary_2' => ['required'],
            'image_secondary_3' => ['required']
        ]);

        $resort = Resort::create([
            'title' => $request->title,
            'location' => $request->location,
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
            'resort' => $resort
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resort $resort)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'location' => ['required', 'string'],
            'duration' => ['required', 'string'],
            'number_of_individuals' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'about' => ['required', 'string'],
            'included' => ['required', 'string'],
            'excluded' => ['required', 'string'],
            'image_primary' => ['nullable'],
            'image_secondary_1' => ['nullable'],
            'image_secondary_2' => ['nullable'],
            'image_secondary_3' => ['nullable']
        ]);

        $resort->update([
            'title' => $request->title,
            'location' => $request->location,
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

        $resort->delete();

        return back()->with('success', 'Resort deleted successfully!');
    }
}
