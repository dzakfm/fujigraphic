<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('images/fgj.png') }}" type="image/x-icon"/>
  <title>Fujigraphic Jakarta</title>
  <link rel="stylesheet" href="../css/admin/utama.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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


<main class="main-content"> 
   <div class="tabelBantuan">
    <h2>Menu Bantuan</h2>
    <table class="bantuan-table">
      <tr>
        <td><strong>Cara Menambahkan Produk</strong></td>
        <td><strong>Cara Menambahkan Artikel</strong></td>
      </tr>
      <tr>
        <td>
          <iframe width="300" height="170"
            src="https://www.youtube.com/embed/XBYg80db5SI"
            title="Panduan Video"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        </td>
        <td>
          <iframe width="300" height="170"
            src="https://www.youtube.com/embed/YFDQ84sVhsc"
            title="Panduan Video"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        </td>
      </tr>
      <tr>
        <td><strong>Cara Edit & Hapus Produk</strong></td>
        <td><strong>Cara Edit & Hapus Artikel</strong></td>
      </tr>
      <tr>
        <td>
          <iframe width="300" height="170"
            src="https://www.youtube.com/embed/LoWWw4vVjJo"
            title="Panduan Video"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        </td>
        <td>
          <iframe width="300" height="170"
            src="https://www.youtube.com/embed/Dfxxk_Fqf8k"
            title="Panduan Video"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        </td>
      </tr>
    </table>
  </div>
 </div>

<script>
  console.log('JS Loaded');
</script>
<script  src="{{ asset('script/admin/admin.js') }}"></script>
</body>
</html>