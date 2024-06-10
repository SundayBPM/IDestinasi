@extends('layouts.main')

@section('container')
    <div class="row-search">
        <div class="col-md-10">
            <form action="/eksplore-objek-wisata" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari tempat wisatamu" name="search" value="{{ request('search') }}">
                    <button class="btn" type="submit">Cari</button>
                </div>
            </div>
        </div>
    </div>
    <h2 class="rekomendasi-title">Lokasi Terdekat Denganmu</h2>
    <h5 class="add-title">Temukan lokasi wisata yang terdekat denganmu saat ini</h5>
    <div class="list-eksplore-wisata">
        @foreach($listdestinasi as $index => $destinasi)
            @if($index < 4) <!-- Hanya melanjutkan iterasi jika index kurang dari 4 -->
                <div class="card">
                    <div class="card_img">
                        <img src="img/Kete Kesu.jpg" alt="">
                    </div>
                    <div class="card-content">
                        <h3>{{ $destinasi->nama_wisata }}</h3>
                        <h3>{{ $destinasi->lokasi }}</h3>
                        <h3>{{ $destinasi->jenis }}</h3>
                        
                    </div>
                </div>
            @else
                @break <!-- Menghentikan iterasi setelah mencapai 4 item -->
            @endif
        @endforeach
    </div>
    <h2 class="rekomendasi-title">Rekomendasi Sesuai Preferensimu</h2>
    <h10 class="add-title">Temukan objek wisata yang sesuai dengan preferensimu</h10>
    <div class="list-eksplore-wisata">
        @foreach($listdestinasi as $index => $destinasi)
            @if($index < 4) <!-- Hanya melanjutkan iterasi jika index kurang dari 4 -->
                <div class="card">
                    <div class="card_img">
                        <img src="img/Kete Kesu.jpg" alt="">
                    </div>
                    <div class="card-content">
                        <h3>{{ $destinasi->nama_wisata }}</h3>
                        <h3>{{ $destinasi->lokasi }}</h3>
                        <h3>{{ $destinasi->jenis }}</h3>
                        
                    </div>
                </div>
            @else
                @break <!-- Menghentikan iterasi setelah mencapai 4 item -->
            @endif
        @endforeach
    </div>
    <h2 class="rekomendasi-title">Populer Saat Ini</h2>
    <h10 class="add-title">Temukan objek wisata yang populer saat ini di kalangan wisatawan</h10>
    <div class="list-eksplore-wisata">
        @foreach($listdestinasi as $index => $destinasi)
            @if($index < 4) <!-- Hanya melanjutkan iterasi jika index kurang dari 4 -->
                <div class="card">
                    <div class="card_img">
                        <img src="img/Kete Kesu.jpg" alt="">
                    </div>
                    <div class="card-content">
                        <h3>{{ $destinasi->nama_wisata }}</h3>
                        <h3>{{ $destinasi->lokasi }}</h3>
                        <h3>{{ $destinasi->jenis }}</h3>
                        
                    </div>
                </div>
            @else
                @break <!-- Menghentikan iterasi setelah mencapai 4 item -->
            @endif
        @endforeach
    </div>
    <h2 class="rekomendasi-title">Semua Objek Wisata</h2>
    <h10 class="add-title">Lihat berbagai tempat wisata dan cari yang sesuai denganmu</h10>
    <div class="list-eksplore-wisata">
        @foreach($listdestinasi as $index => $destinasi)
            @if($index < 4) <!-- Hanya melanjutkan iterasi jika index kurang dari 4 -->
                <div class="card">
                    <div class="card_img">
                        <img src="img/Kete Kesu.jpg" alt="">
                    </div>
                    <div class="card-content">
                        <h3>{{ $destinasi->nama_wisata }}</h3>
                        <h3>{{ $destinasi->lokasi }}</h3>
                        <h3>{{ $destinasi->jenis }}</h3>
                        
                        <!-- <a href="/ulasan/form?id_destinasi={{ $destinasi->id_tiket }}" class="btn">
                            <i class="fa-solid fa-pen"></i> Buat Ulasan
                        </a> -->
                    </div>
                </div>
            @else
                @break <!-- Menghentikan iterasi setelah mencapai 4 item -->
            @endif
        @endforeach
    </div>
@endsection
