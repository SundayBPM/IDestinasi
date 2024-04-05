<link rel="stylesheet" href="{{ asset('css/index.css') }}" />

@extends('layouts.main')
@section('container')
<body style ="background-color: #EDEFF1;">

<!--page navigation-->
    <div class="navigation-container">
        <div class="navigation">
            <a href="{{ route('landingPage') }}" class="nav-link {{ (request()->is('landingPage')) ? 'active' : '' }}">Home</a>
            <span class="separator">></span>
            <a href="{{ route('promo') }}" class="nav-link {{ (request()->is('promo')) ? 'active' : '' }}">Promo</a>
        </div>
    </div>
<!-- photo-->
    <div class="promo-image">
        <img src="img/lombok-promo.png" alt="promo" class="image" id="img1" />
    </div>

    <div class="promo-container">
        <div class="promo-title-container">
            <div class= "promo-title">
                <div class = "headline"> Promo Lombok </div>
                <div class = "headline-desc"> 1 Januari - 3 Februari </div>
            </div>
        </div>
    </div>
<!--description-->
    <div class="promo-desc-container">
        <div class ="bodytext"> Kami sangat gembira untuk mengumumkan promo diskon 50% untuk perjalanan wisata ke Lombok! Dapatkan kesempatan langka ini untuk menikmati keindahan pulau Lombok dengan harga yang sangat terjangkau.

<p><b>Detail Promo:</b></p>
<p>Diskon 50% berlaku untuk paket wisata ke Lombok yang mencakup akomodasi, transportasi, dan tour selama 3 hari 2 malam.
Periode promo berlangsung dari 1 April 2024 hingga 30 Juni 2024.
Promo hanya berlaku untuk pemesanan melalui website kami.
Jumlah promo terbatas, segera pesan sebelum kehabisan!</p>

<p><b>Syarat dan Ketentuan:</b></p>
<p>Promo diskon 50% hanya berlaku untuk paket wisata yang disebutkan di atas.
Harga promo belum termasuk tiket pesawat ke dan dari Lombok.
Pembayaran harus dilakukan secara penuh saat pemesanan untuk mengamankan harga promo.
Promo tidak dapat digabung dengan promo lainnya.</p>

<p>Jangan lewatkan kesempatan ini untuk menjelajahi keindahan Lombok dengan harga yang sangat terjangkau! Segera pesan paket wisata Anda melalui website kami dan buat kenangan tak terlupakan di Pulau Lombok.</p> </div>
    </div>
</div>
</body>
@endsection