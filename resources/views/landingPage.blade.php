<link rel="stylesheet" href="{{ asset('css/index.css') }}" />

@extends('layouts.main')
@section('container')
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
<div class ="layout-title">
      <div class="title">Temukan Promo dan Diskon</div>
      <div class="desc">Nikmati berbagai promo dan diskon dari IDestinasi untuk teman liburanmu</div>
</div>

<!--banner promo-->
<div class="container">
  <div class="slider-wrapper">
    <swiper-container class="mySwiper" class="mySwiper" init="false" autoplay-delay="2500" autoplay-disable-on-interaction="false" style="height: 400px; width:100%">
      <swiper-slide>
        <a href="./promo">
          <img id = "slide-1" src="img/lombok-promo.png" alt="Promo Lombok"/>
        </a>
      </swiper-slide> 
          
      <swiper-slide>
        <a href="./promo">
          <img id = "slide-2" src="img/lombok-promo.png" alt="Promo Lombok"/>
        </a>
      </swiper-slide> 

      <swiper-slide>
        <a href="./promo">
          <img id = "slide-3" src="img/lombok-promo.png" alt="Promo Lombok"/>
        </a>
      </swiper-slide> 
        </swiper-container>  
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script>
      const swiperEl = document.querySelector("swiper-container");

      const params = {
        injectStyles: [
          `
        .swiper-pagination-bullet {
          width: 20px;
          height: 20px;
          text-align: center;
          line-height: 20px;
          font-size: 12px;
          color: #000;
          opacity: 1;
          background: rgba(255, 255, 255, 0.8);
        }
  
        .swiper-pagination-bullet-active {
          color: #fff;
          background: #00C0CA;
        }
        `,
        ],
        pagination: {
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
          },
        },
      };

      Object.assign(swiperEl, params);

      swiperEl.initialize();
</script>

<!--rekomendasi objek wisata-->

@endsection