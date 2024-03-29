<link rel="stylesheet" href="{{ asset('css/index.css') }}" />

@extends('layouts.main')
<!--page start-->
<div class="bgphoto">
      <a href="#" class="image-link">
        <div class="image-wrapper">
          <img src="img/img1.jpg" alt="" class="image" id="img1" />
          <p class="caption">
            Mengapa anda harus mempertimbangkan Pulau Raja Ampat, Provinsi Papua
            Barat.
          </p>
        </div>
      </a>
      <a href="#" class="image-link">
        <div class="image-wrapper">
          <img src="img/img2.jpg" alt="" class="image" id="img2" />
          <p class="caption">
            Keajaiban dunia, Candi Borobudur, Kabupaten Magelang, Jawa Tengah.
          </p>
        </div>
      </a>
      <a href="#" class="image-link">
        <div class="image-wrapper">
          <img src="img/img3.jpg" alt="" class="image" id="img3" />
          <p class="caption">
            Fakta menarik tentang Bukit Holbung Samosir, Sumatera Utara
          </p>
        </div>
      </a>
    </div>
<!--page start ends -->
@section('container')<div class="layout-section">
  <div class ="layout-title">
      <div class="title">Temukan Promo dan Diskon</div>
      <div class="desc">Nikmati berbagai promo dan diskon dari IDestinasi untuk teman liburanmu</div>
  </div>

  <div class="carousel-container">
    <div class="layout-card">
      <div style="width: 765px; background: linear-gradient(0deg, black 0%, black 100%); border-radius: 0px; overflow: hidden; display: inline-flex">
        <img style="width: 765px; height: 400px" src="img/lombok-promo.png">
      </div>
      <div class="bodytext"style="margin-top: 24px;" >Promo Diskon 50% ke Lombok</div>
    </div>
    <div class="layout-card">
      <div style="width: 765px; background: linear-gradient(0deg, black 0%, black 100%); border-radius: 0px; overflow: hidden; display: inline-flex">
        <img style="width: 765px; height: 400px" src="img/lombok-promo.png">
      </div>
      <div class="bodytext" style="margin-top: 24px;">Promo Diskon 50% ke Lombok</div>
    </div>
    <div class="layout-card">
      <div style="width: 765px; background: linear-gradient(0deg, black 0%, black 100%); border-radius: 0px; overflow: hidden; display: inline-flex">
        <img style="width: 765px; height: 400px" src="img/lombok-promo.png">
      </div>
      <div class="bodytext" style="margin-top: 24px;">Promo Diskon 50% ke Lombok</div>
    </div>
  </div>

@endsection