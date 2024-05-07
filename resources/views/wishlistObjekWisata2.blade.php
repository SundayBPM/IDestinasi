@extends('layouts/main')


@section('container')
<div class="wishlist-header">
    <img src="img/latar-navbar.png" alt="Deskripsi gambar">
</div>

<div class="list-wishlist-destinasi-text">
    <h1>Wishlist Wisata Tersimpan</h1>
    <p>Lihat objek wisata yang sudah kamu simpan sebagai wishlist</p>
</div>
    <div class="list-wishlist-destinasi">
        @foreach($list_destinasi as $destinasi)
            <div class="card">
                <div class="card_img">
                    //<img src="img/Kete Kesu.jpg" alt="">//
                </div>
                <div class="card-content">
                    <h3>{{ $destinasi->nama_wisata }}</h3>
                    @php
                        $overalRatingArray = $overalRating->toArray();
                    @endphp
                    @foreach ($overalRatingArray as $rating)
                        @if ($rating['id_objek_wisata'] == $destinasi->id_objek_wisata)
                            <h5><i class="fa-regular fa-star"></i> {{ number_format($rating['average_rating'], 2) }} Reviews</h5>
                            @break
                        
@endsection