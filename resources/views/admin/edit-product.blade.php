<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <style>
        .cke_notifications_area, .cke_notification {
            display: none !important;
        }
    </style>
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
            <h1 class="text-center mt-5">Edit Produk</h1>
        </div>
    </main>
    <main class="container my-5">
        <form id="form-update-product" action="{{ route('admin.updateProduct', $product->id) }}" method="POST" enctype="multipart/form-data">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @csrf
            @method('PUT')
        <div class="row">
            <!-- Kolom kiri: Gambar & Tanggal -->
            <div class="col-md-3 text-center mb-5 mt-5">
                <div class="mb-4">
                    <select name="category_id" class="form-select" required>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ $cat->id == $product->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" width="150" class="mb-2"><br>
                @endif
                <input type="file" name="image" class="img-fluid" accept="image/*"> 
            </div>
            <!-- Kolom kanan: Judul & Konten -->
            <div class="col-md-9 mt-md-5">
                <h2><input type="text" name="name" value="{{ $product->name }}" required class="form-control mb-3"></h2>
                <p><textarea name="specifications" id="ckeditor" class="form-control" rows="5">{{ $product->specifications }}</textarea></p> 
            </div>
            <div style="float: right; margin-left: auto;" class="col-md-9 mt-md-5">
                <a href="javascript:void(0);" onclick="submitUpdateProduct()" class="btn btn-sm btn-danger d-flex align-items-center justify-content-center px-3" style="float: right; width: auto; height: 3rem; font-size: 16px;">
                    <strong>Update Produk</strong>
                </a> 
            </div>
        </div>
        </form>

        <a href="{{ route('admin.dProduct') }}" class="btn btn-secondary mt-4">Kembali</a>
    </main>


@include('partial.footer')
<script>
  CKEDITOR.replace('ckeditor');
</script>
<script>
    function submitUpdateProduct() {
        document.getElementById('form-update-product').submit();
    }
</script>
<script src="{{ asset('script/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>