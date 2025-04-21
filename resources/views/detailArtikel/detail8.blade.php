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
            Bagian dari mesin fotocopy ini terdiri dari beberapa komponen seperti: 

            <ul style="padding-left: 20px;">
                <li>Platen cover. Bagian ini sering disebut dengan original cover. Platen cover adalah bagian di atas sebuah mesin yang digunakan untuk menutup lembaran dokumen asli yang nantinya digandakan.</li>
                <li>Original glass. Lembaran dokumen asli yang nantinya akan digandakan diletakkan di atasnya. Di bagian tepi kaca ada sebuah skala yang digunakan mengatur letak kertas dokumen sehingga selalu presisi.</li>
                <li>Original tray. Bagian original tray ini dipergunakan untuk meletakkan dokumen asli yang sedang menunggu giliran digandakan.</li>
                <li>Power button. Tombol power butto dipergunakan untuk mematikan dan menyalakan mesin.</li>
                <li>Copy tray. Bagian copy tray adalah bagian yang terakhir dan menjadi lokasi dimana output yang telah selesai digandakan diletakkan.</li>
            </ul>

            <b>Cara Menggunakan Mesin Fotocopy</b>

            Untuk menjalankan mesin fotocopy ini sebetulnya cukup mudah, karena kita hanya perlu menyalakan mesin dengan cara menekan tombol power dan meletakkan lembaran dokumen asli yang akan difotocopy di atas mesin dan tinggal mengatur settingan, apakah ingin memperbesar atau malah memperkecilnya, dan tentukan jumlah salinan yang Anda inginkan, selanjutnya tekan tombol start.

            <b>Komponen Mesin</b>

            Ada juga beberapa komponen utama dari mesin fotocopy ini, antara lain:
            
            <ul style="padding-left: 20px;">
                <li>Lampu scaner. Bagian ini adalah lampu yang digunakan untuk memantulkan gambar dan tulisan di dokumen yang diduplikasikan. Banyaknya cahaya yang berada di komponen ini memang besar, sehingga jika sedang melakukan fotocopy lebih baik Anda menututup bagian atas. Hindari melihat langsung cahaya mesin fotocopy karena dapat menyebabkan iritasi mata.</li>
                <li>Bagian ini adalah bagian utama saat akan mencopy. Fungsi bagian ini untuk menampung bubuk toner ke drum.</li>
                <li>Drum toner. Bagian ini juga menjadi bagian penting saat akan menghasilkan tulisan dan gambar. Hindari menyentuh drum dengan tangan maupun benda yang mengandung minyak. Bagian ini harus selalu terjaga kebersihannya.</li>
                <li>Hasil cetak akan dimatangkan serta dibuat permanen di bagian ini.</li>
            </ul>

            <b>Prinsip serta Cara Kerja Mesin</b>

            Mesin fotocopy ini mempergunakan drum toner, cahaya, rekayasa listrik dan cermin agar bisa menghasilkan bayangan di atas kertas. Saat dokumen tersinari lampu pada cermin. Pencahayaan mesin di drum berbahan selenium ini menyebabkan muatan negatif, sehingga bubuk bisa kembali terlepas dan bagian gelap berupa tulisan akan mempunyai muatan positif, hingga akhirnya menghasilkan copy-an yang kita inginkan.
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