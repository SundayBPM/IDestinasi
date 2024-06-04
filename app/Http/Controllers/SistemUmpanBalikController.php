<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use App\Models\Objek_Wisata;
use Illuminate\Http\Request;
use App\Models\Pembelian_tiket;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SistemUmpanBalikController extends Controller
{
    public function index()
    {
        // Ambil ID destinasi yang dipilih dari permintaan, jika ada
        $selected_destinasi_id = request()->get('selected_destinasi_id');

        // Dapatkan ID pengguna yang sedang diautentikasi
        $userId = Auth::id();

        $list_destinasi = Pembelian_tiket::join('objek_wisatas', 'objek_wisatas.id', '=', 'pembelian_tikets.id_destinasi')
        ->where('pembelian_tikets.id_users', $userId)
        ->get([
            'pembelian_tikets.id as id_tiket',
            'pembelian_tikets.id_users',
            'objek_wisatas.id as id_objek_wisata',
            'objek_wisatas.nama_wisata',
            'pembelian_tikets.jumlah_tiket',
            'pembelian_tikets.created_at'
        ]);

        $overalRating = Saran::select('id_objek_wisata', DB::raw('AVG(rating) as average_rating'))
            ->groupBy('id_objek_wisata')
            ->get();
        
        // dd($list_destinasi);
        return view('sistem-umpan-balik',compact(['list_destinasi','selected_destinasi_id','overalRating']));
        
    }
    
    public function create(Request $request)
    {
        $destinasiId = $request->query('id_destinasi');
        $destinasi = Pembelian_tiket::find($destinasiId);
        // $datDestinasi = Objek_Wisata::where('id_destinasi')
        return view('form-sistem-umpan-balik', ['destinasi' => $destinasi]);
    }
    
    public function store(Request $request)
    {
        // dd($list_destinasi);
        // dd($request->all());
        $request->validate([
            'rating' => 'required',
            'ulasan' => 'required',
            'kritik_saran' => 'required',
            'penilaian_atraksi' => 'required',
            'penilaian_aksesibilitas' => 'required',
            'penilaian_amenitas' => 'required',
            'penilaian_ansilari1' => 'required',
            'penilaian_ansilari2' => 'required',
            'penilaian_nps' => 'required'
        ]);

        Saran::create([
            'id_user' => Auth::id(),
            'id_objek_wisata' => $request-> id_objek_wisata,
            'id_pembelian_tiket' => $request -> id_pembelian_tiket,
            'rating' => $request->rating,
            'ulasan' => $request->ulasan,
            'kritik_saran' => $request->kritik_saran,
            'penilaian_atraksi' => $request->penilaian_atraksi,
            'penilaian_aksesibilitas' => $request->penilaian_aksesibilitas,
            'penilaian_amenitas' => $request->penilaian_amenitas,
            'penilaian_ansilari1' => $request->penilaian_ansilari1,
            'penilaian_ansilari2' => $request->penilaian_ansilari2,
            'penilaian_nps' => $request->penilaian_nps
        ]);
        return redirect('/ulasan');
    }

    public function display_ulasan(Request $request)
    {
        $destinasiId = $request->query('id_destinasi');
        // $destinasi = Saran::where('id_objek_wisata', $destinasiId)->get();
        $destinasi = Saran::where('id_objek_wisata', 2)
                ->with('user')
                ->paginate(10);
                
        $latest_review = Saran::where('id_objek_wisata', 2)
        ->orderBy('created_at', 'desc')
        ->with('user')
        ->limit(5)
        ->get();

        if ($request->ajax()) {
            return view('partials.ulasan_content', compact('destinasi'))->render();
        }

        return view('tempUlasan', [
                                'destinasi' => $destinasi,
                                'latest_review' => $latest_review]);
    }
    
}
