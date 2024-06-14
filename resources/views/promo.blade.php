<link rel="stylesheet" href="{{ asset('css/index.css') }}" />

@extends('layouts.main')
@section('container')
<body style ="background-color: #EDEFF1;">

<!--page navigation-->
    <div class="navigation-container">
        <div class="navigation">
            <a href="{{ route('landingPage') }}" class="nav-link {{ (request()->is('landingPage')) ? 'active' : '' }}">Home</a>
            <span class="separator">></span>
            <a href="{{ route('promo.detail', $event->id) }}" class="nav-link {{ (request()->is('promo')) ? 'active' : '' }}">Promo</a>
        </div>
    </div>
<!-- photo-->
    <div class="promo-image">
        <img src="{{ asset('img/' . $event->image_path) }}" alt="$event->image_path" class="image"/>
    </div>

    <div class="promo-container">
        <div class="promo-title-container">
            <div class= "promo-title">
                <div class = "headline"> {{ $event->title }} </div>
                <div class="headline-desc">
                    {{ \Carbon\Carbon::parse($event->start_event)->format('d M') }} - {{ \Carbon\Carbon::parse($event->end_event)->format('d M') }}
                </div>
            </div>
        </div>
    </div>
<!--description-->`
    <div class="promo-desc-container">
        <div class ="bodytext"> Kami sangat gembira untuk mengumumkan promo diskon 50% untuk perjalanan wisata ke {{ $event->place_event}}! Dapatkan kesempatan langka ini untuk menikmati keindahan pulau {{ $event->place_event}} dengan harga yang sangat terjangkau.

<p><b>Detail Promo:</b></p>
<p>{{ $event->desc }}</p>

<p><b>Syarat dan Ketentuan:</b></p>
<p>Promo diskon 50% hanya berlaku untuk paket wisata yang disebutkan di atas.
Harga promo belum termasuk tiket pesawat ke dan dari {{ $event->place_event}}.
Pembayaran harus dilakukan secara penuh saat pemesanan untuk mengamankan harga promo.
Promo tidak dapat digabung dengan promo lainnya.</p>

<p>Jangan lewatkan kesempatan ini untuk menjelajahi keindahan {{ $event->place_event}} dengan harga yang sangat terjangkau! Segera pesan paket wisata Anda melalui website kami dan buat kenangan tak terlupakan di Pulau {{ $event->place_event}}.</p> </div>
    </div>
</div>
</body>
@endsection