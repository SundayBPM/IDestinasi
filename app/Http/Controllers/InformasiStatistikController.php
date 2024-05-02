<?php

namespace App\Http\Controllers;

use App\Charts\ObjekWisataChart;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use marineusde\LarapexCharts\Facades\LarapexChart;
use Illuminate\Support\Facades\Auth;

class InformasiStatistikController extends Controller
{
    public function InfoPenjualan(ObjekWisataChart $objekWisataChart) 
    {
        $chart = (new LarapexChart)->setTitle('Post')
                                   ->setDataset([150,120])
                                   ->setLabels(['Published', 'No Published']);
        $userId = Auth::id();
        $data_user = User::where('id', $userId)->get();
        $data = [
            'labels' => ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            'data' => [12, 19, 3, 5, 2, 3],
        ];
        // dd($data);
        // return view('informasi-statistik', compact(['data_user']));
        return view('informasi-statistik')
        ->with('data_user', $data_user)
        ->with('data', $data)
        ->with('objekWisataChart', $objekWisataChart); // Tambahkan variabel 
    }

    public function barChart()
    {
        $data = [
            'labels' => ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            'data' => [12, 19, 3, 5, 2, 3],
        ];
        return view('informasi-statistik', compact('data'));
    }
}