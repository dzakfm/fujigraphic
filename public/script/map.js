    document.addEventListener("DOMContentLoaded", function () {
        // Cek apakah elemen peta tersedia
        var mapElement = document.getElementById('map');
        if (!mapElement) {
            console.error("Elemen peta tidak ditemukan!");
            return;
        }

        // Inisialisasi Peta
        var map = L.map('map');

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Tentukan batas wilayah (Jakarta, Jawa Barat, Jawa Timur)
        var bounds = [
            [-6.5, 106],  // Kiri atas (Jakarta - Jawa Barat)
            [-8.5, 114]   // Kanan bawah (Jawa Timur)
        ];

        // Atur peta agar sesuai dengan batas wilayah
        map.fitBounds(bounds);

        // Tambahkan Marker Cabang
        var branches = [
            { name: "Fujigraphic Pusat Bekasi", 
                lat: -6.2462794, 
                lng: 107.04157, 
                description: "Melayani area : Bekasi, Cikarang, Cibitung & Karawang",  
                address: "Graha Taman Kebayoran, Jl. Cipaku 1 No 11, Graha Taman Kebayoran Bekasi Timur", 
                contact: "Telp. (021) 35175 3501, 0878 7907 8003", 
                email: "fujigraphic@rentalfotocopy.id", 
                website: "www.rentalfotocopy.id"
            }, 
            { name: "Fujigraphic Service Point Jakarta", 
                lat: -6.2668478, 
                lng: 106.9244777, 
                description: "Melayani area : Jakarta, Depok, Tangerang & Bogor",
                address: "Jatibening Baru, Bekasi, West Java", 
                contact: "Telp. (021) 35175 3501, 0878 7907 8003", 
                email: "bagus@fujigraphic.co.id", 
                website: "www.jakartacopy.com"
            },
            { name: "Fujigraphic Cabang Surabaya", 
                lat: -7.2368229, 
                lng: 112.6339187, 
                description: "Melayani area : Surabaya, Sidoarjo & Gresik",
                address: "Palm Residence – The Green Tamansari G-27 SURABAYA 60198",
                contact: "Telp. 0812 3180 3223", 
                email: "yan@fujigraphic.co.id", 
                website: "www.surabayacopy.com"
            }
        ];

        // Tambahkan marker dan daftar cabang
        var branchMenu = document.getElementById("branch-menu");
        branches.forEach(branch => {
            // Tambahkan marker di peta
            var marker = L.marker([branch.lat, branch.lng]).addTo(map)
            .bindPopup(`<b>${branch.name}</b><br>${branch.address}`)
            .on("click", () => showBranchDetails(branch));

            // Buat item daftar cabang
            var listItem = document.createElement("li");
            listItem.innerHTML = `<button style="width: 100%; text-align: left; background: none; border: none; font-size: 16px; cursor: pointer;">${branch.name}</button>`;
            listItem.onclick = () => showBranchDetails(branch);
            branchMenu.appendChild(listItem);
        });

        // Fungsi menampilkan detail cabang
        function showBranchDetails(branch) {
            document.getElementById("branch-name").textContent = branch.name;
            document.getElementById("branch-address").textContent = `Alamat: ${branch.address}`;
            document.getElementById("branch-contact").textContent = branch.contact;
            document.getElementById("branch-email").textContent = branch.email;

        // Tampilkan detail
            document.getElementById("branch-details").style.display = "block";

        // Pindahkan peta ke lokasi cabang
            map.setView([branch.lat, branch.lng], 14);
        }

        branches.forEach(function(branch) {
            L.marker([branch.lat, branch.lng]).addTo(map)
                .bindPopup(`<b>${branch.name}</b><br>${branch.address}`);
        });
    });

