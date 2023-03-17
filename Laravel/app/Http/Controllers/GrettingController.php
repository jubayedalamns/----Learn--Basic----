<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrettingController extends Controller
{
    public function gretting($title){
        return view('gretting',[
            'grettingTitle' => $title
        ]);
    }
}
