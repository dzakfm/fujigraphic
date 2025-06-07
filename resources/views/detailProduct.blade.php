@extends('layouts.app')
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/fgj.png') }}" type="image/x-icon"/>
    <title>Fujigraphic Jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
@include('partial.navbar')

    <main class="container my-5">
        <div class="row">
            <!-- Kolom kiri: Gambar -->
            <div class="col-md-3 text-center mb-5 mt-5">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="img-fluid">
                <p>Kategori : {{ $product->category->name ?? '-' }}</p>
            </div>
            <!-- Kolom kanan: Judul & Konten -->
            <div class="col-md-9 mt-md-5">
                <h2>{{ $product->title }}</h2>
                <p>{!! $product->specifications !!}</p> <!-- Menjaga format HTML -->
                <button class="btn btn-outline-primary pesan-now">Pesan/Hubungi Kami</button>
            </div>
        </div>
        
        <a href="{{ route('product') }}" class="btn btn-danger kembali mt-4">Kembali</a>
    </main>


@include('partial.footer')

<script src="{{ asset('script/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>