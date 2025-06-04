@extends('layouts.app')
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuji Graphic Jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
@include('partial.navbar')
    <section id="faq" class="py-5">
        <div class="container">
            <h1 class="text-center mb-5 mt-5">Hal Penting yang Perlu Diperhatikan Sebelum Sewa Mesin Fotocopy</h1>
            <p>Sewa mesin fotocopy bisa jadi pilihan menarik jika Anda menginginkan efisiensi biaya dan juga
                fleksibilitas dalam penggunaannya. Bagi Anda yang sedang mempertimbangkan rental mesin fotocopy Jakarta,
                berikut beberapa hal yang penting untuk diperhatikan.</p>

            <div class="accordion" id="faqAccordion">
                <!-- Item Pertama -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne">
                            1. Ketahui Kebutuhan Cetak Kantor Anda
                            <span class="arrow ms-2">&#9660;</span> <!-- Default ke bawah -->
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sebelum memutuskan menyewa fotocopy, analisis apa yang menjadi kebutuhan di kantor Anda.
                            Mungkin kegiatan kantor membutuhkan mesin fotocopy dengan kemampuan cetak tinggi atau fungsi
                            tambahan seperti scan, mesin laminating dan lainnya.
                            Anda bisa hitung rata-rata volume cetak bulanan di kantor Anda sebelum memilih mesin
                            fotocopy. Pertimbangkan kapasitas cetak dan fitur tambahan yang dapat meningkatkan
                            produktivitas Anda sebelum sewa mesin fotocopy Jakarta.
                        </div>
                    </div>
                </div>

                <!-- Item Kedua -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">
                            2. Tentukan Anggaran
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Jika kebutuhan akan mesin fotocopy untuk kantor Anda sudah jelas, hal berikutnya yang
                            penting untuk diperhatikan adalah biaya atau anggaran. Menyewa mesin tentu menawarkan biaya
                            yang lebih terjangkau daripada membeli mesin sendiri.
                            Namun, Anda harus memperhatikan biaya sewa yang bisa berbeda-beda tergantung jenis mesin,
                            kapasitas, dan spesifikasi lain yang dibutuhkan. Hitung juga biaya tambahan seperti tinta
                            dan kertas untuk membantu menetapkan anggaran yang jelas.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree">
                            3. Periksa Kualitas dan Kondisi Mesin
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Mesin fotocopy yang disewa harus dalam kondisi baik sehingga bisa mendukung kelancaran
                            bisnis Anda. Periksa spesifikasi mesin dan pelajari apakah peralatan tersebut dilengkapi
                            dengan mesin scanner atau fitur lain seperti yang Anda butuhkan.
                            Penyedia mungkin memberikan promo sewa mesin fotocopy Jakarta sekaligus demonstrasi kepada
                            Anda. Jadi, Anda bisa melihat langsung untuk mengetahui kualitas dan kondisi mesin yang akan
                            disewa.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour">
                            4. Pelajari Kontrak Sewa dengan Teliti
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sewa mesin fotocopy Jakarta bisa menggunakan kontrak bulanan atau tahunan tergantung
                            kesepakatan. Sebelum Anda menyetujui, pastikan untuk membaca seluruh isi kontrak dengan
                            teliti.
                            Periksa bagaimana perjanjian sewa termasuk jangka waktu, tanggung jawab penyedia dan
                            penyewa, biaya penalti, dan lain sebagainya.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive">
                            5. Pertimbangkan Kebijakan Perawatan dan Perbaikan
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Mesin yang digunakan setiap hari bisa saja mengalami gangguan yang membuat Anda tidak bisa
                            mengerjakan fotocopy kantor. Oleh sebab itu, ada baiknya untuk mempertimbangkan kebijakan
                            perawatan dan perbaikan pada kontrak sewa fotocopy.
                            Anda bisa menanyakan kepada penyedia mengenai layanan perawatan dan perbaikan jika terjadi
                            kerusakan pada mesin yang disewa. Penyedia sewa fotocopy terpercaya seharusnya dapat
                            memberikan jaminan perawatan dan perbaikan segera agar tidak mengganggu operasional kantor
                            Anda.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix">
                            6. Transparansi Biaya
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Perusahaan sewa terbaik pasti memberikan harga sewa mesin fotocopy Jakarta yang jelas. Harga
                            atau paket sewa untuk setiap jenis mesin fotocopy yang disajikan di website resmi perusahaan
                            sehingga client bisa dengan mudah mencari tahu harganya.
                            Selain itu, penyedia sewa mesin fotocopy Jakarta yang bagus pasti memberikan transparansi
                            biaya keseluruhan pada kontrak sewa. Anda bisa meminta rincian biaya lengkap untuk
                            menghindari biaya-biaya tersembunyi setelah sewa mesin fotocopy.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven">
                            7. Fleksibilitas Kontrak
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Kontrak sewa yang fleksibel dapat memudahkan Anda jika suatu saat kebutuhan kantor berubah.
                            Anda mungkin perlu upgrade atau bahkan downgrade mesin untuk operasional yang lebih lancar.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('partial.footer')
    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>