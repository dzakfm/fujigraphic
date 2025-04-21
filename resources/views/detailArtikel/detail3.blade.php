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
                <h5>12 Februari 2018</h5>
                <p><i class="fas fa-comments"></i> <span id="comment-count">0</span> Komentar</p>
            </div>
            <!-- Kolom kanan Deskripsi -->
            <div class="col-md-9">
                <h2>{{ $artikel->title }}</h2>
                <p>{{ $artikel->content }}</p>
            </div>
            Fotocopy sudah menjadi bagian hidup sehari-hari masyarakat. Segala macam aktivitas yang berkaitan dengan dokumen pasti erat hubungannya dengan mesin ini. 
            Seperti halnya telepon genggam Anda yang memerlukan pulsa untuk berkomunikasi, mesin fotocopy juga memerlukan komponen pendukung agar dapat berfungi. Salah satunya adalah toner fotocopy.

            Tips dalam memilih Toner Mesin Fotocopy
            Adapun beberapa tips yang dapat dipertimbangkan untuk memilih mesin fotocopy yang bagus adalah :

            <ul style="padding-left: 20px">
                <li>Pakailah jenis toner yang sesuai dengan tipe <b>mesin fotocopy</b> Anda, Biasanya di dalam kemasan toner tertera tipe mesin yang cocok dengan toner tersebut relatif murah</li>
                <li>Jika Anda pemilik/pengelola copy center, belilah toner langsung dari distributor/reseller ataupun langsung dimana Anda membeli <b>mesin fotocopy</b> Anda.</li>
                <li>Hindari memakai toner yang tidak memiliki merek.</li>
                <li>Jangan tergiur dengan harga toner (teliti sebelum memutuskan menggunakan produk tertentu).</li>
                <li>Belilah <b>toner</b> yang mampu memberikan jumlah lembar copy yang banyak, rata-rata toner 1 kg mampu digunakan hingga 20.000 lembar.</li>
            </ul>
            Apabila anda membutuhkan penawaran <b>Sewa Mesin Fotocopy</b> dan sparepart untuk kebutuhan kantor anda silahkan hubungi kami melalui kontak dibawah dan dengan cepat kami akan menindaklanjuti permintaan anda.

            Silahkan hubungi kami segera untuk kebutuhan mesin fotocopy anda.
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