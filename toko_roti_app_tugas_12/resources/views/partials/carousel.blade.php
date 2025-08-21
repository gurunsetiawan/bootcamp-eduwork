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
                    <a href="{{ route('products') }}" class="btn btn-lg btn-outline-light elegant-font">Lihat Varian Roti</a>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('https://cdn.pixabay.com/photo/2021/03/08/19/14/black-forest-cake-6080065_1280.jpg')">
                <div class="carousel-caption text-center">
                    <h5 class="elegant-font">Manisnya Momen Spesial</h5>
                    <p>Kue dan Pastry premium untuk merayakan setiap momen berharga.</p>
                    <a href="{{ route('products') }}" class="btn btn-lg btn-outline-light elegant-font">Pesan Kue Ulang Tahun</a>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1974&auto=format&fit=crop')">
                <div class="carousel-caption text-center">
                    <h5 class="elegant-font">Kopi & Roti, Pasangan Sempurna</h5>
                    <p>Nikmati perpaduan aroma kopi segar dan roti hangat di tempat kami.</p>
                    <a href="{{ route('about') }}" class="btn btn-lg btn-outline-light elegant-font">Kunjungi Toko Kami</a>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>
    </div>
</header>
