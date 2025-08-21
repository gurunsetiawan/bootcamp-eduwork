@extends('layouts.app')

@section('title', 'Checkout - Bake and Joy')

@section('content')
<main class="container my-5">
    <div class="text-center mb-5">
        <h1 class="elegant-font">Selesaikan Pesanan</h1>
        <p class="text-muted">Hanya beberapa langkah lagi untuk menikmati kelezatan dari oven kami.</p>
    </div>

    <div class="row g-5">
        <div class="col-lg-7">
            <div class="checkout-form">
                <form>
                    @csrf
                    <h4 class="mb-3 elegant-font">Informasi Kontak</h4>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="fullName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="fullName" required>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-12">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3 elegant-font">Alamat Pengiriman</h4>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="address" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" id="address" rows="3" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">Kota</label>
                            <input type="text" class="form-control" value="Semarang" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="district" class="form-label">Kecamatan</label>
                        <select class="form-select" required>
                            <option value="">Pilih Kecamatan</option>
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
                        </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3 elegant-font">Metode Pembayaran</h4>
                    <div class="my-3">
                        <div class="form-check">
                            <input id="cod" name="payment_method" type="radio" class="form-check-input" checked>
                            <label class="form-check-label" for="cod">
                                <strong>Bayar di Tempat (COD)</strong>
                                <small class="d-block text-muted">Bayar dengan uang tunai saat pesanan tiba</small>
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input id="dummy" name="payment_method" type="radio" class="form-check-input" disabled>
                            <label class="form-check-label text-muted" for="dummy">
                                <del>Transfer Bank</del> (Tidak Tersedia)
                            </label>
                        </div>
                    </div>

                    <button type="button" 
                            class="w-100 btn btn-bake btn-lg elegant-font" 
                            data-bs-toggle="modal" 
                            data-bs-target="#checkoutSuccess">
                        Selesaikan Pesanan
                    </button>
                </form>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card summary-card shadow-sm sticky-top" style="top: 100px; background-color: #f8f1e9; border-color: #e9e0d5">
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
                                <img src="https://images.unsplash.com/photo-1598373182133-52452f7691ef" 
                                     class="summary-item-img me-3" 
                                     alt="sourdough"
                                     style="width: 60px; height: 60px; object-fit: cover">
                                <div>
                                    <h6 class="my-0">Sourdough Bread</h6>
                                    <small class="text-muted">Jumlah: 1</small>
                                </div>
                            </div>
                            <span class="text-muted">Rp 45.000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm bg-transparent">
                            <div class="d-flex">
                                <img src="https://plus.unsplash.com/premium_photo-1674562179816-04fda3958c12" 
                                     class="summary-item-img me-3" 
                                     alt="croissant"
                                     style="width: 60px; height: 60px; object-fit: cover">
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

    <!-- Success Modal -->
    <div class="modal fade" id="checkoutSuccess" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title elegant-font">Pesanan Berhasil! 🎉</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="bi bi-check2-circle text-success display-4 mb-3"></i>
                    <p class="lead">Terima kasih telah berbelanja di Bake and Joy!</p>
                    <p>Pesanan Anda sedang diproses. Detail pesanan akan muncul di sini.</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/') }}" class="btn btn-bake">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
