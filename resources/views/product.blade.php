<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fuji Graphic Jakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  
  @include('partial.navbar')

  <main class="container my-5">
    <h1 class="text-center mb-5 mt-5">PRODUK KAMI</h1>

    {{-- Loop kategori --}}
    @forelse($categories as $category)
      <section class="mb-5">
        <h2 class="mb-4 text-success">{{ $category->name }}</h2>

        <div class="row">
          {{-- Loop produk --}}
          @forelse($category->products as $product)
            <div class="col-md-4 mb-4">
              <div class="card h-100 text-center p-3">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">{{ $product->name }}</h5>
                  <a href="{{ route('product.detailProduct', ['id' => $product->id]) }}" class="btn btn-primary">
                      Baca Selengkapnya
                  </a>
                </div>
              </div>
            </div>
          @empty
            <p class="text-muted">Belum ada produk di kategori ini.</p>
          @endforelse
        </div>
      </section>
    @empty
      <p class="text-center">Belum ada kategori tersedia.</p>
    @endforelse
  </main>

  @include('partial.footer')

  <script src="{{ asset('script/script.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
