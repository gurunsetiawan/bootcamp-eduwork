<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - Bake and Joy</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        .cart-item-img { width: 80px; height: 80px; object-fit: cover; border-radius: 0.5rem; }
        .quantity-input { max-width: 70px; }
        .summary-card { background-color: #f8f1e9; border: 1px solid #e9e0d5; }
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
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Etalase Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/cart') }}">Beli</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/checkout') }}"><i class="bi bi-cart3 fs-5"></i> Checkout</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-login" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="elegant-font mb-4">Keranjang Belanja Anda</h1>
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap">
                            <img src="https://images.unsplash.com/photo-1598373182133-52452f7691ef?q=80&w=2070&auto=format&fit=crop" class="cart-item-img me-3" alt="Sourdough">
                            <div class="flex-grow-1 me-3">
                                <h5 class="elegant-font mb-1">Sourdough Bread</h5>
                                <span class="text-muted">Rp 45.000</span>
                            </div>
                            <div class="d-flex align-items-center my-2 me-3">
                                <label for="quantity1" class="visually-hidden">Kuantitas</label>
                                <input type="number" id="quantity1" class="form-control form-control-sm text-center quantity-input" value="1" min="1">
                            </div>
                            <div class="fw-bold me-3">Rp 45.000</div>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center flex-wrap">
                            <img src="https://plus.unsplash.com/premium_photo-1674562179816-04fda3958c12?q=80&w=387&auto=format&fit=crop" class="cart-item-img me-3" alt="Croissant">
                            <div class="flex-grow-1 me-3">
                                <h5 class="elegant-font mb-1">Butter Croissant</h5>
                                <span class="text-muted">Rp 18.000</span>
                            </div>
                            <div class="d-flex align-items-center my-2 me-3">
                                <label for="quantity2" class="visually-hidden">Kuantitas</label>
                                <input type="number" id="quantity2" class="form-control form-control-sm text-center quantity-input" value="2" min="1">
                            </div>
                            <div class="fw-bold me-3">Rp 36.000</div>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                </div>
                 </div>

            <div class="col-lg-4">
                <div class="card summary-card shadow-sm sticky-top" style="top: 100px;">
                    <div class="card-body">
                        <h3 class="elegant-font card-title border-bottom pb-2">Ringkasan</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent">Subtotal<span>Rp 81.000</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent">Biaya Pengiriman<span>Rp 15.000</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent fw-bold">
                                <div><strong>Total</strong></div>
                                <span class="elegant-font fs-5"><strong>Rp 96.000</strong></span>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-dark w-100 mt-3 elegant-font fs-5">Lanjut ke Pembayaran</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer pt-5 pb-4 mt-5">
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