<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\siswaBaru;
use App\Models\Periode;
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
            if (Auth::user()->role == 'admin') {
                return redirect()->intended('/periode');
            } elseif (Auth::user()->role == 'siswa') {
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
        $periodes = Periode::where('status_id', 1)->first();
        // Tanggal sekarang
        $now = now();

        // Jika periode ada dan tanggal pendaftaran belum berakhir
        $periodeAktif = null;
        if ($periodes && $periodes->tgl_berakhir >= $now) {
            $periodeAktif = $periodes;

            // Menghitung jumlah siswa baru yang mendaftar
            $jumlahSiswaBaru = siswaBaru::where('periode_id', $periodes->id)->count();

            // Menghitung sisa kuota pendaftar
            $kuotaPendaftar = $periodes->kuota_pendaftar;
            $sisaKuota = $kuotaPendaftar - $jumlahSiswaBaru;
        } else {
            $jumlahSiswaBaru = 0; // Jika periode tidak aktif, jumlah siswa baru dianggap 0
            $sisaKuota = 0; // Jika periode tidak aktif, sisa kuota dianggap 0
        }

        return view('components.auth.landing-page-register', compact('periodes', 'periodeAktif', 'jumlahSiswaBaru', 'sisaKuota'));
    }


    public function registerPost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'email|unique:users',
            'password'=>'required',
            'username'=>'required|unique:users',
            'tanggal_lahir'=>'required',
            'tempat_lahir'=>'required',
            'no_hp'=>'required',
        ],[
            'name.required'=>'Nama lengkap wajib diisi',
            'email.unique'=>'Email sudah digunakan',
            'email.email'=>'Silakan masukan email yang valid',
            'password.required'=>'Wajib wajib diisi',
            'username.required'=>'Username wajib diisi',
            'username.unique'=>'Username tidak tersedia',
            'tempat_lahir.required'=>'Tempat lahir harus diisi',
            'tanggal_lahir.required'=>'Tempat lahir harus diisi',
            'no_hp.required'=>'No HP harus diisi',
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
        $periodes = Periode::where('status_id', 1)->first();
        // Mendapatkan user ID pengguna yang sedang login
        $userId = Auth::id();

        // Mendapatkan data siswa berdasarkan user ID pengguna yang sedang login
        $siswaBaru = SiswaBaru::where('user_id', $userId)->first();
        return view('components.siswa.profile', compact('siswaBaru','periodes'));
    }

    public function password($id) {
        $user = User::findOrFail($id);
        return view('components.user.ubah-password', compact('user'));
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'new_password' =>'required|string|min:8|confirmed',
        ],[
            'new_password.required'=>'Password baru harus diisi',
            'new_password.min'=>'Password minimal 8 karakter',
            'new_password.confirmed'=>'Password konfirmasi harus diisi'
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('berhasil', 'Password berhasil diperbarui.');
    }

    public function index() {
        $user=User::all();
        return view('components.user.index', compact('user'));
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'new_password' =>'required|string|min:8|confirmed',
        ],[
            'new_password.required'=>'Password baru harus diisi',
            'new_password.min'=>'Password minimal 8 karakter',
            'new_password.confirmed'=>'Password konfirmasi harus diisi'
        ]);

        $user = User::findOrFail($id);
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password berhasil diupdate!');
    }
    public function delete($id){
        $user=User::find($id);
        $user->delete();
        return back();
    }
}
