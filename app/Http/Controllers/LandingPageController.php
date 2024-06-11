<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objek_Wisata;
use App\Models\Events;
use App\Models\PaketTour;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Promo;
use App\Models\Saran;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function index()
    {
        $saran_destinasi = DB::table('objek_wisatas')
                            ->inRandomOrder()
                            ->limit(10)
                            ->get();
        $events = Events::all();
        $promos = Promo::all();

        // recomended system
        $data_recomended = $this->recommendDestinations();

        $paket_tours = PaketTour::withCount('timeline as total_hari')->get();

        return view('landingpage', compact('saran_destinasi', 'events', 'data_recomended', 'paket_tours','promos'));
    }

    public function show_promo($id)
    {
        // $promoId = $request->query('id');
        $promo = Promo::find($id);
        $promo->start_date = Carbon::parse($promo->start_date)->translatedFormat('j F Y');
        $promo->end_date = Carbon::parse($promo->end_date)->translatedFormat('j F Y');
        return view('promo',['promo'=> $promo]);
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

    // ========================================================== SUNDAY YANG BIKIN ====================================================================

        
}
