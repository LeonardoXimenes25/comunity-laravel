<?php

use App\Http\Controllers\IdentidadeController;
use App\Http\Controllers\par_impar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('par_impar');
});


Route::get('/dashboard', [IdentidadeController::class,'dadusDatabase']);
