document.addEventListener("DOMContentLoaded", function () {
    console.log("Website Fuji Graphic Jakarta siap digunakan!");

    // Memuat navbar dan footer
    function loadComponent(id, file) {
        fetch("../components/" + file) // Sesuaikan path dengan struktur folder
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Gagal memuat ${file}, status: ${response.status}`);
                }
                return response.text();
            })
            .then(data => {
                document.getElementById(id).innerHTML = data;
            })
            .catch(error => console.error("Error:", error));
    }

    loadComponent("navbar", "navbar.html");
    loadComponent("footer", "footer.html");

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
    if (heroTitle) {
        heroTitle.style.opacity = "0";
        heroTitle.style.transform = "translateY(-20px)";
        setTimeout(() => {
            heroTitle.style.transition = "opacity 1s, transform 1s";
            heroTitle.style.opacity = "1";
            heroTitle.style.transform = "translateY(0)";
        }, 500);
    }

    let slideIndex = 1;
    showSlides(slideIndex);

    function changeSlide(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

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

        if (slides.length > 0) {
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    }

    setInterval(() => {
        changeSlide(1);
    }, 5000);

    var accordionButtons = document.querySelectorAll(".accordion-button");
    accordionButtons.forEach(function (button) {
        var arrow = button.querySelector(".arrow");

        if (button.classList.contains("collapsed")) {
            arrow.innerHTML = "&#9660;";
        }

        button.addEventListener("click", function () {
            if (this.classList.contains("collapsed")) {
                arrow.innerHTML = "&#9660;";
            } else {
                arrow.innerHTML = "&#9650;";
            }
        });
    });
});
