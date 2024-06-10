<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Models\Pembelian_tiket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $wishlists = Wishlist::where('user_id', $userId)
                             ->with('objekWisata')  // Menggunakan nama relasi yang benar
                             ->get();

        return view('wishlist', ['wishlists' => $wishlists]);
    }
}
