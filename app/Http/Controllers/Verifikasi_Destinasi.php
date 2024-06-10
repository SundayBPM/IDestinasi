<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objek_Wisata;


class Verifikasi_Destinasi extends Controller
{
    public function index()
    {
        // $objekWisatas = Objek_Wisata::all();

        // return view('verification.verification', compact('objekWisatas'));
        $objekWisatas = Objek_Wisata::with('mengelola.userMengelola')->get(); // Pastikan user terhubung dengan objek wisata

        return view('verification.verification', ['objekWisatas' => $objekWisatas]);
    }

    public function update(Request $request, $id)
    {
        $objekWisata = Objek_Wisata::findOrFail($id);
        $objekWisata->status = $request->status;
        $objekWisata->save();

        return response()->json(['success' => true]);
    }
}
