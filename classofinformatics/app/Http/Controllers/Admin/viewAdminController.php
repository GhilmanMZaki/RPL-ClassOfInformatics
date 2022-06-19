<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class viewAdminController extends Controller
{
    public function regrisMahasiswa(){
        return view('/regrisMahasiswa', [
            "title" => "login"
        ]);

    }
    public function home(){
        return view('/home', [
            "title" => "home"
        ]);

    }
}
