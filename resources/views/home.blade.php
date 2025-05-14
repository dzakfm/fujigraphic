<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fuji Graphic Jakarta</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
</head>

<body>

    @include('partial.navbar')

    <div class="slideshow-container">
        <!-- Header di atas gambar -->
        <header class="hero-section">
            <div class="container">
                <h1 class="display-4">Fuji Graphic Jakarta</h1>
                <p class="lead text-danger fw-bold">Sewa Praktis, Cetak Tanpa Batas!!!</p>
            </div>
        </header>

        <!-- Gambar Slide -->
        <div class="slide fade" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <img src="{{ asset('images/banner/banner-1.jpg') }}" alt="Gambar 1" />
        </div>
        <div class="slide fade" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img src="{{ asset('images/banner/banner-2.jpg') }}" alt="Gambar 2" />
        </div>
        <div class="slide fade" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
            <img src="{{ asset('images/banner/banner-3.jpg') }}" alt="Gambar 3" />
        </div>

        <!-- Indikator Titik -->
        <div class="dots-container" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="400">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <script src="./script/script.js"></script>

    <section class="clients text-center py-5" data-aos="fade-up" data-aos-duration="800">
        <div class="container">
            <h2>Our Clients</h2>
            <p>We have been working with some Fortune 50+ clients</p>
            <div class="d-flex justify-content-center gap-4 flex-wrap">
                <img src="{{ asset('images/clientsimg/taspen1.jpg') }}" alt="Client 1" />
                <img src="client2.png" alt="Client 2" />
                <img src="client3.png" alt="Client 3" />
                <img src="client4.png" alt="Client 4" />
            </div>
        </div>
    </section>

    <section class="why-fujigraphic" data-aos="fade-left" data-aos-duration="800">
        <div class="container">
            <div class="content">
                <div class="text">
                    <h2 class="text-center mb-4">Solusi Layanan Kami</h2>
                    <p class="text-center mb-5">
                        FUJIGRAPHIC INDONESIA hadir sebagai solusi terbaik untuk kebutuhan cetak dan gandakan dokumen Anda. 
                        Kami menyediakan layanan <strong>sewa dan penjualan mesin fotocopy multifungsi merk Xerox</strong> 
                        — dapat digunakan sebagai printer, scanner, dan fax dalam satu unit.
                    </p>
                    <div class="why-points row text-center mt-4">
                        <div class="col-md-6 mb-4">
                            <i class="fas fa-box-open fa-2x text-danger mb-2"></i>
                            <h5>Mesin Impor Berkualitas</h5>
                            <p>Didatangkan langsung dari Singapura & Australia</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <i class="fas fa-tags fa-2x text-danger mb-2"></i>
                            <h5>Harga Kompetitif</h5>
                            <p>Sewa fleksibel dengan biaya terjangkau</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <i class="fas fa-tools fa-2x text-danger mb-2"></i>
                            <h5>Teknisi Berpengalaman</h5>
                            <p>Eks PT. Astragraphia, profesional & handal</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <i class="fas fa-building fa-2x text-danger mb-2"></i>
                            <h5>Cocok untuk Perkantoran</h5>
                            <p>Efisien, praktis & sesuai kebutuhan bisnis modern</p>
                        </div>
                    </div>
                    <p class="text-center mt-4">
                        Kami berkomitmen membantu perusahaan Anda menghemat biaya operasional tanpa mengorbankan kualitas. 
                        <strong>Dapatkan layanan profesional dari tim ahli hanya di Fujigraphic.</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-duration="800">
        <div class="product-container">
            <h2 class="text-center mb-4">Produk Kami</h2>
            <div class="product-wrapper d-flex flex-wrap justify-content-center gap-4">
                @foreach($products as $product)
                <div class="product-card" data-aos="zoom-in" data-aos-duration="700">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid" />
                    <h3>{{ $product->name }}</h3>
                    <a href="{{ route('product.show', $product->id) }}" class="btn">Selengkapnya</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="why-fujigraphic" data-aos="fade-right" data-aos-duration="800">
        <div class="container">
            <div class="content">
                <div class="text">
                    <h2 style="text-align: center;" class="text-center mb-4">Mengapa Memilih Fujigraphic?</h2>
                    <p class="text-center mb-5">
                        ‌Sewa satu mesin fotocopy dari Fujigraphic, dan Anda tidak perlu lagi membeli printer, scanner, atau fax. Semua unit sudah terhubung ke Wi-Fi, siap digunakan sebagai printer & scanner langsung dari komputer atau laptop Anda.
                    </p>
                        <div class="why-points row text-center mt-4">
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset('images/icons/1.png') }}" alt="All-in-One" class="why-icon mb-2">
                                <i class="fas fa-file-invoice fa-2x text-danger mb-2"></i>
                                <p><strong>All-in-One System</strong><br>Satu invoice untuk semua kebutuhan.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset('images/icons/2.png') }}" alt="Suku Cadang Asli" class="why-icon mb-2">
                                <i class="fas fa-cogs fa-2x text-danger mb-2"></i>
                                <p><strong>Suku Cadang Asli</strong><br>Consumables Fuji Xerox asli & berkualitas.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset('images/icons/3.png') }}" alt="Layanan Cepat" class="why-icon mb-2">
                                <i class="fas fa-shipping-fast fa-2x text-danger mb-2"></i>
                                <p><strong>Layanan Cepat</strong><br>Respon maksimal 1 hari dari teknisi profesional.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset('images/icons/4.png') }}" alt="Bantuan Lengkap" class="why-icon mb-2">
                                <i class="fas fa-headset fa-2x text-danger mb-2"></i>
                                <p><strong>Bantuan Lengkap</strong><br>Dukungan telepon, panduan, dan video tutorial.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset('images/icons/5.png') }}" alt="Backup Toner" class="why-icon mb-2">
                                <i class="fas fa-box-open fa-2x text-danger mb-2"></i>
                                <p><strong>Backup Toner & Drum</strong><br>Tersedia jika dibutuhkan, tanpa biaya tambahan.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset('images/icons/6.png') }}" alt="Solusi Cerdas" class="why-icon mb-2">
                                <i class="fas fa-lightbulb fa-2x text-danger mb-2"></i>
                                <p><strong>Solusi Cerdas</strong><br>Hemat, fleksibel & praktis untuk kebutuhan kantor modern.</p>
                            </div>
                        </div>
                        <p class="text-center mt-4">
                        Dengan kantor pusat di Jakarta, kami siap memberikan layanan cepat & tepat waktu untuk setiap pelanggan.</br>
                           </br>
                        🔄 Hemat, fleksibel, dan praktis Sewa Mesin Fotocopy dari kami adalah solusi cerdas untuk kebutuhan kantor modern Anda.</br>
                        </p>
                        <div class="text-center mt-3">
                            <a href="{{ route('profile') }}" class="btn btn-outline-primary">Selengkapnya Tentang Kami</a>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <div class="product-container pb-5" data-aos="fade-up" data-aos-duration="800">
        <h2 class="text-center mb-4">Artikel</h2>
        <div class="product-wrapper row">

            @php use Illuminate\Support\Str; @endphp

            @foreach($artikels as $artikel)
            <div class="col-md-4 mb-4" data-aos="flip-up" data-aos-duration="800">
                <div class="artikel-card d-flex flex-column h-100 p-3 border rounded bg-white">
                    <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->name }}" class="img-fluid mb-2" style="max-height: 200px; object-fit: cover" />
                    <h3 class="h5">{{ $artikel->title }}</h3>
                    <p class="flex-grow-1" style="text-align: justify;">
                        {!! Str::limit(strip_tags($artikel->content), 150, '...') !!}
                    </p>
                    <a href="{{ route('artikel.show', $artikel->id) }}" class="btn btn-primary mt-auto">Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @include('partial.footer')

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init({
          once: true,
          duration: 800,
          easing: 'ease-in-out',
      });
    </script>

    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
