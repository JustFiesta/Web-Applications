<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Test2Controller;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', [Test2Controller::class,'renderView']);

Route::group(['prefix' => 'trips'], function () {
    Route::get('/', [TripController::class, 'index']);
    Route::get('/{id}', [TripController::class, 'show'])->name('trips.show');
});

Route::get('/cheapest', [TripController::class, 'cheapestTrips'])->name('trips.cheapest');
Route::get('/random', [TripController::class, 'randomTrips'])->name('trips.random');
