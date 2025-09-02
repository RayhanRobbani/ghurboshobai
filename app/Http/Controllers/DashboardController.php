<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard', [
            'tour_count' => Booking::where('user_id', auth()->id())->whereNotNull('tour_id')->count(),
            'resort_count' => Booking::where('user_id', auth()->id())->whereNotNull('resort_id')->count(),
            'cruise_count' => Booking::where('user_id', auth()->id())->whereNotNull('cruise_id')->count(),
            'transportation_count' => Booking::where('user_id', auth()->id())->whereNotNull('transportation_id')->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tour_booking()
    {
        return view('tour_booking', [
            'tours' => Booking::where('user_id', auth()->id())->whereNotNull('tour_id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function resort_booking()
    {
        return view('resort_booking', [
            'resorts' => Booking::where('user_id', auth()->id())->whereNotNull('resort_id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function cruise_booking()
    {
        return view('cruise_booking', [
            'cruises' => Booking::where('user_id', auth()->id())->whereNotNull('cruise_id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function transportation_booking()
    {
        return view('transportation_booking', [
            'transportations' => Booking::where('user_id', auth()->id())->whereNotNull('transportation_id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function status_update(Booking $booking, $status)
    {
        $booking->update([
            'status' => $status
        ]);

        return redirect()->back()->with('success', 'Status updated successfully!');
    }
}
