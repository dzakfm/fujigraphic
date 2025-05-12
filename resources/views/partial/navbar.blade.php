<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
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
                    <a class="nav-link {{ request()->routeIs('home') ? 'custom-active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('artikel') ? 'custom-active' : '' }}" href="{{ route('artikel') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('product') ? 'custom-active' : '' }}" href="{{ route('product') }}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'custom-active' : '' }}" href="{{ route('contact') }}">Contact</a>
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
            </ul>
        </div>
    </div>
</nav>
