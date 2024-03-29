<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class administratorController extends Controller
{
    public function verifikasi_objek_wisata(){
        $proses_verfikasi = DB::table('verifikasi')
                            ->where('status', 'Menunggu Verifikasi')
                            ->orderByDesc('verifikasi.created')
                            ->get();
        $update_verifikasi = 
    }

    

    }
    public function confirm_reservation(Request $request, $id){
        $confirm_reservation = Reservation::find($id);
        $booking_code = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        $confirm_reservation->update([
            'booking_code' => $booking_code,
            'duduk_kamar' => $request->duduk_kamar,
            'biaya' => $request->biaya,
            'status' => 'dikonfirmasi admin',
        ]);
        if($confirm_reservation){
            Session::flash('status', 'success');
            Session::flash('message', 'Reservasi berhasil dikonfirmasi');
            return redirect('/konfirmasi-reservasi');
        } else{
            Session::flash('status', 'failed');
            Session::flash('message', 'Reservasi gagal dikonfirmasi');
            return redirect('/konfirmasi-reservasi');
        }
    }
    public function daftar_pembayaran(){
        $daftar_pembayaran = Payment::all();
        return view('pages.admin.status_pembayaran', compact(['daftar_pembayaran']));
    }
    public function detail_pembayaran($id){
        $detail_pembayaran = Payment::find($id);
        return view('pages.admin.detail_pembayaran', compact(['detail_pembayaran']));
    }
    public function update_payment(Request $request, $id){
        $update_payment = Payment::find($id);
        $update_payment->update([
            'status_pembayaran' => $request->status_pembayaran,
        ]);
        if($update_payment){
            Session::flash('status', 'success');
            Session::flash('message', 'Status pembayaran berhasil diupdate');
            return redirect('/daftar-pembayaran');
        } else{
            Session::flash('status', 'failed');
            Session::flash('message', 'Status pembayaran gagal diupdate');
            return redirect('/daftar-pembayaran');
        }
    }
}
