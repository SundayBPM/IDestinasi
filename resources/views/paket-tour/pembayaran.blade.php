@extends('layouts.main')

@section('container')
<form class="row gap-3 mt-5 pt-4" action="{{ route('paket-tour.pembayaran_tiket', $paket_tour->id) }}" method="POST" class="-3">
    @csrf
    <input type="hidden" name="tanggal" value="{{ request()->date }}">
    <div class="col-md-12 d-flex gap-3 justify-content-center align-items-center">
        <div>
            <a href="{{ route('paket-tour.show', $paket_tour->id) }}" type="button" class="btn btn-secondary btn-rounded-4 btn-icon btn-sm">
                &larr;
            </a>
        </div>
        <div class="flex-fill">
            <h3 class="fw-bold">Reservasi Paket</h3>
            <span class="text-secondary">Isi informasi dibawah ini untuk melanjutkan pembelian tiket paket wisata</span>
        </div>
    </div>

    <div class="col-md-8 row gap-3">
        <div class="card col-md-12">
            <div class="card-header">
                <h4 class="">Informasi Pribadi</h4>
            </div>
            <div class="card-body row gap">
                @foreach (range(1, $jumlah_wisatawan) as $wisatawan)
                <div class="col-md-12">
                    <div class="mb-3">
                        <h4 class="fw-bold">Wisatawan {{ $wisatawan }}</h4>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama[]" id="" class="form-control" placeholder="Nama Lengkap" required autocomplete="off"/>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email[]" id="" class="form-control" placeholder="Email" required autocomplete="off"/>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="no_hp[]" id="" class="form-control" placeholder="Nomor Telepon" required autocomplete="off"/>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="card col-md-12">
            <div class="card-header">
                <h4 class="card-title fw-bold">Opsi Pembayaran</h4>
            </div>
            <div class="card-body">
                <span class="fw-bold">Metode Pembayaran</span>
                <div class="d-flex flex-row gap-3 mt-3">
                    <input type="radio" class="btn-check" name="jenis_pembayaran" value="mbanking" id="option1" autocomplete="off" required>
                    <label class="btn btn-outline-primary d-flex justify-content-between flex-fill align-items-center" for="option1">
                        <div class="d-flex flex-column gap-1">
                            <span>**** 8304</span>
                            <span>MBanking</span>
                        </div>
                        <img src="{{ asset('img/mbanking.png') }}" style="width: 125px !important;height: 50px !important;background:white !important" >
                    </label>
                    <input type="radio" class="btn-check" name="jenis_pembayaran" value="qris" id="option2" autocomplete="off" required>
                    <label class="btn btn-outline-primary d-flex justify-content-between flex-fill align-items-center" for="option2">
                        <div class="d-flex flex-column gap-1">
                            <span>**** 8304</span>
                            <span class="text-start">Qris</span>
                        </div>
                        <img src="{{ asset('img/qris.png') }}" style="width: 75px !important;height: 75px !important;background:white !important;object-fit: cover" alt="">
                    </label>
                    <input type="radio" class="btn-check" name="jenis_pembayaran" value="option3" id="option3" autocomplete="off" required>
                    <label class="btn btn-outline-primary d-flex justify-content-center align-items-center" for="option3">
                        <span class="fw-bold" style="font-size: 42px">+</span>
                    </label>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-4 row gap-3">
        <div class="col-md-12 card p-2">
            <img class="card-img-top w-100" src="{{ asset("img/$paket_tour->foto") }}" alt="Foto" />
            <div class="card-body">
                <h4 class="card-title">Paket {{ $paket_tour->nama_destinasi }}</h4>
                <p class="card-text">
                    <span class="fw-bold">Rp. {{ $paket_tour->harga_tiket }}</span>
                    <span class="text-secondary"> - {{ $jumlah_wisatawan }} Orang - 3 Hari</span>
                </p>
            </div>
        </div>

        <div class="col-md-12 card">
            <div class="card-header">Detail Tiket</div>
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between">
                    <span>Paket Wisata</span>
                    <span>IDR{{ $paket_tour->harga_tiket }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Biaya Layanan</span>
                    <span>IDR10.000</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Diskon</span>
                    <span>IDR10.000</span>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <span class="fw-bold">Total</span>
                <span class="text-warning fw-bold">IDR{{ $paket_tour->harga_tiket }}</span>
            </div>
        </div>

        <div class="col-md-12 d-grid px-0">
            <button type="submit" class="btn btn-primary text-center">
                Beli
            </button>
        </div>
    </div>
</form>
@endsection
