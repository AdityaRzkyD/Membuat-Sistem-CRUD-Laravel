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
    return view('welcome');
});

Route::get('/BarangInput',[ControllerBarang::class, 'index']);
Route::post('/barang/totalharga',[ControllerBarang::class, 'store']);
Route::get('/barangupdate',[ControllerBarang::class, 'indexdua']);
Route::post('/barang/hasilupdate',[ControllerBarang::class, 'update']);