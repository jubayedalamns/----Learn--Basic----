<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        // echo "Hello";
        $validated = $request->validate([
            'name'  => 'required | max:55',
            'email' => 'required | max:30',
            'number' => 'required | max:12',
            'password' => 'required | min:6 | max:12',
        ]);
        dd($request->all());
    }
}
