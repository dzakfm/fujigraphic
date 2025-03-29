<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuji Graphic Jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
@include('partial.navbar')

<section id="faq" class="py-5">
<div class="container">

    <div class="container mt-5">
        <div class="row">
            <!-- Kolom kiri Tanggal -->
            <div class="col-md-3 text-center">
                <img src="{{ asset('storage/' . $artikel->image) }}" class="img-fluid">
                <h5>10 Februari 2018</h5>
                <p><i class="fas fa-comments"></i> <span id="comment-count">0</span> Komentar</p>
            </div>
            <!-- Kolom kanan Deskripsi -->
            <div class="col-md-9">
                <h2>{{ $artikel->title }}</h2>
                <p>{{ $artikel->content }}</p>
            </div>
            Jika anda adalah seorang pengusaha yang berfikir untuk lakukan efisiensi bisnis dan mencoba untuk menekan cost produksi yang tentu saja tanpa mengurangi kualitas maka pilihan tepat anda serahkan kepada kami.Fujigraphic mampu menjawab semua keinginan anda karena visi kami adalah membantu menyelesaikan persoalan bisnis anda dengan menekan cost tanpa mengorbankan kualitas.

            Silahkan buktikan layanan kami dan hubungi kami segera untuk kebutuhan mesin fotocopy anda.
        </div>

        <!-- Komentar -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h5>Tambahkan Komentar</h5>
                <form id="comment-form">
                    <div class="mb-3">
                        <textarea class="form-control" id="comment-text" rows="3" placeholder="Tulis komentar..."></textarea>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>

        <a href="{{ route('artikel') }}" class="btn btn-secondary mt-4">Kembali</a>
    </div>
</div>
</section>
@include('partial.footer')

<script src="{{ asset('script/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>