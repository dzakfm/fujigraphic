document.addEventListener("DOMContentLoaded", function () {
    console.log("Website Fuji Graphic Jakarta siap digunakan!");

    // Efek hover pada navbar
    const navbarLinks = document.querySelectorAll(".navbar-nav .nav-link");
    navbarLinks.forEach(link => {
        link.addEventListener("mouseover", () => {
            link.style.color = "#f8d210";
        });
        link.addEventListener("mouseout", () => {
            link.style.color = "";
        });
    });

    // Animasi pada hero section saat halaman dimuat
    const heroTitle = document.querySelector(".hero-section h1");
    heroTitle.style.opacity = "0";
    heroTitle.style.transform = "translateY(-20px)";
    setTimeout(() => {
        heroTitle.style.transition = "opacity 1s, transform 1s";
        heroTitle.style.opacity = "1";
        heroTitle.style.transform = "translateY(0)";
    }, 500);
});

let slideIndex = 1;
showSlides(slideIndex);

// Fungsi untuk mengubah slide dengan tombol Next/Prev
function changeSlide(n) {
    showSlides(slideIndex += n);
}

// Fungsi untuk menampilkan slide berdasarkan indikator titik
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Fungsi utama untuk menampilkan slide
function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");

    if (n > slides.length) { slideIndex = 1; }  
    if (n < 1) { slideIndex = slides.length; }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";  
    dots[slideIndex - 1].className += " active";
}

// Otomatis berpindah slide setiap 5 detik
setInterval(() => {
    changeSlide(1);
}, 5000);

document.addEventListener("DOMContentLoaded", function () {
    var accordionButtons = document.querySelectorAll(".accordion-button");

    accordionButtons.forEach(function (button) {
        var arrow = button.querySelector(".arrow");

        // Pastikan semua tombol memiliki panah ke bawah saat halaman pertama kali dimuat
        if (button.classList.contains("collapsed")) {
            arrow.innerHTML = "&#9660;"; // ▼
        }

        // Tambahkan event listener untuk mengubah panah saat accordion dibuka/tutup
        button.addEventListener("click", function () {
            if (this.classList.contains("collapsed")) {
                arrow.innerHTML = "&#9660;"; // ▼ (tertutup)
            } else {
                arrow.innerHTML = "&#9650;"; // ▲ (terbuka)
            }
        });
    });
});