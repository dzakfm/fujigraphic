<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/fujigraphicjakarta.png') }}" alt="Logo" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('artikel')}}">Artikel</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('product')}}">Product</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">FAQ</a></li>
            </ul>
        </div>
    </div>
</nav>