@extends('layouts/main')

@section('container')
<div class="ulasan-header">
    <h1>Bagikan Pengalaman Anda di Ulasan</h1>
    <img src="img/ulasan-img1.png" alt="Deskripsi gambar">
</div>

<div class="list-ulasan-destinasi-text">
    <h1>Buat Ulasan Untuk Destinasi Terdahulu</h1>
    <p>Buat ulasan untuk objek wisata yang telah kamu kunjungi untuk membantu meningkatkan kualitas objek wisata</p>
    
    @php
        $filterLabels = [
            'all' => 'Semua',
            'belum_diulas' => 'Belum diulas',
            'sudah_diulas' => 'Sudah diulas'
        ];
        $currentFilter = request('filter', 'all');
    @endphp

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ $filterLabels[$currentFilter] }}
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('/ulasan?filter=all') }}">Semua</a></li>
            <li><a class="dropdown-item" href="{{ url('/ulasan?filter=belum_diulas') }}">Belum diulas</a></li>
            <li><a class="dropdown-item" href="{{ url('/ulasan?filter=sudah_diulas') }}">Sudah diulas</a></li>
        </ul>
    </div>
</div>
<div class="list-ulasan-destinasi">
    @foreach($list_destinasi as $destinasi)
        <div class="card_ulasan">
            <div class="card_img">
                <!-- @if($destinasi->foto)
                    <img src="{{ asset($destinasi->foto) }}" alt="image_path">
                @else
                @endif -->
                <img src="asset/no_img.jpg" alt="default_image">
            </div>
            <div class="card-content-ulasan">
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
                <a href="/ulasan/form?id_destinasi={{ $destinasi->id_tiket }}" class="btn" id="btn-ulasan">
                    <i class="fa-solid fa-pen"></i> Buat Ulasan
                </a>
            </div>
        </div>
    @endforeach
</div>

<!-- Popper.js and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
@endsection
