<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryObjekWisata;

class HistoryController extends Controller
{
    /**
     * Display the history of visited tourism objects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua objek wisata yang ada di sejarah kunjungan pengguna
        $historyItems = HistoryObjekWisata::all();

        // Menampilkan halaman sejarah dengan data objek wisata yang sudah dikunjungi
        return view('history.index', compact('historyItems'));
    }

    /**
     * Remove the specified tourism object from history.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Menghapus objek wisata dari sejarah kunjungan
        $historyItem = TourismHistory::findOrFail($id);
        $historyItem->delete();

        // Mengarahkan kembali ke halaman sejarah dengan pesan sukses
        return redirect()->route('history.index')->with('success', 'Objek Wisata berhasil dihapus dari sejarah kunjungan');
    }

    /**
     * Handle the action to buy the tourism object again.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buyAgain($id)
    {
        // Logic untuk membeli objek wisata lagi, bisa berupa mengarahkan ke halaman pemesanan
        $historyItem = Riwayat::findOrFail($id);

        // Redirect ke halaman pemesanan 
        return redirect()->route('booking.create', ['id_objek_wisata' => $historyItem->id_objek_wisata]);
    }
}
