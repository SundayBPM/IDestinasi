<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
<script src="https://kit.fontawesome.com/6fab7730bd.js" crossorigin="anonymous"></script>

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
    <div class ="layout-section">
        <div class ="layout-title">
            <div class="title">Temukan Promo dan Diskon</div>
            <div class="desc">Nikmati berbagai promo dan diskon dari IDestinasi untuk teman liburanmu</div>
        </div>
    </div>

    <!--banner promo-->
    <div class="container">
        <div class="slider-wrapper">
            <swiper-container class="mySwiper" class="mySwiper" init="false" autoplay-delay="2500"
                autoplay-disable-on-interaction="false" style="height: 360px; width:100%">
                @foreach ($events as $event)
                    <swiper-slide>
                        <a href="{{ route('promo.detail', $event->id) }}">
                            <img src="{{ asset('img/' . $event->image_path) }}" alt="{{ $event->title }}"
                                id="{{ $event->id }}" />
                        </a>
                    </swiper-slide>
                @endforeach
            </swiper-container>
        </div>
    </div>
    <!--rekomendasi objek wisata-->
    <div class= "layout-section">
        <div class="layout-section-title">
            <div class ="layout-title">
                <div class="title">Rekomendasi Untukmu</div>
                <div class="desc">Lihat rekomendasi objek wisata sesuai preferensimu</div>
            </div>
            <a href="{{ route('objek-wisata.index') }}" class="secondary-button">Lihat Semua Wisata</a>
        </div>

        <!--card rekomendasi objek wisata-->

        <div class="card-container">
            @foreach ($data_recomended as $destinationId => $destination)
            <a href="{{ route('objek-wisata.show', $destination['id']) }}" dusk="objek-wisata-{{ $destination['id'] }}">
                    <div class="card-layout">
                        <div class="card img">
                            <img src="{{ asset('img/' . $destination['image']) }}" alt="{{ $destination['title'] }}">
                        </div>
                        <div class="card-info">
                            <div class="card-title">{{ $destination['title'] }}</div>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <div class="rating-value">{{ number_format($destination['average_rating'], 1) }}</div>
                                <div class="reviews">{{ $destination['rating_count'] }} Reviews</div>
                            </div>
                            <div class="price">Rp {{ $destination['price'] }}/pax</div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <!-- rekomendasi paket tour-->
    <div class= "layout-section">
        <div class="layout-section-title">
            <div class ="layout-title">
                <div class="title">Temukan Paket Tour Wisata Impianmu</div>
                <div class="desc">Temukan berbagai pilihan paket tour wisata lengkap dengan harga murah disini</div>
            </div>
            <a href="{{ route('paket-tour.index') }}" class="secondary-button">Lihat Semua Paket</a>
        </div>

        <!--card rekomendasi paket-->
        <!--card 1-->
        <div class="card-container">
            @foreach ($paket_tours as $tourId => $tour)
                <a href="{{ route('paket-tour.show', $tour->id) }}">
                    <div class="card-layout">
                        <div class="card img">
                            <img src="{{ asset('img/' . $tour->foto) }}" alt="{{ $tour->nama_destinasi }}">
                        </div>
                        <div class="card-info">
                            <div class="card-title">{{ $tour->nama_destinasi }}</div>
                            {{-- <div class="rating">
                                <div class="reviews">{{ $tour->total_orang }} Orang</div>
                                <div class="reviews">|</div>
                                <div class="reviews">{{ $tour->total_hari }} Hari</div>
                            </div> --}}
                            <div class="d-flex gap-1 align-items-center">
                                <span class="text-dark fw-bold">Rp {{ $tour->harga_tiket }}</span>
                                <small class="text-secondary">•</small>
                                <div class="reviews">{{ $tour->total_orang }} Orang</div>
                                <small class="text-secondary">•</small>
                                <div class="reviews">{{ $tour->total_hari }} Hari</div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
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
                renderBullet: function(index, className) {
                    return '<span class="' + className + '">' + (index + 1) + "</span>";
                },
            },
        };

        Object.assign(swiperEl, params);

        swiperEl.initialize();
    </script>

@endsection
