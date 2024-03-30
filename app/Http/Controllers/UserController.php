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
            $user = Auth::user(); // Mendapatkan informasi user yang sedang login

            // Cek role pengguna dan arahkan sesuai dengan rolenya
            if ($user->role === 'admin') {
                return redirect('/dashboard');
            } elseif ($user->role === 'siswa') {
                $student = siswaBaru::where('user_id', $user->id)->first(); // Ambil data siswa berdasarkan user_id
                if ($student) {
                    return redirect('/siswa/profile/'.$student->id); // Mengarahkan ke profil siswa berdasarkan ID siswa
                }
                // Jika tidak ada data siswa yang sesuai, bisa diarahkan ke halaman lain atau ditangani sesuai kebutuhan
                return redirect('/login')->with('gagal','Pastikan username dan password benar');
            }

            // Jika tidak ada peran yang sesuai, bisa diarahkan ke halaman lain atau ditangani sesuai kebutuhan
            return redirect('/login')->with('gagal','Pastikan username dan password benar');
        }
        return redirect('/login')->with('gagal','Pastikan username dan password benar');
    }


    public function logout(){
        Auth::logout();
        return redirect('/');
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
    public function profile() {
        // Mendapatkan user ID pengguna yang sedang login
        $userId = Auth::id();

        // Mendapatkan data siswa berdasarkan user ID pengguna yang sedang login
        $siswaBaru = SiswaBaru::where('user_id', $userId)->first();
        return view('components.siswa.profile', compact('siswaBaru'));
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('berhasil', 'Password berhasil diupload.');
    }
}
