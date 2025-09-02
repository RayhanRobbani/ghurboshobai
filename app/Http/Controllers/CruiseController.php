<?php

namespace App\Http\Controllers;

use App\Models\Cruise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CruiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Cruise::query();

        if ($request->has('location_id')) {
            $query->where('location_id', $request->location_id);
        }

        return view('cruises.index', [
            'cruises' => $query->latest()->get()
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
    public function show(Cruise $cruise)
    {
        return view('cruises.show', [
            'cruise' => $cruise
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cruise $cruise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cruise $cruise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cruise $cruise)
    {
        //
    }
}
