@extends('layouts.app')

@section('title', 'Keranjang Belanja - Bake and Joy')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="elegant-font mb-4">Keranjang Belanja Anda</h1>
            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <div class="d-flex align-items-center flex-wrap">
                        <img src="https://images.unsplash.com/photo-1598373182133-52452f7691ef" 
                             class="cart-item-img me-3" alt="Sourdough" style="height: 80px; width: 80px; object-fit: cover">
                        <div class="flex-grow-1 me-3">
                            <h5 class="elegant-font mb-1">Sourdough Bread</h5>
                            <span class="text-muted">Rp 45.000</span>
                        </div>
                        <div class="d-flex align-items-center my-2 me-3">
                            <input type="number" 
                                   class="form-control form-control-sm text-center quantity-input" 
                                   value="1" min="1" style="width: 70px">
                        </div>
                        <div class="fw-bold me-3">Rp 45.000</div>
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center flex-wrap">
                        <img src="https://plus.unsplash.com/premium_photo-1674562179816-04fda3958c12" 
                             class="cart-item-img me-3" alt="Croissant" style="height: 80px; width: 80px; object-fit: cover">
                        <div class="flex-grow-1 me-3">
                            <h5 class="elegant-font mb-1">Butter Croissant</h5>
                            <span class="text-muted">Rp 18.000</span>
                        </div>
                        <div class="d-flex align-items-center my-2 me-3">
                            <input type="number" 
                                   class="form-control form-control-sm text-center quantity-input" 
                                   value="2" min="1" style="width: 70px">
                        </div>
                        <div class="fw-bold me-3">Rp 36.000</div>
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card summary-card shadow-sm sticky-top" style="top: 100px; background-color: #f8f1e9; border-color: #e9e0d5">
                <div class="card-body">
                    <h3 class="elegant-font card-title border-bottom pb-2">Ringkasan</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent">
                            Subtotal<span>Rp 81.000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent">
                            Biaya Pengiriman<span>Rp 15.000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent fw-bold">
                            <div><strong>Total</strong></div>
                            <span class="elegant-font fs-5"><strong>Rp 96.000</strong></span>
                        </li>
                    </ul>
                    <a href="{{ route('checkout') }}" class="btn btn-bake w-100 mt-3 elegant-font">
                        Lanjut ke Pembayaran
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
