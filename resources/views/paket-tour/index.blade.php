@extends('layouts.main')

@section('container')
<div class="row gy-5 w-100">
    <div class="col-md-12 text-center" style="position: relative;display: inline-block;">
        <img src="{{ asset('asset\image 10.png') }}" style="filter: brightness(60%);" alt="">
        <h3 class="text-white" style="position: absolute;top: 50%;left:50%;transform: translate(-50%, -50%);">Paket Tour</h3>
    </div>

    <div class="col-md-12">
        <div class="d-flex flex-column gap-1">
            <h1 class="fw-bold">Paket Tour</h1>
            {{-- <span class="text-gray-500">baca artikel populer dari penulis kami</span> --}}
        </div>

        <div class="row mt-5">
            @forelse ($paket_tours as $paket_tour)
            <div class="border-0 card col-md-6">
                <img class="card-img-top w-100" style="" src="{{ asset('img/'.$paket_tour->foto) }}" alt="Title" />
                <div class="card-body">
                    <span class="fs-3 card-title fw-bold">{{ $paket_tour->nama_destinasi }}</span>
                    <p class="card-text">{{ strlen(strip_tags($paket_tour->deskripsi)) > 120 ? substr(strip_tags($paket_tour->deskripsi), 0, 120) . "..." : strip_tags($paket_tour->deskripsi) }}</p>
                    <a href="{{ route('paket-tour.show', $paket_tour->id) }}" class="text-info text-decoration-none">Buka Objek Wisata <span style="font-size: 24px">&#x2197;</span></a>
                </div>
            </div>
            @empty
            <div class="col-md-12 text-center">
                <span>No Data</span>
            </div>
            @endforelse
            <div class="col-md-12 justify-content-center">
                {{ $paket_tours->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
