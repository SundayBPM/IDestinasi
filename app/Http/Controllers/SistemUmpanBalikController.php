<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembelian_tiket;

class SistemUmpanBalikController extends Controller
{
    public function index()
    {
        $list_destinasi = Pembelian_tiket::join('objek_wisatas', 'objek_wisatas.id', '=', 'pembelian_tikets.id_destinasi')
        ->get(['pembelian_tikets.id_pembelian', 'pembelian_tikets.id_users','objek_wisatas.nama_destinasi']);
        //dd($list_destinasi);
        return view('sistem-umpan-balik',compact(['list_destinasi']));

    }
}
