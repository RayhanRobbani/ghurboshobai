<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'resort_id' => ['nullable', 'integer'],
            'tour_id' => ['nullable', 'integer'],
            'cruise_id' => ['nullable', 'integer'],
            'transportation_id' => ['nullable', 'integer'],
            'date_from' => ['required', 'date'],
            'date_to' => ['required', 'date'],
            'number_of_guests' => ['required']
        ]);

        $booking = Booking::create([
            'user_id' => auth()->id(),
            'resort_id' => $request->resort_id,
            'tour_id' => $request->tour_id,
            'cruise_id' => $request->cruise_id,
            'transportation_id' => $request->transportation_id,
            'date_from' => $request->date_from,
            'date_to' => $request->date_to,
            'number_of_guests' => json_encode($request->number_of_guests)
        ]);

        if ($booking) {
            return redirect()->route('dashboard')->with('success', 'Cruise booked successfully!');
        }

        return back()->with('error', 'Something went wrong, please try again!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
