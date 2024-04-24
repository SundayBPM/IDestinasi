<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objek_Wisata;

class LandingPageController extends Controller
{
    public function index() 
    {
        $saran_destinasi = Objek_Wisata::all();
        return view('landingpage', compact(['saran_destinasi']));
    }
}
