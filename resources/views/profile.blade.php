<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuji Graphic Jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>

<body>
@include('partial.navbar')
    <div id="navbar-container"></div>
    <section id="profile" class="py-5">
        <div class="container">
            <h1 class="text-center mb-5 mt-5">Tentang Kami</h1>
        </div>
        <div class="text-center">
            <img src="./images/fujigraphicjakarta.png" alt="Gambar" class="img-fluid" width="650">
        </div>
        <h4 class="text-center fw-bold mb-5 mt-5">CV. FUJIGRAPHIC INDONESIA</h4>
        <div class="container">
            <p>Fujigraphic Indonesia didirikan pada Januari 2011 oleh Wahyu Seno B.A, berbekal pengalaman selama kurang
                lebih 15 tahun menangani mesin-mesin Xerox Digital Multifungsi sebagai Engineer Specialist Xerox di PT.
                Astragraphia tbk.</p>

            <p>Karena tuntutan perkembangan usaha maka pada tanggal 1 Juni 2012 Fujigraphic Indonesia kami kukuhkan
                menjadi <b>CV. FUJIGRAPHIC INDONESIA</b>.</p>

            <p>Jakartacopy.com bergerak dalam bidang jasa penyewaan dan pengadaan mesin fotocopy multifungsi dengan
                brand Xerox. Kami selalu berkomitmen untuk membantu menekan cost bisnis anda dalam penggandaan dokumen
                dengan menyediakan mesin multifungsi handal yang didatangkan langsung dari Singapore dan Australia
                dengan harga yang kompetitif serta terjamin kualitasnya.</p>

            <p>Seiring dengan perkembangannya yang pesat dan ekspansi bisnis yang dilakukan secara agresif, maka pada
                tanggal 18 september 2015 Fujigraphic Indonesia membuka 2 cabang secara bersamaan. Dimana keduanya
                berada di kota Jakarta (Fujigraphic Jakarta) dan kota Surabaya (Fujigraphic Surabaya). Ekspansi bisnis
                Fujigraphic Indonesia tidak akan berhenti sampai di situ. Dalam waktu dekat dan beberapa tahun ke depan
                akan segera dibuka cabang baru di sejumlah kota strategis lainnya.</p>

            <p>Menggunakan mesin fotocopy multifungsi Xerox yang telah terbukti tangguh dan handal sekaligus efisien
                semakin memberikan rasa aman bagi kelangsungan bisnis anda.</p>

            <p>Teknisi yang dapat diandalkan dengan training yang berkelanjutan dan sangat terlatih selalu memberikan
                pelayanan service yang terbaik dan memastikan mesin dalam kondisi prima.</p>

            <p>Dengan segala reputasinya maka Fujigraphic telah dipercaya oleh ratusan customer kami yang tersebar di
                kota kota besar seperti Jakarta Bekasi Cikarang Karawang dan Surabaya. Jangan pernah ragu untuk
                mempercayakan pengelolaan document anda kepada Fujigraphic.</p>
        </div>
        <h4 class="text-center mb-5 mt-5">VISI & MISI</h4>
        <div class="container">
            <h5>VISI</h5>
            <p>Visi kami adalah menjadi perusahaan yang bisa memberikan solusi handal perdokumenan bagi customer kami
                yang menginginkan efisiensi dengan tetap ingin mengedepankan kualitas. Percayakan kebutuhan perdokumenan
                anda pada kami, kami siap memberikan solusi yang terbaik dengan biaya kompetitif sesuai dengan motto
                kami <b>“ When Efficiency meet Quailty “</b></p>

            <h5 class="mt-5">MISI</h5>
            <p>Bisnis kami bukan hanya sekedar penyedia mesin fotocopy biasa, kami lebih dari itu! kami siap
                mengkoneksikan mesin-mesin kami ke network anda sebagai <b>Network Printer</b>, <b>Network Scanner</b>
                maupun Faximile sekaligus sesuai dengan kebutuhan kantor anda.</p>
        </div>
        <h4 class="text-center mb-5 mt-5">List Cabang</h4>
        <div class="container d-flex justify-content-between">
                    <!-- Sidebar untuk daftar cabang -->
            <div class="branch-list" style="width: 40%; padding-right: 10px;">
                <h5>Daftar Cabang</h5>
                <ul id="branch-menu" style="list-style: none; padding: 0;">
                     <!-- List cabang akan dibuat dari JS -->
                </ul>
                <div id="branch-details" style="display: none; padding: 10px; border: 1px solid #ccc; margin-top: 10px;">
                    <h5 id="branch-name"></h5>
                    <p id="branch-address"></p>
                    <p><strong>Kontak:</strong> <span id="branch-contact"></span></p>
                    <p><strong>Email:</strong> <span id="branch-email"></span></p>
                </div>
            </div>
            <div id="map-container" style="width: 60%; display: flex; justify-content: flex-end;">
                <div id="map" style="width: 500px; height: 300px;"></div>

            <!-- Tambahkan Leaflet.js -->
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

            <!-- Panggil file JavaScript -->
            <script src="{{ asset('script/map.js') }}"></script>
            </div>
        </div>
    </section>
    <div id="footer-container"></div>
    @include('partial.footer')
    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>