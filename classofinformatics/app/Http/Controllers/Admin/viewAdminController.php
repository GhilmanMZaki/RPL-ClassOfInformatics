<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class viewAdminController extends Controller
{
    public function registMahasiswa(){
        return view('/registMahasiswa', [
            "title" => "registMahasiswa"
        ]);

    }
    public function registMentor(){
        return view('/registMentor', [
            "title" => "registMentor"
        ]);

    }
    public function home(){
        return view('/home', [
            "title" => "home"
        ]);

    }
    public function createMapel(){
        return view('/createMapel', [
            "title" => "mapel"
        ]);

    }
}
