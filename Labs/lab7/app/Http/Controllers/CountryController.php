<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        // Pobranie danych z formularza
        $data = $request->validated();
        // Dodanie nowego kraju do bazy danych
        Country::create($data);
        // Przekierowanie do listy krajów po udanym dodaniu
        return redirect()->route('countries.index')->with('success', 'Kraj został pomyślnie dodany.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return view('countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        // Pobranie danych z żądania
        $input = $request->validated();
        // Aktualizacja danych kraju w bazie danych
        $country->update($input);
        // Przekierowanie do listy krajów po udanej aktualizacji
        return redirect()->route('countries.index')->with('success', 'Dane kraju zostały pomyślnie zaktualizowane.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        try {
            // Sprawdź, czy kraj może być bezpiecznie usunięty
            // Tutaj możesz dodać odpowiednią logikę sprawdzającą powiązane rekordy

            // Jeśli kraj może być bezpiecznie usunięty, usuń go
            $country->delete();

            // Przekierowanie do listy krajów po udanym usunięciu
            return redirect()->route('countries.index')->with('success', 'Kraj został pomyślnie usunięty.');
        }
        catch (\Exception $e) {
            // Jeśli wystąpił błąd podczas usuwania kraju, wyświetl odpowiedni komunikat błędu
            return redirect()->route('countries.index')->with('error', 'Nie można usunąć kraju. Sprawdź, czy nie istnieją powiązane rekordy.');
        }

    }
}
