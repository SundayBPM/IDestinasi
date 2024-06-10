<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Objek_Wisata;

class WishlistController extends Controller
// {
  
//     public function index()
//     {
//         $selected_user_id = request()->get('selected_user_id');

//         $userId = Auth::id();

//         $list_destinasi = Wishlist::join('objek_wisatas', 'objek_wisatas.id', '=', 'pembelian_tikets.id_destinasi')
//         ->where('pembelian_tikets.id_users', $userId)
//         ->get([
//             'pembelian_tikets.id as id_tiket',
//             'pembelian_tikets.id_users',
//             'objek_wisatas.id as id_objek_wisata',
//             'objek_wisatas.nama_wisata',
//             'pembelian_tikets.jumlah_tiket',
//             'pembelian_tikets.created_at'
//         ]);

//         $overalRating = Objek_Wisata::select('id_objek_wisata', DB::raw('AVG(rating) as average_rating'))
//             ->groupBy('id_objek_wisata')
//             ->get();
        
//         // dd($list_destinasi);
//         return view('wishlist',compact(['list_destinasi','selected_destinasi_id','overalRating']));

//     }
        
//     public function create(Request $request)
//     {
//             $destinasiId = $request->query('id_objek_wisata');
//             $destinasi = Objek_Wisata::find($OId);
//             // $datDestinasi = Objek_Wisata::where('id_destinasi')
//             return view('kelola-objek-wisata.create', ['destinasi' => $destinasi]);
//     }
        

// }



{
    public function index()
    {
        $wishlists = Wishlist::with('wishlist')->where('user_id', auth()->id())->get();
        return view('wishlist', compact('wishlists'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_objek_wisata' => 'required|exists:Objek_Wisata,id',
        ]);

        Wishlist::create([
            'user_id' => auth()->id(),
            'id_objek_wisata' => $request->id_objek_wisata,
        ]);

        return redirect()->route('wishlists.index')->with('success', 'Objek Wisata berhasil ditambahkan ke wishlist');
    }

    public function show(Wishlist $wishlists)
    {
        return redirect()->route('kelola-objek-wisata.index')->with('success', 'objek wisata berhasil tertampil');
    }
}
