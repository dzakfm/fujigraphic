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
    <h2>Menu Bantuan</h2>
    <table class="table">
      1. cara pakai
    </table>
  </div>
 </div>
</div>
<script>
  console.log('JS Loaded');
</script>
<script  src="{{ asset('script/admin/admin.js') }}"></script>
</body>
</html>