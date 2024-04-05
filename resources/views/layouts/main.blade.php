<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jelajah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;200;300;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/index.css" />
    <!-- import font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://unpkg.com/feather-icons"></script> 
  </head>
  <body>
    <!-- Navbar -->
    <header class="header">
      <div class="logo">
        <img src="img/logo.png" />
      </div>
      <ul>
        <li><a href="/">Tentang Kami</a></li>
        <li><a href="/">Eksplor</a></li>
        <li><a href="/">Paket Tur</a></li>
        <li><a href="/">Artikel</a></li>
        <li><a href="/">Ulasan</a></li>
        <li><a href="#sign-up">Sign Up</a></li>
        <li><a href="#login" class="special">Login</a></li>
      </ul>
      <div class="menu">
        <label for="chk1">
          <i class="fa fa-bars"></i>
        </label>
      </div>
      <input type ="checkbox" name ="" id ="chk1">
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
  </body>
</html>
