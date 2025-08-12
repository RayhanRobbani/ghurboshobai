<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.tours.index', [
            'tours' => Tour::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tours.create');
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
            'tour_plan_day_1' => ['nullable', 'string'],
            'tour_plan_day_2' => ['nullable', 'string'],
            'tour_plan_day_3' => ['nullable', 'string'],
            'tour_plan_day_4' => ['nullable', 'string'],
            'tour_plan_day_5' => ['nullable', 'string'],
            'policy' => ['required', 'string'],
            'image_primary' => ['required'],
            'image_secondary_1' => ['required'],
            'image_secondary_2' => ['required'],
            'image_secondary_3' => ['required']
        ]);

        $tour = Tour::create([
            'title' => $request->title,
            'location' => $request->location,
            'duration' => $request->duration,
            'number_of_individuals' => $request->number_of_individuals,
            'price' => $request->price,
            'about' => $request->about,
            'included' => $request->included,
            'excluded' => $request->excluded,
            'tour_plan_day_1' => $request->tour_plan_day_1,
            'tour_plan_day_2' => $request->tour_plan_day_2,
            'tour_plan_day_3' => $request->tour_plan_day_3,
            'tour_plan_day_4' => $request->tour_plan_day_4,
            'tour_plan_day_5' => $request->tour_plan_day_5,
            'policy' => $request->policy
        ]);

        if ($request->hasFile('image_primary')) {
            $name = $tour->id . '-image_primary-' . time() . '.' . $request->image_primary->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('tour', $request->file('image_primary'), $name);

            $tour->update([
                'image_primary' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_1')) {
            $name = $tour->id . '-image_secondary_1-' . time() . '.' . $request->image_secondary_1->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('tour', $request->file('image_secondary_1'), $name);

            $tour->update([
                'image_secondary_1' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_2')) {
            $name = $tour->id . '-image_secondary_2-' . time() . '.' . $request->image_secondary_2->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('tour', $request->file('image_secondary_2'), $name);

            $tour->update([
                'image_secondary_2' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_3')) {
            $name = $tour->id . '-image_secondary_3-' . time() . '.' . $request->image_secondary_3->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('tour', $request->file('image_secondary_3'), $name);

            $tour->update([
                'image_secondary_3' => $name
            ]);
        }

        if ($tour) {
            return redirect()->route('admin.tour.index')->with('success', 'Tour added successfully!');
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
    public function edit(Tour $tour)
    {
        return view('admin.tours.edit', [
            'tour' => $tour
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
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
            'tour_plan_day_1' => ['nullable', 'string'],
            'tour_plan_day_2' => ['nullable', 'string'],
            'tour_plan_day_3' => ['nullable', 'string'],
            'tour_plan_day_4' => ['nullable', 'string'],
            'tour_plan_day_5' => ['nullable', 'string'],
            'policy' => ['required', 'string'],
            'image_primary' => ['nullable'],
            'image_secondary_1' => ['nullable'],
            'image_secondary_2' => ['nullable'],
            'image_secondary_3' => ['nullable']
        ]);

        $tour->update([
            'title' => $request->title,
            'location' => $request->location,
            'duration' => $request->duration,
            'number_of_individuals' => $request->number_of_individuals,
            'price' => $request->price,
            'about' => $request->about,
            'included' => $request->included,
            'excluded' => $request->excluded,
            'tour_plan_day_1' => $request->tour_plan_day_1,
            'tour_plan_day_2' => $request->tour_plan_day_2,
            'tour_plan_day_3' => $request->tour_plan_day_3,
            'tour_plan_day_4' => $request->tour_plan_day_4,
            'tour_plan_day_5' => $request->tour_plan_day_5,
            'policy' => $request->policy
        ]);

        if ($request->hasFile('image_primary')) {
            if ($tour->image_primary) {
                Storage::disk('public')->delete('tour/' . $tour->image_primary);
            }

            $name = $tour->id . '-image_primary-' . time() . '.' . $request->image_primary->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('tour', $request->file('image_primary'), $name);

            $tour->update([
                'image_primary' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_1')) {
            if ($tour->image_secondary_1) {
                Storage::disk('public')->delete('tour/' . $tour->image_secondary_1);
            }

            $name = $tour->id . '-image_secondary_1-' . time() . '.' . $request->image_secondary_1->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('tour', $request->file('image_secondary_1'), $name);

            $tour->update([
                'image_secondary_1' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_2')) {
            if ($tour->image_secondary_2) {
                Storage::disk('public')->delete('tour/' . $tour->image_secondary_2);
            }

            $name = $tour->id . '-image_secondary_2-' . time() . '.' . $request->image_secondary_2->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('tour', $request->file('image_secondary_2'), $name);

            $tour->update([
                'image_secondary_2' => $name
            ]);
        }

        if ($request->hasFile('image_secondary_3')) {
            if ($tour->image_secondary_3) {
                Storage::disk('public')->delete('tour/' . $tour->image_secondary_3);
            }

            $name = $tour->id . '-image_secondary_3-' . time() . '.' . $request->image_secondary_3->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('tour', $request->file('image_secondary_3'), $name);

            $tour->update([
                'image_secondary_3' => $name
            ]);
        }

        return redirect()->route('admin.tour.index')->with('success', 'Tour updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        if ($tour->image_primary) {
            Storage::disk('public')->delete('tour/' . $tour->image_primary);
        }

        if ($tour->image_secondary_1) {
            Storage::disk('public')->delete('tour/' . $tour->image_secondary_1);
        }

        if ($tour->image_secondary_2) {
            Storage::disk('public')->delete('tour/' . $tour->image_secondary_2);
        }

        if ($tour->image_secondary_3) {
            Storage::disk('public')->delete('tour/' . $tour->image_secondary_3);
        }

        $tour->delete();

        return back()->with('success', 'Tour deleted successfully!');
    }
}
