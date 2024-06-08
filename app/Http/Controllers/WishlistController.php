<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourismObject;

class WishlistController extends Controller
{
    /**
     * Display the wishlist of tourism objects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua objek wisata yang ada di wishlist pengguna
        // Misalnya, objek wisata ini diambil dari model `Wisata`
        $wishlistItems = Wisata::all();

        // Menampilkan halaman wishlist dengan data objek wisata
        return view('wishlist.index', compact('wishlistItems'));
    }

    /**
     * Show the form for creating a new tourism object in wishlist.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan form untuk menambahkan objek wisata ke wishlist
        return view('wishlist.create');
    }

    /**
     * Store a newly created tourism object in wishlist.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input dari pengguna
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image_url' => 'required|url',
        ]);

        // Menyimpan objek wisata baru ke database
        Wisata::create($request->all());

        // Mengarahkan kembali ke halaman wishlist dengan pesan sukses
        return redirect()->route('wishlist.index')->with('success', 'Objek Wisata berhasil ditambahkan ke wishlist');
    }
}
