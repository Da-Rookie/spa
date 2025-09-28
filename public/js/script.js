const navbar = document.getElementById("navbar");
const nav_menu = document.querySelector(".nav-btn a");
const font_nav = document.querySelector(".nav-mid a");
const nav_logo = document.querySelectorAll(".nav-left i");

window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
        font_nav.classList.add("scrolled");
        nav_menu.classList.add("scrolled");
        for (let i = 0; i < nav_logo.length; i++) {
            nav_logo[i].classList.add("scrolled");
        }
    } else {
        navbar.classList.remove("scrolled");
        font_nav.classList.remove("scrolled");
        nav_menu.classList.remove("scrolled");
        for (let i = 0; i < nav_logo.length; i++) {
            nav_logo[i].classList.remove("scrolled");
        }
    }
});

// Toggle Navbar Hamburger
const services = document.querySelector("#services-button");
const about = document.querySelector("#about-button");
const parallax = document.querySelector("#parallax-button");
const contact = document.querySelector("#contact-button");
const pricing = document.querySelector("#pricing-button");
const ig = document.querySelector("#ig-button");
const github = document.querySelector("#github-button");

const navOpenButton = document.querySelector("#hamburger");
const sideBar = document.querySelector(".sidebar");
const navCloseButton = document.querySelector("#close-button");
// const navList = document.querySelector('#list');
// const services = document.querySelector('#services');

navOpenButton.onclick = (e) => {
    e.preventDefault();
    sideBar.classList.toggle("active");
    document.body.style.overflow = "hidden";
};

navCloseButton.onclick = (e) => {
    e.preventDefault();
    sideBar.classList.remove("active");
    document.body.style.overflow = "scroll";
};

document.addEventListener("click", function (e) {
    if (services && services.contains(e.target)) {
        sideBar.classList.remove("active");
        document.body.style.overflow = "scroll";
    } else if (about && about.contains(e.target)) {
        sideBar.classList.remove("active");
        document.body.style.overflow = "scroll";
    } else if (parallax && parallax.contains(e.target)) {
        sideBar.classList.remove("active");
        document.body.style.overflow = "scroll";
    } else if (contact && contact.contains(e.target)) {
        sideBar.classList.remove("active");
        document.body.style.overflow = "scroll";
    } else if (pricing && pricing.contains(e.target)) {
        sideBar.classList.remove("active");
        document.body.style.overflow = "scroll";
    } else if (navCloseButton && navCloseButton.contains(e.target)) {
        sideBar.classList.remove("active");
        document.body.style.overflow = "scroll";
    }
});

// Notification System
function showNotification(message, type = "success") {
    // Remove existing notifications
    const existingNotifications = document.querySelectorAll(".notification");
    existingNotifications.forEach((notif) => {
        notif.classList.remove("show");
        setTimeout(() => notif.remove(), 300);
    });

    // Create notification element
    const notification = document.createElement("div");
    notification.className = `notification ${type}`;
    // Set icon and enhanced messages based on type
    let icon = "";
    let enhancedMessage = message;
    switch (type) {
        case "success":
            icon = "🎉";
            if (message.includes("Email")) {
                enhancedMessage =
                    "🎉 Berhasil! Email Anda telah terdaftar untuk newsletter eksklusif kami!";
            } else if (message.includes("Pesan")) {
                enhancedMessage =
                    "✨ Berhasil! Pesan Anda telah terkirim. Tim kami akan segera menghubungi Anda!";
            }
            break;
        case "error":
            icon = "⚠️";
            if (message.includes("email")) {
                enhancedMessage =
                    "🚫 Oops! Format email tidak valid. Silakan periksa kembali ya!";
            } else if (message.includes("gagal")) {
                enhancedMessage =
                    "😔 Maaf, terjadi kendala teknis. Silakan coba lagi dalam beberapa saat!";
            } else {
                enhancedMessage = "❌ " + message;
            }
            break;
        case "info":
            icon = "ℹ️";
            if (message.includes("sudah terdaftar")) {
                enhancedMessage =
                    "💡 Email ini sudah terdaftar sebelumnya. Terima kasih atas kesetiaan Anda!";
            } else {
                enhancedMessage = "📢 " + message;
            }
            break;
        default:
            icon = "✅";
    }
    notification.innerHTML = `
        <span class="icon">${icon}</span>
        <span class="message">${enhancedMessage}</span>
        <button class="close-btn" onclick="this.parentElement.classList.remove('show'); setTimeout(() => this.parentElement.remove(), 300)">×</button>
    `;
    document.body.appendChild(notification);
    setTimeout(() => {
        notification.classList.add("show");
    }, 100);
    setTimeout(() => {
        if (notification.classList.contains("show")) {
            notification.classList.remove("show");
            setTimeout(() => {
                if (notification.parentElement) {
                    notification.remove();
                }
            }, 400);
        }
    }, 6000);
}

// Function specifically for showing success messages
function showSuccess(message) {
    showNotification(message, "success");
}

// Function specifically for showing error messages
function showError(message) {
    showNotification(message, "error");
}

// Function specifically for showing info messages
function showInfo(message) {
    showNotification(message, "info");
}

// Laravel Contact Form AJAX Handler
document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.querySelector('form[action*="/contact"]');
    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            e.preventDefault();
            const formData = new FormData(this);
            // Get CSRF token from hidden input
            const tokenInput = this.querySelector('input[name="_token"]');
            const csrfToken = tokenInput ? tokenInput.value : "";
            fetch("/contact", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                },
                body: formData,
            })
                .then((res) => res.json())
                .then((data) => {
                    if (data.status === "success") {
                        showSuccess(data.message);
                        this.reset();
                    } else {
                        showError(data.message || "Gagal mengirim pesan.");
                    }
                })
                .catch(() => {
                    showError("Terjadi kesalahan saat mengirim pesan.");
                });
        });
    }
});

// Laravel Subscribers Form AJAX Handler
document.addEventListener("DOMContentLoaded", function () {
    const subscriberForm = document.querySelector(
        'form[action*="/subscriber"]'
    );
    if (subscriberForm) {
        subscriberForm.addEventListener("submit", function (e) {
            e.preventDefault();
            const formData = new FormData(this);
            // Get CSRF token from hidden input
            const tokenInput = this.querySelector('input[name="_token"]');
            const csrfToken = tokenInput ? tokenInput.value : "";
            fetch("/subscriber", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                },
                body: formData,
            })
                .then((res) => {
                    // Try to parse JSON, fallback to text
                    return res.json().catch(() => ({
                        status: "error",
                        message: "Gagal mengirim email.",
                    }));
                })
                .then((data) => {
                    if (data.status === "success") {
                        showSuccess(data.message);
                        this.reset();
                    } else {
                        showError(data.message || "Gagal mengirim email.");
                    }
                })
                .catch(() => {
                    showError("Terjadi kesalahan saat mengirim email.");
                });
        });
    }
});
