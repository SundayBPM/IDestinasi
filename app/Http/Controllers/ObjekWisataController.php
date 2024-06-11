<?php

namespace App\Http\Controllers;

use App\Models\Objek_Wisata;
use App\Models\Pembelian_tiket;
use App\Models\Wisatawan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObjekWisataController extends Controller
{
    public function show($id)
    {
        $objek_wisata = Objek_Wisata::query()
            ->with('timeline.detail', 'fasilitas')
            ->findOrFail($id);

        $total_timeline = count($objek_wisata->timeline);
        $detail_perjalanan = "$total_timeline Hari ".($total_timeline-1)." Malam";

        foreach (range(0, 5) as $item) {
            $tanggal = Carbon::now();
            $tanggal->add($item, 'days');

            $list_tanggal[] = $tanggal;
        }

        return view('objek-wisata.show', compact('objek_wisata', 'detail_perjalanan', 'list_tanggal'));
    }

    public function pembelian_tiket($id)
    {
        $objek_wisata = Objek_Wisata::query()
            ->with('timeline.detail', 'fasilitas')
            ->findOrFail($id);

        $jumlah_wisatawan = $objek_wisata->total_orang;

        return view('objek-wisata.pembayaran', compact('objek_wisata', 'jumlah_wisatawan'));
    }

    public function pembayaran_tiket($id, Request $request)
    {
        $objek_wisata = Objek_Wisata::findOrFail($id);

        DB::beginTransaction();
        try {
            $tiket = Pembelian_tiket::create([
                'id_users' => auth()->user()->id,
                'id_destinasi' => $id,
                'jumlah_tiket' => count($request->nama),
                'harga' => (int) str_replace(".", "", $objek_wisata->harga_tiket),
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
