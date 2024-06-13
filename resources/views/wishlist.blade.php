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
        <div class="card_wishlist" id="wishlist-{{ $wishlist->objekWisata->id }}">
            <div class="card_img_wishlist">
                <img src="{{ $wishlist->objekWisata->foto ? asset($wishlist->objekWisata->foto) : 'img/Kete Kesu.jpg' }}" alt="">
            </div>
            <div class="card-content-wishlist">
                <h3>{{ $wishlist->objekWisata->nama_wisata }}</h3>
                <div class="checkbox-wrapper">
                    <input type="checkbox" id="checkbox-{{ $wishlist->objekWisata->id }}" class="wishlist-checkbox" data-id="{{ $wishlist->objekWisata->id }}" {{ $wishlist->exists ? 'checked' : '' }}>
                    <label for="checkbox-{{ $wishlist->objekWisata->id }}" class="wishlist-label">
                        <i class="bi {{ $wishlist->exists ? 'bi-bookmark-fill' : 'bi-bookmark' }}"></i>
                    </label>
                </div>
                <h5><i class="fa-regular fa-star"> </i> Reviews</h5>
                <a href="/ulasan/form?id_destinasi={{ $wishlist->objekWisata->id }}" class="btn" id="btn-wishlist">
                    <i class="fa-solid fa-pen"></i> Lihat Objek Wisata
                </a>
            </div>
        </div>
    @endforeach
</div>    

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.wishlist-checkbox').change(function() {
            var objekWisataId = $(this).data('id');
            var isChecked = $(this).is(':checked');
            var cardElement = $('#wishlist-' + objekWisataId);
            var iconElement = $(this).next('label').find('i');

            $.ajax({
                url: isChecked ? '/wishlist/add' : '/wishlist/remove',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    objek_wisata_id: objekWisataId
                },
                success: function(response) {
                    console.log(response.message);
                    if (isChecked) {
                        iconElement.removeClass('bi-bookmark').addClass('bi-bookmark-fill');
                    } else {
                        iconElement.removeClass('bi-bookmark-fill').addClass('bi-bookmark');
                        cardElement.remove();
                    }
                },
                error: function(response) {
                    console.log(response.responseJSON.message);
                }
            });
        });
    });
</script>
@endsection
