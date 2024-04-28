<?php

namespace App\Http\Controllers;

use App\Models\Objek_Wisata;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function whoAmI() 
    {
        $userId = Auth::id();
        $data_user = User::where('id', $userId)->get();
        
        return view('landingpage', compact(['data_user']));
    }
    
    public function index()
    {
        $saran_destinasi = Objek_Wisata::all();
        return view('landingpage', compact(['saran_destinasi']));

    }

        
}
