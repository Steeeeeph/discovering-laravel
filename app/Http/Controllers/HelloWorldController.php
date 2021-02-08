<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    //
    public function show($name){
        return view('helloWorld', [
            'name' => $name,
        ]);
    }
}
