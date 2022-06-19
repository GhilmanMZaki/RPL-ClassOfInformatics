<?php

namespace App\Http\Controllers\Mahasiswa;
use App\Http\Controllers\Controller;
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
