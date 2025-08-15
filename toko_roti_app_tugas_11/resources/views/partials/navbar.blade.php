<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <span class="brand-text">🥐 Bake and Joy</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}" href="{{ route('products') }}">Etalase Produk</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('cart') ? 'active' : '' }}" href="{{ route('cart') }}">Beli</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('checkout') ? 'active' : '' }}" href="{{ route('checkout') }}"><i class="bi bi-cart3 fs-5"></i> Checkout</a></li>
                <a href="{{ route('login-mockup') }}" class="btn btn-bake">Login</a>
            </ul>
        </div>
    </div>
</nav>
