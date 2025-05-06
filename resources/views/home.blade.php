<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuji Graphic Jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
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
        <div class="slide fade">
        <img src="{{ asset('images/banner/banner-1.jpg') }}" alt="Gambar 1">
        </div>
        <div class="slide fade">
        <img src="{{ asset('images/banner/banner-2.jpg') }}" alt="Gambar 2">
        </div>
        <div class="slide fade">
        <img src="{{ asset('images/banner/banner-3.jpg') }}" alt="Gambar 3">
        </div>

        <!-- Indikator Titik -->
        <div class="dots-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <script src="./script/script.js"></script>

    <section class="clients text-center py-5">
        <div class="container">
            <h2>Our Clients</h2>
            <p>We have been working with some Fortune 500+ clients</p>
            <div class="d-flex justify-content-center gap-4">
                <img src="client1.png" alt="Client 1">
                <img src="client2.png" alt="Client 2">
                <img src="client3.png" alt="Client 3">
                <img src="client4.png" alt="Client 4">
            </div>
        </div>
    </section>
    <section class="about-section">
        <div class="container">
            <h1>Tentang Perushanaan</h1>
            <div class="text-center">
                <p>Fujigraphic Indonesia didirikan pada Januari 2011 oleh Wahyu Seno B.A, berbekal pengalaman selama
                    kurang
                    lebih 15 tahun menangani mesin-mesin Xerox Digital Multifungsi sebagai Engineer Specialist Xerox di
                    PT.
                    Astragraphia tbk.

                    Karena tuntutan perkembangan usaha maka pada tanggal 1 Juni 2012 Fujigraphic Indonesia kami kukuhkan
                    menjadi CV.FUJIGRAPHIC INDONESIA.

                    Jakartacopy.com bergerak dalam bidang jasa penyewaan dan pengadaan mesin fotocopy multifungsi dengan
                    brand Xerox. Kami selalu berkomitmen untuk membantu menekan cost bisnis anda dalam penggandaan
                    dokumen
                    dengan menyediakan mesin multifungsi handal yang didatangkan langsung dari Singapore dan Australia
                    dengan harga yang kompetitif serta terjamin kualitasnya.

                    Seiring dengan perkembangannya yang pesat dan ekspansi bisnis yang dilakukan secara agresif, maka
                    pada
                    tanggal 18 september 2015 Fujigraphic Indonesia membuka 2 cabang secara bersamaan. Dimana keduanya
                    berada di kota Jakarta (Fujigraphic Jakarta) dan kota Surabaya (Fujigraphic Surabaya). Ekspansi
                    bisnis
                    Fujigraphic Indonesia tidak akan berhenti sampai di situ. Dalam waktu dekat dan beberapa tahun ke
                    depan
                    akan segera dibuka cabang baru di sejumlah kota strategis lainnya.

                    Menggunakan mesin fotocopy multifungsi Xerox yang telah terbukti tangguh dan handal sekaligus
                    efisien
                    semakin memberikan rasa aman bagi kelangsungan bisnis anda.

                    Teknisi yang dapat diandalkan dengan training yang berkelanjutan dan sangat terlatih selalu
                    memberikan
                    pelayanan service yang terbaik dan memastikan mesin dalam kondisi prima.

                    Dengan segala reputasinya maka Fujigraphic telah dipercaya oleh ratusan customer kami yang tersebar
                    di
                    kota kota besar seperti Jakarta Bekasi Cikarang Karawang dan Surabaya. Jangan pernah ragu untuk
                    mempercayakan pengelolaan document anda kepada Fujigraphic.</p>
            </div>
        </div>
    </section>
    <div class="read-more">
        <a href="{{route('profile')}}" class="read-more-link">Selengkapnya →</a>
    </div>

    <section class="why-fujigraphic">
        <div class="container">
            <div class="content">
                <img src="illustration.png" alt="Illustration">
                <div class="text">
                    <h2>Kenapa harus fujigraphic?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet justo ipsum. Sed accumsan
                        quam vitae est varius fringilla. Pellentesque placerat vestibulum lorem sed porta.</p>
                    <button class="btn">Learn More</button>
                </div>
            </div>
        </div>
    </section>
    <section class="why-fujigraphic">
        <div class="container">
            <div class="content">
                <img src="layanan.png" alt="Illustration">
                <div class="text">
                    <h2>Layanan</h2>
                    <p>Kami menyediakan berbagai jenis mesin fotocopy dan tambahan layanan perbaikan atau perawatan
                        teknis untuk setiap mesin yang disewa</p>
                    <button class="btn">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <div class="product-container">
    <h1>Produk Kami</h1>
    <div class="product-wrapper">
        @foreach($products as $product)
        <div class="product-card">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
            <h3>{{ $product->name }}</h3>
            <a href="{{ route('product.show', $product->id) }}"class="btn">Selengkapnya</a>
        </div>
        @endforeach
    </div>
</div>

<div class="product-container">
    <h1>Artikel</h1>
    <div class="product-wrapper">

    @php use Illuminate\Support\Str; @endphp

        @foreach($artikels as $artikel)
        <div class="artikel-card">
            <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->name }}" class="img-fluid">
            <h3>{{ $artikel->title }}</h3>
            <p>{!! Str::limit(strip_tags($artikel->content), 150, '...') !!} 
            <a href="{{ route('artikel.show', $artikel->id) }}"class="btn">Selengkapnya</a></p>
        </div>
        @endforeach
    </div>
</div>

    @include('partial.footer')
    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
