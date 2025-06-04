@extends('layouts.app')
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fuji Graphic Jakarta</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- AOS CSS -->
    <link
      href="https://unpkg.com/aos@2.3.1/dist/aos.css"
      rel="stylesheet"
    />
    <!-- Style custom -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Leaflet CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    @include('partial.navbar')

    <section id="profile" class="profile-section py-5">
        <div class="container">
            <h1 class="text-center fw-bold mb-5 mt-5" data-aos="fade-down">Tentang Kami</h1>
            <div class="text-center mb-4" data-aos="zoom-in">
                <img src="./images/fujigraphicjakarta.png" alt="Gambar" class="img-fluid" width="300"/>
            </div>
            <h4 class="text-center fw-bold mb-4" data-aos="fade-up" data-aos-delay="100">
                CV. FUJIGRAPHIC INDONESIA
            </h4>
            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <p>Fujigraphic Indonesia didirikan pada Januari 2011 oleh Wahyu Seno B.A, berbekal pengalaman selama kurang lebih 15 tahun menangani mesin-mesin Xerox Digital Multifungsi sebagai Engineer Specialist Xerox di PT. Astragraphia tbk.</p>
                <p>Karena tuntutan perkembangan usaha maka pada tanggal 1 Juni 2012 Fujigraphic Indonesia kami kukuhkan menjadi <b>CV. FUJIGRAPHIC INDONESIA</b>.</p>
                <p>Jakartacopy.com bergerak dalam bidang jasa penyewaan dan pengadaan mesin fotocopy multifungsi dengan brand Xerox. Kami selalu berkomitmen untuk membantu menekan cost bisnis anda dalam penggandaan dokumen dengan menyediakan mesin multifungsi handal yang didatangkan langsung dari Singapore dan Australia dengan harga yang kompetitif serta terjamin kualitasnya.</p>
                <p>Seiring dengan perkembangannya yang pesat dan ekspansi bisnis yang dilakukan secara agresif, maka pada tanggal 18 september 2015 Fujigraphic Indonesia membuka 2 cabang secara bersamaan. Dimana keduanya berada di kota Jakarta (Fujigraphic Jakarta) dan kota Surabaya (Fujigraphic Surabaya). Ekspansi bisnis Fujigraphic Indonesia tidak akan berhenti sampai di situ. Dalam waktu dekat dan beberapa tahun ke depan akan segera dibuka cabang baru di sejumlah kota strategis lainnya.</p>
                <p>Menggunakan mesin fotocopy multifungsi Xerox yang telah terbukti tangguh dan handal sekaligus efisien semakin memberikan rasa aman bagi kelangsungan bisnis anda.</p>
                <p>Teknisi yang dapat diandalkan dengan training yang berkelanjutan dan sangat terlatih selalu memberikan pelayanan service yang terbaik dan memastikan mesin dalam kondisi prima.</p>
                <p>Dengan segala reputasinya maka Fujigraphic telah dipercaya oleh ratusan customer kami yang tersebar di kota kota besar seperti Jakarta Bekasi Cikarang Karawang dan Surabaya. Jangan pernah ragu untuk mempercayakan pengelolaan document anda kepada Fujigraphic.</p>
            </div>
    </section>

    <section class="bg-light py-5" style="background-color: #f8f9fa;">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <h2 class="text-center fw-bold mb-5">Visi & Misi</h2>
          <div class="row justify-content-center g-4">
            <!-- Card Visi -->
            <div class="col-md-6">
              <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                 <h4 class="card-title fw-semibold mb-3"><i class="fas fa-eye me-2 text-primary"></i>Visi</h4>
                 <p class="card-text">
                  Menjadi perusahaan yang memberikan solusi dokumentasi handal bagi pelanggan yang menginginkan efisiensi tanpa mengorbankan kualitas. 
                  Percayakan kebutuhan dokumentasi Anda pada kami—kami siap memberikan solusi terbaik dengan biaya kompetitif, sesuai dengan motto kami: 
                  <strong>“When Efficiency meet Quality”</strong>.
                 </p>
                </div>
              </div>
            </div>

            <!-- Card Misi -->
            <div class="col-md-6">
              <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                  <h4 class="card-title fw-semibold mb-3"><i class="fas fa-bullseye me-2 text-success"></i>Misi</h4>
                  <p class="card-text">
                    Kami bukan hanya penyedia mesin fotocopy biasa. Kami mengintegrasikan mesin kami ke dalam jaringan kantor Anda sebagai 
                    <strong>Network Printer</strong>, <strong>Network Scanner</strong>, dan <strong>Faximile</strong> sesuai kebutuhan Anda.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="profile-section py-5">
      <div class="container">
            <h2 class="text-center fw-bold mb-5" data-aos="fade-left" data-aos-delay="100">List Cabang</h2>
            <div class="d-flex flex-column flex-lg-row gap-4" data-aos="fade-up" data-aos-delay="200">
                <!-- Sidebar untuk daftar cabang -->
                <div class="branch-list p-4 border rounded shadow-sm bg-light" style="flex: 1 1 40%;">
                    <h4 class="text-center fw-semibold mb-3">Daftar Cabang</h4>
                    <ul id="branch-menu" class="list-unstyled" style="max-height: 400px; overflow-y:auto;">
                        <!-- List cabang akan dibuat dari JS -->
                    </ul>
                </div>

                <div id="map-container" style="flex: 1 1 60%; display: flex; justify-content: flex-end;">
                    <div id="map" style="width: 100%; max-width: 600px; height: 350px; border-radius: 8px; border: 1px solid #ddd;"></div>
                    <!-- Leaflet & JS -->
                    <script src="{{ asset('script/map.js') }}"></script>
                </div>
            </div>
        </div>
      </div>
    </section>

    @include('partial.footer')

    <script src="script/script.js"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    ></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
      });
    </script>
</body>
</html>

