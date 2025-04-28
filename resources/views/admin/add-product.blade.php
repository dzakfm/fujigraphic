<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
     <!-- jQuery (required untuk Summernote) -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- Script Bootstrap 5 JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Summernote JS -->
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@include('partial.navbar')

    <main class="container">
        <div class="row">
            <p class="mt-4"></p>
            <h1 class="text-center mt-5">Tambah Produk</h1>
            <div class="col-md-3">
                <h5>Tambah Kategori</h5>
                <form id="form-add-category" action="{{ route('admin.storeCategory') }}" method="POST">
                    @csrf
                    <input type="text" name="name" class="mb-2" placeholder="Nama Kategori" required>
                    <a href="javascript:void(0);" class="btn btn-sm btn-success d-flex align-items-center justify-content-center" style="width: 51%; height: 2.1rem; margin-left: 1.8rem;" onclick="submitCategory()"><strong>Tambah Kategori</strong></a>
                </form>
            </div>
        </div>
    </main>

    <main class="container my-5">
        <form id="form-add-product" action="{{ route('admin.storeProduct') }}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row">
            <!-- Kolom kiri: Gambar -->
            <div class="col-md-3 mb-5 mt-5">
                <div class="mb-4">
                <select name="category_id" class="form-select" required>
                    <option>Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                </div>
                <strong>Masukkan Gambar ⬇️</strong>
                <input type="file" name="image" class="img-fluid" required> 
            </div>
            <!-- Kolom kanan: Judul & Konten -->
            <div class="col-md-9 mt-md-5">
                <h2><input type="text" name="name" placeholder="Nama Produk" required></h2>
                <p><textarea name="specifications" id="summernote" required></textarea></p> 
            </div>
            <div style="float: right; margin-left: auto;" class="col-md-9 mt-md-5 mb-5">
                <a href="javascript:void(0);" class="btn btn-sm btn-danger d-flex align-items-center justify-content-center px-3" style="float: right; width: auto; height: 3rem; font-size: 16px;" onclick="submitProduct()"><strong>Tambah Produk</strong></a>
            </div>
        </div>
        </form>

        <a href="{{ route('admin.dProduct') }}" class="btn btn-secondary mt-4">Kembali</a>
    </main>


@include('partial.footer')
<script src="{{ asset('script/summernote-init.js') }}"></script>
<script>
  function submitCategory() {
    document.getElementById('form-add-category').submit();
  }

  function submitProduct() {
    document.getElementById('form-add-product').submit();
  }
</script>
<script src="{{ asset('script/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>