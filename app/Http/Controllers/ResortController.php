<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;

class ResortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('resorts.index', [
            'resorts' => Resort::latest()->get()
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
    public function show(Resort $resort)
    {
        return view('resorts.show', [
            'resort' => $resort
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resort $resort)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resort $resort)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resort $resort)
    {
        //
    }
}
