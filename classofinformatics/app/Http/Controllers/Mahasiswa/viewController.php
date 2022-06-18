<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function login(){
        return view('/login', [
            "title" => "login"
        ]);

    }
    public function home(){
        return view('/home', [
            "title" => "home"
        ]);

    }
}
