<?php

use App\Http\Controllers\GrettingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RcController;
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

// Normal Route
Route::get('/', function () {
    return view('welcome');
});

//php artisan make:middleware CountryMiddleware
Route::get('/country', function(){
    return view('country');
})->middleware('myCountry');