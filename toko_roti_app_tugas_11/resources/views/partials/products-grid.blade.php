<div class="container my-5 py-5">
    <div class="row text-center section-title">
        <div class="col w-100">
            <h2 class="elegant-font">Produk Terlaris Kami</h2>
            <p class="lead text-muted">Pilihan favorit pelanggan yang tidak boleh Anda lewatkan.</p>
        </div>
    </div>

    @isset($products)
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
        @foreach ($products as $product)
        <div class="col">
            <div class="card h-100">
                <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title elegant-font">{{ $product['name'] }}</h5>
                    <p class="card-text small text-muted">{{ $product['description'] }}</p>
                    <div class="mt-auto">
                        <p class="price mb-2">{{ $product['price'] }}</p>
                        <a href="#" class="btn btn-bake w-100">
                            <i class="bi bi-plus-lg"></i> Tambah
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endisset
</div>
