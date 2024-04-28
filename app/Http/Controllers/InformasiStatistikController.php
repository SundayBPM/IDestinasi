<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InformasiStatistikController extends Controller
{
    public function whoAmI() 
    {
        $userId = Auth::id();
        $data_user = User::where('id', $userId)->get();
        
        return view('informasi-statistik', compact(['data_user']));
    }
}
