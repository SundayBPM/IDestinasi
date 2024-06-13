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
        })->with(['wishlists' => function($query) use ($userId) {
            $query->where('user_id', $userId);
        }])->get();

        return view('eksplore-objek-wisata.index', compact('listdestinasi'));
    }

    public function add(Request $request)
    {
        Auth::user()->wishlists()->attach($request->objek_wisata_id);

        return response()->json(['success' => true]);
    }

    public function remove(Request $request)
    {
        Auth::user()->wishlists()->detach($request->objek_wisata_id);

        return response()->json(['success' => true]);
    }
}
    // public function add(Request $request)
    // {
    //     $wishlist = new Wishlist();
    //     $wishlist->user_id = auth()->id();
    //     $wishlist->objek_wisata_id = $request->objek_wisata_id;
    //     $wishlist->save();
    
    //     return response()->json(['message' => 'Wishlist added successfully']);
    // }
    
    // public function remove(Request $request)
    // {
    //     Wishlist::where('user_id', auth()->id())
    //         ->where('objek_wisata_id', $request->objek_wisata_id)
    //         ->delete();
    
    //     return response()->json(['message' => 'Wishlist removed successfully']);
    // }

    // public function add(Request $request)
    // {
    //     $wishlist = Wishlist::create([
    //         'user_id' => Auth::id(),
    //         'destinasi_id' => $request->destinasi_id,
    //     ]);

    //     return response()->json(['success' => true, 'wishlist_id' => $wishlist->id]);
    // }

    // public function remove(Request $request)
    // {
    //     Wishlist::where('user_id', Auth::id())
    //             ->where('destinasi_id', $request->destinasi_id)
    //             ->delete();

    //     return response()->json(['success' => true]);
    // }