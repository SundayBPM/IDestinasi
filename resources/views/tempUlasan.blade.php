<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style_testing.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="ulasan_area">
        <h1>Ulasan dan Rating</h1>
        <p>Lihat rating dan ulasan yang dikirim oleh pengunjung lain</p>
        <div class="ulasan_content">
            @foreach($latest_review as $latest_destinasi_ulasan)
                <!-- <p>{{ $latest_destinasi_ulasan }}</p> -->
                <div class="ulasan_box">
                    <div class="first_row">
                        <div class="first_column">
                            <img src="{{ asset('img\user_icon.png') }}" width="500" height="600">
                            <!-- <p>Ini isi nya gambar</p> -->
                        </div>
                        <div class="second_column">
                            <!-- <p>ini nama</p> -->
                            <p>{{ $latest_destinasi_ulasan->user->name}}</p>
                            <i class="bi bi-star"> </i> {{ $latest_destinasi_ulasan->rating }}
                        </div>
                    </div>
                    <p class="ulasan_user">{{ $latest_destinasi_ulasan -> ulasan}}</p>
                </div>
            @endforeach
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" id="btn_launch_modal" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Lihat Semua Ulasan
        </button>
        <!-- Full screen modal -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ulasan dan Rating</h1>
                        <!-- <p>Lihat rating dan ulasan yang dikirim oleh pengunjung lain.</p> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-body-content">
                        @foreach($destinasi as $destinasi_ulasan)
                            <div class="modal_ulasan_box">
                                <div class="modal_first_row">
                                    <div class="modal_first_column">
                                        <img src="{{ asset('img\user_icon.png') }}" width="500" height="600">
                                        <!-- <p>Ini isi nya gambar</p> -->
                                    </div>
                                    <div class="modal_second_column">
                                        <!-- <p>ini nama</p> -->
                                        <p>{{ $destinasi_ulasan->user->name}}</p>
                                        <i class="bi bi-star"></i>  {{ $destinasi_ulasan->rating }}        
                                    </div>
                                </div>
                                <p>{{ $destinasi_ulasan->created_at }}</p>
                                <p class="modal_ulasan_user">{{ $destinasi_ulasan -> ulasan}}</p>
                                <h5>Saran</h5>
                                <p class="modal_kritik_user">{{ $destinasi_ulasan -> kritik_saran}}</p>
                            </div>
                        @endforeach
                        <div class="pagination-links">
                            {{ $destinasi->links() }}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page){
            $.ajax({
                url: "/fetch-destinasi?page=" + page,
                success: function(data){
                    $('#modal-body-content').html(data);
                }
            });
        }
    });
    </script>

</body>
</html>