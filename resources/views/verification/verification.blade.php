<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/verifikasi.css') }}">
    <title>IDestinasi</title>
</head>
<body>
    <div class="footer">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src='img/logo.png' alt="Logo" width="auto" height="44" class="d-inline-block align-text-top">
                </a>
                <div class="nav_title">
                    <h1>Verifikasi Objek Wisata</h1>
                    <p>Kelola Pengajuan dan verifikasi objek wisata</p>
                </div>
            </div>
        </nav>        
    </div>
    <h4>Informasi Statistik Pendaftaran</h4>
    <div class="informasi_statistik_pendaftaran">
        <div class="box_statistik">
            <p>ini icon</p>
            <h6>judul box</h6>
            <p>ini angka</p>
        </div>
        <div class="box_statistik">
            <p>ini icon</p>
            <h6>judul box</h6>
            <p>ini angka</p>
        </div>
        <div class="box_statistik">
            <p>ini icon</p>
            <h6>judul box</h6>
            <p>ini angka</p>
        </div>
    </div>
    <h4>Kelola Pendaftar</h4>
    <div class="kelola_pendaftar">
        <input type="text">
        <div class="drop">
            <h1>ini dropdown kiri</h1>
            <h1>ini dropdown kanan</h1>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nama Pendaftar</th>
                <th scope="col">Objek Wisata</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Waktu Daftar</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($objekWisatas as $item)
                <tr>
                    <td>{{ $item->userMengelola->name }}</td>
                    <td>{{ $item->nama_wisata }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <button class="status-button" data-id="{{ $item->id }}" data-status="terima">Terima</button>
                        <button class="status-button" data-id="{{ $item->id }}" data-status="tolak">Tolak</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.status-button').click(function() {
                var id = $(this).data('id');
                var status = $(this).data('status');

                $.ajax({
                    url: '/objek-wisata/' + id + '/update-status',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: status
                    },
                    success: function(response) {
                        if(response.success) {
                            location.reload();
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
