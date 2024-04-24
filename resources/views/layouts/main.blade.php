<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IDestinasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;200;300;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  </head>
  <body>

  <!-- Navbar -->
  <header class="header">
      <!-- Logo -->
      <a href="landingPage.blade.php" class="logo"><img src="img/logo.png" /></a>

      <!-- Navbar List -->
      <nav class="navbar">
        <a href="destinations.html">Destinasi</a>
        <a href="#eksplor">Eksplor</a>
        <a href="#paket-tur">Paket Tur</a>
        <a href="#artikel">Artikel</a>
        <a href="/ulasan">Ulasan</a>
      </nav>

      <!-- Profile -->
      <!-- <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a> -->

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf

      </form>
      <div class="profile">
        <i data-feather="search" class="search"></i>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">>Sign Out</a>
        
        <!-- <a href="#login" class="special">Login</a> -->
        <i data-feather="menu" class="menu" id="ham-menu"></i>
      </div>

      <!-- Search input -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="Cari apa..." />
        <i data-feather="search" class="search"></i>
      </div>
    </header>

    <!--container template-->
    <div class="container">
        @yield('container')
    </div>

    <!-- Footer starts -->

    <footer>
      <div class="row">
        <div class="col">
          <img src="img/logo.png" class="logo-footer" />
          <p>"Bersama Tingkatkan Pariwisata Indonesia"</p>
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
            <p>Technical Info</p>
          </a>
          <a href="#">
            <p>Other Products</p>
          </a>
        </div>
        <div class="col">
          <h3>Contact Us</h3>
          <p>Bandung, Indonesia</p>
          <p>40111</p>
          <p>idestinasi@gmail.com</p>
        </div>
        <div class="col">
          <h3>Subscribe Newletter</h3>
          <div class="input-box">
            <input
              type="email"
              placeholder="Enter your email"
              class="input-email"
            />
            <button type="submit">Subscribe</button>
          </div>
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

    <script src="./js/index.js"></script>
  </body>
</html>