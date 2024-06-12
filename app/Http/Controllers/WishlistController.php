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
  
    public function add(Request $request)
    {
        $wishlist = new Wishlist();
        $wishlist->user_id = auth()->id();
        $wishlist->objek_wisata_id = $request->objek_wisata_id;
        $wishlist->save();

        return response()->json(['message' => 'Wishlist added successfully']);
    }

    public function remove(Request $request)
    {
        Wishlist::where('user_id', auth()->id())
            ->where('objek_wisata_id', $request->objek_wisata_id)
            ->delete();

        return response()->json(['message' => 'Wishlist removed successfully']);
    }
}
