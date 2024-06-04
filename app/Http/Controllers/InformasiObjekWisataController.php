<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiObjekWisata;


class InformasiObjekWisataController extends Controller
{
    public function show($id)
    {
        $wisata = InformasiObjekWisata::findOrFail($id);
        return view('informasi_objek_wisata.show', compact('wisata'));
    }
}
