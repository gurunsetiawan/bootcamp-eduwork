@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    @include('partials.carousel')
    @include('partials.products-grid', ['products' => $featuredProducts])
    @include('partials.promo-section')
    @include('partials.promo-modal')
@endsection
