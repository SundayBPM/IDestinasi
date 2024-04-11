@extends('layouts/main')


@section('container')
<div class="ulasan-header">
    <img src="img/ulasan-img1.png" alt="Deskripsi gambar">
</div>

<div class="list-ulasan-destinasi-text">
    <h1>Buat Ulasan Untuk Destinasi Terdahulu</h1>
    <p>Buat ulasan untuk objek wisata yang telah kamu kunjungi untuk membantu meningkatkan kualitas objek wisata</p>
</div>
    <div class="list-ulasan-destinasi">
        @foreach($list_destinasi as $destinasi)
        <div class="card">
            @php
                $imageFormats = ['jpg', 'png', 'gif']; // Daftar format gambar yang didukung
                $gambarTersedia = false;
                foreach($imageFormats as $format) {
                    $imagePath = "img/{$destinasi->nama_destinasi}.$format";
                    if(file_exists(public_path($imagePath))) {
                        echo "<img src='".asset($imagePath)."' alt='objek wisata'>";
                        $gambarTersedia = true;
                        break;
                    }
                }
            @endphp
            <div class="card-content">
                <h3>{{$destinasi->nama_destinasi}}</h3>
                <h5 ><i class="fa-regular fa-star"></i>4.8 Reviews</h5>
                <a href="/form-ulasan" class="btn">
                    <i class="fa-solid fa-pen"></i> Buat Ulasan
                </a>
            </div>
        </div>
        @endforeach
<!--
        <div class="card">
            <img src="img/tanjung bira.jpg" alt="objek wisata">
            <div class="card-content">
                <h3>Card 2</h3>
                <h5 ><i class="fa-regular fa-star"></i>4.8 Reviews</h5>
                <a href="/" class="btn">
                    <i class="fa-solid fa-pen"></i> Buat Ulasan
                </a>
            </div>
        </div>
        <div class="card">
            <img src="img/Ollon.png" alt="objek wisata">
            <div class="card-content">
                <h3>Card 3</h3>
                <h5 ><i class="fa-regular fa-star"></i>4.8 Reviews</h5>
                <a href="/" class="btn">
                    <i class="fas fa-pen"></i> Buat Ulasan
                </a>
            </div>
        </div>
        <div class="card">
            <img src="img/Ollon.png" alt="objek wisata">
            <div class="card-content">
                <h3>Card 3</h3>
                <h5 ><i class="fa-regular fa-star"></i>4.8 Reviews</h5>
                <a href="/" class="btn">
                    <i class="fas fa-pen"></i> Buat Ulasan
                </a>
            </div>
        </div>
        <div class="card">
            <img src="img/Ollon.png" alt="objek wisata">
            <div class="card-content">
                <h3>Card 3</h3>
                <h5 ><i class="fa-regular fa-star"></i>4.8 Reviews</h5>
                <a href="/" class="btn">
                    <i class="fas fa-pen"></i> Buat Ulasan
                </a>
            </div>
        </div>
        <div class="card">
            <img src="img/Ollon.png" alt="objek wisata">
            <div class="card-content">
                <h3>Card 3</h3>
                <h5 ><i class="fa-regular fa-star"></i>4.8 Reviews</h5>
                <a href="/" class="btn">
                    <i class="fas fa-pen"></i> Buat Ulasan
                </a>
            </div>
        </div>
        <div class="card">
            <img src="img/Ollon.png" alt="objek wisata">
            <div class="card-content">
                <h3>Card 3</h3>
                <h5 ><i class="fa-regular fa-star"></i>4.8 Reviews</h5>
                <a href="/" class="btn">
                    <i class="fas fa-pen"></i> Buat Ulasan
                </a>
            </div>
        </div> 
-->
        <!--img src="img/img3.jpg" alt="Deskripsi gambar"-->
    </div>    
        
@endsection