<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class par_impar extends Controller
{
    //
    public function check(Request $request):string {
        $number = $request -> input("numeru");

        if ($number %2 == 0){
            return view('par_impar', ['message' => 'Numeru Par']);
        } else {
            return view('par_impar', ['message' => 'Numeru Impar']);
        }
    }
}
