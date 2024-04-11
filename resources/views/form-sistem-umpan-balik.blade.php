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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar justify-content-left navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><i class="bi bi-arrow-left"></i> Navbar</a>   
            <p>Lengkapi formulir ulasan dibawah ini untuk "...."</p>
            <div class="navbar-text">
            </div>
        </div>
    </nav>
    <form action="" method="POST">
        <div class="ulasan">
            <div class="ulasan-text">
                <h4>Ulasan dan Rating</h4>
                <hr>
            </div>
            <h6>bagaimana keseluruhan ratingmu?</h6>
            <div class="star-widget">
                <input type="radio" name="rate" id="rate-1">
                <label for="rate-1" class="fa fa-star"></label>
                <input type="radio" name="rate" id="rate-2">
                <label for="rate-2" class="fa fa-star"></label>
                <input type="radio" name="rate" id="rate-3">
                <label for="rate-3" class="fa fa-star"></label>
                <input type="radio" name="rate" id="rate-4">
                <label for="rate-4" class="fa fa-star"></label>
                <input type="radio" name="rate" id="rate-5">
                <label for="rate-5" class="fa fa-star"></label>    
            </div>
            <div class="form-ulasan-saran">
                <header> Ulasan</header>
                <textarea cols="30" placeholder="ketik Ulasan Di sini"></textarea>
            </div>

            <div class="form-ulasan-saran">
                <header> Kritik dan Saran untuk Pengembangan Kedepannya</header>
                <textarea cols="50" placeholder="ketik Kritik dan Saran Di sini"></textarea>
            </div>
        </div>
      
        <div class="penilaian">
            <h6>Penilaian Atraksi</h6>
            <hr>
            <p>Seberapa menarik Anda menilai atraksi wisata yang ada?</p>
            <div class="rating-penilaian">
                <input type="radio" name="rate" id="rate-1">
                <input type="radio" name="rate" id="rate-2">
                <input type="radio" name="rate" id="rate-3">
                <input type="radio" name="rate" id="rate-4">
                <input type="radio" name="rate" id="rate-5">
                <input type="radio" name="rate" id="rate-6">
                <input type="radio" name="rate" id="rate-7">
                <input type="radio" name="rate" id="rate-8">
                <input type="radio" name="rate" id="rate-10">
                <input type="radio" name="rate" id="rate-9">
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
                <input type="radio" name="rate" id="rate-10">
                <input type="radio" name="rate" id="rate-9">
                <input type="radio" name="rate" id="rate-8">
                <input type="radio" name="rate" id="rate-7">
                <input type="radio" name="rate" id="rate-6">
                <input type="radio" name="rate" id="rate-5">
                <input type="radio" name="rate" id="rate-4">
                <input type="radio" name="rate" id="rate-3">
                <input type="radio" name="rate" id="rate-2">
                <input type="radio" name="rate" id="rate-1">

            </div>
            <div class="rating-penilaian-labels">
                <label for="rate-10">10</label>
                <label for="rate-9">9</label>
                <label for="rate-8">8</label>
                <label for="rate-7">7</label>
                <label for="rate-6">6</label>
                <label for="rate-5">5</label>
                <label for="rate-4">4</label>
                <label for="rate-3">3</label>
                <label for="rate-2">2</label>
                <label for="rate-1">1</label>
            </div>
        </div>
    
        <div class="penilaian">
            <Header>Penilaian Amenitas</Header>
            <hr>
            <div class="rating-penilaian">
                <label for="rate-10">10</label>
                <input type="radio" name="rate" id="rate-10">
                <label for="rate-9">9</label>
                <input type="radio" name="rate" id="rate-9">
                <label for="rate-8">8</label>
                <input type="radio" name="rate" id="rate-8">
                <label for="rate-7">7</label>
                <input type="radio" name="rate" id="rate-7">
                <label for="rate-6">6</label>
                <input type="radio" name="rate" id="rate-6">
                <label for="rate-5">5</label>
                <input type="radio" name="rate" id="rate-5">
                <label for="rate-4">4</label>
                <input type="radio" name="rate" id="rate-4">
                <label for="rate-3">3</label>
                <input type="radio" name="rate" id="rate-3">
                <label for="rate-2">2</label>
                <input type="radio" name="rate" id="rate-2">
                <label for="rate-1">1</label>
                <input type="radio" name="rate" id="rate-1">
                
            </div>
        </div>
    
        <div class="penilaian">
            <Header>Penilaian Ansilari</Header>
            <hr>
            <div class="rating-penilaian">
                <label for="rate-10">10</label>
                <input type="radio" name="rate" id="rate-10">
                <label for="rate-9">9</label>
                <input type="radio" name="rate" id="rate-9">
                <label for="rate-8">8</label>
                <input type="radio" name="rate" id="rate-8">
                <label for="rate-7">7</label>
                <input type="radio" name="rate" id="rate-7">
                <label for="rate-6">6</label>
                <input type="radio" name="rate" id="rate-6">
                <label for="rate-5">5</label>
                <input type="radio" name="rate" id="rate-5">
                <label for="rate-4">4</label>
                <input type="radio" name="rate" id="rate-4">
                <label for="rate-3">3</label>
                <input type="radio" name="rate" id="rate-3">
                <label for="rate-2">2</label>
                <input type="radio" name="rate" id="rate-2">
                <label for="rate-1">1</label>
                <input type="radio" name="rate" id="rate-1">
                
            </div>
        </div>
        
        <div class="penilaian">
            <Header>Penilaian Ansilari</Header>
            <hr>
            <div class="rating-penilaian">
                     <label for="rate-10">10</label>
                <input type="radio" name="rate" id="rate-10">
                <label for="rate-9">9</label>
                <input type="radio" name="rate" id="rate-9">
                <label for="rate-8">8</label>
                <input type="radio" name="rate" id="rate-8">
                <label for="rate-7">7</label>
                <input type="radio" name="rate" id="rate-7">
                <label for="rate-6">6</label>
                <input type="radio" name="rate" id="rate-6">
                <label for="rate-5">5</label>
                <input type="radio" name="rate" id="rate-5">
                <label for="rate-4">4</label>
                <input type="radio" name="rate" id="rate-4">
                <label for="rate-3">3</label>
                <input type="radio" name="rate" id="rate-3">
                <label for="rate-2">2</label>
                <input type="radio" name="rate" id="rate-2">
                <label for="rate-1">1</label>
                <input type="radio" name="rate" id="rate-1">
                
            </div>
        </div>
        <div class="penilaian">
            <Header>Penilaian NPS</Header>
            <div class="rating-penilaian">
                <label for="rate-10">10</label>
                <input type="radio" name="rate" id="rate-10">
                <label for="rate-9">9</label>
                <input type="radio" name="rate" id="rate-9">
                <label for="rate-8">8</label>
                <input type="radio" name="rate" id="rate-8">
                <label for="rate-7">7</label>
                <input type="radio" name="rate" id="rate-7">
                <label for="rate-6">6</label>
                <input type="radio" name="rate" id="rate-6">
                <label for="rate-5">5</label>
                <input type="radio" name="rate" id="rate-5">
                <label for="rate-4">4</label>
                <input type="radio" name="rate" id="rate-4">
                <label for="rate-3">3</label>
                <input type="radio" name="rate" id="rate-3">
                <label for="rate-2">2</label>
                <input type="radio" name="rate" id="rate-2">
                <label for="rate-1">1</label>
                <input type="radio" name="rate" id="rate-1">
                
            </div>
        </div>
        </div>
        <div class="btn-submit-ulasan">
            <button type="submit">Post</button>
        </div>
    </form>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
</body>
</html>