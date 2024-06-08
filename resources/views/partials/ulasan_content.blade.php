@foreach($destinasi as $destinasi_ulasan)
    <div class="modal_ulasan_box">
        <div class="modal_first_row">
            <div class="modal_first_column">
                <img src="{{ asset('img\user_icon.png') }}" width="500" height="600">
            </div>
            <div class="modal_second_column">
                <p>{{ $destinasi_ulasan->user->name}}</p>
                <i class="bi bi-star"></i>  {{ $destinasi_ulasan->rating }}        
            </div>
        </div>
        <p>{{ $destinasi_ulasan->created_at }}</p>
        <p class="modal_ulasan_user">{{ $destinasi_ulasan -> ulasan}}</p>
        <h5>Saran</h5>
        <p class="modal_kritik_user">{{ $destinasi_ulasan -> kritik_saran}}</p>
    </div>
@endforeach

<div id="pagination-links">
    {{ $destinasi->links() }}
</div>
<!-- <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div> -->