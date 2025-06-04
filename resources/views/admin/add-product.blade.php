<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <style>
        .cke_notifications_area, .cke_notification {
            display: none !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
@include('partial.navbar')

    <main class="container">
        <div class="row" style="margin-bottom: -150px;">
            <p class="mt-4"></p>
            <h1 class="text-center mt-5" style="margin-bottom: 2rem;">Tambah Produk</h1>
            <div class="col-md-3">
                <h5>Tambah Kategori</h5>
                <form id="form-add-category" action="{{ route('admin.storeCategory') }}" method="POST">
                    @csrf
                    <input type="text" name="name" class="mb-2" placeholder="Nama Kategori" required>
                    <a href="javascript:void(0);" class="btn btn-sm btn-success d-flex align-items-center justify-content-center ijobtn" style="width: 65%; height: 2.1rem; margin-left: 1rem; font-size: 15px;" onclick="submitCategory()"><strong>Tambah Kategori</strong></a>
                    <p></p>
                    @if(session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                    @endif
                </form>
            </div>
            <div class="col-md-9">
                <h5>Daftar Kategori</h5>
                @foreach($categories as $category)
                <ul class="list-group mb-3 border-0">
                    <li class="list-group-item border-0">
                      <div class="d-flex align-items-center">
                        <form id="edit-category-{{ $category->id }}" action="{{ route('admin.updateCategory', $category->id) }}" method="POST" class="d-flex me-2">
                        @csrf @method('PUT')
                            <input type="text" name="name" value="{{ $category->name }}" required>
                            <a href="javascript:void(0);" class="btn btn-sm btn-warning ms-3 kngbtn" onclick="document.getElementById('edit-category-{{ $category->id }}').submit()">✏ Edit</a>
                        </form>
                        <form id="delete-category-{{ $category->id }}" action="{{ route('admin.deleteCategory', $category->id) }}" method="POST" class="d-flex">
                        @csrf @method('DELETE')
                            <a href="javascript:void(0);" class="btn btn-sm btn-danger ms-2" onclick="deleteCategory({{ $category->id }})">🗑 Hapus</a>
                        </form>               
                      </div>
                    </li>
                    @endforeach
                    <li class="list-group-item border-0">
                      <div class="d-flex align-items-center">
                        @if(session('success1'))
                          <div class="alert alert-success" style="margin-left: 4.2rem;">
                            {{ session('success1') }}
                          </div>
                        @endif
                        @if(session('success2'))
                          <div class="alert alert-success" style="margin-left: 4.2rem;">
                            {{ session('success2') }}
                          </div>
                        @endif
                      </div>
                    </li>
                </ul> 
            </div>
        </div>
    </main>

    <main class="container my-5">
        <form id="form-add-product" action="{{ route('admin.storeProduct') }}" method="POST" enctype="multipart/form-data">
            @if(session('success3'))
                <div class="alert alert-success">
                  {{ session('success3') }}
                </div>
            @endif 
         @csrf
        <div class="row">
            <!-- Kolom kiri: Gambar -->
            <div class="col-md-3 mb-5 mt-5">
                <div class="mb-4">
                <select name="category_id" class="form-select" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                </div>
                <strong>Masukkan Gambar ⬇️</strong>
                <input type="file" name="image" class="img-fluid" required accept="image/*"> 
            </div>
            <!-- Kolom kanan: Judul & Konten -->
            <div class="col-md-9 mt-md-5">
                <h2><input type="text" name="name" placeholder="Nama Produk" required class="form-control mb-3"></h2>
                <p><textarea name="specifications" id="ckeditor" required></textarea></p> 
            </div>
            <div style="float: right; margin-left: auto;" class="col-md-9 mt-md-5 mb-5">
                <a href="javascript:void(0);" class="btn btn-sm btn-danger d-flex align-items-center justify-content-center px-3" style="float: right; width: auto; height: 3rem; font-size: 16px;" onclick="submitProduct()"><strong>Tambah Produk</strong></a>
            </div>
        </div>
        </form>

        <a href="{{ route('admin.dProduct') }}" class="btn btn-secondary kembali mt-4">Kembali</a>
    </main>


@include('partial.footer')
<script>
  CKEDITOR.replace('ckeditor');
</script>
<script>
  function submitCategory() {
    document.getElementById('form-add-category').submit();
  }
  function submitProduct() {
    document.getElementById('form-add-product').submit();
  }
  function editCategory() {
    document.getElementById('edit-category').submit();
  }
  function deleteCategory(id) {
    if (confirm('Yakin ingin menghapus Kategori ini?')) {
      document.getElementById('delete-category-' + id).submit();
    }
  }

</script>
<script src="{{ asset('script/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>