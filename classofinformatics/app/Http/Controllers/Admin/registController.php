<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class registController extends Controller
{
    public function registMahasiswa(Request $request){
        $validation = $request->validate([
            'name'=>'required|string',
            'nim'=>'required',
            'role'=>'required',
            'email'=>'required|email:dns',
            'password'=>'required',
        ]);
        $validation['password'] = Hash::make($validation['password']);
        User::create($validation);
        return redirect('');
    }
    public function registMentor(Request $request){
        $validation = $request->validate([
            'name'=>'required|string',
            'nip'=>'required',
            'role'=>'required',
            'email'=>'required|email:dns',
            'password'=>'required',

        ]);
        $validation['password'] = Hash::make($validation['password']);

        User::create($validation);
        return redirect('/login');
    }
}
