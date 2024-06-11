@extends('layouts.app')

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
        </div>
    </div>
</div>
@endsection