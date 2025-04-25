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
        <form action="{{ route('admin.storeArticle') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <!-- Kolom kiri: Gambar & Tanggal -->
            <div class="col-md-3 text-center mb-5 mt-5">
                <input type="file" name="image" class="img-fluid"> 
                <h5><input type="date" name="date"></h5>
                <p><i class="fas fa-comments"></i> 0 Komentar</p>
            </div>
            <!-- Kolom kanan: Judul & Konten -->
            <div class="col-md-9 mt-md-5">
                <h2><input type="text" name="title" placeholder="Judul Artikel" required></h2>
                <p><textarea name="content" id="editor" placeholder="Konten" required></textarea></p> 
            </div>
        </div>
        <button type="submit">Tambah Artikel</button>
        </form>

        <a href="{{ route('admin.dArtikel') }}" class="btn btn-secondary mt-4">Kembali</a>
    </main>


@include('partial.footer')

<script src="{{ asset('script/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>