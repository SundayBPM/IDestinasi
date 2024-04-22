<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;
use App\Models\Pembelian_tiket;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SistemUmpanBalikController extends Controller
{
    public function index()
    {
        // Dapatkan ID pengguna yang sedang diautentikasi
        $userId = Auth::id();

        $list_destinasi = Pembelian_tiket::join('objek_wisatas', 'objek_wisatas.id', '=', 'pembelian_tikets.id_destinasi')
        ->where('pembelian_tikets.id_users', $userId)
        ->get([
            'pembelian_tikets.id as id_tiket',
            'pembelian_tikets.id_users',
            'objek_wisatas.id as id_objek_wisata',
            'objek_wisatas.nama_destinasi',
            'pembelian_tikets.jumlah_tiket',
            'pembelian_tikets.created_at'
        ]);
        // dd($list_destinasi);
        return view('sistem-umpan-balik',compact(['list_destinasi']));
        
    }
    
    public function create()
    {
        // dd($list_destinasi);
        return view('form-sistem-umpan-balik');
    }
    
    public function store(Request $request)
    {
        // dd($list_destinasi);
        dd($request->all());
        $request->validate([
            'rating' => 'required',
            'ulasan' => 'required',
            'kritik_saran' => 'required',
            'penilaian_atraksi' => 'required',
            'penilaian_aksesibilitas' => 'required',
            'penilaian_amenitas' => 'required',
            'penilaian_ansilari1' => 'required',
            'penilaian_ansilari2' => 'required',
            'penilaian_nps' => 'required'
        ]);

        Saran::create([
            'id_user' => Auth::id(),
            'id_objek_wisata' => $request-> id_objek_wisata,
            'id_tiket' => $request -> id_tiket,
            'rating' => $request->rate,
            'ulasan' => $request->ulasan,
            'kritik_saran' => $request->kritik_saran,
            'penilaian_atraksi' => $request->rate_atraksi,
            'penilaian_aksesibilitas' => $request->rate_aksesibilitas,
            'penilaian_amenitas' => $request->rate_amenitas,
            'penilaian_ansilari1' => $request->rate_ansilari,
            'penilaian_ansilari2' => $request->rate_ansilari_layanan,
            'penilaian_nps' => $request->rate_nps
        ]);
        return redirect('/ulasan');
    }
}
