@extends('layouts.main')

@section('container')
    <div class="container">
        <h2>Objek Wisatamu</h2>
        <h6>Lihat objek wiata yang sudah kamu upload</h6>
        <a href="{{ route('kelola-objek-wisata.create') }}" class="btn btn-success">Daftar Sekarang</a>
        
        <div class="row">
            @foreach($pengaturanObjekWisatas as $pengaturanObjekWisata)
                <div class="col-md-4">
                    <img src="{{ asset('storage/post-images/' . $pengaturanObjekWisata->foto) }}" class="img-fluid rounded mb-3" alt="{{ $pengaturanObjekWisata->nama }}">
                    <h4>{{ $pengaturanObjekWisata->nama_destinasi }}</h4>
                    <h4>{{ $pengaturanObjekWisata->harga_tiket }}</h4>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('kelola-objek-wisata.edit', $pengaturanObjekWisata->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('kelola-objek-wisata.destroy', $pengaturanObjekWisata->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
   