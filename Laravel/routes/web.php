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

Route::get('/', function () {
    return view('welcome');
});

// Route
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function (){
    return " Contact " ;
});

Route::get('blog', function (){
    return view('blog');
});
