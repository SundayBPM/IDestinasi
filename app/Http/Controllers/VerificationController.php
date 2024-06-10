<?php

namespace App\Http\Controllers;

use App\Models\Objek_Wisata;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    // Menampilkan daftar objek wisata yang belum diverifikasi
    public function index()
    {
        $objekWisata = Objek_Wisata::whereNull('verifikasi')->get();
        return view('verification.index', compact('objekWisata'));
    }

    // Memverifikasi objek wisata
    public function verify($id)
    {
        $objekWisata = Objek_Wisata::findOrFail($id);
        $objekWisata->update(['verifikasi' => 'verified']);
        return redirect()->route('verification.index')->with('success', 'Objek wisata berhasil diverifikasi.');
    }

    // Membatalkan verifikasi objek wisata
    public function unverify($id)
    {
        $objekWisata = Objek_Wisata::findOrFail($id);
        $objekWisata->update(['verifikasi' => null]);
        return redirect()->route('verification.index')->with('success', 'Verifikasi objek wisata dibatalkan.');
    }
}
