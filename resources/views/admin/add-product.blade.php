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
        <form action="{{ route('admin.storeProduct') }}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row">
            <!-- Kolom kiri: Gambar -->
            <div class="col-md-3 text-center mb-5 mt-5">
                <input type="file" name="image" class="img-fluid"> 
            </div>
            <!-- Kolom kanan: Judul & Konten -->
            <div class="col-md-9 mt-md-5">
                <h2><input type="text" name="name" placeholder="Nama Produk" required></h2>
                <p><textarea name="specifications" id="specifications" placeholder="Spesifikasi" required></textarea></p> 
            </div>
            <div class="col-md-9 mt-md-5">
                <select name="category_id" required>
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <button type="submit">Tambah Artikel</button>
        </form>
            <form action="{{ route('admin.storeCategory') }}" method="POST">
                @csrf
                    <input type="text" name="name" placeholder="Nama Kategori" required>
                    <button type="submit">Tambah Kategori</button>
            </form>
            </div>
        </div>
        <a href="{{ route('admin.dProduct') }}" class="btn btn-secondary mt-4">Kembali</a>
    </main>


@include('partial.footer')

<script src="{{ asset('script/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>