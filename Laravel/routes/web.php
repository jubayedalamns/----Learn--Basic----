<?php

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

//create normal route
Route::get('/helloWorld',function(){
    return view('basic/view');
});

// create route with pass parameter
// Route::get('/user/{id}/{name}',function($userId,$userName){
//     return 'your user id is '.$userId . "your user name is ".$userName;
// });  // Show Error if i dont give id or name value


//create route with pass parameter
Route::get('/user/{id?}/{name?}',function($userId = "1",$userName="Jannatul Mawa"){
    return view('basic/viewWithValue',[
        'id' => $userId,
        'name' => $userName,
    ]);
});