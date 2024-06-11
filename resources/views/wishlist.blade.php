@extends('layouts/main')


@section('container')
<div class="wishlist-header">
    <h1>Wishlist Wisatamu</h1>
    <img src="img/ulasan-img1.png" alt="Deskripsi gambar">
</div>

<div class="wishlist-destinasi-text">
    <h1>Wishlist Wisata Tersimpan</h1>
    <p>Lihat objek wisata yang sudah kamu simpan sebagai wishlist</p>
</div>
<div class="list-wishlist-destinasi">
    @foreach($wishlists as $wishlist)
        <div class="card_wishlist">
            <div class="card_img_wishlist">
                <img src="img/Kete Kesu.jpg" alt="">
            </div>
            <div class="card-content-wishlist">
                <h3>{{ $wishlist->objekWisata->nama_wisata }}</h3>
                <h5><i class="fa-regular fa-star"> </i> Reviews</h5>
                <a href="/ulasan/form?id_destinasi" class="btn" id="btn-wishlist">
                    <i class="fa-solid fa-pen"></i> Lihat Objek Wisata
                </a>
            </div>
        </div>
    @endforeach

</div>    
        
@endsection