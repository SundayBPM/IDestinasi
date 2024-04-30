<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="css/registrasi.css" /> -->
    <link rel="stylesheet" href="{{url('css/registrasi.css')}}" />
  </head>
  <body>
    @if (session('status'))
            <script>
                alert('{{ session('message') }}');
            </script>
    @endif
    <img src="{{url('asset/cover.png')}}" alt="cover.png">
    <div class="logo">
    </div>
    <div class="wrapper">
      <form action="{{ route('register_processStep1') }}" method="POST">
        @csrf
        <h2>Mulai Perjalanan Wisatamu! <span>👋</span></h2>
        <p>Masukkan detail untuk membuat akun dan pilih peranmu!</p>
        <div class="input-box">
          <input type="text" name="email" value="{{ session('email') }}" required />
          <label>Alamat Email</label>
        </div>
        <div class="input-box">
          <input type="password" name="password" required />
          <label>Kata sandi</label>
        </div>
        <div class="input-box">
          <input type="password" name="confirm_password" required />
          <label>Konfirmasi sandi</label>
        </div>
        <!-- dd all sessions -->
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="role" id="radio_pengelola" value="pengelola">
          <label class="form-check-label" for="radio_pengelola">Pengelola objek wisata</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="role" id="radio_wisatawan" value="wisatawan">
          <label class="form-check-label" for="radio_wisatawan">Wisatawan</label>
        </div>
        <br>
        <button type="submit" class="btn" style="border:1px solid #000; width:100%;">Daftar</button>

        <div class="register">
          <p>Sudah memiliki akun? <strong><a href="login.php">Masuk ke akun</strong></a></p>
          
          <p class="or">atau</p>
        
              <a class="google" href="#"
              alt="google.png">
              Lanjutkan dengan Google
              <img src="{{url('asset/google.png')}}" alt="google.png">
            </a>
        </div>
      </form>
    </div>
  </body>
</html>