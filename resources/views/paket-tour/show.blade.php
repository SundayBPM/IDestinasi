@extends('layouts.main')

@section('container')
<div class="row gy-3">
    <div class="card col-md-12">
        {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title" /> --}}
        <img src="{{ asset("img/$paket_tour->foto") }}" class="w-100" style="height: 60vh !important; object-fit: cover;" alt="">
        <div class="card-body d-flex w-100">
            <div class="align-items-center">
                <a href="{{ route('landingPage') }}" class="btn btn-secondary btn-rounded-4 btn-icon btn-sm">
                    &larr;
                </a>
            </div>
            <div class="d-flex flex-column gap-1 flex-fill">
                <h4 class="card-title text-center">{{ $paket_tour->nama_destinasi }}</h4>
                <p class="card-text text-center">{{ $paket_tour->lokasi }}</p>
            </div>
        </div>
    </div>

    <div class="card col-md-12">
        <div class="card-body row">
            <div class="col-md-12">
                <h4 class="fw-bold">Deskripsi</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa maiores maxime quas iure veniam enim quasi ipsa vero provident! Ex modi pariatur harum expedita maxime corporis voluptate facere? Itaque, quas.</p>
            </div>
            <div class="col-md-12 mb-3">
                <h4 class="fw-bold">Detail Perjalanan</h4>
                <span>{{ $detail_perjalanan }}</span>
            </div>
            @foreach ($paket_tour->timeline as $key => $timeline)
            <div class="col-md-12">
                <h5 class="fw-bold">Hari {{ $key + 1 }}: {{ $timeline->timeline }}</h5>
                <ul>
                    @foreach ($timeline->detail as $detail_timeline)
                    <li>{{ $detail_timeline->kegiatan }}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>

    <div class="card col-md-12">
        <div class="card-body">
            <h4 class="fw-bold">Deskripsi</h4>
            <ul>
                @foreach ($paket_tour->fasilitas as $fasilitas)
                <li>{{ $fasilitas->fasilitas }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="fw-bold">Pilih Tanggal</h4>
                <span class="text-gray-500">Silahkan Pilih tanggal Tersedia</span>
                <div class="d-flex flex-row gap-1">
                    @foreach ($list_tanggal as $tanggal)
                    <button class="btn btn-secondary flex-fill d-flex flex-column btn-tgl" data-index="{{ $loop->iteration }}" data-value="{{ $tanggal->format("Y-m-d") }}" dusk="tanggal-button-{{ $tanggal->format("Y-m-d") }}">
                        <span>{{ $tanggal->isoFormat("D MMMM") }}</span>
                        <span>
                            @if ($loop->first)
                                Hari Ini
                            @else
                                {{ $tanggal->isoFormat("dddd") }}
                            @endif
                        </span>
                    </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="fw-bold">Paket Tersedia</h4>
                <span class="text-gray-500">Pilih paket yang tersedia</span>

                <div class="card mt-3">
                    <div class="card-body row">
                        <div class="col-md-12">
                            <h4 class="fw-bold">Paket {{ $paket_tour->nama_destinasi }}</h4>
                            <div class="d-flex">
                                <span class="text-secondary flex-fill">Berlaku pada tanggal yang dipilih</span>
                                <span class="text-secondary flex-fill">Reservasi minimal 1 hari sebelumnya</span>
                                <span class="text-secondary flex-fill">Pengembalian dana tidak diizinkan</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr style="border-bottom: 3px dashed">
                        </div>
                        <div class="col-md-12 d-flex justify-content-between">
                            <div class="d-flex flex-column gap-1">
                                <b>Total</b>
                                <span class="text-warning fs-2 fw-bold">IDR {{ $paket_tour->harga_tiket }}</span>
                            </div>
                            <div class="align-self-center">
                                @if (auth()->check())
                                <a href="javascript:void(0)" data-link="{{ route('paket-tour.pembelian_tiket', ['id' => $paket_tour->id, 'date' => 'rawDate']) }}" class="btn btn-primary btn-pembayaran">
                                    Beli Paket Tour
                                </a>
                                @else
                                <a href="{{ route('login') }}" class="btn btn-primary">
                                    Beli Paket Tour
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script>
    const max_day = "{{ $paket_tour->timeline->count() }}"
    let tanggal = "";

    $(function () {
        $('.btn-tgl').click(function() {
            clicked = $(this)
            clickedIndex = clicked.data("index")
            $(this).parent().children().each(function(index, element) {
                $(element).removeClass("btn-primary")
                $(element).addClass("btn-secondary")
            })

            $(this).parent().children().each(function(index, element) {
                if ($(element).data('index') >= clickedIndex && $(this).parent().find(".btn-primary").length < 3){
                    $(element).removeClass("btn-secondary")
                    $(element).addClass("btn-primary")
                    clickedIndex++
                }
            })
            tanggal = clicked.data("value")
        })

        $('.btn-pembayaran').click(function() {
            if (tanggal)
                window.location = $(this).data('link').replace("rawDate", tanggal)
            else
                alert("Pilih tanggal terlebih dahulu")
        })
    });
</script>
@endsection
