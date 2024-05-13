<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDestinasi | Ulasan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- import font awesome -->
    <!-- import font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- import bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar justify-content-left navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/ulasan"><i class="bi bi-arrow-left"></i> Navbar</a>   
            <p>Lengkapi formulir ulasan dibawah ini untuk "...."</p>
            <div class="navbar-text">
            </div>
        </div>
    </nav>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <h5>{{ $destinasi }}</h5>
    </div>
    <form action="/ulasan" method="POST"> 
        @csrf
        <input type="hidden" name="id_tiket" value="{{ $destinasi->id }}">
        <input type="hidden" name="id_objek_wisata" value="{{ $destinasi->id_destinasi }}">        
        <div class="ulasan">
            <div class="ulasan-text">
                <h4>Ulasan dan Rating</h4>
                <hr>
            </div>
            <h6>bagaimana keseluruhan ratingmu?</h6>
            <div class="star-widget">
                <input type="radio" name="rating" id="rate-5" value="5">
                <label for="rate-5" class="fa fa-star"></label>    
                <input type="radio" name="rating" id="rate-4" value="4">
                <label for="rate-4" class="fa fa-star"></label>
                <input type="radio" name="rating" id="rate-3" value="3">
                <label for="rate-3" class="fa fa-star"></label>
                <input type="radio" name="rating" id="rate-2" value="2">
                <label for="rate-2" class="fa fa-star"></label>
                <input type="radio" name="rating" id="rate-1" value="1" >
                <label for="rate-1" class="fa fa-star"></label>
            </div>
            <div class="form-ulasan-saran">
                <header> Ulasan</header>
                <textarea id='ulasan-id' name='ulasan' cols="30" placeholder="ketik Ulasan Di sini"></textarea>
            </div>

            <div class="form-ulasan-saran">
                <header> Kritik dan Saran untuk Pengembangan Kedepannya</header>
                <textarea id='kritik-saran-id' name='kritik_saran' cols="50" placeholder="ketik Kritik dan Saran Di sini" ></textarea>
            </div>
        </div>
      
        <div class="penilaian">
            <h6>Penilaian Atraksi</h6>
            <hr>
            <p>Seberapa menarik Anda menilai atraksi wisata yang ada?</p>
            <div class="rating-penilaian">
                <input type="radio" name="penilaian_atraksi" id="rate-1" value="1">
                <input type="radio" name="penilaian_atraksi" id="rate-2" value="2">
                <input type="radio" name="penilaian_atraksi" id="rate-3" value="3">
                <input type="radio" name="penilaian_atraksi" id="rate-4" value="4">
                <input type="radio" name="penilaian_atraksi" id="rate-5" value="5">
                <input type="radio" name="penilaian_atraksi" id="rate-6" value="6">
                <input type="radio" name="penilaian_atraksi" id="rate-7" value="7">
                <input type="radio" name="penilaian_atraksi" id="rate-8" value="8">
                <input type="radio" name="penilaian_atraksi" id="rate-9" value="9">
                <input type="radio" name="penilaian_atraksi" id="rate-10" value="10">
                <label for="rate-1">1</label>
                <label for="rate-2">2</label>
                <label for="rate-3">3</label>
                <label for="rate-4">4</label>
                <label for="rate-5">5</label>
                <label for="rate-6">6</label>
                <label for="rate-7">7</label>
                <label for="rate-8">8</label>
                <label for="rate-9">9</label>
                <label for="rate-10">10</label>
                
            </div>
        </div>
    
        <div class="penilaian">
            <div class="judul-header">
                <Header>Penilaian Aksesibilitas</Header>
                <hr>
            </div>
            <div class="rating-penilaian">
                <label for="rate-1">1</label>
                <input type="radio" name="penilaian_aksesibilitas" id="rate-1" value="1">
                <label for="rate-2">2</label>
                <input type="radio" name="penilaian_aksesibilitas" id="rate-2" value="2">
                <label for="rate-3">3</label>
                <input type="radio" name="penilaian_aksesibilitas" id="rate-3" value="3">
                <label for="rate-4">4</label>
                <input type="radio" name="penilaian_aksesibilitas" id="rate-4" value="4">
                <label for="rate-5">5</label>
                <input type="radio" name="penilaian_aksesibilitas" id="rate-5" value="5">
                <label for="rate-6">6</label>
                <input type="radio" name="penilaian_aksesibilitas" id="rate-6" value="6">
                <label for="rate-7">7</label>
                <input type="radio" name="penilaian_aksesibilitas" id="rate-7" value="7">
                <label for="rate-8">8</label>
                <input type="radio" name="penilaian_aksesibilitas" id="rate-8" value="8">
                <label for="rate-9">9</label>
                <input type="radio" name="penilaian_aksesibilitas" id="rate-9" value="9">
                <label for="rate-10">10</label>
                <input type="radio" name="penilaian_aksesibilitas" id="rate-10" value="10">
            </div>

        </div>
    
        <div class="penilaian">
            <Header>Penilaian Amenitas</Header>
            <hr>
            <div class="rating-penilaian">
                <label for="rate-1">1</label>
                <input type="radio" name="penilaian_amenitas" id="rate-1" value="1">
                <label for="rate-2">2</label>
                <input type="radio" name="penilaian_amenitas" id="rate-2" value="2">
                <label for="rate-3">3</label>
                <input type="radio" name="penilaian_amenitas" id="rate-3" value="3">
                <label for="rate-4">4</label>
                <input type="radio" name="penilaian_amenitas" id="rate-4" value="4">
                <label for="rate-6">6</label>
                <input type="radio" name="penilaian_amenitas" id="rate-6" value="6">
                <label for="rate-7">7</label>
                <input type="radio" name="penilaian_amenitas" id="rate-7" value="7">
                <label for="rate-5">5</label>
                <input type="radio" name="penilaian_amenitas" id="rate-5" value="5">
                <label for="rate-8">8</label>
                <input type="radio" name="penilaian_amenitas" id="rate-8" value="8">
                <label for="rate-9">9</label>
                <input type="radio" name="penilaian_amenitas" id="rate-9" value="9">
                <label for="rate-10">10</label>
                <input type="radio" name="penilaian_amenitas" id="rate-10" value="10">
                
            </div>
        </div>
        
        <div class="penilaian">
            <Header>Penilaian Ansilari</Header>
            <hr>
            <div class="rating-penilaian">
                <label for="rate-1">1</label>
                <input type="radio" name="penilaian_ansilari1" id="rate-1" value="1">
                <label for="rate-2">2</label>
                <input type="radio" name="penilaian_ansilari1" id="rate-2" value="2">
                <label for="rate-3">3</label>
                <input type="radio" name="penilaian_ansilari1" id="rate-3" value="3">
                <label for="rate-4">4</label>
                <input type="radio" name="penilaian_ansilari1" id="rate-4" value="4">
                <label for="rate-6">6</label>
                <input type="radio" name="penilaian_ansilari1" id="rate-6" value="6">
                <label for="rate-7">7</label>
                <input type="radio" name="penilaian_ansilari1" id="rate-7" value="7">
                <label for="rate-5">5</label>
                <input type="radio" name="penilaian_ansilari1" id="rate-5" value="5">
                <label for="rate-8">8</label>
                <input type="radio" name="penilaian_ansilari1" id="rate-8" value="8">
                <label for="rate-9">9</label>
                <input type="radio" name="penilaian_ansilari1" id="rate-9" value="9">
                <label for="rate-10">10</label>
                <input type="radio" name="penilaian_ansilari1" id="rate-10" value="10">
            </div>
            <Header>Penilaian Ansilari</Header>
            <hr>
            <div class="rating-penilaian">
                <label for="rate-1">1</label>
                <input type="radio" name="penilaian_ansilari2" id="rate-1" value="1">
                <label for="rate-2">2</label>
                <input type="radio" name="penilaian_ansilari2" id="rate-2" value="2">
                <label for="rate-3">3</label>
                <input type="radio" name="penilaian_ansilari2" id="rate-3" value="3">
                <label for="rate-4">4</label>
                <input type="radio" name="penilaian_ansilari2" id="rate-4" value="4">
                <label for="rate-6">6</label>
                <input type="radio" name="penilaian_ansilari2" id="rate-6" value="6">
                <label for="rate-7">7</label>
                <input type="radio" name="penilaian_ansilari2" id="rate-7" value="7">
                <label for="rate-5">5</label>
                <input type="radio" name="penilaian_ansilari2" id="rate-5" value="5">
                <label for="rate-8">8</label>
                <input type="radio" name="penilaian_ansilari2" id="rate-8" value="8">
                <label for="rate-9">9</label>
                <input type="radio" name="penilaian_ansilari2" id="rate-9" value="9">
                <label for="rate-10">10</label>
                <input type="radio" name="penilaian_ansilari2" id="rate-10" value="10">                
            </div>
        </div>
        
        <div class="penilaian">
            <Header>Penilaian NPS</Header>

            <div class="rating-penilaian">
                <label for="rate-1">1</label>
                <input type="radio" name="penilaian_nps" id="rate-1" value="1">
                <label for="rate-2">2</label>
                <input type="radio" name="penilaian_nps" id="rate-2" value="2">
                <label for="rate-3">3</label>
                <input type="radio" name="penilaian_nps" id="rate-3" value="3">
                <label for="rate-4">4</label>
                <input type="radio" name="penilaian_nps" id="rate-4" value="4">
                <label for="rate-6">6</label>
                <input type="radio" name="penilaian_nps" id="rate-6" value="6">
                <label for="rate-7">7</label>
                <input type="radio" name="penilaian_nps" id="rate-7" value="7">
                <label for="rate-5">5</label>
                <input type="radio" name="penilaian_nps" id="rate-5" value="5">
                <label for="rate-8">8</label>
                <input type="radio" name="penilaian_nps" id="rate-8" value="8">
                <label for="rate-9">9</label>
                <input type="radio" name="penilaian_nps" id="rate-9" value="9">
                <label for="rate-1">10</label>
                <input type="radio" name="penilaian_nps" id="rate-10" value="10">
                
            </div>
        </div>
        </div>
        
        <!-- <button type="submit"> POST CUII</button> -->
        <!-- Button trigger modal -->
        <div class="btn-submit-ulasan">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Post
            </button>    
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="img/Success_Icon.png" alt="">
                <h3>Yay! Ulasanmu Sudah Dikirim</h3>
                <p>Terima kasih sudah berpartisipasi dalam meningkatkan kualitas parawisata di Indonesia</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Kembali Ke Beranda</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
</body>
</html>