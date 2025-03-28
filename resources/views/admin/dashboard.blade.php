<div class="container">

  <h2>Kategori</h2>
  <form action="{{ route('admin.storeCategory') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Kategori" required>
    <button type="submit">Tambah Kategori</button>
  </form>

  <ul>
    @foreach($categories as $category)
      <li>
        <form action="{{ route('admin.updateCategory', $category->id) }}" method="POST" style="display:inline;">
          @csrf @method('PUT')
          <input type="text" name="name" value="{{ $category->name }}">
          <button type="submit">Edit</button>
        </form>

        <form action="{{ route('admin.deleteCategory', $category->id) }}" method="POST" style="display:inline;">
          @csrf @method('DELETE')
          <button type="submit">Hapus</button>
        </form>
      </li>
    @endforeach
  </ul>

  <h2>Produk</h2>
  <form action="{{ route('admin.storeProduct') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Nama Produk" required>
    <input type="text" name="specifications" placeholder="Spesifikasi" required>
    <select name="category_id" required>
      <option value="">Pilih Kategori</option>
      @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
    <input type="file" name="image">
    <button type="submit">Tambah Produk</button>
  </form>

  {{-- List Produk --}}
  @foreach($categories as $category)
    <h4>{{ $category->name }}</h4>
    @foreach($category->products as $product)
      <li>
        <form action="{{ route('admin.updateProduct', $product->id) }}" method="POST" enctype="multipart/form-data" style="display:inline;">
          @csrf @method('PUT')
          <input type="text" name="name" value="{{ $product->name }}">
          <input type="text" name="specifications" value="{{ $product->specifications }}">
          <select name="category_id">
            @foreach($categories as $cat)
              <option value="{{ $cat->id }}" {{ $cat->id == $product->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
            @endforeach
          </select>
          <input type="file" name="image">
          <button type="submit">Edit</button>
        </form>

        <form action="{{ route('admin.deleteProduct', $product->id) }}" method="POST" style="display:inline;">
          @csrf @method('DELETE')
          <button type="submit">Hapus</button>
        </form>
      </li>
    @endforeach
  @endforeach

</div>
<h2>Artikel</h2>
<form action="{{ route('admin.storeArticle') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Judul Artikel" required>
    <textarea name="content" placeholder="Konten" required></textarea>
    <input type="file" name="image">
    <button type="submit">Tambah Artikel</button>
</form>

<ul>
    @foreach($artikels as $article)
        <li>
            <form action="{{ route('admin.updateArticle', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <input type="text" name="title" value="{{ $article->title }}">
                <textarea name="content">{{ $article->content }}</textarea>
                <input type="file" name="image">
                <button type="submit">Edit</button>
            </form>

            <form action="{{ route('admin.deleteArticle', $article->id) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>

<h2>Daftar Pesan Pengunjung</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Pesan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $key => $contact)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $contact->nama }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->telepon }}</td>
            <td>{{ $contact->pesan }}</td>
            <td>
                <form action="{{ url('/admin/contacts/'.$contact->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

