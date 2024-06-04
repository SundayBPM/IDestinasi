<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objek_Wisata;
use App\Models\Saran;
use Illuminate\Support\Facades\DB;

class EksploreController extends Controller
{
    public function index()
    {
        $listdestinasi = Objek_Wisata::all();
        $overalRatings = DB::table('sarans')
                    ->select('id_objek_wisata', DB::raw('AVG(rating) as average_rating'))
                    ->groupBy('id_objek_wisata')
                    ->get();
        return view('eksplore-objek-wisata\index', compact('listdestinasi', 'overalRatings'));


        $posts = Post::latest();

    if (request('search')) {
        $search = request('search');
        $posts->where(function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('body', 'like', '%' . $search . '%');
        });
    }

    return view('eksplore-objek-wisata.index', [
        'listdestinasi' => $listdestinasi,
        'overalRatings' => $overalRatings,
        'posts' => $posts->get()
    ]);
    }
    
}
