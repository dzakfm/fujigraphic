document.addEventListener("DOMContentLoaded", function () {
  initLogin();
  initNavbarToggle();
});

function initLogin() {
  const loginButton = document.getElementById("login-button");
  const form = document.querySelector("form");
  const wrapper = document.querySelector(".wrapper");

  if (loginButton && form && wrapper) {
    loginButton.addEventListener("click", function (event) {
      form.classList.add("fade-out");
      wrapper.classList.add("form-success");

      setTimeout(function () {
        form.style.display = "none";
      }, 500);
    });
  }
}

function initNavbarToggle() {
  const toggleBtn = document.querySelector(".toggle-btn");
  const nav = document.querySelector(".admin__nav");
  const adminContainer = document.querySelector(".admin");
  const overlay = document.querySelector(".nav-overlay");

  if (!toggleBtn || !nav || !adminContainer || !overlay) {
    console.warn("Elemen tidak lengkap untuk toggle navbar:", {
      toggleBtn, nav, adminContainer, overlay
    });
    return;
  }

  // Toggle button diklik
  toggleBtn.addEventListener("click", function (e) {
    e.stopPropagation(); // agar tidak trigger document click
    nav.classList.toggle("active");
    adminContainer.classList.toggle("nav-open");
    overlay.classList.toggle("show");
    console.log("Tombol diklik, menu toggle");
  });

  // Klik di luar nav
  document.addEventListener("click", function (e) {
    if (!nav.contains(e.target) && !toggleBtn.contains(e.target)) {
      nav.classList.remove("active");
      adminContainer.classList.remove("nav-open");
      overlay.classList.remove("show");
    }
  });

  // Klik overlay juga nutup
  overlay.addEventListener("click", function () {
    nav.classList.remove("active");
    adminContainer.classList.remove("nav-open");
    overlay.classList.remove("show");
  });
}
