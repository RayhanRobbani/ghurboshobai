<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard', [
            'tour_count' => Booking::whereNotNull('tour_id')->count(),
            'resort_count' => Booking::whereNotNull('resort_id')->count(),
            'cruise_count' => Booking::whereNotNull('cruise_id')->count(),
            'transportation_count' => Booking::whereNotNull('transportation_id')->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tour_booking()
    {
        return view('admin.tour_booking', [
            'tours' => Booking::whereNotNull('tour_id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function resort_booking()
    {
        return view('admin.resort_booking', [
            'resorts' => Booking::whereNotNull('resort_id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function cruise_booking()
    {
        return view('admin.cruise_booking', [
            'cruises' => Booking::whereNotNull('cruise_id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function transportation_booking()
    {
        return view('admin.transportation_booking', [
            'transportations' => Booking::whereNotNull('transportation_id')->get()
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
