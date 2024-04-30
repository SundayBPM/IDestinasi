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
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'role' => 'required'
        ]);

        session(['email' => $request->input('email')]);
        session(['password' => Hash::make($request->password)]);
        session(['confirm_password' => $request->input('confirm_password')]);
        session(['role' => $request->input('role')]);
       return redirect()->route('registerStep2');
    }

    public function register2(){
        return view('Auth/register2');
    }
    public function processStep2(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'number_phone' => 'required',
            'place_birth' => 'required',
            'usia' => 'required',
            'gender' => 'required'
        ]);
        
        session(['fullname' => $request->input('fullname')]);
        session(['number_phone' => $request->input('number_phone')]);
        session(['place_birth' => $request->input('place_birth')]);
        session(['usia' => $request->input('usia')]);
        session(['gender' => $request->input('gender')]);
        
        return redirect()->route('registerStep3');
    }

    public function register3(){
        if(session('email') == null){
            return redirect('/register');
        }
        $user = User::where('email', session('email'))->first();
        if(!$user){
            $testing = User::create([
                'email' => session('email'),
                'password' => session('password'),
                'role' => session('role'),
                'name' => session('fullname'),
                'number_phone' => session('number_phone'),
                'place_birth' => session('place_birth'),
                'usia' => session('usia'),
                'gender' => session('gender')
            ]);

            session()->forget(['email', 'password', 'confirm_password', 'role', 'wisatawan', 'fullname', 'number_phone', 'place_birth', 'usia', 'gender']);
            
            return view('register3');
        }
        return redirect('/register')->with('status', 'failed')->with('message', 'Email sudah terdaftar');
    }
    public function processStep3(Request $request)
    {   
        return redirect('/login');      
    }

     public function cekLogin(Request $request){   
         $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
        if (Auth::guard('role, wisatawan')->attempt($credentials)) {
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
    
        return redirect('/');
    }
}