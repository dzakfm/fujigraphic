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
                <h5>12 Maret 2018</h5>
                <p><i class="fas fa-comments"></i> <span id="comment-count">0</span> Komentar</p>
            </div>
            <!-- Kolom kanan Deskripsi -->
            <div class="col-md-9">
                <h2>{{ $artikel->title }}</h2>
                <p>{{ $artikel->content }}</p>
            </div>
            <b>Sesuaikan Budget Saat Memilih Mesin Fotocopy</b>
            
            Bila Anda merupakan pemula serta tidak mempunyai modal yang besar, lebih baik memilih mesin yang mempunyai kecepatan menengah. Mesin yang berkecepatan menengah ini dibanderol dengan harga yang lebih terjangkau bila dibandingkan dengan mesin berkecepatan tinggi.

            <b>Menyesuaikan Mesin dengan Kebutuhan</b>

            Selain mempertimbangkan budget, hal yang tak boleh dilupakan adalah menyesuaikan mesin dengan kebutuhan usaha. Seperti apa perencanaan usaha Anda? jika usaha yang akan Anda bangun ini hanya usaha fotocopy saja, Anda dapat memilih mesin dengan jenis analog, tetapi Anda juga menyediakan jasa seperti scanning dan yang lainnya, lebih baik memilih mesin fotocopy dengan jenis digital. Mesin jenis digital ini mempunyai fitur yang jauh lebih lengkap dibanding dengan analog. Sehingga, sebelum melakukan pembelian atau memilih mesin, lebih baik survei secara langsung ke toko-toko yang menjual mesin fotocopy. Anda bisa berkonsultasi pada penjual, dan memilih mesin sesuai dengan kebutuhan Anda.

            <b>Pilih Mesin yang Mempunyai Suku Cadang dan Tempat Service Banyak</b>

            Jika membuka usaha seperti fotocopy, usaha bisa terhambat jika mesin mengalami masalah namun suku cadang sulit ditemukan. Agar hal ini tidak terjadi, lebih baik pilih mesin yang mempunyai lokasi service yang banyak dan mempunyai suku cadang yang mudah diperoleh. Biasanya, mesin yang mudah ditemukan suku cadangnya adalah mesin dengan merek terkenal atau dengan merek yang sudah tenar.

            <b>Pilih Mesin yang Memiliki Perawatan Mudah</b>

            Jangan lupa mempertimbangkan perawatan mesin, artinya pilih mesin yang memiliki perawatan mudah sehingga, hanya mempelajari sendir, kita bisa memperbaiki mesin dengan cepat. Tidak mungkin bukan jika setiap mengalami sedikit masalah, Anda harus memanggil teknisi ke toko, selain memperlambat kelancaran usaha juga akan membuang banyak modal operasional.

            <b>Harga dan Merek Bukan Segalanya</b>

            Biasanya ketika memilih mesin fotocopy, harga dan merek adalah hal yang tak pernah luput dari pertimbangan. Sebenarnya tak melulu merek dan harga, karena disamping itu ada berbagai macam pertimbangan lain yang lebih penting. harga yang murah, belum tentu memiliki kualitas yang buruk, begitu pula sebaliknya.
 
            Itulah berbagai tips pemilihan mesin fotocopy yang bisa Anda ikuti jika Anda ingin menekuni usaha fotocopy. Selain itu, lebih baik Anda mencari tahu pada orang yang telah berpengalaman di bisnis fotocopy sebelum terjun ke usaha yang menjanjikan ini.
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