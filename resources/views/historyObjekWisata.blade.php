@extends('layouts/main')


@section('container')

  <!-- Navbar -->
  <header class="header">
      <!-- Logo -->
      <a href="/" class="logo"><img src="{{ asset('img/IDESTINASI.LOGO.png') }}" /></a>
      <!-- Navbar List -->
      <nav class="navbar">
        <a href="tentang-kami">Tentang Kami</a>
        <a href="destinations.html">Destinasi</a>
        <a href="#eksplor">Eksplor</a>
        <a href="#paket-tur">Paket Tur</a>
        <a href="#artikel">Artikel</a>
        <a href="/ulasan">Ulasan</a>
        <a href="#" class="navbar-icon"><img src="search-icon.png" alt="Search"></a>
        <a href="#" class="navbar-secondary-button">Sign Up</a>
        <a href="#" class="navbar-secondary-button">Log In</a>
      </nav>
      header
<div class="history-header">
    <img src="img/latar-navbar.png" alt="Deskripsi gambar">
    <h1>Histori Objek Wisatamu</h1>
</div>
    <!-- hsitory objek wisata-->
<div class="list-history-destinasi-text">
    <h1>Objek Wisata Sudah Dikunjungi</h1>
    <p>Lihat objek wisata yang sudah kamu kunjungi</p>
</div>
    <!--card rekomendasi paket-->
  <!--card 1-->
  <div class="card-container">
    <a href="#">
    <div class="card-layout">
      <div class="card img">
        <img src="img/derawan.png" alt="Wisata 1">
    </div>
      <div class="card-info">
        <div class="card-title">Kepulauan Derawan, Kaltim</div>
        <div class="date">17 Januari 2024</div>
        <div class="ticket">2 Tiket</div>
        <div class="price">IDR103.000</div>
        <a href="#" class="secondary-button">Beli Lagi</a>
        <a href="#" class="secondary-button">Hapus</a>
      </div>
    </div>
    </a>
    <!--card 2-->
    <a href="#">
    <div class="card-layout">
      <div class="card img">
        <img src="img/lombok.png" alt="Wisata 1">
    </div>
      <div class="card-info">
        <div class="card-title">Lombok</div>
        <div class="date">17 Januari 2024</div>
        <div class="ticket">2 Tiket</div>
        <div class="price">IDR103.000</div>
        <a href="#" class="secondary-button">Beli Lagi</a>
        <a href="#" class="secondary-button">Hapus</a>
      </div>
    </div>
    </a>
    <!--card 3-->
    <a href="#">
    <div class="card-layout">
      <div class="card img">
        <img src="img/pulau-komodo.png" alt="Wisata 1">
    </div>
      <div class="card-info">
        <div class="card-title">Pulau Komodo, NTT</div>
        <div class="date">17 Januari 2024</div>
        <div class="ticket">2 Tiket</div>
        <div class="price">IDR103.000</div>
        <a href="#" class="secondary-button">Beli Lagi</a>
        <a href="#" class="secondary-button">Hapus</a>
      </div>
    </div>
    </a>
       
    <
<!-- Footer starts -->

<footer>
      <div class="row">
        <div class="col">
          <img src="img/logo.png" class="logo-footer" />
          <p>"Unlock the Wonders of Indonesia with IDestinasi"</p>
          <div class="icon-sosmed"></div>
          <a href="#">
            <i data-feather="instagram"></i>
          </a>
          <a href="#">
            <i data-feather="linkedin"></i>
          </a>
          <a href="#">
            <i data-feather="facebook"></i>
          </a>
          <a href="#">
            <i data-feather="twitter"></i>
          </a>
        </div>
        <div class="col">
          <h3>About</h3>
          <a href="#">
            <p>Our Services</p>
          </a>
        </div>
        <div class="col">
          <h3>Contact Us</h3>
          <p>Bandung, Indonesia</p>
          <p>40111</p>
          <p>IdestinasIndonesia@gmail.com</p>
        </div>
      </div>
      <div class="lisensi">
        <p>© 2024 IDestinasi, All rights reserved</p>
      </div>
    </footer>

    <!-- Footer ends -->

    <script>
      feather.replace();
    </script>

    <script src="{{ asset('js/index.js') }}"></script>
    <script src="./js/index.js"></script>
    <script src="./js/logged-in.js"></script>
  </body>
</html>


@endsection
