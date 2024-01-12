<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\TemporadaController;
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

/*
    Route::get("/series",function(){
        return view("series/index");
});
*/

Route::get("/series/hola",function(){
    return view("series/hola");
});

Route::get("/series/adios",function(){
    return view("series/adios");
});

Route::get("/series",[SerieController::class,"index"]);
Route::get("/temporadas",[TemporadaController::class,"index"]);