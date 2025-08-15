@extends('layouts.app')

@section('title', 'Tentang Kami - Bake and Joy')

@section('content')
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
                <p class="text-muted story-text">
                    Berawal dari sebuah toko sederhana di salah satu sudut kota Semarang pada tahun 1970, 
                    "Bake and Joy" lahir dari cinta seorang ibu terhadap seni membuat roti. 
                    Resep-resep yang diwariskan dari generasi ke generasi menjadi fondasi kami. 
                    Aroma roti yang baru keluar dari oven batu bata menjadi penanda pagi bagi warga sekitar, 
                    sebuah tradisi hangat yang kami jaga hingga hari ini.
                </p>
                <p class="text-muted story-text">
                    Lebih dari setengah abad berlalu, semangat itu tidak pernah padam. 
                    Kami memadukan tradisi dengan inovasi, terus menjaga kualitas bahan baku terbaik 
                    — sebagian besar kami peroleh dari petani dan produsen lokal di Jawa Tengah — 
                    sambil terus menciptakan varian rasa baru yang sesuai dengan selera masa kini.
                </p>
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
                    <p class="text-muted">Setiap adonan kami olah dengan penuh perhatian dan cinta, 
                        karena kami percaya makanan yang lezat berasal dari hati yang tulus.</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="philosophy-icon mb-3"><i class="bi bi-patch-check-fill"></i></div>
                    <h4 class="elegant-font">Janji dari Dapur Kami</h4>
                    <p class="text-muted">Bagi kami, setiap adonan adalah sebuah janji kepercayaan. 
                        Karena itu, kami hanya memilih bahan-bahan paling segar dari alam dan meraciknya sepenuh hati, tanpa bahan pengawet. 
                        Semua ini kami lakukan agar setiap gigitan yang Anda nikmati terasa jujur, lezat, dan sehangat cinta keluarga.</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="philosophy-icon mb-3"><i class="bi bi-people-fill"></i></div>
                    <h4 class="elegant-font">Untuk Kebersamaan</h4>
                    <p class="text-muted">Kami percaya roti dan kue adalah perekat momen. 
                        Kami hadir untuk melengkapi setiap kebersamaan Anda menjadi lebih istimewa.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
