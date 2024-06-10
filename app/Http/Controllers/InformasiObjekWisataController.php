<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiObjekWisata;
use App\Models\Objek_Wisata;

class InformasiObjekWisataController extends Controller
{
    public function index()
    {
        $objek_wisatas = Objek_Wisata::paginate(10);
        return view('informasi_objek_wisata.index', compact('objek_wisatas'));
    }
}

