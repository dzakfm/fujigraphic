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
    <h1>Daftar Artikel</h1>
    <a href="{{ route('admin.add-article') }}" class="btn btn-sm btn-add">✚ Tambah Artikel</a>

    <div class="d-flex justify-content-start mb-3" style="margin-left:40px;">
      <form action="{{ route('admin.articles') }}" method="GET" class="d-flex align-items-center search-form-admin">
        <input type="text" name="search" class="form-control form-control-sm search-input-admin" placeholder="Cari artikel..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-sm btn-primary search-button-admin">
          <i class="bi bi-search"></i> Cari
        </button>
      </form>
    </div>

    <table class="table">
      <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Konten</th>
            <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($artikels as $index => $article)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $article->created_at->format('d-M-Y') }}</td>
                <td>
                    <img src="{{ asset('storage/' . $article->image) }}" alt="Gambar Artikel" style="width: 100px; height: auto;">
                </td>
                <td>{{ $article->title }}</td>
                <td>{!! Str::limit($article->content, 100) !!}</td>
                <td>
                    <a href="{{ route('admin.editArticle', $article->id) }}" class="btn btn-sm btn-warning">✏ Edit</a>
                    <a href="#" class="btn btn-sm btn-danger" onclick="hapusData({{ $article->id }})">🗑 Hapus</a>

                    <form id="form-hapus-{{ $article->id }}" action="{{ route('admin.deleteArticle', $article->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus artikel ini?')">
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
    if (confirm('Yakin ingin menghapus Artikel ini?')) {
      document.getElementById('form-hapus-' + id).submit();
    }
  }
</script>
<script  src="{{ asset('script/admin/admin.js') }}"></script>
</body>
</html>