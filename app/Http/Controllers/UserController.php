<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() {
        return view('components.auth.login');
    }

    public function postLogin(Request $request){
        if (Auth::attempt($request->only('username','password'))) {
            return redirect('/dashboard');
        }
        return redirect('/login')->with('gagal','Pastikan username dan password benar');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
