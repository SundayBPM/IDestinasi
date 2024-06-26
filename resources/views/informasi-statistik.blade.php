@extends('layouts/main')

@section('container')
    <!-- Sale & Revenue Start -->
    <div class="container-xxl">
            
        <div class="statistik-header">
            <h1>Statistik Objek Wisata</h1>
            <img src="img/statistik-page.png" alt="Deskripsi gambar">
        </div>
        <div class="metrics_summary">
            <div class="total_visitor">
                <div class="item_box">
                    <i class="bi bi-people"></i>
                </div>
                <h2>{{ $total_kunjungan }}</h2>
                <p>Total Pengunjung Aktif</p>
                <p>
                    @if ($total_kunjungan_sebelumnya > 0)
                        @if ((($total_kunjungan - $total_kunjungan_sebelumnya) / $total_kunjungan_sebelumnya) * 100 > 0)
                            <i class="bi bi-arrow-up-right"></i>  
                        @else
                            <i class="bi bi-arrow-down-left"></i>  
                        @endif
                        {{ number_format((($total_kunjungan - $total_kunjungan_sebelumnya) / $total_kunjungan_sebelumnya) * 100) }}% Minggu ini
                    @else
                        <i class="bi bi-arrow-right"></i>  
                        0% Minggu ini
                    @endif
                </p>
            </div>
            
            <div class="total_purchase_tickets">
                <div class="item_box">
                    <i class="bi bi-backpack"></i>
                </div>
                <h2>{{ $pembelianTikets }}</h2>
                <p>Total Pembelian Tiket</p>
                <p>
                    @if ($pembelianTikets_sebelumnya > 0)
                        @if((($pembelianTikets-$pembelianTikets_sebelumnya)/$pembelianTikets_sebelumnya)*100 > 0)
                            <i class="bi bi-arrow-up-right"></i>  
                        @else
                            <i class="bi bi-arrow-down-left"></i>  
                        @endif
                        {{ number_format((($pembelianTikets-$pembelianTikets_sebelumnya)/$pembelianTikets_sebelumnya)*100 )}}% Minggu ini
                    @else
                        <i class="bi bi-arrow-right"></i>  
                        0% Minggu ini
                    @endif
                </p>
            </div>
            
            <div class="profits">
                <div class="item_box">
                    <i class="bi bi-check2-circle"></i>
                </div>
                <h2>IDR {{ number_format($total_keuntungan) }}</h2>
                <p>Keuntungan</p>
                <p>
                    @if ($total_keuntungan_sebelumnya > 0 )
                        @if((($total_keuntungan - $total_keuntungan_sebelumnya)/$total_keuntungan_sebelumnya)*100 > 0)
                            <i class="bi bi-arrow-up-right"></i>  
                        @else
                            <i class="bi bi-arrow-down-left"></i>  
                        @endif
                        {{ number_format((($total_keuntungan-$total_keuntungan_sebelumnya)/$total_keuntungan_sebelumnya)*100 )}}% Minggu ini
                    @else
                        <i class="bi bi-arrow-right"></i>  
                        0% Minggu ini
                    @endif
                </p>           
            </div>
        </div>

        <div class="main_chart">
            <div class="chart_header">
                <h3>Statistik Penjualan Tiket</h3>
                <h5 class="category">Tiket Terjual</h5>
                <h5 class="monthly">monthly</h5>
            </div>
            
            <div class="custom_chart">
                <canvas id="sales-revenue"></canvas>
            </div>

        </div>
        
        <div class="bottom_charts">
            
            <div class="nps_chart">
                <!-- <h1>TESTING</h1> -->
                <h1>{{$nps_rating_avg}}</h1>
                <canvas id="nps-rating"></canvas>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('sales-revenue');
                const labels = <?php echo json_encode($data_pembelian['main_labels']) ?>;

                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: '# of Votes',
                            data: <?php echo json_encode($data_pembelian['main_data']) ?>,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                            beginAtZero: true
                            }
                        }
                    }
                });
                

                const nps = document.getElementById('nps-rating');
                const labels_label = <?php echo json_encode($data_nps['nps_labels']) ?>;

                new Chart(nps, {
                    type: 'doughnut',
                    data: {
                        labels: labels_label,
                        datasets: [{
                            label: '# of Votes',
                            data: <?php echo json_encode($data_nps['nps_data']) ?>,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                            beginAtZero: true
                            }
                        }
                    }
                });
            
            </script>            

            <div class="others_rating">
                <div class="row_rating">
                    <h1>Penilaian</h1>
                </div>

                <div class="row_rating">
                    <div class="rate">
                        <h2>{{ $overalRating }}</h2>
                        <h4>Overal Rating</h4>
                        <h6>3900 Responden</h6>
                    </div>
    
                    <div class="rate">
                        <h2>{{ $amenitas_rating }}</h2>
                        <h4>Rating Amenitas</h4>
                        <h6>3900 Responden</h6>
                    </div>
    
                    <div class="rate">
                        <h2>{{ $ansilari1_rating }}</h2>
                        <h4>Rating Ansilari</h4>
                        <h6>3900 Responden</h6>
                    </div>
                </div>

                <div class="row_rating">
                    <div class="rate">
                        <h2>{{ $ansilari2_rating }}</h2>
                        <h4>Rating Ansilari</h4>
                        <h6>3900 Responden</h6>
                    </div>
    
                    <div class="rate">
                        <h2>{{ $aksesibilitas_rating }}</h2>
                        <h4>Rating Aksesibilitas</h4>
                        <h6>3900 Responden</h6>
                    </div>
    
                    <div class="rate">
                        <h2>{{ $atraksi_rating }}</h2>
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