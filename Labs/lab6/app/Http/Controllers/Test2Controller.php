<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test2Controller extends Controller
{
    public function renderView(Request $request){
        return view('test1');
    }
}

