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
<div id="carouselExampleIndicators" class="carousel slide">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		@foreach($promos as $promo)
			<div class="carousel-item active">
				<!-- <a href="/promo/?id={{ $promo->id }}"> -->
				<a href="{{ route('show_promo', $promo->id) }}">
					<img src="{{ asset($promo->foto_promo) }}" alt="image_path"/>

				</a>
			</div>
		@endforeach

	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
<div class= "layout-section">
  	<div class="layout-section-title">
		<div class ="layout-title">
			<div class="title">Rekomendasi Untukmu</div>
			<div class="desc">Lihat rekomendasi objek wisata sesuai preferensimu</div>
		</div>
    <a href="#" class="secondary-button">Lihat Semua Wisata</a>
</div>

<!--card rekomendasi objek wisata-->
  <!--card 1-->
<div class="card-container">
    @foreach ($saran_destinasi as $destinasi)
		<a href="">
			<div class="card-layout">
				<div class="card img">
					<!-- untuk sementara menggunakan gambar statis -->
					<img src="{{ asset('img/img5.jpg') }}" alt="gambar sementara">
					
				</div>
				<div class="card-info">
						<div class="card-title">{{ $destinasi->nama_wisata }}</div>
						<div class="rating">
							<i class="fa-solid fa-star"></i>
							<div class="rating-value">ini rating</div>
							<div class="reviews">jumlah Reviews</div>
						</div>
						<div class="price">Rp harga/pax</div>
				</div>
			</div>
		</a>
    @endforeach
</div>


<!-- rekomendasi paket tour-->

<div class="layout-section-title">
	<div class ="layout-title">
		<div class="title">Temukan Paket Tour Wisata Impianmu</div>
		<div class="desc">Temukan berbagai pilihan paket tour wisata lengkap dengan harga murah disini</div>
	</div>
	<a href="#" class="secondary-button">Lihat Semua Paket</a>
</div>

<!--card rekomendasi paket-->
  <!--card 1-->
<div class="card-container">
	<a href="#">
		<div class="card-layout">
			<div class="card img">
				<img src="img/img2.jpg" alt="Wisata 1">
			</div>
			<div class="card-info">
				<div class="card-title">Paket Wisata di Dieng</div>
					<div class="rating">
						<div class="reviews">5 Orang</div>
						<div class="reviews">|</div>
						<div class="reviews">7 Hari</div>
					</div>
				<div class="price">Rp 100.000/pax</div>
			</div>
		</div>
    </a>
    <!--card 2-->
    <a href="#">
    	<div class="card-layout">
      		<div class="card img">
        		<img src="img/img3.jpg" alt="Wisata 1">
    		</div>
			<div class="card-info">
				<div class="card-title">Paket Wisata di Dieng</div>
				<div class="rating">
					<div class="reviews">5 Orang</div>
					<div class="reviews">|</div>
					<div class="reviews">7 Hari</div>
				</div>
				<div class="price">Rp 100.000/pax</div>
			</div>
    	</div>
    </a>
    <!--card 3-->
    <a href="#">
    	<div class="card-layout">
      		<div class="card img">
        		<img src="img/img4.jpg" alt="Wisata 1">
    		</div>
			<div class="card-info">
				<div class="card-title">Paket Wisata di Dieng</div>
				<div class="rating">
					<div class="reviews">5 Orang</div>
					<div class="reviews">|</div>
					<div class="reviews">7 Hari</div>
				</div>
				<div class="price">Rp 100.000/pax</div>
			</div>
    	</div>
    </a>
    <!--card 4-->
    <a href="#">
		<div class="card-layout">
			<div class="card img">
				<img src="img/img5.jpg" alt="Wisata 1">
			</div>
			<div class="card-info">
				<div class="card-title">Paket Wisata di Dieng</div>
				<div class="rating">
					<div class="reviews">5 Orang</div>
					<div class="reviews">|</div>
					<div class="reviews">7 Hari</div>
				</div>
				<div class="price">Rp 100.000/pax</div>
			</div>
		</div>
    </a>
    <!--card 5-->
    <a href="#">
		<div class="card-layout">
			<div class="card img">
				<img src="img/img5.jpg" alt="Wisata 1">
			</div>
			<div class="card-info">
				<div class="card-title">Paket Wisata di Dieng</div>
				<div class="rating">
					<div class="reviews">5 Orang</div>
					<div class="reviews">|</div>
					<div class="reviews">7 Hari</div>
				</div>
				<div class="price">Rp 100.000/pax</div>
			</div>
		</div>
    </a>
</div>

@endsection