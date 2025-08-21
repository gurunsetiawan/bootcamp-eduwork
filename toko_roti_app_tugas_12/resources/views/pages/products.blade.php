@extends('layouts.app')

@section('title', 'Etalase Produk')

@section('content')
<header class="page-header text-center">
    <div class="container">
        <h1 class="elegant-font display-4">Etalase Produk Kami</h1>
        <p class="lead">Temukan roti, kue, dan pastry favorit Anda yang dibuat dengan cinta.</p>
    </div>
</header>
<main class="container my-5">
@foreach ($categories as $category)
<section id="{{ $category['id'] }}" class="mb-5">
    <div class="text-center">
        <h2 class="elegant-font section-title border-bottom pb-2 d-inline-block">{{ $category['title'] }}</h2>
    </div>
    @include('partials.products-grid', ['products' => $category['products']])
</section>
@endforeach
</main>
@endsection
