<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Bake and Joy</title>

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
        .summary-card { background-color: #f8f1e9; border: 1px solid #e9e0d5; border-radius: .75rem; }
        .summary-item-img { width: 60px; height: 60px; object-fit: cover; border-radius: 0.5rem; }
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
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about')}}">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/cart')}}">Beli</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/checkout')}}"><i class="bi bi-cart3 fs-5"></i> Checkout</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-login" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <main class="container my-5">
        <div class="text-center mb-5">
            <h1 class="elegant-font">Selesaikan Pesanan</h1>
            <p class="text-muted">Hanya beberapa langkah lagi untuk menikmati kelezatan dari oven kami.</p>
        </div>

        <div class="row g-5">
            <div class="col-lg-7">
                <form class="needs-validation" novalidate>
                    <h4 class="mb-3 elegant-font">Informasi Kontak</h4>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="fullName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="fullName" placeholder="John Doe" required>
                            <div class="invalid-feedback">Nama lengkap wajib diisi.</div>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="anda@contoh.com" required>
                            <div class="invalid-feedback">Format email tidak valid.</div>
                        </div>
                        <div class="col-12">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="phone" placeholder="08123456789" required>
                             <div class="invalid-feedback">Nomor telepon wajib diisi.</div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3 elegant-font">Alamat Pengiriman</h4>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="address" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" id="address" rows="3" placeholder="Nama Jalan, Nomor Rumah, RT/RW" required></textarea>
                             <div class="invalid-feedback">Alamat wajib diisi.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="city" value="Semarang" disabled readonly>
                        </div>
                        <div class="col-md-6">
                             <label for="district" class="form-label">Kecamatan</label>
                             <select class="form-select" id="district" required>
                                <option value="">Pilih...</option>
                                <option>Banyumanik</option>
                                <option>Candisari</option>
                                <option>Gajahmungkur</option>
                                <option>Gayamsari</option>
                                <option>Genuk</option>
                                <option>Gunungpati</option>
                                <option>Mijen</option>
                                <option>Ngaliyan</option>
                                <option>Pedurungan</option>
                                <option>Semarang Barat</option>
                                <option>Semarang Selatan</option>
                                <option>Semarang Tengah</option>
                                <option>Semarang Timur</option>
                                <option>Semarang Utara</option>
                                <option>Tembalang</option>
                                <option>Tugu</option>
                             </select>
                              <div class="invalid-feedback">Silakan pilih kecamatan.</div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3 elegant-font">Metode Pembayaran</h4>
                    <div class="my-3">
                        <div class="form-check">
                            <input id="cod" name="paymentMethod" type="radio" class="form-check-input" required checked>
                            <label class="form-check-label" for="cod">
                                <strong>Bayar di Tempat (COD)</strong>
                                <small class="d-block text-muted">Bayar dengan uang tunai saat pesanan Anda tiba.</small>
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input id="transfer" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="transfer">
                                <strong>Transfer Bank</strong>
                                 <small class="d-block text-muted">Lakukan pembayaran ke rekening kami. Nomor rekening akan ditampilkan setelah pesanan dibuat.</small>
                            </label>
                        </div>
                         <div class="form-check mt-3">
                            <input id="qris" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="qris">
                                <strong>E-Wallet / QRIS</strong>
                                 <small class="d-block text-muted">Bayar menggunakan GoPay, OVO, Dana, dll. Kode QR akan ditampilkan setelah pesanan dibuat.</small>
                            </label>
                        </div>
                    </div>

                    <hr class="my-4">
                    <button class="w-100 btn btn-dark btn-lg elegant-font" type="submit">Selesaikan Pesanan</button>
                </form>
            </div>

            <div class="col-lg-5">
                <div class="card summary-card shadow-sm sticky-top" style="top: 100px;">
                    <div class="card-header bg-transparent border-0 pt-3 px-3">
                        <h4 class="d-flex justify-content-between align-items-center mb-0 elegant-font">
                            <span>Ringkasan Pesanan</span>
                            <span class="badge bg-dark rounded-pill">2</span>
                        </h4>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between lh-sm bg-transparent">
                                <div class="d-flex">
                                    <img src="https://images.unsplash.com/photo-1598373182133-52452f7691ef?q=80&w=2070&auto=format&fit=crop" alt="sourdough" class="summary-item-img me-3">
                                    <div>
                                        <h6 class="my-0">Sourdough Bread</h6>
                                        <small class="text-muted">Jumlah: 1</small>
                                    </div>
                                </div>
                                <span class="text-muted">Rp 45.000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm bg-transparent">
                                <div class="d-flex">
                                    <img src="https://plus.unsplash.com/premium_photo-1674562179816-04fda3958c12?q=80&w=387&auto=format&fit=crop" alt="croissant" class="summary-item-img me-3">
                                    <div>
                                        <h6 class="my-0">Butter Croissant</h6>
                                        <small class="text-muted">Jumlah: 2</small>
                                    </div>
                                </div>
                                <span class="text-muted">Rp 36.000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-transparent">
                                <span>Subtotal</span>
                                <span>Rp 81.000</span>
                            </li>
                             <li class="list-group-item d-flex justify-content-between bg-transparent">
                                <span>Biaya Pengiriman</span>
                                <span>Rp 15.000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-transparent fw-bold fs-5">
                                <span>Total</span>
                                <strong>Rp 96.000</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
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

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
</body>
</html>