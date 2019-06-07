<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function web(Request $request)
    {
        $check = $request->input('n');
        if (!isset ($check) ) {
            return view('welcome');
        } else {
            return view('websites.home');
        }
        
    }
}
