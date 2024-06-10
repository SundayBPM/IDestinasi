<link rel="stylesheet" href="{{ asset('css/index.css') }}" />

@extends('layouts.main')
@section('container')
<body style ="background-color: #EDEFF1;">

<!--page navigation-->
    <div class="navigation-container">
        <div class="navigation">
            <a href="" class="nav-link">Home</a>
            <span class="separator">></span>
            <a href="" class="nav-link ">Promo</a>
        </div>
    </div>
<!-- photo-->
    <div class="promo-image">
        <img src="{{ $promo->foto_promo }}" alt="image_path"/>
        <!-- <img src="{{ asset('img/dufan-promo.png') }}" alt="image_path"/> -->
    </div>

    <div class="promo-container">
        <div class="promo-title-container">
            <div class= "promo-title">
                <div class = "headline"> {{ $promo->nama_tiket}} </div>
                <p class="headline-desc">
                    {{ $promo->start_date}} - {{ $promo->end_date}}
                </p>
            </div>
        </div>
    </div>
    <!--description-->`
    <div class="promo-desc-container">
        <div class ="bodytext"> 
            <p>
               {{ $promo->deskripsi}}
            </p>
            <p><b>Detail Promo:</b></p>
            <!-- <p>{{$promo->detail }}</p> -->
            <ul class="custom-bullet-list">
                @foreach (explode('.', $promo->detail) as $detail)
                    @if(trim($detail) != '')
                        <li>{{ trim($detail) }}.</li>
                    @endif
                @endforeach
            </ul>
            <p><b>Syarat dan Ketentuan:</b></p>
            <ul class="custom-bullet-list">
                @foreach (explode('.', $promo->syarat_ketentuan) as $syarat)
                    @if(trim($syarat) != '')
                        <li>{{ trim($syarat) }}.</li>
                    @endif
                @endforeach
            </ul>
            
            <p>{{ $promo->penutup}}</p> 
            {{ $promo->foto_promo }}

        </div>
    </div>

</body>
@endsection