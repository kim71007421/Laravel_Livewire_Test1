<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryCityController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/country-city', [CountryCityController::class, 'getCountryCity']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/user', [RegisterController::class, 'user']);