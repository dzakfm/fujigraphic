<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fuji Graphic Jakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  
  @include('partial.navbar')

  <main class="container my-5">
    <h1 class="text-center mb-5 mt-5">Artikel</h1>

      <section class="mb-5">
        <h2 class="mb-4 text-success">
        <div class="row">
            @forelse($artikels as $artikel)
            <div class="col-md-4 mb-4">
              <div class="card h-100 text-center p-3">
                <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">{{ $artikel->title }}</h5>
                  <p class="card-text">{{ Str::limit($artikel->content, 100) }}</p>
                  <a href="{{ route('artikel.detail08feb2018', $artikel->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          @empty
          <p class="text-center">Belum ada artikel tersedia.</p>
          @endforelse
        </div>
      </section>
</main>
  @include('partial.footer')

  <script src="{{ asset('script/script.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
