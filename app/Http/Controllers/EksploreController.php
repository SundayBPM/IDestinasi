<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use App\Models\Wishlist;
use App\Models\Objek_Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EksploreController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $userId = Auth::id();

        $listdestinasi = Objek_Wisata::when($search, function ($query, $search) {
            return $query->where('nama_wisata', 'like', '%' . $search . '%')
                         ->orWhere('lokasi', 'like', '%' . $search . '%')
                         ->orWhere('deskripsi', 'like', '%' . $search . '%');
        })->with(['wishlist' => function($query) use ($userId) {
            $query->where('user_id', $userId);
        }])->get();

        $overalRatings = DB::table('sarans')
            ->select('id_objek_wisata', DB::raw('AVG(rating) as average_rating'))
            ->groupBy('id_objek_wisata')
            ->get();

        return view('eksplore-objek-wisata.index', compact('listdestinasi', 'overalRatings'));
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
