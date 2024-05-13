@extends('layouts/main')


@section('container')
<div class="ulasan-header">
    <h1>Bagikan Pengalaman Anda di Ulasan</h1>
    <img src="img/ulasan-img1.png" alt="Deskripsi gambar">
</div>

<div class="list-ulasan-destinasi-text">
    <h1>Buat Ulasan Untuk Destinasi Terdahulu</h1>
    <p>Buat ulasan untuk objek wisata yang telah kamu kunjungi untuk membantu meningkatkan kualitas objek wisata</p>
</div>
    <div class="list-ulasan-destinasi">
        @foreach($list_destinasi as $destinasi)
            <div class="card_ulasan">
                <div class="card_img">
                    <img src="img/Kete Kesu.jpg" alt="">
                </div>
                <div class="card-content-ulasan">
                    <!-- <h5>{{ $destinasi }}</h5> -->
                    <h3>{{ $destinasi->nama_wisata }}</h3>
                    @php
                        $overalRatingArray = $overalRating->toArray();
                    @endphp
                    @foreach ($overalRatingArray as $rating)
                        @if ($rating['id_objek_wisata'] == $destinasi->id_objek_wisata)
                            <h5><i class="fa-regular fa-star"> </i> {{ number_format($rating['average_rating'], 2) }} Reviews</h5>
                            @break
                        @endif
                    @endforeach
                    <a href="/ulasan/form?id_destinasi={{ $destinasi->id_tiket }}" class="btn">
                        <i class="fa-solid fa-pen"></i> Buat Ulasan
                    </a>
                </div>
            </div>
        @endforeach

    </div>    
        
@endsection