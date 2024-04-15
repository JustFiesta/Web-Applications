<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Country;
use App\Http\Requests\StoreTripRequest;
use App\Http\Requests\UpdateTripRequest;
class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('trips.index', [
            'trips' => $trips,
            'randomTrips' => $trips->random(4),
        ]);
    }

    public function show($id)
    {
        return view('trips.show', [
            'trip' => Trip::findOrFail($id)
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $trip = Trip::findOrFail($id);
        $countries = Country::all();
        return view('trips.edit', compact('trip', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTripRequest $request, $id)
    {
        $trip = Trip::findOrFail($id);
        $trip->update($request->all());
        return redirect()->route('trips.index')->with('success', 'Trip updated successfully.');
    }
    
}
