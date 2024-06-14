<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Objek_Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Verifikasi_Destinasi extends Controller
{
    public function index()
    {
        $objekWisatas = Objek_Wisata::with('mengelola.user')->get();

        // Menghitung objek_wisatas dengan status IS NULL
        $countStatusNull = Objek_Wisata::whereNull('status')->count();
        $countStatusTerima = Objek_Wisata::where('status', 'terima')->count();
        $countStatusTolak = Objek_Wisata::where('status', 'tolak')->count();
        $countAll = DB::table('objek_wisatas')->count();

        return view('verification.verification', compact('objekWisatas', 'countStatusNull', 'countStatusTolak', 'countAll', 'countStatusTerima'));
    }

    public function update(Request $request, $id)
    {
        $objekWisata = Objek_Wisata::findOrFail($id);
        $objekWisata->status = $request->status;
        $objekWisata->save();

        return response()->json(['success' => true]);
    }

    public function filter(Request $request)
    {
        $filter = $request->input('filter');
        $status = $request->input('status');
        $objekWisatas = [];
    
        if ($filter === 'today') {
            $objekWisatas = Objek_Wisata::with('mengelola.user')->whereDate('created_at', Carbon::today())->get();
        } else if ($filter === 'this-week') {
            $objekWisatas = Objek_Wisata::with('mengelola.user')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        } else if ($filter === 'last-week') {
            $objekWisatas = Objek_Wisata::with('mengelola.user')->whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])->get();
        } else if ($filter === 'oldest') {
            $objekWisatas = Objek_Wisata::with('mengelola.user')->orderBy('created_at', 'asc')->get();
        } else if ($status === 'all') {
            $objekWisatas = Objek_Wisata::with('mengelola.user')->get();
        } else if ($status === 'terima') {
            $objekWisatas = Objek_Wisata::with('mengelola.user')->where('status', 'terima')->get();
        } else if ($status === 'tolak') {
            $objekWisatas = Objek_Wisata::with('mengelola.user')->where('status', 'tolak')->get();
        } else {
            $objekWisatas = Objek_Wisata::with('mengelola.user')->get(); // Default to all
        }
    
        return response()->json(['data' => $objekWisatas]);
    }

    public function show_data($id)
    {
        $data_objek_wisata = Objek_Wisata::find($id);
        return view('verification.data_pendaftar', ['data_objek_wisata' => $data_objek_wisata]);
    }
    
    
        
}
