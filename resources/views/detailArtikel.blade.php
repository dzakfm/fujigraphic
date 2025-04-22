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
                <h5>{{ \Carbon\Carbon::parse($artikel->created_at)->format('d M Y') }}</h5>
                <p><i class="fas fa-comments"></i> 0 Komentar</p>
            </div>
            <!-- Kolom kanan: Judul & Konten -->
            <div class="col-md-9 mt-md-5">
                <h2>{{ $artikel->title }}</h2>
                <p>{!! $artikel->content !!}</p> <!-- Menjaga format HTML -->
            </div>
        </div>
        <!-- Komentar -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h5>Tambahkan Komentar</h5>
                <form id="comment-form">
                    <div class="mb-3">
                        <textarea class="form-control" id="comment-text" rows="3" placeholder="Tulis komentar..."></textarea>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>

        <a href="{{ route('artikel') }}" class="btn btn-secondary mt-4">Kembali</a>
    </main>


@include('partial.footer')

<script src="{{ asset('script/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>