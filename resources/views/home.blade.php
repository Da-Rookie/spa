<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- MY CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/430px.css">
    <!-- <link rel="stylesheet" href="/css/768px.css">
    <link rel="stylesheet" href="/css/575px.css">
    <link rel="stylesheet" href="/css/375px.css">
    <link rel="stylesheet" href="/css/320px.css"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Klik Kelontong</title>
    <link rel="icon" href="/img/logo_rounded.jpg" />
    <style>
        .notif-box {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 12px 20px;
            background: #333;
            color: #fff;
            border-radius: 8px;
            font-size: 14px;
            z-index: 999;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            opacity: 0.95;
        }
    </style>
</head>

<body>
    <!-- NAVBAR START -->
    <div class="navbar" id="navbar">
        <div class="nav-left">
            <a href="#" class="nav-logo"><i class="fa-brands fa-instagram" id="nav-logoo"></i></a>
            <a href="#" class="nav-logo"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#" class="nav-logo"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="#" class="nav-logo"><i class="fa-brands fa-square-github"></i></a>
        </div>
        <div class="nav-mid">
            <!-- <img src="./img/logo_rounded.jpg" style="border-radius: 50%;" width="55px" alt=""> -->
            <img src="./img/logo_rounded.jpg" style="border-radius: 50%;" width="55px" alt="">
            <a href="#header">Klik Kelontong</a>
        </div>
        <div class="nav-right">
            <div class="nav-btn">
                <a href="#" id="hamburger">Menu <i class="fa-solid fa-caret-down"></i></a>
            </div>
        </div>
        <!-- Hamburger NAV -->
        <!-- <a href="#"><i class="fa-solid fa-bars"></i></a> -->
        <div class="sidebar">
            <a href="#" id="close-button"><i class="fa-solid fa-x x-pos"></i></a>
            <ul class="navlist">
                <li><a href="#desc" id="about-button">About</a></li>
                <li><a href="#services" id="services-button">Services</a></li>
                <li><a href="#pricing" id="pricing-button">Pricing</a></li>
                <li><a href="#contact" id="contact-button">Contact</a></li>
            </ul>

            <!-- <ul class="navlink">
                <li><a href="#" id="ig-button"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                <li><a href="#" id="github-button"><i class="fa-brands fa-github"></i> Github</a></li>
            </ul> -->
        </div>
    </div>
    <!-- NAVBAR END -->

    <!-- HEADER START -->

    <div class="header" id="header">
        <div class="header-inner">
            <div class="header-title">
                <!-- <h2>Lorem ipsum dolor sit amet.</h2> -->
                <h1>Klik<span>Kelontong</span></h1>
            </div>
            <div class="header-desc">
                <div class="header-desc-left" id="scroll-to-desc">
                    <a href="#desc">Explore!</a>
                </div>
                <div class="header-desc-right">
                    <p>Ayo digitalisasi toko kelontong anda dengan inventaris cerdas & Fitur layanan antar yang terintegrasi! </p>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER END -->

    <!-- DESCRIPTION START -->
    <div class="desc" id="desc">
        <div class="desc-left">
            <img src="./img/logo.png" alt="desc-img">
        </div>
        <div class="desc-right">
            <div class="desc-right-title">
                <h2>Inovasi Klik <span> Kelontong</span></h2>
            </div>
            <div class="desc-right-inner">
                <p>Klik Kelontong adalah solusi digital yang memudahkan warung dan toko kelontong dalam mengembangkan usaha secara online. Dengan platform ini, penjual dapat menjangkau lebih banyak pelanggan, meningkatkan omzet, dan mengelola toko secara efisien dari mana saja.</p>
            </div>
            <div class="desc-right-list-container">
                <div class="desc-right-list">
                    <span><i class="fa-solid fa-check"></i></span>
                    <p>Akses mudah untuk pengelolaan produk dan pesanan</p>
                </div>
                <div class="desc-right-list">
                    <span><i class="fa-solid fa-check"></i></span>
                    <p>Sistem yang hemat biaya dan ramah pengguna</p>
                </div>
                <div class="desc-right-list">
                    <span><i class="fa-solid fa-check"></i></span>
                    <p>Dukungan promosi dan fitur pengantaran langsung ke pelanggan</p>
                </div>
            </div>

            <hr>
            <div class="desc-right-focus">
                <div class="focus-list">
                    <h2><i class="fa-solid fa-shop"></i> Go Digital</h2>
                </div>
                <div class="focus-list">
                    <h2><i class="fa-solid fa-chart-line"></i> Manajemen Cerdas</h2>
                </div>
                <div class="focus-list">
                    <h2><i class="fa-regular fa-money-bill-trend-up"></i> Tingkatkan Pendapatan</h2>
                </div>
                <div class="focus-list">
                    <h2><i class="fa-solid fa-truck-fast"></i> Fitur Pengiriman</h2>
                </div>
            </div>
            <div class="desc-btn">
                <a id="desc" href="#contact">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- DESCRIPTION END -->
    <!-- ABOUT START -->
    <div class="about" id="services">
        <div class="about-left">
            <h2>Solusi untuk Toko Kelontong <span>Modern!</span></h2>
            <p>Fitur utama yang dirancang untuk transformasi digital warung dan toko kelontong, meningkatkan efisiensi serta memperluas jangkauan pasar.</p>
        </div>
        <div class="about-right">
            <div class="about-right-list">
                <i class="fa-solid fa-chart-simple"></i>
                <h2>Dashboard Analisis</h2>
                <p>Pantau performa penjualan, stok barang, dan tren transaksi secara real-time untuk keputusan yang tepat.</p>
            </div>
            <div class="about-right-list">
                <i class="fa-solid fa-list-check"></i>
                <h2>Manajemen Produk</h2>
                <p>Tambah, ubah, dan atur stok barang dengan mudah. Sistem otomatis memberi peringatan saat stok menipis.</p>
            </div>
            <div class="about-right-list">
                <i class="fa-solid fa-building-circle-check"></i>
                <h2>Sistem Pemesanan Online</h2>
                <p>Terima pesanan langsung melalui website toko dengan notifikasi dan riwayat transaksi lengkap.</p>
            </div>
            <div class="about-right-list">
                <i class="fa-solid fa-truck-fast"></i>
                <h2>Layanan Pengantaran Terintegrasi</h2>
                <p>Pengiriman langsung ke pelanggan dengan kurir lokal maupun internal untuk proses belanja yang cepat dan nyaman.</p>
            </div>
        </div>
    </div>
    <!-- ABOUT END -->
    <!-- FLOW MARKET START -->
    <div class="flow-market">
        <div class="flow-left">
            <div class="flow-left-title">
                <h2>Alur Pendaftaran Klik <span>Kelontong</span></h2>
            </div>
            <div class="flow-left-arrow">
                <img src="./img/arrow.webp" alt="arrow">
            </div>
        </div>
        <div class="flow-right">
            <div class="flow-list">
                <div class="step">
                    <p>Step 1</p>
                </div>
                <div class="step-desc">
                    <h2>Pendaftaran Digital</h2>
                </div>
            </div>
            <div class="flow-list">
                <div class="step">
                    <p>Step 2</p>
                </div>
                <div class="step-desc">
                    <h2>Proses Verifikasi & Konsultasi</h2>
                </div>
            </div>
            <div class="flow-list">
                <div class="step">
                    <p>Step 3</p>
                </div>
                <div class="step-desc">
                    <h2>Survei Lokasi Toko</h2>
                </div>
            </div>
            <div class="flow-list">
                <div class="step">
                    <p>Step 4</p>
                </div>
                <div class="step-desc">
                    <h2>Aktivasi Website & Sistem </h2>
                </div>
            </div>
            <div class="flow-list">
                <div class="step">
                    <p>Step 5</p>
                </div>
                <div class="step-desc">
                    <h2>Pelatihan & Go-Live</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- FLOW MARKET END -->

    <!-- USER PAGE START -->
    <div class="user-page">
        <div class="user-page-title">
            <h2>Contoh Dashboard User Page Klik <span> Kelontong</span></h2>
            <p>Antarmuka belanja online praktis: katalog produk, keranjang, checkout aman, dan tracking pesanan.</p>
            <div class="user-page-btn">
                <a href="https://www.figma.com/proto/C3qIIcJgmjApmb4CCbLyq7/KlikKelontong?node-id=166-511&p=ft=MZsSB1CprEsvdl4g-1scaling=scale-down&content-scaling=fixed&page-id=84%3A16687&starting-point-node-id=166%3A485&show-proto-sidebar=1" target="_blank">Coba Prototype</a>
            </div>
        </div>
        <div class="user-page-right">
            <div class="user-page-inner">
                <div class="user-page-card">
                    <div class="user-page-card-title">
                        <h2><i class="fa-solid fa-circle"></i> Beranda User</h2>
                    </div>
                    <div class="user-page-img">
                        <img src="./img/user_page/beranda.png" alt="beranda_user">
                    </div>
                </div>
                <div class="user-page-card">
                    <div class="user-page-card-title">
                        <h2><i class="fa-solid fa-circle"></i> Keranjang User</h2>
                    </div>
                    <div class="user-page-img">
                        <img src="./img/user_page/checkout.png" alt="keranjang_user">
                    </div>
                </div>
                <div class="user-page-card">
                    <div class="user-page-card-title">
                        <h2><i class="fa-solid fa-circle"></i> Checkout User</h2>
                    </div>
                    <div class="user-page-img">
                        <img src="./img/user_page/checkout.png" alt="checkout_user">
                    </div>
                </div>
                <div class="user-page-card">
                    <div class="user-page-card-title">
                        <h2><i class="fa-solid fa-circle"></i> Detail Produk</h2>
                    </div>
                    <div class="user-page-img">
                        <img src="./img/user_page/product-detail.png" alt="produk_user">
                    </div>
                </div>
                <div class="user-page-card">
                    <div class="user-page-card-title">
                        <h2><i class="fa-solid fa-circle"></i> Track Order</h2>
                    </div>
                    <div class="user-page-img">
                        <img src="./img/user_page/track-order.png" alt="track_order_user">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ADMIN PAGE END -->
    <!-- ADMIN PAGE START -->
    <div class="admin-page">
        <div class="admin-page-title">
            <h2>Contoh Dashboard Admin Page Klik <span> Kelontong</span></h2>
            <p>Panel lengkap untuk toko digital dengan analitik, manajemen produk, pesanan, pelanggan, dan laporan.</p>
            <div class="admin-page-btn">
                <a href="https://www.figma.com/proto/C3qIIcJgmjApmb4CCbLyq7/KlikKelontong?node-id=421-867&p=f&t=U8lB3YwrFdSJJqPE-1&scaling=min-zoom&content-scaling=fixed&page-id=389%3A822&starting-point-node-id=421%3A867&show-proto-sidebar=1" target="_blank">Coba Prototype</a>
            </div>
        </div>
        <div class="admin-page-right">
            <div class="admin-page-inner">
                <div class="admin-page-card">
                    <div class="admin-page-card-title">
                        <h2><i class="fa-solid fa-circle"></i> Beranda Admin</h2>
                    </div>
                    <div class="admin-page-img">
                        <img src="./img/admin_page/dashboard.png" alt="Dashboard">
                    </div>
                </div>
                <div class="admin-page-card">
                    <div class="admin-page-card-title">
                        <h2><i class="fa-solid fa-circle"></i> Manajemen Produk</h2>
                    </div>
                    <div class="admin-page-img">
                        <img src="./img/admin_page/manajemen-produk.png" alt="Dashboard">
                    </div>
                </div>
                <div class="admin-page-card">
                    <div class="admin-page-card-title">
                        <h2><i class="fa-solid fa-circle"></i> Manajemen Pesanan</h2>
                    </div>
                    <div class="admin-page-img">
                        <img src="./img/admin_page/manajemen-pesanan.png" alt="Dashboard">
                    </div>
                </div>
                <div class="admin-page-card">
                    <div class="admin-page-card-title">
                        <h2><i class="fa-solid fa-circle"></i> Manajemen Pelanggan</h2>
                    </div>
                    <div class="admin-page-img">
                        <img src="./img/admin_page/manajemen-pelanggan.png" alt="Dashboard">
                    </div>
                </div>
                <div class="admin-page-card">
                    <div class="admin-page-card-title">
                        <h2><i class="fa-solid fa-circle"></i> Laporan Keuangan</h2>
                    </div>
                    <div class="admin-page-img">
                        <img src="./img/admin_page/laporan_keuangan.png" alt="Dashboard">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ADMIN PAGE END -->

    <!-- PRICING START -->
    <div class="pricing" id="pricing">
        <div class="pricing-title">
            <h2>Pricing Table</h2>
        </div>
    </div>

    <!-- PRICING CARDS sebagai TABLE dengan proper structure -->
    <div class="card">
        <div class="card-list">
            <div class="card-top">
                <div class="card-title">
                    <h2>Trial Pack</h2>
                </div>
                <div class="card-desc">
                    <p>Uji coba layanan selama 14 hari. Hanya dapat digunakan maksimal 3 kali oleh setiap mitra.</p>
                </div>
                <div class="card-price">
                    <h2>Rp.100.000/14 Hari</h2>
                </div>
            </div>
            <div class="card-bottom">
                <ul>
                    <li>Website Klik Kelontong User (Etalase Online) & Dashboard Admin.</li>
                </ul>
                <div class="card-btn">
                    <a href="#contact">Get started</a>
                </div>
            </div>
        </div>
        <div class="card-list">
            <div class="card-top">
                <div class="card-title">
                    <h2>Paket Awal <span>(Aktivasi)</span> </h2>
                </div>
                <div class="card-desc">
                    <p>Paket aktivasi awal untuk memulai transformasi digital toko Anda.</p>
                </div>
                <div class="card-price">
                    <h2>Rp.250.000/Month</h2>
                </div>
            </div>
            <div class="card-bottom">
                <ul>
                    <li>Website Klik Kelontong User (Etalase Online) & Dashboard Admin.</li>
                    <li>Domain pribadi untuk mitra.</li>
                    <li>Optimalisasi SEO dasar.</li>
                    <li>Iklan ringan (ads).</li>
                    <li>Akses komunitas mitra.</li>
                    <li>Biaya instalasi, dan biaya maintenance untuk 1 bulan</li>
                </ul>
                <div class="card-btn">
                    <a href="#contact">Get started</a>
                </div>
            </div>
        </div>
        <div class="card-list">
            <div class="card-top">
                <div class="card-title">
                    <h2>Paket Lanjutan</h2>
                </div>
                <div class="card-desc">
                    <p>Paket lanjutan dengan fitur tambahan untuk perkembangan toko digital Anda.</p>
                </div>
                <div class="card-price">
                    <h2>Rp.200.000/Month</h2>
                </div>
            </div>
            <div class="card-bottom">
                <ul>
                    <li>Website Klik Kelontong User (Etalase Online) & Dashboard Admin.</li>
                    <li>Optimalisasi SEO Lanjutan.</li>
                    <li>Iklan ringan (ads).</li>
                    <li>Akses komunitas mitra.</li>
                    <li>Biaya maintenance untuk 1 bulan.</li>
                </ul>
                <div class="card-btn">
                    <a href="#contact">Get started</a>
                </div>
            </div>
        </div>
    </div>
    <!-- PRICING CARD END -->

    <!-- TABLE PRICE START -->
    <div class="table-price">
        <div class="table-price-title">
            <div class="table-price-title-left">
                <h2>Pilihan Terbaik <span>Untukmu!</span></h2>
            </div>
            <div class="table-price-right">
                <p>Bandingkan fitur dari setiap paket dan temukan solusi terbaik untuk toko kelontong Anda!</p>
            </div>
        </div>

        <div class="table-model">
            <div class="table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Features</th>
                            <th>Paket Trial</th>
                            <th>Paket Awal</th>
                            <th>Paket Lanjutan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Feature">Website Etalase Online</td>
                            <td data-label="Paket Trial"><i class="fa-solid fa-check"></i></td>
                            <td data-label="Paket Awal"><i class="fa-solid fa-check"></i></td>
                            <td data-label="Paket Lanjutan"><i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td data-label="Feature">Dashboard Admin Manajemen</td>
                            <td data-label="Paket Trial"><i class="fa-solid fa-check"></i></td>
                            <td data-label="Paket Awal"><i class="fa-solid fa-check"></i></td>
                            <td data-label="Paket Lanjutan"><i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td data-label="Feature">Sistem Pemesanan Online</td>
                            <td data-label="Paket Trial"><i class="fa-solid fa-check"></i></td>
                            <td data-label="Paket Awal"><i class="fa-solid fa-check"></i></td>
                            <td data-label="Paket Lanjutan"><i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td data-label="Feature">Notifikasi Email Otomatis</td>
                            <td data-label="Paket Trial"><i class="fa-solid fa-check"></i></td>
                            <td data-label="Paket Awal"><i class="fa-solid fa-check"></i></td>
                            <td data-label="Paket Lanjutan"><i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td data-label="Feature">Domain Pribadi</td>
                            <td data-label="Paket Trial"><i class="fa-solid fa-times"></i></td>
                            <td data-label="Paket Awal"><i class="fa-solid fa-check"></i></td>
                            <td data-label="Paket Lanjutan"><i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td data-label="Feature">Optimalisasi SEO</td>
                            <td data-label="Paket Trial"><i class="fa-solid fa-times"></i></td>
                            <td data-label="Paket Awal">Dasar</td>
                            <td data-label="Paket Lanjutan">Lanjutan</td>
                        </tr>
                        <tr>
                            <td data-label="Feature">Akses Komunitas Mitra</td>
                            <td data-label="Paket Trial"><i class="fa-solid fa-times"></i></td>
                            <td data-label="Paket Awal"><i class="fa-solid fa-check"></i></td>
                            <td data-label="Paket Lanjutan"><i class="fa-solid fa-check"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- TABLE PRICE END -->
    <!-- BRIDGE CONTACT START -->
    <div class="bridge-contact">
        <h3>Siap untuk Transformasi Digital?</h3>
        <h2>Wujudkan Impian Toko Kelontong Modern Anda Bersama Kami!</h2>
        <div class="bridge-btn">
            <a href="#contact">Mulai Sekarang</a>
        </div>
    </div>
    <!-- BRIDGE CONTACT END -->
    <!-- CONTACT START -->
    <div class="contact" id="contact">
        <div class="contact-left">
            <img src="./img/logo.png" alt="logo_contact">
        </div>
        <div class="contact-right">
            <div class="contact-head">
                <h2>Hubungi <span>Tim Kami</span></h2>
                <p>Punya pertanyaan atau ingin konsultasi gratis? Tim ahli kami siap membantu transformasi digital toko kelontong Anda!</p>
            </div>
            <div class="contact-table">
                <form action="{{ url('/contact') }}" method="post">
                    @csrf
                    <div class="contact-table-head">
                        <div class="fname">
                            <input required type="text" name="name" placeholder="Nama Lengkap">
                        </div>
                        <div class="fmail">
                            <input required type="email" name="email" placeholder="Alamat Email">
                        </div>
                    </div>
                    <div class="fphone">
                        <input required type="text" name="phone" placeholder="Nomor WhatsApp">
                    </div>
                    <div class="ftext">
                        <textarea name="message" placeholder="Ceritakan kebutuhan toko kelontong Anda..." rows="6"></textarea>
                    </div>
                    <div class="fsubmit">
                        <button type="submit">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- CONTACT END -->
    <!-- FOOTER START -->
    <div class="footer">
        <div class="footer-top">
            <div class="footer-list">
                <a href="#">Home</a>
                <a href="#">About Us</a>
                <a href="#">Services</a>
                <a href="#">Blog</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="footer-form">
                <form action="{{ url('/subscriber') }}" method="post">
                    @csrf
                    <div class="footer-form-label">
                        <label for="footer_email">Dapatkan Update Terbaru & Promo Eksklusif</label>
                    </div>
                    <div class="footer-form-email">
                        <input type="email" id="footer_email" name="footer_email" required placeholder="Masukkan email Anda" class="footer-email">
                        <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer-title">
            <h2>Klik Kelontong</h2>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <h3>Copyright @ 2025 Klik Kelontong</h3>
            </div>
            <div class="footer-bottom-right">
                <a href="#">Style guide</a>
                <a href="#">License</a>
            </div>
        </div>
    </div>
    <!-- FOOTER END -->

    <script>
        document.getElementById("scroll-to-desc").addEventListener("click", function() {
            document.getElementById("desc").scrollIntoView({
                behavior: "smooth"
            });
        });
    </script>

    <!-- MY JS -->
    <script src="./js/script.js"></script>
    <!-- JQUERY -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
    <!-- FONTAWESOME JS -->
    <script src="https://kit.fontawesome.com/fda7793d93.js" crossorigin="anonymous"></script>
    <div id="notif" class="notif-box" style="display: none;"></div>
</body>

</html>