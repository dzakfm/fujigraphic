@extends('layouts.app')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fuji Graphic Jakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="{{ asset('css/artikel.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body>
  @include('partial.navbar')

  <main class="container my-5">
    <h1 class="text-center mb-5 mt-5">Artikel</h1>

    <!-- Search Form -->
    <form id="searchForm" action="{{ route('artikel.search') }}" method="GET" class="mb-4 position-relative">
      <div class="input-group">
        <input type="text" name="search" id="searchInput" class="form-control" placeholder="Cari artikel..." value="{{ request('search') }}">
        <div class="input-group-append">
          <button class="btn btn-success" type="submit">🔍︎ Cari</button>
        </div>
      </div>

    <section class="mb-5">
      <h2 class="mb-5 mt-2 text-secondary">
        @if(request('search'))
        Hasil pencarian untuk: <em>"{{ request('search') }}"</em>
        @endif
      </h2>

      <div id="artikelList">
        <div class="row">
          @forelse($artikels as $artikel)
            <div class="col-md-4 mb-4">
              <div class="card h-100 text-center p-3">
                <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">{{ $artikel->title }}</h5>
                  <p class="date-text">{{ \Carbon\Carbon::parse($artikel->created_at)->format('d M Y') }}</p>
                  <p class="card-text">{!! Str::limit($artikel->content, 100) !!}</p>
                  <a href="{{ route('artikel.detailArtikel', ['id' => $artikel->id]) }}" class="btn btn-customartl mt-auto">
                      Baca Selengkapnya
                  </a>
                </div>
              </div>
            </div>
          @empty
            <p class="text-center">Tidak ditemukan artikel yang sesuai.</p>
          @endforelse
        </div>
      </div>
    </section>
  </main>

  @include('partial.footer')

  <script src="{{ asset('script/script.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
