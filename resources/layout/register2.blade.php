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
    <img src="{{url('asset/front-end/image/gambar-template-registrasi.png')}}" alt="gambar-template-regsitrasi" width="930" height="1,296">
    <div class="logo">
    <img src="{{url('asset/front-end/image/Logo-Idestinasi.png')}}" alt="Logo-Idestinasi" width="164,93" height="54">
    </div>
    <div class="wrapper">
      <form action="">
        <h2>Selangkah Lebih Dekat</h2>
        <p>Lengkapi data dirimu untuk mulai bersama Kami</p>
        
        <div class="input-box">
          <input type="text" required />
          <label>Nama Lengkap</label>
        </div>
        <div class="input-box">
          <input type="number" required />
          <label>Nomor Telepon</label>
        </div>
        <div class="input-box">
          <input type="text" required />
          <label>Tempat Tinggal</label>
        </div>
        <div class="input-box">
          <input type="number" required />
          <label>Usia</label>
        <div class="input-box">
          <label>Jenis Kelamin</label>
          <button for="tombol">Pria</button>
          <button for="tombol">Wanita</button>
        </div>

        <button type="submit" class="btn">Daftar Sekarang</button>

      </form>
    </div>
  </body>
</html>


  