<?php

use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemperatureController;
use illuminate\http\Request;

Route::get('/', function () {
    return 'Buenos noches!';
});

Route::get('/greeting', function () {
    return '<h1>Buenos noches!</h1>';
});

Route::get('/greeting/{name?}', function (?string $name = 'nieznajomy') {
    return '<h1>Buenos noches '.$name.'!</h1>';
});

Route::get('/ctf/{c?}', [TemperatureController::class, 'ctf']);

Route::get('/zad9', function (Request $request)
{
    $br = "<br>";

    // zwraca ścieżkę żądania HTTP.
    $r = $request->path() . $br .
    // zwraca pełny adres URL żądania HTTP.
    $request->url() . $br .
    //zwraca pełny adres URL żądania HTTP wraz z zapytaniami.
    $request->fullUrl() . $br .
    //wraca metodę HTTP używaną w żądaniu (np. GET, POST).
    $request->method(). $br .
    //Metoda isMethod() sprawdza, czy metoda żądania jest zgodna z podanym argumentem (w tym przypadku 'post').
    $request->isMethod('post'). $br .
    //Metoda header() zwraca wartość określonego nagłówka żądania HTTP (w tym przypadku 'User-Agent')
    $request->header('User-Agent'). $br .
    //zwraca adres IP klienta, który złożył żądanie HTTP
    $request->ip();
    return $r;
});

Route::get('/zad10', function (Request $request)
 {
    $br = "<br>";
    // Metoda all() zwraca tablicę z wszystkimi danymi żądania (w tym parametry z ciągu zapytania).
    $r = print_r($request->all(), true) . $br .
    //Metoda query() zwraca wartość parametru 'a' przekazanego w ciągu zapytania.
    $request->query('a') . $br .
    //Metoda query() zwraca wartość parametru 'b' przekazanego w ciągu zapytania. Jeśli parametr nie istnieje, zwraca 'brak b'
    $request->query('b', 'brak b') . $br .
    //Metoda query() zwraca tablicę wszystkich parametrów przekazanych w ciągu zapytania.
    print_r($request->query(), true) . $br .
    //Jest to skrócony sposób dostępu do parametru 'a' przekazanego w ciągu zapytania.
    $request->a . $br .
    //Metoda has() sprawdza, czy parametry 'a' i 'b' zostały przekazane w ciągu zapytania. Zwraca true, jeśli oba parametry istnieją
    $request->has(['a', 'b']) . $br .
    //Metoda filled() sprawdza, czy parametr 'a' został przekazany w ciągu zapytania i nie jest pusty. Zwraca true, jeśli parametr 'a' istnieje i ma wartoś
    $request->filled(['a']) . $br;
    return $r;
});



Route::get('/zad13', [NameController::class,'show']);

Route::get('/trips', function()
{
    return view('index');
});

