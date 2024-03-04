<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class IdentidadeController extends Controller
{
    
    // static function
    function dadus(){

        return view('table', [
            
                'dadus' => [
                    
                    '0' => [
                    'naran' => 'Leonardo',
                    'tinan' => '20',
                    'hela_fatin' => 'Tasi Tolu'
                    ],
    
                
                    '1' => [
                    'naran' => 'Paul',
                    'tinan' => '17',
                    'hela_fatin' => 'Markoni'
                    ],
    
                
                    '2' => [
                    'naran' => 'Joao Soares',
                    'tinan' => '15',
                    'hela_fatin' => 'Fomentu'
                    ]
                ]]
                );
    }
    // end static function

    
    public function dadusDatabase(): Response 
    {
        $dadus = DB::table('identidade')->get(); // Fo sai database tomak

        return response()->view('admin.dashboard', ['dadus' => $dadus]);
    }
}
