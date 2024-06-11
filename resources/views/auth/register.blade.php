@extends('layouts.app')

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 03febdb378175874f6ab985c52dcaef5a34ee8b9
<<<<<<< HEAD
        <div class="register">
          <p>Sudah memiliki akun? <strong><a href="/login">Masuk ke akun</strong></a></p>
          
          <p class="or">atau</p>
        
              <a class="google" href="#"
              alt="google.png">
              Lanjutkan dengan Google
              <img src="{{url('asset/google.png')}}" alt="google.png">
            </a>
=======
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="domisili" class="col-md-4 col-form-label text-md-end">Domisili</label>

                            <div class="col-md-6">
                                <input id="domisili" type="text" class="form-control" name="domisili">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="role" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <input id="role-wisatawan" type="radio" name="role" value="wisatawan">Wisatan
                                <input id="role-pengelola" type="radio" name="role" value="pengelola">Pengelola
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
>>>>>>> 1f2e6a7be2b5a0b72671a6fe641230399e3866ec
<<<<<<< HEAD
=======
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


>>>>>>> 425144de7459cf81c1c7bfda3033c7bfe51f8b0c
=======
>>>>>>> 03febdb378175874f6ab985c52dcaef5a34ee8b9
        </div>
    </div>
</div>
@endsection