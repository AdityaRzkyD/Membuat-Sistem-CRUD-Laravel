<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerBarang;

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
    return view('Barang');
});

Route::post('/barang/totalharga',[ControllerBarang::class, 'store']);
Route::get('/barang/Update/{id}',[ControllerBarang::class, 'edit']);
Route::put('/barang/hasil/{id}',[ControllerBarang::class, 'update']);
Route::get('/barang/delete/{id}',[ControllerBarang::class, 'destroy']);