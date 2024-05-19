<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- import bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container-fluid login_page">
        <div class="left_login_side">
            <img src="asset/6faa57f843c594386d98aa756d6c713e.png" class="gambar1">
            <a href="/">
                <img src="asset/logoidestinasi.png" class="gambar2">
            </a>
        </div>

        <div class="right_login_side">
            <h1>Mulai Perjalanan Wisatamu 👋</h1>
            <p>Masukkan detail untuk membuat akun dan pilih peranmu!</p>
            <div class="loginArea">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input id="name" type="text" class="input_data_diri" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                    
                    <input id="email" type="email" class="input_data_diri" name="email" value="{{ old('email') }}" placeholder="Alamat Email" required autocomplete="email" autofocus>
                    
                    <input id="password" type="password" class="input_data_diri" name="password" placeholder="Kata Sandi" required autocomplete="current-password">
                    <input id="password-confirm" type="password" class="input_data_diri" name="password_confirmation" placeholder="Konfirmasi Sandi" required autocomplete="new-password">
                    
                    <input id="no_telp" type="text" class="input_data_diri" name="no_telp" placeholder="Nomor Telepon" value="{{ old('no_telp') }}" required autocomplete="no_telp" autofocus>
                    <input id="domisili" type="text" class="input_data_diri" name="domisili" placeholder="Tempat Tinggal" value="{{ old('domisili') }}" required autocomplete="domisili" autofocus>
                    <input id="usia" type="text" class="input_data_diri" name="usia" placeholder="Usia" value="{{ old('usia') }}" required autocomplete="usia" autofocus>
                    
                    <input id="role_pengelola" type="radio" name="role" value="pengelola" required>Pengelola Objek Wisata
                    <input id="role_wisatawan" type="radio" name="role" value="wisatawan" required>Wisatawan
                    
                    <p>Jenis Kelamin</p>
                    <input id="gender_pria" type="radio" name="gender" value="pria" required>Pria
                    <input id="gender_wanita" type="radio" name="gender" value="wanita" required>Wanita

                    <button type="submit" class="btn btn-primary">
                        {{ __('Daftar Sekarang') }}
                    </button>
            </div>


        </div>
    </div>
    
</body>
</html>