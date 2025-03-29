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
                <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}" class="img-fluid">
                <h5>{{ \Carbon\Carbon::parse($artikel->created_at)->format('d M Y') }}</h5>
                <p><i class="fas fa-comments"></i> <span id="comment-count">0</span> Komentar</p>
            </div>
            <!-- Kolom kanan Deskripsi -->
            <div class="col-md-9">
                <h2>{{ $artikel->title }}</h2>
                <p>{{ $artikel->content }}</p>
            </div>
            Keuntungan dengan Sewa Mesin Fotocopy
            Adapun pertimbangan sekaligus keuntungan apabila menyewa mesin fotocopy adalah :
                <ul style="padding-left: 20px;">
                    <li>Dana yang diperlukan untuk pengadaan mesin fotocopy relatif murah.</li>
                    <li>Anda tidak perlu kuatir apakah mesin tersebut rekondisi atau bukan.</li>
                    <li>Anda tetap dapat memilih mesin fotocopy yang diinginkan sesuai dengan kebutuhan.</li>
                    <li>Biaya copy per lembar relatif murah, bahkan harganya sama seperti bila anda mendatangi copy center.</li>
                    <li>Anda tetap dapat memilih mesin fotocopy yang diinginkan sesuai dengan kebutuhan.</li>
                    <li>Tidak perlu kuatir akan kierja mesin fotocopy, karena anda bisa meminta panggilan layanan service tanpa biaya tambahan dan bila perlu anda bisa meminta penggantian mesin (sesuai perjanjian pada kontrak sewa mesin).</li>
                    <li>Anda tidak akan dibebani biaya untuk penggantian sparepart mesin (terkecuali sparepart rusak dikarenakan kelalaian pengoperasian).</li>
                    <li>Sewaktu-waktu anda dapat melakukan permintaan penggantian mesin bila anda membutuhkan mesin yang lebih canggih dan lebih baru (sesuai kesepakatan kontrak sebelumnya).</li>
                </ul>
            
            Bisa dikatakan bahwa dengan Sewa Mesin Fotocopy, anda hanya menikmati kelebihan kelebihan bukan kekurangannya. Namun sebagai catatan bahwa anda hanya bisa menyewa untuk memenuhi kebutuhan kantor. Karena apabila anda menyewa untuk kebutuhan menjual layanan fotocopy (copy center), maka nilai jual per copy anda akan melambung tinggi.

            Apabila anda membutuhkan penawaran Sewa Mesin Fotocopy untuk kebutuhan kantor anda, silahkan hubungi kami melalui kontak dibawah dan dengan cepat kami akan menindaklanjuti permintaan anda.

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