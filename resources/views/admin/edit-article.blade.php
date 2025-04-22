<!DOCTYPE html>
<html>
<head>
    <title>Edit Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2>Edit Artikel test</h2>
    
    <form action="{{ route('admin.updateArticle', $artikels->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul Artikel</label>
            <input type="text" class="form-control" name="title" value="{{ $artikels->title }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Isi Artikel</label>
            <textarea name="content" id="editor" class="form-control" rows="5">{{ $artikels->content }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label><br>
            @if($artikels->image)
                <img src="{{ asset('storage/' . $artikels->image) }}" width="150" class="mb-2"><br>
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Update Artikel</button>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
    CKEDITOR.replace('editor');
</script>
</body>
</html>
