<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Reservasi Tiket">
    <meta name="description" content="">
    <title>informasi objek wisata</title>
    <link rel="stylesheet" href="informasi_objek_wisata.css" media="screen">
    <script class="u-script" type="text/javascript" src="payment(query).js" defer=""></script>
    <script class="u-script" type="text/javascript" src="payment.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="informasi objek wisata">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="informasi-objek-wisata.html" data-home-page-title="informasi objek wisata" data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-section-1" id="sec-991d">
      <img class="u-expanded-width u-image u-image-default u-image-1" src="{{ asset('img/' . $wisata->foto) }}" alt="" data-image-width="850" data-image-height="638">
      <a href="{{ route('landingpage.index') }}" class="u-border-1 u-border-custom-color-8 u-btn u-btn-round u-button-style u-hover-white u-radius u-text-body-alt-color u-white u-btn-1"><span class="u-file-icon u-icon u-text-black u-icon-1"><img src="images/10136720-ed3aa50f.png" alt=""></span>
      </a>
      <h1 class="u-custom-font u-text u-text-default u-text-1">{{ $wisata->nama_wisata }}</h1>
      <h2 class="u-custom-font u-text u-text-palette-5-base u-text-2">{{ $wisata->lokasi }}</h2>
      <div class="u-align-center u-clearfix u-group-elements u-group-elements-1">
        <a href="#" class="u-btn u-btn-round u-button-style u-custom-color-17 u-custom-font u-radius u-text-custom-color-9 u-btn-2">Terjangkau </a>
        <a href="#" class="u-btn u-btn-round u-button-style u-custom-color-17 u-custom-font u-radius u-text-custom-color-9 u-btn-3">{{ $wisata->jenis }}</a>
      </div>
      <div class="u-align-center u-container-style u-group u-opacity u-opacity-0 u-shape-rectangle u-group-1">
        <div class="u-container-layout">
          <div class="u-absolute-hcenter u-border-1 u-border-grey-dark-1 u-line u-line-vertical u-line-1"></div>
          <p class="u-custom-font u-text u-text-custom-color-13 u-text-3">Tiket Terjual </p>
          <p class="u-custom-font u-text u-text-custom-color-13 u-text-4">85 Reviews </p>
          <p class="u-custom-font u-text u-text-default u-text-5">1K </p>
          <p class="u-custom-font u-text u-text-default u-text-6">4.8<br>
          </p>
          <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="images/2099045-fb9ddd46.png" alt="" data-image-width="128" data-image-height="128">
          <div class="u-rotation-parent u-rotation-parent-1"><span class="u-file-icon u-icon u-icon-2"><img src="images/7411157.png" alt=""></span>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-group-elements u-group-elements-2" data-href="#">
        <a href="#" class="u-border-1 u-border-custom-color-11 u-btn u-btn-round u-button-style u-custom-font u-radius u-text-custom-color-11 u-white u-btn-4"><span class="u-file-icon u-icon u-text-custom-color-11 u-icon-3"><img src="images/5381808-2d2767e5.png" alt=""></span>Tambah ke Wishlist<br>
        </a>
        <a href="#sec-07db" class="u-border-1 u-border-custom-color-11 u-btn u-btn-round u-button-style u-custom-font u-dialog-link u-radius u-text-custom-color-11 u-white u-btn-5"><span class="u-file-icon u-icon u-text-custom-color-11 u-icon-4"><img src="images/9121736-b346027a.png" alt=""></span>Bagikan<br>
        </a>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-8eb2">
      <div class="u-border-20 u-border-grey-5 u-expanded-width u-line u-line-horizontal u-line-1"></div>
      <h2 class="u-custom-font u-text u-text-1">Jam Operasional<br>
      </h2>
      <div class="u-clearfix u-group-elements u-group-elements-1">
        <p class="u-custom-font u-text u-text-custom-color-9 u-text-2">Buk​a</p><span class="u-file-icon u-icon u-text-custom-color-8 u-icon-1"><img src="images/10068341-e973da87.png" alt=""></span>
        <p class="u-custom-font u-text u-text-custom-color-8 u-text-3">{{ $wisata->jam_operasional }}</p>
      </div>
      <h2 class="u-custom-font u-text u-text-4">Deskripsi<br>
      </h2>
      <p class="u-align-justify u-custom-font u-text u-text-custom-color-8 u-text-5"> {{ $wisata->deskripsi }}</p>
      <h2 class="u-custom-font u-text u-text-6">Foto Objek Wisata<br>
      </h2>
      <div class="u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-none u-gallery-1">
        <div class="u-gallery-inner u-gallery-inner-1">
          <div class="u-effect-hover-zoom u-gallery-item u-shape-rectangle" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images/object1.jpg" data-image-width="368" data-image-height="368">
            </div>
            <div class="u-over-slide u-shading u-over-slide-1"></div>
          </div>
          <div class="u-effect-hover-zoom u-gallery-item u-shape-rectangle" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images/object2.jpg" data-image-width="368" data-image-height="368">
            </div>
            <div class="u-over-slide u-shading u-over-slide-2"></div>
          </div>
          <div class="u-effect-hover-zoom u-gallery-item u-shape-rectangle" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images/object3.jpg" data-image-width="368" data-image-height="368">
            </div>
            <div class="u-over-slide u-shading u-over-slide-3"></div>
          </div>
          <div class="u-effect-hover-zoom u-gallery-item u-shape-rectangle" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images/object4.jpg" data-image-width="368" data-image-height="368">
            </div>
            <div class="u-over-slide u-shading u-over-slide-4"></div>
          </div>
        </div>
      </div>
      <h2 class="u-custom-font u-text u-text-7">Lokasi<br>
      </h2>
      <div class="u-clearfix u-group-elements u-group-elements-2">
        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/location.jpg" alt="" data-image-width="34" data-image-height="40">
        <p class="u-custom-font u-text u-text-8">{{ $wisata->lokasi }}</p>
      </div>
      <div class="u-grey-light-2 u-map u-map-1">
        <div class="embed-responsive">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510311.75962579943!2d118.46342415000001!3d2.22487435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3212abcef5b94afb%3A0xe4cf7029473436a9!2sDerawan%20Islands!5e0!3m2!1sen!2sid!4v1715347841954!5m2!1sen!2sid" data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWVtYmVkJTIyJTJDJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyQyUyME5ldyUyMFlvcmslMjIlMkMlMjJ6b29tJTIyJTNBMTAlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCUyQyUyMmVtYmVkJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEITFtMTghMW0xMiExbTMhMWQ1MTAzMTEuNzU5NjI1Nzk5NDMhMmQxMTguNDYzNDI0MTUwMDAwMDEhM2QyLjIyNDg3NDM1ITJtMyExZjAhMmYwITNmMCEzbTIhMWkxMDI0ITJpNzY4ITRmMTMuMSEzbTMhMW0yITFzMHgzMjEyYWJjZWY1Yjk0YWZiJTI1M0EweGU0Y2Y3MDI5NDczNDM2YTkhMnNEZXJhd2FuJTI1MjBJc2xhbmRzITVlMCEzbTIhMXNlbiEyc2lkITR2MTcxNTM0Nzg0MTk1NCE1bTIhMXNlbiEyc2lkJTIyJTdE"></iframe>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-09ed">
      <div class="u-border-20 u-border-grey-5 u-expanded-width u-line u-line-horizontal u-line-1"></div>
      <h2 class="u-custom-font u-text u-text-1">Ulasan dan Rating </h2>
      <a href="#" class="u-border-1 u-border-custom-color-11 u-btn u-btn-round u-button-style u-custom-font u-radius u-text-custom-color-11 u-white u-btn-1">Lihat Semua Ulasan </a>
      <p class="u-custom-font u-text u-text-palette-5-base u-text-2"> Lihat rating dan ulasan yang dikirim oleh pengunjung lain</p>
      <div class="u-layout-horizontal u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <div class="u-border-1 u-border-custom-color-14 u-custom-item u-radius u-shape u-shape-round u-shape-1"></div>
              <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/womanprofilepic.png" alt="" data-image-width="83" data-image-height="83">
              <p class="u-custom-font u-custom-item u-text u-text-3">Nazwa Kirana</p>
              <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="images/2099045-fb9ddd46.png" alt="" data-image-width="128" data-image-height="128">
              <p class="u-custom-font u-custom-item u-text u-text-default u-text-4">4.8<br>
              </p>
              <p class="u-custom-font u-custom-item u-text u-text-5"> Bagus banget pantainya, fasilitasnya juga mendukung. Sangat recommended untuk teman-teman berkunjung ketika  liburan!</p>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <div class="u-border-1 u-border-custom-color-14 u-custom-item u-radius u-shape u-shape-round u-shape-2"></div>
              <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-3" src="images/womanprofilepic.png" alt="" data-image-width="83" data-image-height="83">
              <p class="u-custom-font u-custom-item u-text u-text-default u-text-6">Nazwa Kirana</p>
              <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-4" src="images/2099045-fb9ddd46.png" alt="" data-image-width="128" data-image-height="128">
              <p class="u-custom-font u-custom-item u-text u-text-default u-text-7">4.8<br>
              </p>
              <p class="u-custom-font u-custom-item u-text u-text-8"> Bagus banget pantainya, fasilitasnya juga mendukung. Sangat recommended untuk teman-teman berkunjung ketika  liburan!</p>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <div class="u-border-1 u-border-custom-color-14 u-custom-item u-radius u-shape u-shape-round u-shape-3"></div>
              <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-5" src="images/womanprofilepic.png" alt="" data-image-width="83" data-image-height="83">
              <p class="u-custom-font u-custom-item u-text u-text-default u-text-9">Nazwa Kirana</p>
              <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-6" src="images/2099045-fb9ddd46.png" alt="" data-image-width="128" data-image-height="128">
              <p class="u-custom-font u-custom-item u-text u-text-default u-text-10">4.8<br>
              </p>
              <p class="u-custom-font u-custom-item u-text u-text-11"> Bagus banget pantainya, fasilitasnya juga mendukung. Sangat recommended untuk teman-teman berkunjung ketika  liburan!</p>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-4">
              <div class="u-border-1 u-border-custom-color-14 u-custom-item u-radius u-shape u-shape-round u-shape-4"></div>
              <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-7" src="images/womanprofilepic.png" alt="" data-image-width="83" data-image-height="83">
              <p class="u-custom-font u-custom-item u-text u-text-default u-text-12">Nazwa Kirana</p>
              <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-8" src="images/2099045-fb9ddd46.png" alt="" data-image-width="128" data-image-height="128">
              <p class="u-custom-font u-custom-item u-text u-text-default u-text-13">4.8<br>
              </p>
              <p class="u-custom-font u-custom-item u-text u-text-14"> Bagus banget pantainya, fasilitasnya juga mendukung. Sangat recommended untuk teman-teman berkunjung ketika  liburan!</p>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-5">
              <div class="u-border-1 u-border-custom-color-14 u-custom-item u-radius u-shape u-shape-round u-shape-5"></div>
              <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-9" src="images/womanprofilepic.png" alt="" data-image-width="83" data-image-height="83">
              <p class="u-custom-font u-custom-item u-text u-text-default u-text-15">Nazwa Kirana</p>
              <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-10" src="images/2099045-fb9ddd46.png" alt="" data-image-width="128" data-image-height="128">
              <p class="u-custom-font u-custom-item u-text u-text-default u-text-16">4.8<br>
              </p>
              <p class="u-custom-font u-custom-item u-text u-text-17"> Bagus banget pantainya, fasilitasnya juga mendukung. Sangat recommended untuk teman-teman berkunjung ketika  liburan!</p>
            </div>
          </div>
        </div>
        <a class="u-gallery-nav u-gallery-nav-prev u-grey-25 u-hidden u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
        </a>
        <a class="u-gallery-nav u-gallery-nav-next u-grey-25 u-hidden u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
        </a>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-fd00">
      <div class="u-border-20 u-border-grey-5 u-expanded-width u-line u-line-horizontal u-line-1"></div>
      <div class="u-clearfix u-group-elements u-group-elements-1">
        <h2 class="u-custom-font u-text u-text-default u-text-1">Pilih Tanggal</h2>
        <p class="u-custom-font u-text u-text-palette-5-base u-text-2">Silahkan pilih tanggal yang tersedia</p>
      </div>
      <div class="u-clearfix u-group-elements u-group-elements-2">
        <a href="informasi-objek-wisata.html#sec-9fb5" class="u-btn u-btn-round u-button-style u-custom-color-14 u-custom-font u-custom-item u-hover-custom-color-11 u-radius u-text-custom-color-15 u-text-hover-white u-btn-1"> 18 Maret<br>
          <span style="font-weight: 400;">Senin</span>
        </a>
        <a href="informasi-objek-wisata.html#sec-9fb5" class="u-btn u-btn-round u-button-style u-custom-color-14 u-custom-font u-custom-item u-hover-custom-color-11 u-radius u-text-custom-color-15 u-text-hover-white u-btn-2"> 19 Maret<br>
          <span style="font-weight: 400;">Selasa</span>
        </a>
        <a href="informasi-objek-wisata.html#sec-9fb5" class="u-btn u-btn-round u-button-style u-custom-color-14 u-custom-font u-custom-item u-hover-custom-color-11 u-radius u-text-custom-color-15 u-text-hover-white u-btn-3"> 20 Maret<br>
          <span style="font-weight: 400;">Rabu</span>
        </a>
        <a href="informasi-objek-wisata.html#sec-9fb5" class="u-btn u-btn-round u-button-style u-custom-color-14 u-custom-font u-custom-item u-hover-custom-color-11 u-radius u-text-custom-color-15 u-text-hover-white u-btn-4"> 21 Maret<br>
          <span style="font-weight: 400;">Kamis</span>
        </a>
        <a href="informasi-objek-wisata.html#sec-9fb5" class="u-btn u-btn-round u-button-style u-custom-color-14 u-custom-font u-custom-item u-hover-custom-color-11 u-radius u-text-custom-color-15 u-text-hover-white u-btn-5"> 22 Maret<br>
          <span style="font-weight: 400;">Jumat</span>
        </a>
        <a href="informasi-objek-wisata.html#sec-9fb5" class="u-btn u-btn-round u-button-style u-custom-color-14 u-custom-font u-custom-item u-hover-custom-color-11 u-radius u-text-custom-color-15 u-text-hover-white u-btn-6"> 23 Maret<br>
          <span style="font-weight: 400;">Sabtu</span>
        </a>
        <a href="informasi-objek-wisata.html#sec-9fb5" class="u-btn u-btn-round u-button-style u-custom-color-14 u-custom-font u-custom-item u-hover-custom-color-11 u-radius u-text-custom-color-15 u-text-hover-white u-btn-7"> 24 Maret<br>
          <span style="font-weight: 400;">Minggu</span>
        </a>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="sec-9fb5">
      <div class="u-border-20 u-border-grey-5 u-expanded-width u-line u-line-horizontal u-line-1"></div>
      <div class="u-clearfix u-group-elements u-group-elements-1">
        <h2 class="u-custom-font u-text u-text-default u-text-1">Tiket Tersedia</h2>
        <p class="u-custom-font u-text u-text-palette-5-base u-text-2">Pilih tiket yang tersedia</p>
      </div><!--product--><!--product_options_json--><!--{"source":"6"}--><!--/product_options_json-->
      <div class="custom-expanded u-border-1 u-border-custom-color-14 u-container-style u-product u-radius u-shape-round u-product-1" data-products-datasource="site" data-product-id="6" data-payment-service="6080b441b2b477c66d0d02f3dd2cef80">
        <div class="u-container-layout u-container-layout-1"><!--product_title-->
          <h2 class="u-custom-font u-product-control u-text u-text-default u-text-grey-75 u-text-3">Tiket Keluarga Lengkap</h2><!--/product_title--><!--product_content-->
          <div class="u-custom-font u-product-control u-product-desc u-text u-text-palette-5-dark-1 u-text-4">Berlaku pada tanggal yang dipilih - Reservasi minimal 1 hari sebelumnya - Pengembalian dana tidak diizinkan</div><!--/product_content-->
          <div class="u-border-2 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-opacity u-opacity-30 u-line-2"></div><!--product_price-->
          <div data-add-zero-cents="false" class="u-custom-font u-product-control u-product-price u-product-price-1">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-old-price" style="text-decoration: line-through !important;"></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-custom-color-9" style="font-size: 1.875rem; font-weight: 800;">Rp 200,000</div><!--/product_regular_price-->
            </div>
          </div><!--/product_price-->
          <p class="u-custom-font u-text u-text-5">Harga</p><!--product_button--><!--options_json--><!--{"clickType":"buy-now","content":"Beli​"}--><!--/options_json-->
          <a href="#sec-0bf7" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-11 u-custom-font u-product-control u-radius u-btn-1 u-dialog-link u-payment-button" data-product-button-click-type="buy-now" data-product-id="6" data-payment-service="{&quot;id&quot;:&quot;6080b441b2b477c66d0d02f3dd2cef80&quot;,&quot;formServices&quot;:[&quot;fa5a6609-0384-3464-2c25-b90f6a86b4db&quot;],&quot;paymentMethods&quot;:[{&quot;id&quot;:&quot;049ec23e44b89b283e29f5a162112d86&quot;,&quot;clientId&quot;:&quot;&quot;,&quot;type&quot;:&quot;paypal&quot;,&quot;disableFunding&quot;:&quot;,card,credit,paylater,bancontact,blik,giropay,eps,ideal,mercadopago,mybank,p24,sepa,sofort,venmo&quot;},{&quot;id&quot;:&quot;601cc7f84266b55dfbbe55fb7edeeccf&quot;,&quot;clientId&quot;:&quot;email-id&quot;,&quot;type&quot;:&quot;email&quot;}],&quot;userToken&quot;:&quot;e8d51b33-00c5-4478-9649-8b2b9def3129&quot;}" data-product="{&quot;id&quot;:&quot;6&quot;,&quot;name&quot;:&quot;tiket-keluarga-lengkap-1&quot;,&quot;title&quot;:&quot;Tiket Keluarga Lengkap&quot;,&quot;description&quot;:&quot;Berlaku pada tanggal yang dipilih - Reservasi minimal 1 hari sebelumnya - Pengembalian dana tidak diizinkan&quot;,&quot;fullDescription&quot;:&quot;&quot;,&quot;price&quot;:&quot;200000&quot;,&quot;oldPrice&quot;:&quot;&quot;,&quot;quantity&quot;:1,&quot;currency&quot;:&quot;USD&quot;,&quot;sku&quot;:&quot;&quot;,&quot;outOfStock&quot;:false,&quot;isFeatured&quot;:false,&quot;categories&quot;:[&quot;1&quot;],&quot;images&quot;:[],&quot;created&quot;:1713698178273,&quot;updated&quot;:1716191701647,&quot;isDefault&quot;:true,&quot;categoriesData&quot;:[{&quot;link&quot;:&quot;./products/products.html#/1///1&quot;,&quot;title&quot;:&quot;tickets&quot;}]}"><!--product_button_content-->Beli <!--/product_button_content--></a><!--/product_button-->
        </div>
      </div><!--/product-->
    </section>
    
  
  <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-payment-dialog u-dialog-section-8" id="sec-0bf7">
      <div class="u-align-center u-container-style u-dialog u-radius-25 u-shape-round u-white u-dialog-1">
        <div class="u-container-layout u-valign-bottom u-container-layout-1">
          <h5 class="u-align-left u-text u-text-1">PEMBELIAN TIKET</h5>
          <div class="u-expanded-width u-products u-products-1" data-site-sorting-prop="created" data-site-sorting-order="desc" data-items-per-page="1" data-products-datasource="site" data-site-category="1">
            <div class="u-list-control"></div>
            <div class="u-repeater u-repeater-1">
              <!--product_item--><div class="u-container-style u-products-item u-repeater-item" data-product-id="6">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                  <div class="u-container-style u-group u-shape-rectangle u-group-1">
                    <div class="u-container-layout">
                      <h5 class="u-align-left u-product-control u-text u-text-2">
                        <a class="u-product-title-link" href="#">Tiket Keluarga Lengkap</a>
                      </h5>
                      <div class="u-align-center u-product-control u-product-desc u-text u-text-3">Berlaku pada tanggal yang dipilih - Reservasi minimal 1 hari sebelumnya - Pengembalian dana tidak diizinkan</div>
                      <div class="u-align-left u-product-control u-product-quantity u-product-quantity-1">
                        <div class="u-hidden u-quantity-label">Quantity</div>
                        <div class="u-quantity-input" style="">
                          <a class="disabled minus u-btn-round u-button-style u-custom-color-14 u-quantity-button u-radius u-text-black" style="background-image: none; --radius: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve"><rect x="1" y="7" width="14" height="2"></rect></svg>
                          </a>
                          <input class="u-input" type="text" value="1" pattern="[0-9]+">
                          <a class="plus u-btn-round u-button-style u-custom-color-14 u-quantity-button u-radius u-text-black" style="background-image: none; --radius: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve"><rect x="7" y="1" width="2" height="14"></rect><rect x="1" y="7" width="14" height="2"></rect></svg>
                          </a>
                        </div>
                      </div>
                      <div class="u-align-left u-product-control u-product-price u-product-price-1" data-add-zero-cents="false">
                        <div class="u-price-wrapper u-spacing-10">
                          <div class="u-hide-price u-old-price" style="text-decoration: line-through !important;"></div>
                          <div class="u-price" style="font-size: 1.25rem; font-weight: 700;">Rp 200,000</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-expanded-width u-payment-services u-tab-links-align-justify u-tab-payment u-tab-vertical u-tabs u-payment-services-1" data-payment-order-approved-message="Your order has been approved. Thank you!" data-payment-order-cancelled-message="Unable to process your order. Please try again later.">
                    <ul class="u-tab-list u-unstyled" role="tablist"><li class="u-tab-item" role="presentation"></li><li class="u-tab-item" role="presentation"><a class="active u-active-grey-10 u-button-style u-payment-email u-tab-link" id="link-tab-ab81" href="#tab-ab81" role="tab" aria-controls="tab-ab81" aria-selected="true"><input type="radio" name="payment-group" checked="checked"><span>Email</span><svg class="u-svg-content" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24"><path fill="#66B6FF" d="M0.7,3.6L12.2,13l11-9.3H0.7z M0,19.4l8.2-8.2L0,4.5V19.4L0,19.4z M9.1,11.9l-8.4,8.4h22.6l-8-8.4l-2.6,2.3
l0,0c-0.2,0.2-0.5,0.2-0.7,0L9.1,11.9z M16.1,11.2l7.9,8.3v-15L16.1,11.2z"></path></svg>
</a>
</li></ul>
                    <div class="u-tab-content">
                      <div class="u-container-style u-payment-email u-tab-active u-tab-pane" id="tab-ab81" role="tabpanel" aria-labelledby="link-tab-ab81">
                        <div class="u-container-layout u-container-layout-4">
                          <form action="#" method="post" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="payment-email-form">
                            <div class="u-form-email u-form-group">
                              <label for="payment-email" class="u-label">Email</label>
                              <input type="email" placeholder="Your email" id="payment-email" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                            </div>
                            <div class="u-form-group u-form-message">
                              <label for="payment-message" class="u-label">Notes</label>
                              <textarea placeholder="Your message" rows="4" cols="50" id="payment-notes" name="notes" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                              <a href="#" class="u-btn u-btn-submit u-button-style">Submit Order</a>
                              <input type="submit" value="submit" class="u-form-control-hidden">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!--/product_item-->
            </div>
            <div class="u-list-control"></div>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section>
    <section class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-9" id="sec-07db">
      <div class="u-container-style u-dialog u-white u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
          <p class="u-align-center u-custom-font u-text u-text-default u-text-1">Share this place.</p>
          <a href="https://www.facebook.com/" class="u-border-2 u-border-palette-5-light-2 u-btn u-button-style u-text-palette-5-dark-1 u-white u-btn-1" target="_blank"><span class="u-file-icon u-icon u-text-palette-1-dark-1 u-icon-1"><img src="img/1946450-c50a8eb9.png" alt=""></span>&nbsp;Facebook 
          </a>
          <a href="https://x.com/compose/post" class="u-border-2 u-border-palette-5-light-2 u-btn u-button-style u-text-palette-5-dark-1 u-white u-btn-2" target="_blank"><span class="u-file-icon u-icon u-icon-2"><img src="img/5968958.png" alt=""></span>&nbsp;Twitter
          </a>
          <a href="https://www.linkedin.com/feed/" class="u-border-2 u-border-palette-5-light-2 u-btn u-button-style u-text-palette-5-dark-1 u-white u-btn-3" target="_blank"><span class="u-file-icon u-icon u-text-palette-1-base u-icon-3"><img src="img/739219-3ba59f23.png" alt=""></span>&nbsp;LinkendIn
          </a>
          <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="u-border-2 u-border-palette-5-light-2 u-btn u-button-style u-text-palette-5-dark-1 u-white u-btn-4" target="_blank"><span class="u-file-icon u-icon u-icon-4"><img src="img/16509529.png" alt=""></span>Gmail 
          </a>
        </div><button class="u-border-2 u-border-palette-5-dark-1 u-dialog-close-button u-icon u-radius u-text-palette-5-dark-1 u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 348.333 348.334" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9711"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 348.333 348.334" x="0px" y="0px" id="svg-9711" style="enable-background:new 0 0 348.333 348.334;"><g><path d="M336.559,68.611L231.016,174.165l105.543,105.549c15.699,15.705,15.699,41.145,0,56.85   c-7.844,7.844-18.128,11.769-28.407,11.769c-10.296,0-20.581-3.919-28.419-11.769L174.167,231.003L68.609,336.563   c-7.843,7.844-18.128,11.769-28.416,11.769c-10.285,0-20.563-3.919-28.413-11.769c-15.699-15.698-15.699-41.139,0-56.85   l105.54-105.549L11.774,68.611c-15.699-15.699-15.699-41.145,0-56.844c15.696-15.687,41.127-15.687,56.829,0l105.563,105.554   L279.721,11.767c15.705-15.687,41.139-15.687,56.832,0C352.258,27.466,352.258,52.912,336.559,68.611z"></path>
</g></svg></button>
      </div>
    </section>
    <style>.u-dialog-section-8 .u-dialog-1 {
  width: 920px;
  min-height: 776px;
  height: auto;
  margin: 60px auto 60px calc(((100% - 1140px) / 2)  + 94px);
}

.u-dialog-section-8 .u-container-layout-1 {
  padding: 17px 35px;
}

.u-dialog-section-8 .u-text-1 {
  font-weight: 700;
  margin: 0 165px 0 0;
}

.u-dialog-section-8 .u-products-1 {
  margin-top: 22px;
  margin-bottom: 0;
}

.u-dialog-section-8 .u-repeater-1 {
  grid-template-columns: 100%;
  min-height: 679px;
  grid-gap: 10px;
}

.u-dialog-section-8 .u-container-layout-2 {
  padding: 7px 0;
}

.u-dialog-section-8 .u-group-1 {
  width: 815px;
  min-height: 224px;
  height: auto;
  margin: 0 auto;
}

.u-dialog-section-8 .u-text-2 {
  margin: 20px 144px 0 37px;
}

.u-dialog-section-8 .u-text-3 {
  font-size: 0.875rem;
  margin: 9px 47px 0 17px;
}

.u-dialog-section-8 .u-product-quantity-1 {
  width: 120px;
  margin: 41px auto 0 38px;
}

.u-dialog-section-8 .u-product-price-1 {
  margin: -32px 60px 0 auto;
}

.u-dialog-section-8 .u-payment-services-1 {
  min-height: 444px;
}

.u-dialog-section-8 .u-container-layout-4 {
  padding: 20px;
}

.u-dialog-section-8 .u-icon-1 {
  width: 20px;
  height: 20px;
  left: auto;
  top: 36px;
  position: absolute;
  right: 35px;
  padding: 0;
}

@media (max-width: 1199px) {
  .u-dialog-section-8 .u-dialog-1 {
    margin-left: calc(((100% - 940px) / 2) + 20px);
  }

  .u-dialog-section-8 .u-text-1 {
    margin-right: 165px;
  }

  .u-dialog-section-8 .u-group-1 {
    height: auto;
  }
}

@media (max-width: 991px) {
  .u-dialog-section-8 .u-dialog-1 {
    width: 720px;
    margin-left: calc(((100% - 720px) / 2));
  }

  .u-dialog-section-8 .u-container-layout-1 {
    padding-left: 30px;
    padding-right: 30px;
  }

  .u-dialog-section-8 .u-text-1 {
    margin-right: 0;
  }

  .u-dialog-section-8 .u-group-1 {
    width: 660px;
  }

  .u-dialog-section-8 .u-text-2 {
    margin-right: 26px;
    margin-left: 0;
  }

  .u-dialog-section-8 .u-text-3 {
    margin-right: 0;
    margin-left: 0;
  }

  .u-dialog-section-8 .u-product-price-1 {
    margin-right: 0;
  }

  .u-dialog-section-8 .u-icon-1 {
    top: 32px;
    right: 30px;
  }
}

@media (max-width: 767px) {
  .u-dialog-section-8 .u-dialog-1 {
    width: 540px;
    margin-left: calc(((100% - 540px) / 2));
  }

  .u-dialog-section-8 .u-group-1 {
    width: 520px;
  }

  .u-dialog-section-8 .u-text-2 {
    margin-right: 0;
  }

  .u-dialog-section-8 .u-container-layout-4 {
    padding-left: 10px;
    padding-right: 10px;
  }
}

@media (max-width: 575px) {
  .u-dialog-section-8 .u-dialog-1 {
    width: 340px;
    margin-left: calc(((100% - 340px) / 2));
  }

  .u-dialog-section-8 .u-container-layout-1 {
    padding-left: 20px;
    padding-right: 20px;
  }

  .u-dialog-section-8 .u-text-1 {
    margin-right: 5px;
  }

  .u-dialog-section-8 .u-group-1 {
    width: 320px;
  }

  .u-dialog-section-8 .u-icon-1 {
    right: 20px;
  }
}
</style>

</body>
</html>