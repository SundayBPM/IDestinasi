<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register1(){
        return view('register1');
    }
    // proses step 1
    public function processStep1(Request $request)
    {
        // Simpan data ke dalam sesi atau variabel sementara
        session(['Alamat Email' => $request->input('Alamat Email')]);
        session(['Kata Sandi' => $request->input('Kata Sandi')]);
        session(['Konfirmasi Sandi' => $request->input('Konfirmasi Sandi')]);
        session(['Pengelola objek wisata' => $request->input('Pengelola objek wisata')]);
        session(['Wisatawan' => $request->input('Wisatawan')]);

       return redirect('/register2');
    }

    public function register2(){
        return view('register2');
    }
    public function processStep2(Request $request)
    {
        // Simpan data ke dalam sesi atau variabel sementara
        session(['nama lengkap' => $request->input('nama lengkap')]);
        session(['nomor telepon' => $request->input('nomor telepon')]);
        session(['tempat tinggal' => $request->input('tempat tinggal')]);
        session(['usia' => $request->input('usia')]);
        session(['jenis kelamin' => $request->input('jenis kelamin')]);

        return redirect('/register3');
    }

    public function register3(){
        return view('register3');
    }
    public function processStep3(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'password' => 'confirmed'
        ]);

        // Simpan data ke dalam sesi atau variabel sementara
        session(['password' => Hash::make($request->password)]);

        $testing = User::create([
            'Alamat Email' => session('Alamat Email'),
            'Kata Sandi' => session('Kata Sandi'),
            'Konfirmasi Sandi' => session('Konfirmasi Sandi'),
            'Pengelola objek wisata' => session('Pengelola objek wisata'),
            'Wisatawan' => session('Wisatawan'),
            'Nama lengkap' => session('Nama lengkap'),
            'Nomor telepon' => session('Nomor telepon'),
            'tempat tinggal' => session('tempat tinggal'),
            'usia' => session('usia'),
            'jenis kelamin' => session('jenis kelamin')
        ]);

        // Hapus sesi atau variabel sementara setelah registrasi selesai
        session()->forget(['alamat email', 'kata sandi', 'konfirmasi sandi', 'pengelola objek wisata', 'wisatawan', 'nama lengkap', 'nomor telepon', 'tempat tinggal', 'usia', 'jenis kelamin']);

        return redirect('/login');      
    }

     public function cekLogin(Request $request){   
         $credentials = $request->validate([
            'alamat email' => ['required', 'alamat email'],
            'kata sandi' => ['required']
        ]);
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
        if (Auth::guard('pengelola objek wisata, wisatawan')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'proses login gagal');
        return redirect('/login');
    }   
    public function Logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}