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
            <h4>Verifikasi Objek Wisata</h4>
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
                <h5>Total Pendaftar</h5>
                <p>ini angka</p>
            </div>
        </div>
        <div class="box_statistik">
            <div class="mini_box" style="background-color: #FF7A00;">
                <i class="bi bi-info-square"></i>
            </div>
            <div class="mini_box_text">
                <h5>Belum Di-review</h5>
                <p>ini angka</p>
            </div>
        </div>
        <div class="box_statistik">
            <div class="mini_box" style="background-color: #23A26D;">
                <i class="bi bi-clipboard-check"></i>
            </div>
            <div class="mini_box_text">
                <h5>Total Diterima</h5>
                <p>ini angka</p>
            </div>
        </div>
        <div class="box_statistik">
            <div class="mini_box" style="background-color: red;">
                <i class="bi bi-clipboard-x"></i>
            </div>
            <div class="mini_box_text">
                <h5>Total Ditolak</h5>
                <p>ini angka</p>
            </div>
        </div>

    </div>
    <h4>Kelola Pendaftar</h4>
    <div class="kelola_pendaftar">
        <div class="input-icon">
            <i class="bi bi-search"></i>
            <input type="text" class="search_pendaftar" placeholder="Objek Wisata">
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Saring berdasarkan Tanggal
            </button>
                <ul class="dropdown-menu w-50">
                    <li><a class="dropdown-item filter-option" data-filter="all" href="#">Semua</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="today" href="#">Hari ini</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="this-week" href="#">Minggu ini</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="last-week" href="#">Minggu lalu</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="oldest" href="#">Paling lama</a></li>
                </ul>

            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sorting dengan Status
            </button>
            <ul class="dropdown-menu w-50">
                <li><a class="dropdown-item status-option" data-status="all" href="#">Semua</a></li>
                <li><a class="dropdown-item status-option" data-status="terima" href="#">Terima</a></li>
                <li><a class="dropdown-item status-option" data-status="tolak" href="#">Tolak</a></li>
            </ul>
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
                    <td>{{ $item->mengelola->user->name ?? 'Tidak tersedia' }}</td>
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
                        <a href="/admin/verification/{{ $item->id}}/data-pendaftar">Lihat disini</a>
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
            // Filter event untuk dropdown waktu
            $('.filter-option').click(function(event) {
                event.preventDefault();
                var filter = $(this).data('filter');

                // Ambil nilai status yang dipilih
                var status = $('.status-option').data('status');

                // Kirim permintaan AJAX dengan filter waktu dan status
                sendFilterRequest(filter, status);

                // Perbarui teks tombol dropdown
                var text = $(this).text();
                $('.dropdown-toggle[data-bs-toggle="dropdown"]').eq(0).text(text);
            });

            // Filter event untuk dropdown status
            $('.status-option').click(function(event) {
                event.preventDefault();
                var status = $(this).data('status');

                // Ambil nilai filter waktu yang dipilih
                var filter = $('.filter-option').data('filter');

                // Kirim permintaan AJAX dengan filter waktu dan status
                sendFilterRequest(filter, status);

                // Perbarui teks tombol dropdown
                var text = $(this).text();
                $('.dropdown-toggle[data-bs-toggle="dropdown"]').eq(1).text(text);
            });

            // Fungsi untuk mengirim permintaan AJAX dengan filter waktu dan status
            function sendFilterRequest(filter, status) {
                $.ajax({
                    url: '{{ route("objek-wisata.filter") }}',
                    type: 'GET',
                    data: {
                        filter: filter,
                        status: status
                    },
                    success: function(response) {
                        updateTable(response.data);
                    }
                });
            }

            // Fungsi untuk memformat tanggal
            function formatDate(dateString) {
                var options = { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' };
                var date = new Date(dateString);
                return date.toLocaleDateString('id-ID', options);
            }

            // Update table function
            function updateTable(data) {
                var tbody = $('table tbody');
                tbody.empty();

                data.forEach(function(item) {
                    var statusText = '';
                    if (!item.status) {
                        statusText = 'Menunggu Verifikasi';
                    } else if (item.status === 'terima') {
                        statusText = 'Objek Wisata telah diterima';
                    } else if (item.status === 'tolak') {
                        statusText = 'Objek Wisata ditolak';
                    }

                    var actions = '';
                    if (!item.status) {
                        actions = '<button class="status-button btn btn-success" data-id="' + item.id + '" data-status="terima">Terima</button>' +
                                '<button class="status-button btn btn-danger" data-id="' + item.id + '" data-status="tolak">Tolak</button>';
                    } else {
                        if (item.status === 'terima') {
                            actions = '<button class="status-button btn btn-success">Terima</button>';
                        } else if (item.status === 'tolak') {
                            actions = '<button class="status-button btn btn-danger">Tolak</button>';
                        }
                    }

                    var row = '<tr>' +
                        '<td>' + (item.mengelola && item.mengelola.user ? item.mengelola.user.name : '') + '</td>' +
                        '<td>' + item.nama_wisata + '</td>' +
                        '<td>' + item.deskripsi + '</td>' +
                        '<td>' + formatDate(item.created_at) + '</td>' +
                        '<td>' + statusText + '</td>' +
                        '<td><a href="#">Lihat disini</a></td>' +
                        '<td>' + actions + '</td>' +
                    '</tr>';
                    tbody.append(row);
                });
            }

            // Update status event
            $(document).on('click', '.status-button', function() {
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
