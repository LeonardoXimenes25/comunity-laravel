<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IdentidadeController extends Controller
{
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
}
