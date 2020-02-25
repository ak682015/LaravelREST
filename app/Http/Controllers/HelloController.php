<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        $coolString = "Cool Hello";

        return view('app', compact('coolString'));
    }

    public function about(){
        $coolString = "Cool Hello";

        return view('about', compact('coolString'));
    }

}
