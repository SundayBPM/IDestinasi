@extends('layouts/main')

@section('container')
    <!-- Sale & Revenue Start -->
    <div class="container-xxl">
        <div class="ulasan-header">
            <img src="img/statistik-page.png" alt="Deskripsi gambar">
        </div>
        <div class="metrics_summary">
            <div class="total_visitor">
                <h3>12,499</h3>
                <p>Total Pengunjung Aktif</p>
                <p>+10% Minggu ini</p>
            </div>

            <div class="total_purchase_tickets">
                <h3>4,590</h3>
                <p>Total Pembelian Tiket</p>
                <p>+0,49% Minggu ini</p>                
            </div>

            <div class="profits">
                <h3>IDR 4,560,000.00</h3>
                <p>Keuntungan</p>
                <p>+0,25% Minggu ini</p>                
            </div>
        </div>

        <div class="main_chart">
            <div class="chart_header">
                <h3>Statistik penjualan Tiket</h3>
                <h5>Tiket Terjual</h5>
                <h6>monthly</h6>
            </div>

            <div class="custom_chart">
                <canvas id="salse-revenue"></canvas>
            </div>
        </div>

        <div class="bottom_charts">
            <div class="nps_chart">
                <h1>TESTING</h1>
            </div>
            <div class="others_rating">
                <div class="first_row_rating">
                    <h3>Penilaian</h3>
                </div>

                <div class="second_row_rating">
                    <div class="stars_rate">
                        <h2>4,5</h2>
                        <h4>Overal Rating From Customer</h4>
                        <h6>3900 Responden</h6>
                    </div>
    
                    <div class="amenitas_rate">
                        <h2>7,9</h2>
                        <h4>Rating Amenitas</h4>
                        <h6>3900 Responden</h6>
                    </div>
    
                    <div class="ansilari1_rate">
                        <h2>6,5</h2>
                        <h4>Rating Ansilari</h4>
                        <h6>3900 Responden</h6>
                    </div>
                </div>

                <div class="third_row_rating">
                    <div class="ansilari2_rate">
                        <h2>6,7</h2>
                        <h4>Rating Ansilari</h4>
                        <h6>3900 Responden</h6>
                    </div>
    
                    <div class="aksesibilitas_rate">
                        <h2>9,3</h2>
                        <h4>Rating Aksesibilitas</h4>
                        <h6>3900 Responden</h6>
                    </div>
    
                    <div class="atraksi_rate">
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