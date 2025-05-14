document.addEventListener("DOMContentLoaded", function () {
    var map = L.map('map');
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    var bounds = [[-6.5, 106], [-8.5, 114]];
    map.fitBounds(bounds);

    var branches = [
        {
            name: "Fujigraphic Pusat Bekasi",
            lat: -6.2462794,
            lng: 107.04157,
            description: "Bekasi, Cikarang, Cibitung & Karawang",
            address: "Graha Taman Kebayoran, Jl. Cipaku 1 No 11, Graha Taman Kebayoran Bekasi Timur",
            contact: "(021) 35175 3501, 0878 7907 8003",
            email: "fujigraphic@rentalfotocopy.id",
            website: "www.rentalfotocopy.id"
        },
        {
            name: "Fujigraphic Service Point Jakarta",
            lat: -6.2668478,
            lng: 106.9244777,
            description: "Jakarta, Depok, Tangerang & Bogor",
            address: "Jatibening Baru, Bekasi, West Java",
            contact: "(021) 35175 3501, 0878 7907 8003",
            email: "bagus@fujigraphic.co.id",
            website: "www.jakartacopy.com"
        },
        {
            name: "Fujigraphic Cabang Surabaya",
            lat: -7.2368229,
            lng: 112.6339187,
            description: "Surabaya, Sidoarjo & Gresik",
            address: "Palm Residence – The Green Tamansari G-27 SURABAYA 60198",
            contact: "0812 3180 3223",
            email: "yan@fujigraphic.co.id",
            website: "www.surabayacopy.com"
        }
    ];

    var branchMenu = document.getElementById("branch-menu");

    branches.forEach(branch => {
        L.marker([branch.lat, branch.lng])
            .addTo(map)
            .bindPopup(`<b>${branch.name}</b><br>${branch.address}`)
            .on("click", () => showBranchDetails(branch));

        var listItem = document.createElement("li");
        listItem.className = "list-group-item branch-item";

        const toggle = document.createElement("div");
        toggle.className = "branch-toggle d-flex justify-content-between align-items-center";
        toggle.innerHTML = `
            <span class="fw-semibold">${branch.name}</span>
            <i class="fas fa-chevron-right branch-icon"></i>
        `;

        const details = document.createElement("div");
        details.className = "branch-details";
        details.innerHTML = `
            <p><strong>Melayani Area:</strong> ${branch.description}</p>
            <p><strong>Alamat:</strong> ${branch.address}</p>
            <p><strong>Kontak:</strong> ${branch.contact}</p>
            <p><strong>Email:</strong> ${branch.email}</p>
            <p><strong>Website:</strong> <a href="https://${branch.website}" target="_blank">${branch.website}</a></p>
        `;

        toggle.addEventListener("click", () => {
            const icon = toggle.querySelector(".branch-icon");
            const isOpen = details.classList.contains("open");

            // Tutup semua dulu
            document.querySelectorAll(".branch-details").forEach(d => {
                d.classList.remove("open");
            });
            document.querySelectorAll(".branch-icon").forEach(i => {
                i.classList.remove("rotate");
            });

            if (!isOpen) {
                details.classList.add("open");
                icon.classList.add("rotate");
                showBranchDetails(branch);
            }
        });

        listItem.appendChild(toggle);
        listItem.appendChild(details);
        branchMenu.appendChild(listItem);
    });

    function showBranchDetails(branch) {
        map.setView([branch.lat, branch.lng], 14);
    }
});