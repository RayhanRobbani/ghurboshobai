<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Transportation;
use Illuminate\Http\Request;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function locations()
    {
        return view('transportations.locations', [
            'locations' => Location::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Location $location)
    {
        return view('transportations.index', [
            'transportations' => Transportation::where('location_id', $location->id)->latest()->get()
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transportation $transportation)
    {
        return view('transportations.show', [
            'transportation' => $transportation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transportation $transportation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transportation $transportation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transportation $transportation)
    {
        //
    }
}
