<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/css-dummy.css') }}">
    <title>IDestinasi</title>
</head>
<body>
    <nav class="footer">
        <a class="" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" width="auto" height="44">
        </a>
        <div class="nav_title">
            <h4>Verifikasi Objek Wisata</h4>
            <p>Kelola Pengajuan dan verifikasi objek wisata</p>
        </div>
        <div class="foto">
            <!-- <h1>t</h1> -->
            <!-- <img src="{{ asset('img/user_icon.png') }}" alt="Description of image"> -->
        </div>
    </nav>
    <nav class="informasi_content">
        <div class="informasi_pendaftar">
            <h3>Infomrasi Umum</h3>
            <hr>
            <h5>Nama Objek Wisata</h5>
            <input type="text" value="{{ $data_objek_wisata -> nama_wisata }}">
            <h5>Lokasi</h5>
            <input type="text" value="{{ $data_objek_wisata -> lokasi }}">
            <h5>Titik Koordinat</h5>
            <input type="text" value="{{ $data_objek_wisata -> longitude }}">
            <input type="text" value="{{ $data_objek_wisata -> latitude }}">
            <h5>Jam Operasional</h5>
            <input type="text" value="{{ $data_objek_wisata -> jam_operasional }}">
        </div>
    
        <div class="informasi_pendaftar">
            <h3>Infomrasi Detail</h3>
            <hr>
            <h5>Deskripsi</h5>
            <input type="text" value="{{ $data_objek_wisata -> deskripsi }}">
            <h5>Jenis Wisata</h5>
            <input type="text" value="{{ $data_objek_wisata -> jenis }}">
            <h5>Foto Objek Wisata</h5>
            <input type="text" value="{{ $data_objek_wisata -> jenis }}">
            <img src="{{ $data_objek_wisata->foto ? asset($data_objek_wisata->foto) : 'img/Kete Kesu.jpg' }}" alt="">
            <img src="{{asset('img/Kete Kesu.jpg')}}" alt="" width="auto" height="150">
        </div>

    </nav>   
    <!-- <h1>{{ $data_objek_wisata }}</h1> -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>