<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Saran;
use App\Models\Mengelola;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Pembelian_tiket;
use App\Charts\ObjekWisataChart;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use marineusde\LarapexCharts\Facades\LarapexChart;

class InformasiStatistikController extends Controller
{
    public function InfoPenjualan() 
    {
        $userId = Auth::id();
        $data_user = User::where('id', $userId)->get();

        $id_pengelola = Mengelola::where('user_id', $userId)->pluck('objek_wisata_id')->first();
        $overalRating = Saran::where('id_objek_wisata', $id_pengelola)->avg('rating');
        $nps_rating_avg = Saran::where('id_objek_wisata', $id_pengelola)->avg('penilaian_nps');
        $nps_rating_avg = number_format($nps_rating_avg, 2);

        $nps_rating = Saran::where('id_objek_wisata', $id_pengelola)->pluck('penilaian_nps');        
        $frekuensi_nps = $nps_rating->countBy(function ($item) {
            return $item;
        });
        
        $nps_labels = [];
        $nps_data = [];

        foreach ($frekuensi_nps as $nilai => $frekuensi) {
            $nps_labels[] = $nilai;
            $nps_data[] = $frekuensi;
        }
        
        $data_nps = [
            'nps_labels' => $nps_labels,
            'nps_data' => $nps_data,
        ];


        $amenitas_rating = Saran::where('id_objek_wisata', $id_pengelola)->avg('penilaian_amenitas');
        $ansilari1_rating = Saran::where('id_objek_wisata', $id_pengelola)->avg('penilaian_ansilari1');
        $ansilari2_rating = Saran::where('id_objek_wisata', $id_pengelola)->avg('penilaian_ansilari2');
        $aksesibilitas_rating = Saran::where('id_objek_wisata', $id_pengelola)->avg('penilaian_aksesibilitas');
        $atraksi_rating = Saran::where('id_objek_wisata', $id_pengelola)->avg('penilaian_atraksi');
        
        // $pembelianTiket = Pembelian_tiket::whereWeek('kedatangan', '=', Carbon::now()->subWeek()->week)->get();
        $pembelianTikets = Pembelian_tiket::whereYear('created_at', 2022)
            ->whereMonth('created_at', 11)
            ->where('id_destinasi', $id_pengelola)
            ->sum('jumlah_tiket'); //Data Semebtara, yang asli ada diata

        $pembelianTikets = number_format($pembelianTikets);
        $pembelianTikets_sebelumnya = Pembelian_tiket::whereYear('created_at', 2022)
            ->whereMonth('created_at', 10)
            ->where('id_destinasi', $id_pengelola)
            ->sum('jumlah_tiket'); //Data Semebtara, yang asli ada diata

        $pembelianTikets_sebelumnya = number_format($pembelianTikets_sebelumnya);

        $total_keuntungan = Pembelian_tiket::whereYear('created_at', 2022)
            ->whereMonth('created_at', 11)
            ->where('id_destinasi', $id_pengelola)
            ->sum('total_harga'); //Data Semebtara, yang asli ada diata

        $total_keuntungan_sebelumnya = Pembelian_tiket::whereYear('created_at', 2022)
            ->whereMonth('created_at', 10)
            ->where('id_destinasi', $id_pengelola)
            ->sum('total_harga'); //Data Semebtara, yang asli ada diata
    

        $total_kunjungan = Pembelian_tiket::whereYear('kedatangan', 2022)
            ->whereMonth('kedatangan', 11)
            ->where('id_destinasi', $id_pengelola)
            ->sum('jumlah_tiket');

        $total_kunjungan = number_format($total_kunjungan);
        
        $total_kunjungan_sebelumnya = Pembelian_tiket::whereYear('kedatangan', 2022)
            ->whereMonth('kedatangan', 10)
            ->where('id_destinasi', $id_pengelola)
            ->sum('jumlah_tiket');

        $total_kunjungan_sebelumnya = number_format($total_kunjungan_sebelumnya);

        $data_pembelian = Pembelian_tiket::select(DB::raw('DATE_FORMAT(created_at, "%Y-%M") as tahun_bulan'), 
            DB::raw('SUM(total_harga) AS total_harga'), 
            DB::raw('SUM(jumlah_tiket) AS jumlah_tiket'))
            ->where('id_destinasi', $id_pengelola)
            ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%M")'))
            ->orderBy('tahun_bulan')
            ->get();


        $data_pembelian = json_decode($data_pembelian, true);

        // Inisialisasi array labels dan data
        $main_labels = [];
        $main_data = [];
        
        // Loop melalui setiap data dalam array
        foreach ($data_pembelian as $item) {
            // Tambahkan nilai bulan ke dalam array labels
            $main_labels[] = $item['tahun_bulan'];
        
            // Tambahkan nilai total_harga ke dalam array data
            $main_data[] = $item['total_harga'];
        }

        $data_pembelian = [
            'main_labels' => $main_labels,
            'main_data' => $main_data,
        ];
        
        // $datas = [
        //     'labels' => ['Red', 'Blue', 'Yellow', 'Puki', 'Purple', 'Orange'],
        //     'data' => [10, 19, 10, 5, 100, 3],
        // ];
        
        return view('informasi-statistik')
        ->with('overalRating', $overalRating)
        ->with('nps_rating_avg', $nps_rating_avg)
        ->with('nps_rating', $nps_rating)
        ->with('data_nps', $data_nps)
        ->with('amenitas_rating', $amenitas_rating)
        ->with('ansilari1_rating', $ansilari1_rating)
        ->with('ansilari2_rating', $ansilari2_rating)
        ->with('aksesibilitas_rating', $aksesibilitas_rating)
        ->with('atraksi_rating', $atraksi_rating)
        ->with('pembelianTikets', $pembelianTikets)
        ->with('pembelianTikets_sebelumnya', $pembelianTikets_sebelumnya)
        ->with('total_keuntungan', $total_keuntungan)
        ->with('total_keuntungan_sebelumnya', $total_keuntungan_sebelumnya)
        ->with('total_kunjungan', $total_kunjungan)
        ->with('total_kunjungan_sebelumnya', $total_kunjungan_sebelumnya)
        ->with('data_pembelian', $data_pembelian)
        ->with('data_user', $data_user)
        ->with('data_pembelian', $data_pembelian);
    }

}