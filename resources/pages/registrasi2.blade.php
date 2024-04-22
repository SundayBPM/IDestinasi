@extends(layouts.main)

@section(‘container’)
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
    <img src="{{url('asset/cover.png')}}" alt="cover">
    <div class="logo">
    
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
        </div>
        
        <div class="form-check form-check-inline">
          <label>Jenis Kelamin</label>
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">Pria</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">Wanita</label>
          
        </div>

        <button type="submit" class="btn">Daftar Sekarang</button>

      </form>
    </div>
  </body>
</html>

@endsection