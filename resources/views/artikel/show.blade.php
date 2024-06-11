@extends('layouts.main')

@section('container')
<div class="row gy-3">
    <div class="card col-md-12">
        {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title" /> --}}
        <img src="{{ asset($artikel->image) }}" class="w-100" style="height: 60vh !important; object-fit: cover;" alt="">
        <div class="card-body d-flex w-100">
            <div class="align-items-center">
                <a href="{{ route('artikel.index') }}" class="btn btn-secondary btn-rounded-4 btn-icon btn-sm">
                    &larr;
                </a>
            </div>
            <div class="d-flex flex-column gap-1 flex-fill">
                <h4 class="card-title text-center">{{ $artikel->title }}</h4>
                <p class="card-text text-center">{{ $artikel->sub }}</p>
            </div>
        </div>
    </div>

    <div class="card col-md-12">
        <div class="card-body">
            {!! $artikel->deskripsi !!}
        </div>
    </div>
</div>
@endsection
