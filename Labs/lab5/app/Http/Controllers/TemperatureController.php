<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function ctf($c = null)
    {
        dump('Przeliczanie stopni Celsjusza na Fahrenheita! ');

        if ($c == null)
        {
           dd('Nie podano warotości!!!');
        }

        $f = ($c * 9/5)+32;
        dump("$c *C to $f *F");

        return "$c *C to $f *F";
    }

    //dd - wyrzuca nam zmienne na stronie, przerywa dzialanie kodu
    //dump - taki print, nie przerywa dzialania kodu
}
