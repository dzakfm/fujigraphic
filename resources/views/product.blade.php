@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('images/fgj.png') }}" type="image/x-icon"/>
  <title>Fujigraphic Jakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body>
  
  @include('partial.navbar')

  <main class="container my-5">
    <h1 class="text-center mb-5 mt-5">Produk Kami</h1>

    <form id="searchForm" action="{{ route('product.search') }}" method="GET" class="mb-4 position-relative">
      <div class="input-group">
        <input type="text" name="search" id="searchInput" class="form-control" placeholder="Cari produk..." value="{{ request('search') }}">
        <div class="input-group-append">
          <button class="btn btn-success" type="submit">🔍︎ Cari</button>
        </div>
      </div>
      
      <div class="input-group">
        <p class="sort-kategori-label">Filter Kategori:</p>
      </div>

      <div class="input-group">
        <select name="category" id="category" class="form-select sort-kategori" onchange="this.form.submit()">
          <option value="">-- SEMUA KATEGORI --</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
              {{ $category->name }}
            </option>
          @endforeach
        </select>
        <input type="hidden" name="sort" value="{{ request('sort') }}">
        <input type="hidden" name="direction" value="{{ request('direction') }}">
      </div>

    @if(request()->filled('search') || request()->filled('category'))
    <h2 class="mb-5 mt-2 text-secondary">
      Hasil pencarian untuk: <em>"{{ request('search') ?? $categories->firstWhere('id', request('category'))->name ?? '' }}"</em>
    </h2>
    
    @php
    $grouped = $products->groupBy('category.name');
    @endphp

    @forelse($grouped as $categoryName => $group)
      @php $slug = Str::slug($categoryName, '-') @endphp
      <section id="kategori-{{ $slug }}" class="mb-5 my-5">
        <h2 class="mb-4">{{ $categoryName ?? 'Tanpa Kategori' }}</h2>
        <div class="row g-4">
          @foreach($group as $product)
            <div class="col-md-4">
              <div class="card h-100 text-center p-3">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top img-product" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">{{ $product->name }}</h5>
                  <a href="{{ route('product.detailProduct', ['id' => $product->id]) }}" class="btn btn-customprd mt-auto">
                    Baca Selengkapnya
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </section>
    @empty
      <p class="text-muted">Produk tidak ditemukan.</p>
    @endforelse


    @else
    {{-- Loop kategori --}}
    @forelse($categories as $category)
      <section class="mb-5 my-5">
        <h2 class="mb-4">{{ $category->name }}</h2>

        <div class="row">
          {{-- Loop produk --}}
          @forelse($category->products as $product)
            <div class="col-md-4 mb-4">
              <div class="card h-100 text-center p-3">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">{{ $product->name }}</h5>
                  <a href="{{ route('product.detailProduct', ['id' => $product->id]) }}" class="btn btn-customprd mt-auto">
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
    @endif
  </main>

  @include('partial.footer')

  <script src="{{ asset('script/script.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
