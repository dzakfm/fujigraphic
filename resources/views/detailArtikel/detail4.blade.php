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
            Menurut sejarah, mesin fotocopy pertama ditemukan di tahun 1983, penemunya adalah penyalin dokumen yang berada di perusahaan analisis paten Amerika, beliau bernama Chester Carisoni. 
            Ketika melakukan pekerjaannya, ia merasa pekerjaan tersebut bisa dilakukan dengan lebih mudah bila dapat menggandakan dokumen. Ia kemudian membaca berbagai macam referensi yang berkaitan dengan mesin cetak kemudian menemukan konsep elektrofotografi yang hingga sekarang ini dikenal dengan sebut fotocopy.

            Berdasarkan jenisnya, mesin fotocopy dibagi 3 jenis, yakni:

            <ul style="padding-left: 20px;">
                <li>Mesin biasa. Mesin ini paling banyak dilihat di perkantoran serta rental fotocopy. Mesin jenis ini bekerja menyalin dokumen asli serta menggandakannya dengan menggunakan cahaya, muatan listrik statis, bahan kimia dan panas.</li>
                <li>Jenis rissograph bisa diandalkan untuk membuat salinan dengan jumlah yang besar dan bisa melakukan peng-skalaan dokumen. Dengan menggunakan mesin ini, kita bisa mengubah hasil salinan menjadi lebih besar atau pun lebih kecil. Mesin ini juga memungkinkan penggunanya merubah warna sesuai yang mereka inginkan.</li>
                <li>Mesin stensil. Untuk jenis stensil ini, sebenarnya fungsi utamanya menggandakan dokumen asli, tetapi dengan menggunakan koreksilak dan sheet stensil.</li>
            </ul>

            Selain dikategorikan berdasarkan dengan jenisnya, mesin fotocopy juga dikategorikan berdasarkan pada bentuknya, berikut beberapa bentuk dari mesin tersebut:

            <ul style="padding-left: 20px;">
                <li>Mesin besar. Mesin ini mempunyai berat yang mencapai 70 kilogram serta mempunyai kecepatan menyalin hingga 3 lembar per detik. Mesin ini dapat memperkecil dan memperbesar dokumen asli sesuai dengan keinginan.</li>
                <li>Mesin sedang. Untuk bentuk yang kedua, mesin sedang. Mesin ini adalah bentuk yang paling standar digunakan di rental fotocopy serta memiliki kemampuan menyalin 15 hingga 25 lembar per menitnya, mesin ini bisa mengakomodir kertas dengan ukuran A3 serta B4.</li>
                <li>Mesin berukuran kecil. Mesin terakhir ini memiliki bentuk kecil dan memiliki sifat portable sehingga lebih mudah dipindahkan. Seringnya di zaman sekarang, mesin ini dibuat model build-in bersama dengan printer, sehingga keunggulannya menjadi lebih bertambah.</li>
            </ul>

            Biasanya, perbedaan harga antara satu mesin fotocopy dengan yang lainnya dipengaruhi oleh merek, kualitas, hingga kuantitasnya menggandakan kertas. 
            Sebelum melakukan pembelian mesin, salah satu tips yang bisa Anda lakukan adalah mengevaluasi seperti apa kebutuhan Anda yang sebenarnya, apakah Anda memerlukan mesin yang dapat menggandakan dokumen dengan singkat, 
            atau memerlukan mesin dengan kualitas baik.
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