<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/verifikasi.css') }}">
    <title>IDestinasi</title>
</head>
<body>
    <nav class="footer">
        <a class="" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" width="auto" height="44">
        </a>
        <div class="nav_title">
            <h1>Verifikasi Objek Wisata</h1>
            <p>Kelola Pengajuan dan verifikasi objek wisata</p>
        </div>
        <div class="foto">
            <!-- <h1>t</h1> -->
            <!-- <img src="{{ asset('img/user_icon.png') }}" alt="Description of image"> -->
        </div>
    </nav>      

    <h4>Informasi Statistik Pendaftaran</h4>
    <div class="informasi_statistik_pendaftaran">
        <div class="box_statistik">
            <div class="mini_box">
                <i class="bi bi-card-list"></i>
            </div>
            <div class="mini_box_text">
                <h6>judul box</h6>
                <p>ini angka</p>
            </div>
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
                <th scope="col">Data Pendaftar</th>
                <th scope="col">Seleksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($objekWisatas as $item)
                <tr>
                    <td>{{ $item->mengelola->user->name }}</td>
                    <td>{{ $item->nama_wisata }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->created_at }}</td>                   
                    <td>
                        @if (empty($item->status))
                            Menunggu Verifikasi
                        @elseif ($item->status === 'terima')
                            Objek Wisata telah diterima
                        @elseif ($item->status === 'tolak')
                            Objek Wisata ditolak
                        @endif
                    </td>
                    <td>
                        <a href="">Lihat disini</a>
                    </td>
                    <td>
                        @if (empty($item->status))
                            <button class="status-button btn btn-success" data-id="{{ $item->id }}" data-status="terima">Terima</button>
                            <button class="status-button btn btn-danger" data-id="{{ $item->id }}" data-status="tolak">Tolak</button>
                            @else
                                @if ($item->status === 'terima')
                                    <button class="status-button btn btn-success">Terima</button>
                                @elseif ($item->status === 'tolak')
                                    <button class="status-button btn btn-danger">Tolak</button>
                                @endif
                        @endif
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
                    url: '/admin/verification/' + id + '/update',
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
