@extends('layouts.main')

@section('container')
    <div class="row-search">
        <div class="col-md-10">
            <form action="/eksplore-objek-wisata" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari tempat wisatamu" name="search" value="{{ request('search') }}">
                    <button class="btn" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <h2 class="rekomendasi-title">Lokasi Terdekat Denganmu</h2>
    <h5 class="add-title">Temukan lokasi wisata yang terdekat denganmu saat ini</h5>
    <div class="list-eksplore-wisata">
        @foreach($listdestinasi as $destinasi)
            <div class="card_wishlist" id="wishlist-{{ $destinasi->id }}">
                <div class="card_img_wishlist">
                    <img src="{{ $destinasi->foto ? asset($destinasi->foto) : 'img/Kete Kesu.jpg' }}" alt="">
                </div>
                <div class="card-content-wishlist">
                    <h3>{{ $destinasi->nama_wisata }}</h3>
                    <h5><i class="fa-regular fa-star"> </i> Reviews</h5>
                    @php
                        $isWishlisted = Auth::user()->wishlists->contains($destinasi->id);
                    @endphp
                    <i class="bi {{ $isWishlisted ? 'bi-bookmark-fill' : 'bi-bookmark' }} wishlist-icon" data-destinasi-id="{{ $destinasi->id }}"></i>
                </div>
            </div>
        @endforeach
    </div>
    <h2 class="rekomendasi-title">Rekomendasi Sesuai Preferensimu</h2>
    <h10 class="add-title">Temukan objek wisata yang sesuai dengan preferensimu</h10>
    <div class="list-eksplore-wisata">
        @foreach($listdestinasi as $destinasi)
            <div class="card_wishlist" id="wishlist-{{ $destinasi->id }}">
                <div class="card_img_wishlist">
                    <img src="{{ $destinasi->foto ? asset($destinasi->foto) : 'img/Kete Kesu.jpg' }}" alt="">
                </div>
                <div class="card-content-wishlist">
                    <h3>{{ $destinasi->nama_wisata }}</h3>
                    <h5><i class="fa-regular fa-star"> </i> Reviews</h5>
                    @php
                        $isWishlisted = Auth::user()->wishlists->contains($destinasi->id);
                    @endphp
                    <i class="bi {{ $isWishlisted ? 'bi-bookmark-fill' : 'bi-bookmark' }} wishlist-icon" data-destinasi-id="{{ $destinasi->id }}"></i>
                </div>
            </div>
        @endforeach
    </div>
    <h2 class="rekomendasi-title">Populer Saat Ini</h2>
    <h10 class="add-title">Temukan objek wisata yang populer saat ini di kalangan wisatawan</h10>
    <div class="list-eksplore-wisata">
        @foreach($listdestinasi as $destinasi)
            <div class="card_wishlist" id="wishlist-{{ $destinasi->id }}">
                <div class="card_img_wishlist">
                    <img src="{{ $destinasi->foto ? asset($destinasi->foto) : 'img/Kete Kesu.jpg' }}" alt="">
                </div>
                <div class="card-content-wishlist">
                    <h3>{{ $destinasi->nama_wisata }}</h3>
                    <h5><i class="fa-regular fa-star"> </i> Reviews</h5>
                    @php
                        $isWishlisted = Auth::user()->wishlists->contains($destinasi->id);
                    @endphp
                    <i class="bi {{ $isWishlisted ? 'bi-bookmark-fill' : 'bi-bookmark' }} wishlist-icon" data-destinasi-id="{{ $destinasi->id }}"></i>
                </div>
            </div>
        @endforeach
    </div>
    <h2 class="rekomendasi-title">Semua Objek Wisata</h2>
    <h10 class="add-title">Lihat berbagai tempat wisata dan cari yang sesuai denganmu</h10>
    <div class="list-eksplore-wisata">
        @foreach($listdestinasi as $destinasi)
            <div class="card_wishlist" id="wishlist-{{ $destinasi->id }}">
                <div class="card_img_wishlist">
                    <img src="{{ $destinasi->foto ? asset($destinasi->foto) : 'img/Kete Kesu.jpg' }}" alt="">
                </div>
                <div class="card-content-wishlist">
                    <h3>{{ $destinasi->nama_wisata }}</h3>
                    <h5><i class="fa-regular fa-star"> </i> Reviews</h5>
                    @php
                        $isWishlisted = Auth::user()->wishlists->contains($destinasi->id);
                    @endphp
                    <i class="bi {{ $isWishlisted ? 'bi-bookmark-fill' : 'bi-bookmark' }} wishlist-icon" data-destinasi-id="{{ $destinasi->id }}"></i>
                </div>
            </div>
        @endforeach
    </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.wishlist-icon').click(function() {
            var icon = $(this);
            var destinasiId = icon.data('destinasi-id');
            var url = icon.hasClass('bi-bookmark') ? '{{ route("eksplore.wishlist.add") }}' : '{{ route("eksplore.wishlist.remove") }}';

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    objek_wisata_id: destinasiId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        icon.toggleClass('bi-bookmark bi-bookmark-fill');
                    }
                }
            });
        });
    });
</script>
@endsection
