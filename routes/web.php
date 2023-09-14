<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DataCountController;
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
// Route::get('/anjay', function () {
//     return view('anjay');
// });

Route::get('/buku', [BukuController::class, 'index']);
// Route::get('/count', [DataCountController::class, 'index']);

