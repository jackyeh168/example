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
            $obj = new \stdClass;
            $obj->input = 'INPUT DATA';
            $obj->param =  $this->getDBData();

            // Two ways to pass data to blade template
            // Now, we split the View and Data
            return view('websites.home', ['mytest' => 'TEST'])->with('obj', $obj);
        }
    }

    private function getDBData(){
        return json_encode(\DB::table('pages')->first()) ;
    }
}
