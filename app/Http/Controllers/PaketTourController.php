<?php

namespace App\Http\Controllers;

use App\Models\PaketTour;
use App\Models\Pembelian_tiket;
use App\Models\Wisatawan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketTourController extends Controller
{
    public function index()
    {
        $paket_tours = PaketTour::paginate(6);

        return view('paket-tour.index', compact('paket_tours'));
    }

    public function show($id)
    {
        $paket_tour = PaketTour::query()
            ->with('timeline.detail', 'fasilitas')
            ->findOrFail($id);

        $total_timeline = count($paket_tour->timeline);
        $detail_perjalanan = "$total_timeline Hari ".($total_timeline-1)." Malam";

        foreach (range(0, 5) as $item) {
            $tanggal = Carbon::now();
            $tanggal->add($item, 'days');

            $list_tanggal[] = $tanggal;
        }

        return view('paket-tour.show', compact('paket_tour', 'detail_perjalanan', 'list_tanggal'));
    }

    public function pembelian_tiket($id)
    {
        $paket_tour = PaketTour::query()
            ->with('timeline.detail', 'fasilitas')
            ->findOrFail($id);

        // $jumlah_wisatawan = $paket_tour->total_orang;
        $jumlah_wisatawan = 1;

        return view('paket-tour.pembayaran', compact('paket_tour', 'jumlah_wisatawan'));
    }

    public function pembayaran_tiket($id, Request $request)
    {
        $paket_tour = PaketTour::findOrFail($id);

        DB::beginTransaction();
        try {
            $tiket = Pembelian_tiket::create([
                'id_users' => auth()->user()->id,
                'id_destinasi' => $id,
                'jumlah_tiket' => count($request->nama),
                'harga' => (int) str_replace(".", "", $paket_tour->harga_tiket),
                'jenis_pembayaran' => $request->jenis_pembayaran,
                'kedatangan' => $request->tanggal
            ]);

            foreach ($request->nama as $key => $nama) {
                Wisatawan::create([
                    'tiket_id' => $tiket->id,
                    'nama' => $request->nama[$key],
                    'email' => $request->email[$key],
                    'no_hp' => $request->no_hp[$key],
                ]);
            }

            $tiket->update([
                'code' => "TIKET-".str_pad($tiket->id, 4, "0", STR_PAD_LEFT),
            ]);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }

        return redirect("/")->with('alert', "Pembayaran Berhasil dengan code tiket : $tiket->code");
    }
}
