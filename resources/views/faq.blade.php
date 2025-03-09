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
    <div id="navbar-container"></div>

    <section id="faq" class="py-5">
        <div class="container">
            <h1 class="text-center mb-5 mt-5">Frequently Asked Questions</h1>
                 
            <div class="accordion" id="faqAccordion">
                <!-- Item Pertama -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            1. Brand Mesin Fotocopy yang Disediakan Jakartacopy?
                            <span class="arrow ms-2">&#9660;</span> <!-- Default ke bawah -->
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Kami menyediakan mesin fotocopy dari merk ternama seperti Fuji Xerox dengan berbagai tipe.</br>
                            Selain mesin fotocopy, kami juga menyediakan sewa mesin untuk laminating dan scanner.
                        </div>
                    </div>
                </div>
            
                <!-- Item Kedua -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                            2. Apa Saya Bisa Berkonsultasi untuk Layanan Sewa Terlebih Dahulu?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Bisa. Jangan ragu untuk menghubungi kami jika Anda ingin mengetahui lebih banyak tentang produk dan layanan sewa yang kami sediakan.
                        </div>
                    </div>
                </div>
    
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            3. Bagaimana Jika Mesin Fotocopy Rusak?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Silakan hubungi layanan pengaduan untuk segera mendapatkan perbaikan atau penggantian mesin fotocopy yang rusak.</br> 
                            Namun, jangan khawatir karena kami memastikan setiap mesin fotocopy kami dalam kondisi bagus dan bisa dioperasikan dengan lancar.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                            4. Apa Keuntungan Menyewa dibanding Membeli Mesin Fotocopy?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sewa mesin fotocopy Jakarta menawarkan keuntungan pada efisiensi biaya dan fleksibilitas penggunaan.</br>
                            Harga sewa kompetitif dan Anda bisa sewa bulanan atau tahunan sesuai kebutuhan.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                            5. Mesin Fotocopy Hitam Putih (B/W)?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Mesin fotocopy B/W (Black and White) adalah mesin yang dapat menggandakan dokumen dengan hasil berupa cetakan hitam putih. Umumnya, sewa mesin fotocopy Canon hitam putih menjadi pilihan untuk kantor atau bisnis yang tidak membutuhkan fotocopy berwarna.</br>
                            </br>
                            Keunggulan mesin ini adalah kapasitas dan kecepatan cetak dokumen. Teknologi dan proses yang lebih sederhana membuat mesin fotocopy hitam putih bisa lebih cepat dibanding mesin fotocopy warna. Termasuk kemampuan untuk fotocopy bolak-balik sehingga bisa menghemat media yang digunakan.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                            6. Mesin Fotocopy Warna?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Jenis mesin fotocopy dengan teknologi modern yang menghasilkan cetakan berwarna seperti hasil cetakan printer.</br>
                            Mesin ini dilengkapi dengan warna dasar cyan, magenta, kuning, dan hitam.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                            7. Keunggulan Mesin Fotocopy Xerox?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Mesin Fotocopy Xerox merupakan pelopor di dunia mesin pengganda dokumen, teknologi yang dipakai dalam mesin fotocopy pada umumnya adalah teknologi yang diciptakan oleh Xerox Corp sehingga dinamakan Xerography.
                            <p></p>
                            Keunggulan dari mesin fotocopy xerox diantaranya :
                            <p></p>
                            <ul>
                                <li>Sebagai mesin yang bandel sehingga tidak mudah rusak</li>
                                <li>Hasil copy-nya yang tajam</li>
                                <li>Suku cadang dengan harga lebih murah</li>
                                <li>Dengan teknologi Duplex dan ADF yang berguna menarik kertas secara otomatis, sehingga memungkinkan untuk melakukan copy bolak-balik tanpa harus memasang kertasnya lagi ke dalam tray</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div id="footer-container"></div>

    @include('partial.footer')

    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>