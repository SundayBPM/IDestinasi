<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class administratorController extends Controller
{
    public function verifikasi_objek_wisata(){
        $proses_verfikasi = DB::table('verifikasi')
                            ->where('status', 'Menunggu Verifikasi')
                            ->orderByDesc('verifikasi.created')
                            ->get();
        $update_verifikasi = 
    }

}

    

  
   
  