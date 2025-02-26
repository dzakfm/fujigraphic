document.addEventListener("DOMContentLoaded", function () {
    console.log("Website Fuji Graphic Jakarta siap digunakan!");

    // 🔹 Efek hover pada navbar
    const navbarLinks = document.querySelectorAll(".navbar-nav .nav-link");
    navbarLinks.forEach(link => {
        link.addEventListener("mouseover", () => {
            link.style.color = "#f8d210"; // Warna kuning saat hover
        });
        link.addEventListener("mouseout", () => {
            link.style.color = ""; // Kembali ke warna default
        });
    });

    // 🔹 Animasi pada hero section saat halaman dimuat
    const heroTitle = document.querySelector(".hero-section h1");
    heroTitle.style.opacity = "0";
    heroTitle.style.transform = "translateY(-20px)";
    setTimeout(() => {
        heroTitle.style.transition = "opacity 1s, transform 1s";
        heroTitle.style.opacity = "1";
        heroTitle.style.transform = "translateY(0)";
    }, 500);
});

// 🔹 Slideshow Hero Section
let slideIndex = 1;
showSlides(slideIndex);

// Fungsi untuk mengganti slide dengan tombol Next/Prev
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

// 🔹 Otomatis berpindah slide setiap 5 detik
setInterval(() => {
    changeSlide(1);
}, 5000);

// 🔹 Carousel Card Produk Kami
document.addEventListener("DOMContentLoaded", function () {
    const wrapper = document.querySelector(".product-wrapper");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");
    const cardWidth = document.querySelector(".product-card").offsetWidth + 20; // Lebar card + margin

    let scrollPosition = 0;

    // Fungsi untuk geser ke kanan (Next)
    nextBtn.addEventListener("click", () => {
        scrollPosition += cardWidth;
        if (scrollPosition > wrapper.scrollWidth - wrapper.clientWidth) {
            scrollPosition = 0; // Kembali ke awal
        }
        wrapper.style.transform = `translateX(-${scrollPosition}px)`;
    });

    // Fungsi untuk geser ke kiri (Prev)
    prevBtn.addEventListener("click", () => {
        scrollPosition -= cardWidth;
        if (scrollPosition < 0) {
            scrollPosition = wrapper.scrollWidth - wrapper.clientWidth; // Pergi ke akhir
        }
        wrapper.style.transform = `translateX(-${scrollPosition}px)`;
    });
});
