<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bake and Joy - Roti & Kue Pilihan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fdfaf6; /* Warna latar belakang yang hangat */
        }

        /* Tampilan elegan untuk heading */
        .elegant-font {
            font-family: 'Playfair Display', serif;
        }

        /* Kustomisasi Navbar */
        .navbar {
            padding-top: 1rem;
            padding-bottom: 1rem;
            box-shadow: 0 2px 4px rgba(0,0,0,.05);
            background-color: #ffffff;
        }
        .navbar-brand .icon {
            width: 32px;
            height: 32px;
            margin-right: 8px;
            vertical-align: middle;
        }
        .navbar-brand .brand-text {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: #5a3e36; /* Warna coklat tua */
        }
        .nav-link {
            font-weight: 400;
            color: #5a3e36;
            margin-left: 15px;
            margin-right: 15px;
        }
        .nav-link:hover, .nav-link.active {
            color: #c59d5f; /* Warna emas saat di-hover */
        }
        .btn-login {
            background-color: #5a3e36;
            color: #ffffff;
            border-radius: 20px;
            padding: 8px 20px;
        }
        .btn-login:hover {
            background-color: #48312a;
            color: #ffffff;
        }

        /* Kustomisasi Carousel */
        .carousel-item {
            height: 85vh; /* Tinggi carousel */
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .carousel-caption {
            bottom: 25%;
            background-color: rgba(0, 0, 0, 0.4); /* Latar belakang transparan untuk teks */
            padding: 2rem;
            border-radius: 0.5rem;
        }
        .carousel-caption h5 {
            font-size: 3rem;
            letter-spacing: 2px;
        }
        .carousel-caption p {
            font-size: 1.2rem;
        }

        /* Kustomisasi Section */
        .section-title {
            margin-bottom: 3rem;
        }

        /* Kustomisasi Card */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform .3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card-body .price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #c59d5f;
        }

        /* Kustomisasi Footer */
        .footer {
            background-color: #3d2c22;
            color: #fdfaf6;
        }
        .footer .social-icon a {
            color: #fdfaf6;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color .3s;
        }
        .footer .social-icon a:hover {
            color: #c59d5f;
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span class="brand-text">🥐 Bake and Joy</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/')}}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/products')}}">Etalase Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about')}}">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/cart')}}">Beli</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/checkout')}}"><i class="bi bi-cart3 fs-5"></i> Checkout</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-login" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header>
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            
            <div class="carousel-inner">
                
                <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1534620808146-d33bb39128b2?q=80&w=1974&auto=format&fit=crop')">
                    <div class="carousel-caption text-center">
                        <h5 class="elegant-font">Kehangatan dari Oven Kami</h5>
                        <p>Dibuat setiap hari dengan bahan-bahan terbaik untuk kebahagiaan Anda.</p>
                        <a href="#" class="btn btn-lg btn-outline-light elegant-font">Lihat Varian Roti</a>
                    </div>
                </div>
                
                <div class="carousel-item" style="background-image: url('https://cdn.pixabay.com/photo/2021/03/08/19/14/black-forest-cake-6080065_1280.jpg')">
                    <div class="carousel-caption text-center">
                        <h5 class="elegant-font">Manisnya Momen Spesial</h5>
                        <p>Kue dan Pastry premium untuk merayakan setiap momen berharga.</p>
                        <a href="#" class="btn btn-lg btn-outline-light elegant-font">Pesan Kue Ulang Tahun</a>
                    </div>
                </div>
                
                <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1974&auto=format&fit=crop')">
                    <div class="carousel-caption text-center">
                        <h5 class="elegant-font">Kopi & Roti, Pasangan Sempurna</h5>
                        <p>Nikmati perpaduan aroma kopi segar dan roti hangat di tempat kami.</p>
                        <a href="#" class="btn btn-lg btn-outline-light elegant-font">Kunjungi Toko Kami</a>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <div class="container my-5 py-5">
        <div class="row text-center section-title">
            <div class="col">
                <h2 class="elegant-font">Produk Terlaris Kami</h2>
                <p class="lead text-muted">Pilihan favorit pelanggan yang tidak boleh Anda lewatkan.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://plus.unsplash.com/premium_photo-1674562179816-04fda3958c12?q=80&w=387&auto=format&fit=crop" class="card-img-top" alt="Croissant" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title elegant-font">Butter Croissant</h5>
                        <p class="card-text">Tekstur renyah di luar, lembut di dalam, dengan aroma mentega premium.</p>
                        <p class="price">Rp 18.000</p>
                        <a href="#" class="btn btn-outline-dark">Tambah ke Keranjang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1598373182133-52452f7691ef?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Sourdough" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title elegant-font">Sourdough Bread</h5>
                        <p class="card-text">Roti artisan dengan fermentasi alami yang baik untuk pencernaan.</p>
                        <p class="price">Rp 45.000</p>
                        <a href="#" class="btn btn-outline-dark">Tambah ke Keranjang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://plus.unsplash.com/premium_photo-1713719224048-5dde0b2424ed?q=80&w=387&auto=format&fit=crop" class="card-img-top" alt="Red Velvet Cake" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title elegant-font">Red Velvet Slice</h5>
                        <p class="card-text">Kue lembut dengan lapisan cream cheese frosting yang mewah.</p>
                        <p class="price">Rp 35.000</p>
                        <a href="#" class="btn btn-outline-dark">Tambah ke Keranjang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5" style="background-color: #f8f1e9;">
        <div class="container text-center">
            <h2 class="elegant-font">Penawaran Spesial Minggu Ini!</h2>
            <p class="lead text-muted">Dapatkan diskon 20% untuk pembelian kedua.</p>
            <button class="btn btn-lg btn-dark elegant-font mt-3" data-bs-toggle="modal" data-bs-target="#promoModal">
                Lihat Detail Promo
            </button>
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
            <div class="row">
                 <div class="col-lg-12 social-icon">
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                 </div>
            </div>
            <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col">
                    <p>&copy; 2025 Bake and Joy. Semua Hak Cipta Dilindungi.</p>
                </div>
            </div>
        </div>
    </footer>


    <div class="modal fade" id="promoModal" tabindex="-1" aria-labelledby="promoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title elegant-font fs-4" id="promoModalLabel">🎉 Promo Spesial Untukmu!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=1989&auto=format&fit=crop" class="img-fluid rounded mb-3" alt="Promo Cake">
                    <p>Nikmati <strong>Diskon 20%</strong> untuk pembelian item kedua (roti atau kue apa saja) selama seminggu penuh!</p>
                    <p>Cukup tunjukkan halaman ini di kasir atau gunakan kode promo <strong class="text-success">JOY20</strong> saat checkout online.</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a href="#" class="btn btn-dark">Belanja Sekarang</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
