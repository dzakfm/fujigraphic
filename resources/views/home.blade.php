
@extends('layouts.app')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/fgj.png') }}" type="image/x-icon"/>
    <title>Fujigraphic Jakarta</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
            <h2 class="our">Klien Kami</h2>
            <p>Kami telah menjalin kerja sama dengan 80+ klien terkemuka dan terpercaya.</p>
            <div class="d-flex justify-content-center gap-4 flex-wrap">
                <img src="{{ asset('images/clientsimg/taspen.png') }}" alt="Client 1" />
                <img src="{{ asset('images/clientsimg/pefindo1.png') }}" alt="Client 2" />
                <img src="{{ asset('images/clientsimg/gnv.png') }}" alt="Client 3" />
                <img src="{{ asset('images/clientsimg/pefindo2.png') }}" alt="Client 4" />
                <img src="{{ asset('images/clientsimg/mpi.png') }}" alt="Client 5" />
                <img src="{{ asset('images/clientsimg/bpr.png') }}" alt="Client 6"/>
                <img src="{{ asset('images/clientsimg/kinema.png') }}" alt="Client 7" />
                <img src="{{ asset('images/clientsimg/wika.png') }}" alt="Client 8" />
                <img src="{{ asset('images/clientsimg/jayamix.png') }}" alt="Client 9" />
                <img src="{{ asset('images/clientsimg/wiko.png') }}" alt="Client 10" />
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
                        - dapat digunakan sebagai printer, scanner, dan fax dalam satu unit.
                    </p>
                    <div class="why-points row text-center mt-4 gx-5">
                        <div class="col-md-6 mb-4 px-5">
                            <i class="fas fa-box-open fa-2x text-danger mb-2"></i>
                            <h5>Mesin Impor Berkualitas</h5>
                            <p>Didatangkan langsung dari Singapura & Australia</p>
                        </div>
                        <div class="col-md-6 mb-4 px-5">
                            <i class="fas fa-tags fa-2x text-danger mb-2"></i>
                            <h5>Harga Kompetitif</h5>
                            <p>Sewa fleksibel dengan biaya terjangkau</p>
                        </div>
                        <div class="col-md-6 mb-4 px-5">
                            <i class="fas fa-tools fa-2x text-danger mb-2"></i>
                            <h5>Teknisi Berpengalaman</h5>
                            <p>Eks PT. Astragraphia, profesional & handal</p>
                        </div>
                        <div class="col-md-6 mb-4 px-5">
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
    <h2 class="our">Produk Kami</h2>

    <!-- Swiper wrapper -->
    <div class="swiper product-swiper">
      <div class="swiper-wrapper">
        @foreach($products as $product)
        <div class="swiper-slide">
          <div class="product-card" data-aos="zoom-in" data-aos-duration="700">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid" />
            <h3>{{ $product->name }}</h3>
            <a href="{{ route('product.show', $product->id) }}" class="btn">Selengkapnya</a>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Tombol navigasi Swiper -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>

    <div class="text-center mt-3">
      <a href="{{ route('product') }}" class="btn btn-outline-primary">Produk Kami Lainnya</a>
    </div>
  </div>
</section>


    <section class="why-fujigraphic" data-aos="fade-right" data-aos-duration="800">
        <div class="container">
            <div class="content">
                <div class="text">
                    <h2 style="text-align: center;" class="text-center mb-4">Mengapa Memilih Fujigraphic?</h2>
                    <p class="text-center mb-5">
                        â€ŒSewa satu mesin fotocopy dari Fujigraphic, dan Anda tidak perlu lagi membeli printer, scanner, atau fax. Semua unit sudah terhubung ke Wi-Fi, siap digunakan sebagai printer & scanner langsung dari komputer atau laptop Anda.
                    </p>
                        <div class="why-points row text-center mt-4 gx-5">
                            <div class="col-md-4 mb-4 px-5">
                                <img src="{{ asset('images/icons/1.png') }}" alt="All-in-One" class="why-icon mb-2">
                                <p><strong>All-in-One System</strong><br>Satu invoice untuk semua kebutuhan.</p>
                            </div>
                            <div class="col-md-4 mb-4 px-5">
                                <img src="{{ asset('images/icons/2.png') }}" alt="Suku Cadang Asli" class="why-icon mb-2">
                                <p><strong>Suku Cadang Asli</strong><br>Consumables Fuji Xerox asli & berkualitas.</p>
                            </div>
                            <div class="col-md-4 mb-4 px-5">
                                <img src="{{ asset('images/icons/3.png') }}" alt="Layanan Cepat" class="why-icon mb-2">
                                <p><strong>Layanan Cepat</strong><br>Respon maksimal 1 hari dari teknisi profesional.</p>
                            </div>
                            <div class="col-md-4 mb-4 px-5">
                                <img src="{{ asset('images/icons/4.png') }}" alt="Bantuan Lengkap" class="why-icon mb-2">
                                <p><strong>Bantuan Lengkap</strong><br>Dukungan telepon, panduan, dan video tutorial.</p>
                            </div>
                            <div class="col-md-4 mb-4 px-5">
                                <img src="{{ asset('images/icons/5.png') }}" alt="Backup Toner" class="why-icon mb-2">
                                <p><strong>Backup Toner & Drum</strong><br>Tersedia jika dibutuhkan, tanpa biaya tambahan.</p>
                            </div>
                            <div class="col-md-4 mb-4 px-5">
                                <img src="{{ asset('images/icons/6.png') }}" alt="Solusi Cerdas" class="why-icon mb-2">
                                <p><strong>Solusi Cerdas</strong><br>Hemat, fleksibel & praktis untuk kebutuhan kantor modern.</p>
                            </div>
                        </div>
                        <p class="text-center mt-4">
                        Dengan kantor pusat di Jakarta, kami siap memberikan layanan cepat & tepat waktu untuk setiap pelanggan.</br>
                           </br>
                        ðŸ”„ Hemat, fleksibel, dan praktis Sewa Mesin Fotocopy dari kami adalah solusi cerdas untuk kebutuhan kantor modern Anda.</br>
                        </p>
                        <div class="text-center mt-3">
                            <a href="{{ route('profile') }}" class="btn btn-outline-primary">Selengkapnya Tentang Kami</a>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-duration="800">
    <div class="product-container pb-5">
  <h2 class="our">Artikel</h2>

  <!-- Tambahan wrapper Swiper -->
  <div class="swiper artikel-swiper">
    <div class="swiper-wrapper">
      @php use Illuminate\Support\Str; @endphp

      @foreach($artikels as $artikel)
      <div class="swiper-slide mb-4" data-aos="flip-up" data-aos-duration="800">
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

    <!-- Tombol panah -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
 

  <div class="text-center mt-3">
    <a href="{{ route('artikel') }}" class="btn btn-outline-primary">Artikel Lainnya</a>
  </div>
</div>
 </section>

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
    <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  new Swiper('.artikel-swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
    delay: 3000, // waktu jeda tiap slide dalam milidetik (3000 = 3 detik)
    disableOnInteraction: false, // biar autoplay tetap jalan walau user swipe manual
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
    },
  });

  document.querySelectorAll('.product-swiper').forEach(function (el) {
  new Swiper(el, {
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: el.querySelector('.swiper-button-next'),
      prevEl: el.querySelector('.swiper-button-prev'),
    },
    autoplay: {
    delay: 3000, // waktu jeda tiap slide dalam milidetik (3000 = 3 detik)
    disableOnInteraction: false, // biar autoplay tetap jalan walau user swipe manual
    },
    breakpoints: {
      992: { slidesPerView: 3 },
      768: { slidesPerView: 2 },
      0: { slidesPerView: 1 },
    },
  });
});

</script>
</body>

</html>
