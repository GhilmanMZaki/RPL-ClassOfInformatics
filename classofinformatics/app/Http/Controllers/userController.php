<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function login(Request $request){
        $validation=$request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);
        if (Auth::attempt($validation)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }
        return back()->with('loginError','Email or password must be incorrect!');
    }
}
