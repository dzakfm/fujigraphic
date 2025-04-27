<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fujigraphic Jakarta</title>
  <link rel="stylesheet" href="../css/admin/utama.css">

</head>
<body>
<div class="admin">
  <header class="admin__header">
    <div class="left-header">
      <button class="toggle-btn">&#8803;</button>
        <div class="logo">
          <div class="logo-wrapper">
            <img alt="logo" src="{{ asset('images/fujigraphicjakarta.png') }}">
          </div>
        </div>
    </div>
    
    <div class="toolbar">
      <a></a>
      <form action="{{ route('admin.logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn-logout">↩ Keluar</button>
      </form>
    </div>
  </header>
  
  <div class="layout">
   <nav class="admin__nav">
    <ul class="menu">
      <li class="menu__item">
        <a class="menu__link" href="{{ route('admin.dashboard') }}">Daftar Pesan Pengunjung</a>
      </li>
      <li class="menu__item">
        <a class="menu__link" href="{{ route('admin.dProduct') }}">Daftar Produk</a>
      </li>
      <li class="menu__item">
        <a class="menu__link" href="{{ route('admin.dArtikel') }}">Daftar Artikel</a>
      </li>
      <li class="menu__item">
        <a class="menu__link" href="{{ route('admin.bantuan') }}">Bantuan</a>
      </li>
    </ul>
   </nav>
  </div>
  <div class="nav-overlay"></div>
</div>

<div class="center-wrapper">
<main class="main-content"> 
   <div class="tabelPengunjung">
    <h1>Daftar Produk</h1>
    <a href="{{ route('admin.add-product') }}" class="btn btn-sm btn-add">✚ Tambah Produk</a>
    <table class="table">
      <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Spesifikasi</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
          @foreach($category->products as $index => $product)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" style="width: 100px; height: auto;">
                </td>
                <td>{{ $product->name }}</td>
                <td>{{ Str::limit($product->specifications, 100) }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('admin.editProduct', $product->id) }}" class="btn btn-sm btn-warning">✏ Edit</a>
                    <a href="#" class="btn btn-sm btn-danger" onclick="hapusData({{ $product->id }})">🗑 Hapus</a>

                    <form id="form-hapus-{{ $product->id }}" action="{{ route('admin.deleteProduct', $product->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus produk ini?')">
                        @csrf 
                        @method('DELETE')
                    </form>
                </td>
            </tr>
          @endforeach
        @endforeach
      </tbody>
    </table>
  </div>
 </div>
</div>
<script>
  function hapusData(id) {
    if (confirm('Yakin ingin menghapus data ini?')) {
      document.getElementById('form-hapus-' + id).submit();
    }
  }
</script>
<script  src="{{ asset('script/admin/admin.js') }}"></script>
</body>
</html>