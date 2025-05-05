<footer class="bg-dark text-white py-5">
    <div class="container text-center">
        <div class="row">
            <!-- Kolom Kontak Kami -->
            <div class="col-md-4">
                <h5>Kontak Kami</h5>
                <p>Jl. Contoh No.123, Kota Lampung</p>
                <p>Email: info@example.com</p>
                <p>Telepon: (0721) 123456</p>
            </div>

            <!-- Kolom Ikuti Kami -->
            <div class="col-md-4">
                <h5>Ikuti Kami</h5>
                <div class="d-flex justify-content-center">
                    <a href="https://www.facebook.com/username" class="text-white mx-2" target="_blank">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="https://twitter.com/username" class="text-white mx-2" target="_blank">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="https://www.instagram.com/username" class="text-white mx-2" target="_blank">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                </div>
            </div>

            <!-- Kolom Tentang Kami -->
            <div class="col-md-4">
                <h5>Tentang Kami</h5>
                <p>Kami menyediakan layanan terbaik dan terpercaya untuk kebutuhan Anda.</p>
            </div>
        </div>

        <hr class="my-4 border-white">
        
        <!-- Elemen Peta -->
        <h5>Lokasi Kami</h5>
        <div id="footer-map" style="width: 100%; height: 300px; margin: 20px auto;"></div>

        <p>&copy; 2025 Perusahaan Anda. All rights reserved.</p>
    </div>
</footer>

<!-- Leaflet CSS dan JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const map = L.map('footer-map').setView([-6.2, 106.8], 8); // Set view to Jakarta

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        const branches = [
            { name: "Fujigraphic Pusat Bekasi", lat: -6.2462794, lng: 107.04157 },
            { name: "Fujigraphic Service Point Jakarta", lat: -6.2668478, lng: 106.9244777 },
            { name: "Fujigraphic Cabang Surabaya", lat: -7.2368229, lng: 112.6339187 }
        ];

        branches.forEach(branch => {
            L.marker([branch.lat, branch.lng])
                .addTo(map)
                .bindPopup(`<b>${branch.name}</b>`);
        });
    });
</script>
