<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuji Graphic Jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <!-- Leaflet JS -->
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
        <div class="container" id="map" style="height: 500px;">
            <script>
                // Koordinat cabang
                var locations = [
                    { lat: -6.246007413994858, lng: 107.04406711446248, name: "Fujigraphic Kantor Pusat - Jl. Cipaku 1 No 11, Perum Graha Taman Kebayoran Bekasi Timur" },
                    { lat: -6.2088, lng: 106.8456, name: "Fujigraphic Jakarta" },
                    { lat: -6.9175, lng: 107.6191, name: "Fujigraphic Surabaya" }
                ];

                // Inisialisasi peta di lokasi tengah Indonesia
                var map = L.map('map').setView([-6.5, 107.5], 6);

                // Tambahkan Tile Layer dari OpenStreetMap
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; OpenStreetMap contributors'
                }).addTo(map);

                // Tambahkan Marker untuk setiap lokasi
                locations.forEach(function (location) {
                    L.marker([location.lat, location.lng])
                        .addTo(map)
                        .bindPopup("<b>" + location.name + "</b>")
                        .openPopup();
                });
              </script>
        <div class="container">
            <p>
                1. Fujigraphic Kantor Pusat
                <span class="arrow" onclick="toggleDescription('desc1', this)">&#9660</span>
            </p>
            <p id="desc1" class="description text-center">
                Melayani area : Bekasi, Cikarang, Cibitung & Karawang</br>
                Graha Taman Kebayoran,  Jl. Cipaku 1 Blok H No 11 BEKASI 17510</br>
                Telp. (021) 35175 3501, 0878 7907 8003</br>
                fujigraphic@rentalfotocopy.id</br>
                www.rentalfotocopy.id </br>   
            </p>              
        </div>
            </script>

        </div>
    </section>
    <div id="footer-container"></div>
    @include('partial.footer')
    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>