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
            Namun, memilih mesin fotocopy bekas ini bukan tanpa kesulitan, karena bisa saja mesin dijual dalam kondisi buruk, namun tampilan luar terlihat bagus. Agar Anda tidak tertipu hal demikian, ada beberapa tips yang bisa dilakukan untuk memilih mesin fotocopy second.

            <b>Memilih Mesin Fotocopy Rekondisi</b>

            Mesin fotocopy rekondisi merupakan mesin yang berasal dari luar negeri. Mesin ini biasanya masih memiliki kondisi yang baik, dan bisa dikatakan 90% seperti baru. Keunggulan dari mesin rekondisi adalah keadaannya yang masih bagus namun dibanderol dengan harga yang lebih terjangkau. Bila dibanding dengan harga mesin baru, sudah pasti mesin rekondisi ini memiliki harga yang lebih terjangkau. Biasanya, mesin ini memperoleh perawatan yang baik. Oleh sebab itu, meskipun bekas mesin ini mempunyai kualitas terjamin.

            <b>Jangan Memilih Tahun yang Terlalu Tua</b>

            Anda harus ingat jika sekarang Anda membeli barang elektronik bekas. Sehingga, usahakan untuk memilih tahun mesin yang tak terlalu tua. Paling tidak, mesin yang akan Anda beli baru beberapa tahun yang lalu, sehingga kondisinya pun juga masih bagus, lebih-lebih jika mesin masih memiliki garansi sehingga, saat menemukan masalah, Anda bisa langsung mengontak perusahaan mesin tersebut.

            <b>Ketersediaan Suku Cadang</b>

            Bila Anda berniat membeli mesin fotocopy dalam keadaan rekondisi, seringnya suku cadang mesin masih asli. Karena, orang luar negeri hanya mempergunakan sparepart asli saat melakukan perawatan mesin. Tetapi, beda dengan mesin fotocopy dari lokal, biasanya di dalam mesin sudah dicampur dengan berbagai suku cadang berbeda. Oleh sebab itu, hati-hati ketika memutuskan ingin membeli mesin dari lokal.

            Seperti apapun kondisi mesin, tidak menutup kemungkinan jika suatu saat mesin akan mengalami kerusakan sehingga, pilih mesin yang memiliki sparepart yang mudah ditemukan. Sehingga, bila mesin rusak, Anda tak akan kesulitan untuk mengganti bagian-bagiannya.

            <b>Garansi serta Pelayanan Dari Perusahaan Mesin</b>

            Garansi merupakan hal penting yang harus diperhatikan ketika membeli barang berharga, termasuk mesin fotocopy ini. Oleh sebab itu, beli mesin dengan garansi serta support yang baik dari perusahaan mesin. Saat membeli barang elektronik, dua hal ini begitu dibutuhkan. Sebelum yakin melakukan pembelian, tanyakan terlebih dulu, apakah tim support mesin mudah dihubungi jika mesin mengalami kerusakan.

            Demikian tips yang dapat Anda terapkan, semoga bisa membantu.
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