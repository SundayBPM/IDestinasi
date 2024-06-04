<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IDestinasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;200;300;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://kit.fontawesome.com/01706c9c94.js" crossorigin="anonymous"></script>
  </head>
  <body>

  <!-- Navbar -->
  <header class="header">
      <!-- Logo -->
      <a href="/" class="logo"><img src="{{ asset('img/IDESTINASI.LOGO.png') }}" /></a>
      <!-- Navbar List -->
      <nav class="navbar">
        <a href="destinations.html">Destinasi</a>
        <a href="/eksplore-objek-wisata">Eksplor</a>
        <a href="#paket-tur">Paket Tur</a>
        <a href="#artikel">Artikel</a>
        <a href="/ulasan">Ulasan</a>
      </nav>
      
      <!-- STRAT DROP DOWN -->
      @if (Auth::check())
        <!-- pengelola -->
        @if (Auth::user()->role == 'pengelola')
        <div class="profile">
          <i data-feather="search" class="search"></i>
          <div class="profile-dropdown">
            <div class="profile-dropdown-btn" data-dropdown="pengelola" onclick="toggle('pengelola')">
              <div class="profile-img">
                <i class="fa-solid fa-circle"></i>
              </div>
              <span
                >Pengelola
                <i class="fa-solid fa-angle-down"></i>
              </span>
            </div>

            <ul class="profile-dropdown-list">
              <li class="profile-dropdown-list-item">
                <a href="edit-profil">
                  <i class="fa-regular fa-user"></i>
                  Edit Profile
                </a>
              </li>

              <li class="profile-dropdown-list-item">
                <a href="/kelola-objek-wisata">
                  <i class="fa-solid fa-list-check"></i>
                  Kelola Objek Wisata
                </a>
              </li>
          
              <li class="profile-dropdown-list-item">
                <a href="/informasi-statistik">
                  <i class="fa-solid fa-chart-column"></i>
                  Statistik Wisata
                </a>
              </li>
              <hr />
              <li class="profile-dropdown-list-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
                </a>
              </li>
            </ul>
          </div>
        </div>
        @endif
          <!-- Wisatawan -->
        @if (Auth::user()->role == 'wisatawan')
          <div class="profile">
            <i data-feather="search" class="search"></i>
            <div class="profile-dropdown">
              <div class="profile-dropdown-btn" data-dropdown="wisatawan" onclick="toggle('wisatawan')">
                <div class="profile-img">
                  <i class="fa-solid fa-circle"></i>
                </div>
                <span
                  >{{ Auth::user()->name }}
                  <i class="fa-solid fa-angle-down"></i>
                </span>
              </div>

              <ul class="profile-dropdown-list">
                <li class="profile-dropdown-list-item">
                  <a href="edit-profil">
                    <i class="fa-regular fa-user"></i>
                    Edit Profile
                  </a>
                </li>
                <hr />
                <li class="profile-dropdown-list-item">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                  <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
                  </a>
                </li>
              </ul>
            </div>
          </div>
        @endif
        @else
          <div class="profile">
            <i data-feather="search" class="search"></i>
            <a href="{{route('register')}}">Sign Up</a>
            <a href="{{route('login')}}" class="special">Login</a>
            <i data-feather="menu" class="menu" id="ham-menu"></i>
          </div>
      @endif
      <!-- END DROP DOWN -->
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

    <script src="{{ asset('js/index.js') }}"></script>
    <script src="./js/index.js"></script>
    <script src="./js/logged-in.js"></script>
  </body>
</html>
