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

// Redirect Routes
Route::get('/about', function () {
    // return view('about');
    return redirect('blog');
});

// Route::get('blog', function (){
//     return view('blog');
// });
// Route::view('/blog' , 'blog.index');

//View Routes
Route::view('/blog' , 'blog');

//Route Parameters
Route::get('/parameters/{roll}', function ($roll) {
    return " Your Roll Is $roll ";
});

//Named Routes
Route::get('Ja Icca ( Ata Url A Show Korbe )', function(){
    return view('nameRoute');
})->name('name-route');

//Route Encript
Route::get(md5('/route-encript'), function(){
    return view('pages.routeEncript');
})->name('url.encript');