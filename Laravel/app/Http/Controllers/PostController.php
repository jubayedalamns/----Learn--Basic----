<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function love(){
        // return " Hello World ";
        return view('post');
    }
}
