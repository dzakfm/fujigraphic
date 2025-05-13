@php
    $transparentRoutes = [
        'home',
        'artikel',
        'product',
        'contact',
        'profile',
        'faq',
        'sdank'
    ];
@endphp

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top
    {{ in_array(Route::currentRouteName(), $transparentRoutes) ? 'custom-navbar' : 'bg-dark'}}">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/fujigraphicjakarta.png') }}" alt="Logo" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'custom-active' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('profile') ? 'custom-active' : '' }}"
                      href="{{ route('profile') }}" id="tentangKamiLink">
                        Tentang Kami
                    </a>
                    <ul style="text-align: center;" class="dropdown-menu" aria-labelledby="tentangKamiDropdown">
                        <li><a class="dropdown-item {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Tentang Kami</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('sdank') ? 'active' : '' }}" href="{{ route('sdank') }}">S&K</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('product') ? 'custom-active' : '' }}"
                      href="{{ route('product') }}" id="produkDropdown">
                        Produk
                    </a>
                    <ul style="text-align: center;" class="dropdown-menu" aria-labelledby="produkDropdown">
                        <li><a class="dropdown-item {{ request()->routeIs('product') ? 'active' : '' }}" href="{{ route('product') }}">Mesin Fotocopy</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">Mesin Laminating</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('sdank') ? 'active' : '' }}" href="{{ route('sdank') }}">Mesin Scanner</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('sdank') ? 'active' : '' }}" href="{{ route('sdank') }}">Toner, Drum & Sparepart</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('sdank') ? 'active' : '' }}" href="{{ route('sdank') }}">Office Equipment {{ '(' . 'Kertas & ATK' . ')' }}</a></li>
                    </ul>
                </li>
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
