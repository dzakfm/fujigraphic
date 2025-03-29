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
            Selain itu, sudah pasti jika semakin canggih mesin fotocopy yang ditawarkan akan semakin mahal pula harganya. Ketika akan melakukan pembelian, biasanya konsumen akan langsung memilih fitur yang paling canggih, padahal belum tentu fitur tersebut dibutuhkan untuk usaha fotocopy.

            <b>Pilih Membeli atau Menyewa?</b>

            Sekarang ini banyak usaha penjualan mesin fotocopy serta penyewaan mesin fotocopy di Indonesia. Sebelum Anda yakin memilih membeli mesin fotocopy, lebih baik Anda mempertimbangkan terlebih dulu, lebih baik membeli mesin fotocopy atau malah menyewa mesin fotocopy. Pertimbangan ini bisa dilakukan dengan melihat modal yang Anda miliki sekarang ini, kebutuhan, dan yang lainnya.

            <b>Perawatan Mesin</b>

            Jika Anda memilih untuk membeli mesin fotocopy, Anda harus bersiap dengan risiko yang lebih besar dibandingkan dengan menyewa. Ketika menyewa mesin fotocopy, berbagai macam perawatan akan ditangani oleh perusahaan jasa sewa. Sehingga, kita tidak perlu melakukan banyak hal untuk melakukan perawatan mesin, kita hanya perlu menggunakan mesin fotocopy sesuai dengan ketentuan yang berlaku.

            Beda jika memilih membeli mesin fotocopy tersebut. Sesudah membeli mesin, kita harus memiliki keterampilan seperti mengisi kertas, mengisi tinta saat habis, hingga harus bisa mengatasi kerusakan ringan. Bila terjadi kerusakan dan harus melakukan pergantian sparepart mesin, biaya yang dibutuhkan pun juga tidak sedikit.

            <b>Jumlah Penggunaan Mesin</b>

            Anda bisa mempertimbangkan, seperti apa frekuensi penggunaan mesin. Bila mesin hanya digunakan untuk beberapa lembar dalam sehari, lebih baik menyewa saja. Apalagi, jika ditimbang dari segi investasi serta biaya, penyewaan mesin akan lebih murah, apalagi jika penggunaan mesin tak terlalu sering.

            Sedangkan, apalagi Anda akan sering menggunakan mesin tersebut, lebih baik mempertimbangkan harga sewa. Karena, akan lebih mahal dibanding membeli mesin sendiri. Kebanyakan perusahaan penyewaan memberikan tarif per lembar, bila penggunaan banyak, lebih baik membeli. Atau, Anda bisa mempertimbangkan memilih perusahaan yang memberikan biaya berdasarkan pada durasi penyewaan mesin.

            <b>Tujuan Pembelian Mesin</b>

            Tujuan pembelian mesin juga mempengaruhi pertimbangan apakah ingin membeli atau menyewa mesin fotocopy. Bila Anda ingin menjalankan usaha fotocopy yang cukup besar dan lokasinya di sekitar kampus atau dekat dengan pemukiman mahasiswa, lebih baik mempertimbangkan pembelian mesin yang berukuran lebih besar dan memiliki kemampuan yang lebih baik seperti dapat mengcopy dokumen dengan otomatis, atau bisa melakukan copy bolak-balik secara otomatis.

            Biasanya, daerah kampus membutuhkan copy dalam jumlah yang begitu banyak serta cepat. Beda dengan toko yang menangani beberapa lembar. Mesin yang memiliki kecepatan tinggi tak terlalu dibutuhkan.
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