<?php

namespace App\Http\Controllers;

use App\Models\Objek_Wisata;
use App\Models\Paket_Tour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Events;
use App\Models\Saran;

class LandingPageController extends Controller
{

    public function index()
    {
        $saran_destinasi = Objek_Wisata::all();
        $events = Events::all();

        // recomended system
        $data_recomended = $this->recommendDestinations();
        return view('landingpage', compact('saran_destinasi', 'events', 'data_recomended'));
    }

    public function recommendDestinations() 
{
    $destinations = Objek_Wisata::withCount('timeline as total_hari')->get();
    $scores = [];

    foreach ($destinations as $destination) {
        $feedbacks = Saran::where('id_objek_wisata', $destination->id)->get();
        
        $totalRating = 0;
        $count = 0;
        foreach ($feedbacks as $feedback) {
            $totalRating += $feedback->rating;
            $count++;
        }

        $averageRating = ($count > 0) ? $totalRating / $count : 0;

        $visitCount = $destination->visit_count;
        $popularityScore = $visitCount * 0.1;

        $totalScore = $averageRating + $popularityScore;

        $scores[$destination->id] = [
            'id' => $destination->id,
            'title' => $destination->nama_destinasi,
            'rating_count' => $count,
            'total_score' => $totalScore,
            'total_orang' => $destination->total_orang,
            'total_hari' => $destination->total_hari,
            'average_rating' => $averageRating,
            'price' => $destination->harga_tiket,
            'operational_hours' => $destination->jam_operasional,
            'type' => $destination->jenis,
            'image' => $destination->foto ?? 'default.jpg',
        ];
    }

    arsort($scores);

    $recommendedDestinations = array_slice($scores, 0, 5, true); // ambil 5 teratas
    return array_reverse($recommendedDestinations);
}



    public function promoDetails($event_id) 
    {
        $event = Events::find($event_id);
        return view('promo', compact('event'));
    }     
}
