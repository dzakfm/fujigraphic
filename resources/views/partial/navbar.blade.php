@php use Illuminate\Support\Str; @endphp

<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/fujigraphicjakarta.png') }}" alt="Logo" height="40">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">

                <!-- Contoh menu lain -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'custom-active' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
             <li class="nav-item dropdown">
  <a 
  class="nav-link dropdown-toggle {{ request()->routeIs('profile') ? 'custom-active' : '' }}" 
  href="#" 
  id="tentangKamiDropdown" 
  role="button" 
  data-bs-toggle="dropdown" 
  aria-expanded="false"
>
  Tentang Kami
</a>

<ul 
  class="dropdown-menu minimal-dropdown shadow-sm border-0 rounded-3 animate__animated animate__fadeIn text-center" 
  aria-labelledby="tentangKamiDropdown"
>
  <li>
    <a class="dropdown-item {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">
      <i class="bi bi-info-circle me-2 text-primary"></i> Tentang Kami
    </a>
  </li>
  <li>
    <a class="dropdown-item {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">
      <i class="bi bi-question-circle me-2 text-warning"></i> FAQ
    </a>
  </li>
  <li>
    <a class="dropdown-item {{ request()->routeIs('sdank') ? 'active' : '' }}" href="{{ route('sdank') }}">
      <i class="bi bi-file-earmark-text me-2 text-success"></i> S&K
    </a>
  </li>
</ul>


                <!-- Dropdown Produk dengan kategori dinamis -->
               <li class="nav-item dropdown">
  <a 
    class="nav-link dropdown-toggle {{ request()->routeIs('product') ? 'custom-active' : '' }}" 
    href="{{ route('product') }}" 
    id="produkDropdown" 
    role="button" 
    data-bs-toggle="dropdown" 
    aria-expanded="false"
  >
    Produk
  </a>
  <ul class="dropdown-menu minimal-dropdown text-center" aria-labelledby="produkDropdown">
    @foreach($categories as $category)
      <li>
        <a class="dropdown-item" href="{{ route('product', ['category' => $category->id]) }}">
          {{ strtoupper($category->name) }}
        </a>
      </li>
    @endforeach
  </ul>
</li>



                <!-- Menu lainnya -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('artikel') ? 'custom-active' : '' }}" href="{{ route('artikel') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'custom-active' : '' }}" href="{{ route('contact') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
