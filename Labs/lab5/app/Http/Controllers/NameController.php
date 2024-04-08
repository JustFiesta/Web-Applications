<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function show(Request $request)
    {
        $name = $request->name;
        $arr = ['a', 'b', 'c', 'd', 'e'];
        return view('zad13', compact('name','arr'));
    }
}
