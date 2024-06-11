@extends('layouts.main')

@section('container')
<div class="row gy-5 w-100">
    <div class="col-md-12 text-center" style="position: relative;display: inline-block;">
        <img src="{{ asset('asset\image 10.png') }}" style="filter: brightness(60%);" alt="">
        <h3 class="text-white" style="position: absolute;top: 50%;left:50%;transform: translate(-50%, -50%);">Baca Artikel Wisata Menarik</h3>
    </div>

    <div class="col-md-12">
        <div class="d-flex flex-column gap-1">
            <h1 class="fw-bold">Artikel Populer</h1>
            <span class="text-gray-500">baca artikel populer dari penulis kami</span>
        </div>

        <div class="row mt-5">
            @forelse ($artikels as $artikel)
            <div class="border-0 card col-md-6">
                <img class="card-img-top w-100" style="" src="{{ asset($artikel->image) }}" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">{{ $artikel->title }}</h4>
                    <p class="card-text">{{ strlen(strip_tags($artikel->deskripsi)) > 120 ? substr(strip_tags($artikel->deskripsi), 0, 120) . "..." : strip_tags($artikel->deskripsi) }}</p>
                    <a href="{{ route('artikel.show', $artikel->id) }}" class="text-info text-decoration-none">Baca Postingan Lengkap <span style="font-size: 24px">&#x2197;</span></a>
                </div>
            </div>
            @empty
            <div class="col-md-12 text-center">
                <span>No Data</span>
            </div>
            @endforelse
            <div class="col-md-12 justify-content-center">
                {{ $artikels->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
