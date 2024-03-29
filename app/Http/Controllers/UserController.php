<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\siswaBaru;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function landing() {
        return view('components.auth.landing-page-register');
    }

    public function registerPost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8',
            'username'=>'required|unique:users'
        ],[
            'name.required'=>'Username wajib diisi',
            'email.required'=>'Email wajib diisi',
            'email.unique'=>'Email sudah digunakan',
            'email.email'=>'Silakan masukan email yang valid',
            'password.required'=>'Wajib wajib diisi',
            'password.max'=>'Password minimal 8 karakter',
            'username.required'=>'Username wajib diisi',
            'usesrname.unique'=>'Usesrname tidak tersedia'
        ]);

        $data=[
            'name'=>$request->name,
            'role'=>'siswa',
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>Hash::make($request->password)
        ];
        $user=User::create($data);
        $request->request->add(['user_id'=>$user->id]);
        siswaBaru::create($request->all());
        return back()->with('success','Data berhasil disimpan, silakan login');
    }
}
