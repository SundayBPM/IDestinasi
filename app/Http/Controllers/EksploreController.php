<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objek_Wisata;
use App\Models\Saran;
use Illuminate\Support\Facades\DB;

class EksploreController extends Controller
{
    public function index(Request $request)
    {
        // Ambil query pencarian dari input pengguna
        $search = $request->input('search');

        // Query untuk mendapatkan list destinasi, jika ada query pencarian, tambahkan ke kondisi
        $listdestinasi = Objek_Wisata::when($search, function ($query, $search) {
            return $query->where('nama_wisata', 'like', '%' . $search . '%')
                         ->orWhere('lokasi', 'like', '%' . $search . '%')
                         ->orWhere('deskripsi', 'like', '%' . $search . '%');
        })->get();

        // Mendapatkan rata-rata rating dari tabel sarans
        $overalRatings = DB::table('sarans')
            ->select('id_objek_wisata', DB::raw('AVG(rating) as average_rating'))
            ->groupBy('id_objek_wisata')
            ->get();

        // Kembalikan view dengan data destinasi dan overall ratings
        return view('eksplore-objek-wisata.index', compact('listdestinasi', 'overalRatings'));
    }
}
