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

    <div class="d-flex justify-content-start mb-3" style="margin-left:40px;">
      <form action="{{ route('admin.dProduct') }}" method="GET" class="d-flex align-items-center search-form-admin">
        <input type="text" name="search" class="form-control mb-3 search-input-admin" placeholder="Cari produk..." value="{{ request('search') }}">
        <button type="submit" class="btn search-button-admin">
          <i class="bi bi-search"></i> 🔍︎ Cari
        </button>
        
    </div>
    <div class="d-flex justify-content-start mb-3" style="margin-left:40px;">
      <p class="sort-kategori-label">Filter Kategori:</p>
      <select name="category" id="category" onchange="this.form.submit()" class="form-select sort-kategori">
          <option value="">-- SEMUA KATEGORI --</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
              {{ $category->name }}
            </option>
          @endforeach
        </select>
         {{-- Hidden input untuk menjaga sorting --}}
        <input type="hidden" name="sort" value="{{ request('sort') }}">
        <input type="hidden" name="direction" value="{{ request('direction') }}">
    </div>

    @php
    $currentSort = request('sort');
    $currentDirection = request('direction', 'asc');

    $toggleDirection = fn($col) => ($currentSort === $col && $currentDirection === 'asc') ? 'desc' : 'asc';
    @endphp

    <table class="table">
      <thead>
        <tr>
            <th>No <a class="sort-link" href="{{ route('admin.dProduct', array_merge(request()->all(), ['sort' => 'id', 'direction' => $toggleDirection('id')])) }}">
                  ↕ </a></th>
            <th>Gambar</th>
            <th>Nama Produk <a class="sort-link" href="{{ route('admin.dProduct', array_merge(request()->all(), ['sort' => 'name', 'direction' => $toggleDirection('name')])) }}">
                  ↕ </a></th>
            <th>Spesifikasi</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" style="width: 100px; height: auto;">
                </td>
                <td>{{ $product->name }}</td>
                <td>{{ Str::limit($product->specifications, 100) }}</td>
                <td>{{ $product->category->name ?? '-' }}</td>
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
      </tbody>
    </table>
  </div>
 </div>
</div>
<script>
  function hapusData(id) {
    if (confirm('Yakin ingin menghapus Produk ini?')) {
      document.getElementById('form-hapus-' + id).submit();
    }
  }
</script>
<script  src="{{ asset('script/admin/admin.js') }}"></script>
</body>
</html>