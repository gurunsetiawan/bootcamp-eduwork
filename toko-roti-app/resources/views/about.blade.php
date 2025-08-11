<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Bake and Joy</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto', sans-serif; background-color: #fdfaf6; }
        .elegant-font { font-family: 'Playfair Display', serif; }
        .navbar { padding-top: 1rem; padding-bottom: 1rem; box-shadow: 0 2px 4px rgba(0,0,0,.05); background-color: #ffffff; }
        .navbar-brand .icon { width: 32px; height: 32px; margin-right: 8px; vertical-align: middle; }
        .navbar-brand .brand-text { font-family: 'Playfair Display', serif; font-size: 1.5rem; color: #5a3e36; }
        .nav-link { font-weight: 400; color: #5a3e36; margin-left: 15px; margin-right: 15px; }
        .nav-link:hover, .nav-link.active { color: #c59d5f; }
        .btn-login { background-color: #5a3e36; color: #ffffff; border-radius: 20px; padding: 8px 20px; }
        .btn-login:hover { background-color: #48312a; color: #ffffff; }
        .page-header { background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=1974&auto=format&fit=crop') center center; background-size: cover; padding: 6rem 0; color: white; }
        .img-story { border-radius: 10px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); }
        .philosophy-section { background-color: #f8f1e9; }
        .philosophy-icon { font-size: 3rem; color: #c59d5f; }
        .footer { background-color: #3d2c22; color: #fdfaf6; }
        .footer .social-icon a { color: #fdfaf6; font-size: 1.5rem; margin: 0 10px; transition: color .3s; }
        .footer .social-icon a:hover { color: #c59d5f; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <span class="brand-text">🥐 Bake and Joy</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/')}}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/products')}}">Etalase Produk</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/about')}}">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/cart')}}">Beli</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/checkout')}}"><i class="bi bi-cart3 fs-5"></i> Checkout</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-login" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="page-header text-center">
        <div class="container">
            <h1 class="elegant-font display-4">Kisah Kami</h1>
            <p class="lead">Sebuah Perjalanan Rasa dari Hati Sejak 1970.</p>
        </div>
    </header>

    <section class="container my-5 py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://cdn.pixabay.com/photo/2016/11/29/05/07/breads-1867459_1280.jpg" class="img-fluid img-story" alt="Toko roti vintage">
            </div>
            <div class="col-lg-6">
                <h2 class="elegant-font">Warisan dari Jantung Kota Semarang</h2>
                <p class="text-muted" style="line-height: 1.8;">Berawal dari sebuah toko sederhana di salah satu sudut kota Semarang pada tahun 1970, "Bake and Joy" lahir dari cinta seorang ibu terhadap seni membuat roti. Resep-resep yang diwariskan dari generasi ke generasi menjadi fondasi kami. Aroma roti yang baru keluar dari oven batu bata menjadi penanda pagi bagi warga sekitar, sebuah tradisi hangat yang kami jaga hingga hari ini.</p>
                <p class="text-muted" style="line-height: 1.8;">Lebih dari setengah abad berlalu, semangat itu tidak pernah padam. Kami memadukan tradisi dengan inovasi, terus menjaga kualitas bahan baku terbaik—sebagian besar kami peroleh dari petani dan produsen lokal di Jawa Tengah—sambil terus menciptakan varian rasa baru yang sesuai dengan selera masa kini.</p>
            </div>
        </div>
    </section>

    <section class="philosophy-section py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="elegant-font">Filosofi Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="philosophy-icon mb-3"><i class="bi bi-heart-fill"></i></div>
                    <h4 class="elegant-font">Dibuat dengan Hati</h4>
                    <p class="text-muted">Setiap adonan kami olah dengan penuh perhatian dan cinta, karena kami percaya makanan yang lezat berasal dari hati yang tulus.</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="philosophy-icon mb-3"><i class="bi bi-patch-check-fill"></i></div>
                    <h4 class="elegant-font">Janji dari Dapur Kami</h4>
                    <p class="text-muted">Bagi kami, setiap adonan adalah sebuah janji kepercayaan. Karena itu, kami hanya memilih bahan-bahan paling segar dari alam dan meraciknya sepenuh hati, tanpa bahan pengawet. Semua ini kami lakukan agar setiap gigitan yang Anda nikmati terasa jujur, lezat, dan sehangat cinta keluarga.</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="philosophy-icon mb-3"><i class="bi bi-people-fill"></i></div>
                    <h4 class="elegant-font">Untuk Kebersamaan</h4>
                    <p class="text-muted">Kami percaya roti dan kue adalah perekat momen. Kami hadir untuk melengkapi setiap kebersamaan Anda menjadi lebih istimewa.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer pt-5 pb-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-4 mx-auto mb-4">
                    <h5 class="elegant-font">Bake and Joy</h5>
                    <p class="mb-0">Menghadirkan kebahagiaan dalam setiap gigitan.</p>
                </div>
            </div>
            <div class="row"><div class="col-lg-12 social-icon"><a href="#"><i class="bi bi-instagram"></i></a><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter-x"></i></a></div></div>
            <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row"><div class="col"><p>&copy; 2025 Bake and Joy. Semua Hak Cipta Dilindungi.</p></div></div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>