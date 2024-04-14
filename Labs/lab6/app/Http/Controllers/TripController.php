<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('trips.index', ['trips' => $trips]);
    }

    public function show($id)
    {
        try {
            $trip = Trip::findOrFail($id);
            return view('trips.show', ['trip' => $trip]);
        }
        catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }

    public function cheapestTrips()
    {
        // Pobranie 4 najtańszych wycieczek z bazy danych
        $cheapestTrips = Trip::orderBy('price')->take(4)->get();
        return view('trips.cheapest', ['cheapestTrips' => $cheapestTrips]);
    }

    public function randomTrips()
    {
        // Pobranie 4 losowych wycieczek z bazy danych
        $randomTrips = Trip::inRandomOrder()->take(4)->get();
        return view('trips.random', ['randomTrips' => $randomTrips]);
    }
}
