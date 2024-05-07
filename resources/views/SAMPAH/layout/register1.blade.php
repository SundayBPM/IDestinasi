
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
    <link rel="stylesheet" href="css/registrasi.css" />
  </head>
  <body>
    <img src="{{url('asset/cover.png')}}" alt="cover.png">
    <div class="logo">
    <img src="{{url('asset/logoidestinasi.png')}}" alt="logoidestinasi.png">
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
          <br>
          <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">Pengelola objek wisata</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">Wisatawan</label>
          </br>
        </div>
        
        <button type="submit" class="btn">Daftar</button>

        <div class="register">
          <p>Sudah memiliki akun? <a href="login.php">Masuk ke akun</a></p>
          
          <p class="or">atau</p>
         
          <center>
          <img src="{{url('asset/google.png')}}" alt="google.png">
          <a class="google" href="#"
          alt="google.png">Lanjutkan dengan Google</a 
          </center>
        </div>
      </form>
    </div>
  </body>
</html>



  