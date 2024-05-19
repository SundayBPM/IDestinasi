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
            <img src="asset/81f32e54615ba4c21b72403afd2d672c.png" class="gambar1">
            <a href="/">
                <img src="asset/logoidestinasi.png" class="gambar2">
            </a>
        </div>

        <div class="right_login_side">
            <h1>Selamat Datang 👋</h1>
            <p>Lanjutkan dengan Google atau Masukkan Detail Login</p>
            <div class="loginArea">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> -->
                    <input id="email" type="email" class="input_data_diri" name="email" value="{{ old('email') }}" placeholder="Alamat Email" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
    
                    <input id="password" type="password" class="input_data_diri" name="password" placeholder="Kata Sandi" required autocomplete="current-password">
    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
    
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
    
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
    
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif                
                </form>
            </div>


        </div>
    </div>
    
</body>
</html>