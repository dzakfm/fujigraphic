<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuji Graphic Jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
@include('partial.navbar')

    <main class="container my-5">
        <div class="row">
            <!-- Kolom kiri: Gambar & Tanggal -->
            <div class="col-md-3 text-center mb-5 mt-5">
                <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}" class="img-fluid">
                <h5>{{ \Carbon\Carbon::parse($product->created_at)->format('d M Y') }}</h5>
                <p><i class="fas fa-comments"></i> 0 Komentar</p>
            </div>
            <!-- Kolom kanan: Judul & Konten -->
            <div class="col-md-9 mt-md-5">
                <h2>{{ $product->title }}</h2>
                <p>{!! $product->content !!}</p> <!-- Menjaga format HTML -->
                <button>Pesan/Hubungi Kami</button>
            </div>
        </div>
        
        <a href="{{ route('artikel') }}" class="btn btn-secondary mt-4">Kembali</a>
    </main>


@include('partial.footer')

<script src="{{ asset('script/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>