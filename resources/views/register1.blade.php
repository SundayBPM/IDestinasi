

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
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/registrasi.css" />
  </head>
  <body>
    <img src="{{url('asset/cover.png')}}" alt="cover.png">
    <div class="logo">
    </div>
    <div class="wrapper">
      <form action="">
        <h2>Mulai Perjalanan Wisatamu! <span>👋</span></h2>
        <p>Masukkan detail untuk membuat akun dan pilih peranmu!</p>
        <div class="input-box">
          <input type="text" required />
          <label>Alamat Email</label>
        </div>
        <div class="input-box">
          <input type="" required />
          <label>Kata sandi</label>
        </div>
        <div class="input-box">
          <input type="password" required />
          <label>Konfirmasi sandi</label>
        </div>
      
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">Pengelola objek wisata</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">Wisatawan</label>
          
        </div>
        
        <a href="/authController/register2" class="btn">Daftar</a>

        <div class="register">
          <p>Sudah memiliki akun? <strong><a href="login.php">Masuk ke akun</strong></a></p>
          
          <p class="or">atau</p>
        
          <img src="{{url('asset/google.png')}}" alt="google.png">
          <center>
          <a class="google" href="#"
          alt="google.png">Lanjutkan dengan Google</a 
          </center>
        </div>
      </form>
    </div>
  </body>
</html>



  