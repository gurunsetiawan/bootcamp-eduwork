<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etalase Produk - Bake and Joy</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

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
        .page-header { background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1557308539-3c24a3501037?q=80&w=2070&auto=format&fit=crop') center center; background-size: cover; padding: 6rem 0; color: white; }
        .section-title { margin-bottom: 3rem; }
        .card { border: none; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); transition: transform .3s ease-in-out; }
        .card:hover { transform: translateY(-10px); }
        .card-body .price { font-size: 1.2rem; font-weight: bold; color: #c59d5f; }
        .footer { background-color: #3d2c22; color: #fdfaf6; }
        .footer .social-icon a { color: #fdfaf6; font-size: 1.5rem; margin: 0 10px; transition: color .3s; }
        .footer .social-icon a:hover { color: #c59d5f; }
        .btn-custom-cart { background-color: #5a3e36; color: white; }
        .btn-custom-cart:hover { background-color: #48312a; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <span class="brand-text">🥐 Bake and Joy</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/')}}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/products')}}">Etalase Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about')}}">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/cart')}}">Beli</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/checkout')}}"><i class="bi bi-cart3 fs-5"></i> Checkout</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-login" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="page-header text-center">
        <div class="container">
            <h1 class="elegant-font display-4">Etalase Produk Kami</h1>
            <p class="lead">Temukan roti, kue, dan pastry favorit Anda yang dibuat dengan cinta.</p>
        </div>
    </header>

    <main class="container my-5">
        <section id="roti" class="mb-5">
            <h2 class="elegant-font section-title border-bottom pb-2">Aneka Roti</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1598373182133-52452f7691ef?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Sourdough" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title elegant-font">Sourdough Bread</h5>
                            <p class="card-text small text-muted">Roti sehat dengan fermentasi alami, renyah di luar, empuk di dalam.</p>
                            <div class="mt-auto text-center">
                                <p class="price mb-2">Rp 45.000</p>
                                <a href="#" class="btn btn-custom-cart w-100"><i class="bi bi-plus-lg"></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col">
                    <div class="card h-100">
                        <img src="https://cdn.pixabay.com/photo/2022/07/29/17/50/loaf-7352306_1280.jpg" class="card-img-top" alt="Roti Gandum" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title elegant-font">Whole Wheat Loaf</h5>
                            <p class="card-text small text-muted">Roti gandum utuh yang kaya serat dan nutrisi untuk gaya hidup sehat.</p>
                            <div class="mt-auto text-center">
                                <p class="price mb-2">Rp 38.000</p>
                                <a href="#" class="btn btn-custom-cart w-100"><i class="bi bi-plus-lg"></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </section>

        <section id="pastry-kue" class="mb-5">
            <h2 class="elegant-font section-title border-bottom pb-2">Pastry & Kue</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="https://plus.unsplash.com/premium_photo-1674562179816-04fda3958c12?q=80&w=387&auto=format&fit=crop" class="card-img-top" alt="Croissant" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title elegant-font">Butter Croissant</h5>
                            <p class="card-text small text-muted">Pastry klasik Prancis dengan lapisan mentega yang harum dan renyah.</p>
                            <div class="mt-auto text-center">
                                <p class="price mb-2">Rp 18.000</p>
                                <a href="#" class="btn btn-custom-cart w-100"><i class="bi bi-plus-lg"></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://plus.unsplash.com/premium_photo-1713719224048-5dde0b2424ed?q=80&w=387&auto=format&fit=crop" class="card-img-top" alt="Red Velvet" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title elegant-font">Red Velvet Slice</h5>
                            <p class="card-text small text-muted">Potongan kue red velvet mewah dengan lapisan cream cheese frosting.</p>
                            <div class="mt-auto text-center">
                                <p class="price mb-2">Rp 35.000</p>
                                <a href="#" class="btn btn-custom-cart w-100"><i class="bi bi-plus-lg"></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://plus.unsplash.com/premium_photo-1673282157352-7b385a1d9ed7?q=80&w=402&auto=format&fit=crop" class="card-img-top" alt="Cinnamon Roll" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title elegant-font">Cinnamon Roll</h5>
                            <p class="card-text small text-muted">Roti gulung kayu manis yang lembut dengan glasir manis di atasnya.</p>
                            <div class="mt-auto text-center">
                                <p class="price mb-2">Rp 22.000</p>
                                <a href="#" class="btn btn-custom-cart w-100"><i class="bi bi-plus-lg"></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=1989&auto=format&fit=crop" class="card-img-top" alt="Chocolate Cake" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title elegant-font">Dark Choco Cake</h5>
                            <p class="card-text small text-muted">Kue cokelat pekat yang memanjakan lidah para pecinta cokelat sejati.</p>
                            <div class="mt-auto text-center">
                                <p class="price mb-2">Rp 40.000</p>
                                <a href="#" class="btn btn-custom-cart w-100"><i class="bi bi-plus-lg"></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>