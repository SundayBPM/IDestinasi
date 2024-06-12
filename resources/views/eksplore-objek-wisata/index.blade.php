<!-- eksplore-objek-wisata.blade.php -->

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
                    <div class="checkbox-wrapper">
                        <input type="checkbox">
                        <input type="checkbox" id="checkbox-{{ $destinasi->id }}" class="wishlist-checkbox" data-id="{{ $destinasi->id }}" {{ $destinasi->wishlist->isNotEmpty() ? 'checked' : '' }}>
                        <label for="checkbox-{{ $destinasi->id }}" class="wishlist-label">
                            <i class="bi {{ $destinasi->wishlist->isNotEmpty() ? 'bi-bookmark-fill' : 'bi-bookmark' }}"></i>
                        </label>
                    </div>
                    <h5><i class="fa-regular fa-star"> </i> Reviews</h5>
                </div>
            </div>
        @endforeach
    </div>

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                console.log('jQuery loaded');  // Debug log
                $('.wishlist-checkbox').change(function() {
                    console.log('Checkbox handler attached');  // Debug log
                    var objekWisataId = $(this).data('id');
                    var isChecked = $(this).is(':checked');
                    var cardElement = $('#wishlist-' + objekWisataId);
                    var iconElement = $(this).next('label').find('i');

                    console.log('Checkbox clicked', objekWisataId, isChecked);  // Debug log

                    $.ajax({
                        url: isChecked ? '/eksplore-objek-wisata/add' : '/eksplore-objek-wisata/remove',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            objek_wisata_id: objekWisataId
                        },
                        success: function(response) {
                            console.log(response.message);  // Debug log
                            if (isChecked) {
                                iconElement.removeClass('bi-bookmark').addClass('bi-bookmark-fill');
                            } else {
                                iconElement.removeClass('bi-bookmark-fill').addClass('bi-bookmark');
                                cardElement.remove();
                            }
                        },
                        error: function(response) {
                            console.log(response.responseJSON.message);  // Debug log
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
