<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Mahasiswa;
use App\Models\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registController extends Controller
{
    public function registMahasiswa(Request $request){
        $validation = $request->validate([
            'name' => 'required|max:255',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:8|max:255',
        ]);
        $validation['password'] = Hash::make($validation['password']);

        Mahasiswa::create($validation);
        Session::flash('flash_message', 'Registration successfull! Please login');
        return redirect('/login');
    }
    public function registMentor(Request $request){
        $validation = $request->validate([
            'name' => 'required|max:255',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:8|max:255',
        ]);
        $validation['password'] = Hash::make($validation['password']);

        Mentor::create($validation);
        Session::flash('flash_message', 'Registration successfull! Please login');
        return redirect('/login');
    }
}
