<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saran;
use App\Models\Pembelian_tiket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        // Ambil ID destinasi yang dipilih dari permintaan, jika ada
        $selected_destinasi_id = request()->get('selected_destinasi_id');

        // Dapatkan ID pengguna yang sedang diautentikasi
        $userId = Auth::id();

        $list_destinasi = Pembelian_tiket::join('objek_wisatas', 'objek_wisatas.id', '=', 'pembelian_tikets.id_destinasi')
        ->where('pembelian_tikets.id_users', $userId)
        ->get([
            'pembelian_tikets.id as id_tiket',
            'pembelian_tikets.id_users',
            'objek_wisatas.id as id_objek_wisata',
            'objek_wisatas.nama_wisata',
            'pembelian_tikets.jumlah_tiket',
            'pembelian_tikets.created_at'
        ]);

        $overalRating = Saran::select('id_objek_wisata', DB::raw('AVG(rating) as average_rating'))
            ->groupBy('id_objek_wisata')
            ->get();
        
        // dd($list_destinasi);
        return view('wishlist',compact(['list_destinasi','selected_destinasi_id','overalRating']));
        
    }
}
