@extends('layouts/main')

@section('container')
    <!-- Sale & Revenue Start -->
    <div class="container-xxl">
            
        <div class="ulasan-header">
            <h1>Statistik Objek Wisata</h1>
            <img src="img/statistik-page.png" alt="Deskripsi gambar">
        </div>
        <div class="metrics_summary">
            <div class="total_visitor">
                <div class="item_box">
                    <i class="bi bi-people"></i>
                </div>
                <h2>12,499</h2>
                <p>Total Pengunjung Aktif</p>
                <p><i class="bi bi-arrow-up-right"></i>  +10% Minggu ini</p>
            </div>
            
            <div class="total_purchase_tickets">
                <div class="item_box">
                    <i class="bi bi-backpack"></i>
                </div>
                <h2>4,590</h2>
                <p>Total Pembelian Tiket</p>
                <p><i class="bi bi-arrow-up-right"></i>  +0,49% Minggu ini</p>                
            </div>
            
            <div class="profits">
                <div class="item_box">
                    <i class="bi bi-check2-circle"></i>
                </div>
                <h2>IDR 4,560,000.00</h2>
                <p>Keuntungan</p>
                <p><i class="bi bi-arrow-down-left"></i>  +0,25% Minggu ini</p>                
            </div>
        </div>

        <div class="main_chart">
            <div class="chart_header">
                <h3>Statistik Penjualan Tiket</h3>
                <h5 class="category">Tiket Terjual</h5>
                <h5 class="monthly">monthly</h5>
            </div>

            {!! $objekWisataChart->container() !!}
            <script src="{{ $objekWisataChart ->cdn() }}"></script>
            {{ $chart->script() }}
            
            <div class="custom_chart">
                <canvas id="sales-revenue"></canvas>
            </div>

        </div>
        
        <div class="bottom_charts">

            <div class="nps_chart">
                <!-- <h1>TESTING</h1> -->
                <canvas id="nps-rating"></canvas>
            </div>
            <div class="others_rating">
                <div class="row_rating">
                    <h1>Penilaian</h1>
                </div>

                <div class="row_rating">
                    <div class="rate">
                        <h2>4,5</h2>
                        <h4>Overal Rating From Customer</h4>
                        <h6>3900 Responden</h6>
                    </div>
    
                    <div class="rate">
                        <h2>7,9</h2>
                        <h4>Rating Amenitas</h4>
                        <h6>3900 Responden</h6>
                    </div>
    
                    <div class="rate">
                        <h2>6,5</h2>
                        <h4>Rating Ansilari</h4>
                        <h6>3900 Responden</h6>
                    </div>
                </div>

                <div class="row_rating">
                    <div class="rate">
                        <h2>6,7</h2>
                        <h4>Rating Ansilari</h4>
                        <h6>3900 Responden</h6>
                    </div>
    
                    <div class="rate">
                        <h2>9,3</h2>
                        <h4>Rating Aksesibilitas</h4>
                        <h6>3900 Responden</h6>
                    </div>
    
                    <div class="rate">
                        <h2>6,7</h2>
                        <h4>Rating Atraksi</h4>
                        <h6>3900 Responden</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.min.js" integrity="sha512-CQBWl4fJHWbryGE+Pc7UAxWMUMNMWzWxF4SQo9CgkJIN1kx6djDQZjh3Y8SZ1d+6I+1zze6Z7kHXO7q3UyZAWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/chart.js') }}"></script>
@endsection