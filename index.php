<!DOCTYPE html>
<?php include ("config.php"); ?>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Poppins -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Favicon & Title -->
    <title>Mozaliner</title>
    <link rel="icon" href="img/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/home.css">

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="node_modules/swiper/swiper.min.css">
    <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.js">
    <link rel="stylesheet" href="node_modules/swiper/swiper-element-bundle.min.js">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"></link>
</head>
<body>
    <!-- Navbar -->
    <nav id="nav" class="nav container-fluid">
        <div class="container">
            <a href=""><img class="brand" src="img/logotext.png" alt="logo"></a>
            <ul class="navlink">
                <li><a href="#titleid">Beranda</a></li>
                <li><a href="#tentangkami">Tentang Kami</a></li>
                <li><a href="artikel.php">Artikel</a></li>
                <li><a href="#kotaksaranid"><img src="img/navsaran.png" alt="saran" title="Beri Saran"></a></li>
            </ul>
        </div>
    </nav>




    <!-- Landing -->
    <div class="landing container-fluid">
        <div class="container">
            <img class="tklightwhite1" src="img/lightwhite.png" alt="lightwhite">
            <img class="favlightyellow" src="img/lightyellow.png" alt="lightwhite">
            <img class="favlightyellow2" src="img/lightyellow.png" alt="lightwhite">

            <div class="land container">
                <div id="titleid" class="title">
                    <h1>Temukan Berbagai <br> Macam Kuliner di Bojonegoro</h1>
                    <a href="artikel.php" class="cariartikel">Cari Artikel</a>
                </div>

                <div class="landing-image">
                    <img class="spin" src="img/spinimg1.webp" alt="image display">
                    <img class="spinduaclass" src="img/spin2img1.webp" alt="spin 2">
                    <img class="spintigaclass" src="img/spin2img2.webp" alt="spin 3">
                    <img class="spinminuman" src="img/spin3img1.webp" alt="spin minuman">
                </div>
            </div>
        </div>

        <div class="llcon container">
            <div class="lokasi-landing">
                <div>
                    <img src="img/landingpin.png" alt="pin">
                    <span>Kabupaten Bojonegoro,<br> Provinsi Jawa Timur</span>
                </div>

                <div>
                    <span><a href="https://www.google.com/maps/d/u/0/viewer?mid=1i-0wpeuttIJjnkIwrLbav2EkgoQ&hl=en&ll=-7.157698969326983%2C111.89317700000004&z=13" target="_blank">Cek Lokasi Bojonegoro<br> Melalui Map di Sini</a></span>
                    <img src="img/landingmap.png" alt="pin">
                </div>
            </div>
        </div>
    </div>




    <!-- Favorit Pelanggan -->
    <div class="container">
        <h1 class="favpelh1">Favorit <Span>Pelanggan</Span></h1>
    </div>

    <div class="container">
        <img class="favlightyellow" src="img/lightyellow.png" alt="lightwhite">
        <img class="favlightyellow2" src="img/lightyellow.png" alt="lightwhite">
        <swiper-container id="swiper-favorit" class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="4"centered-slides="true" space-between="30" grab-cursor="true">
            <swiper-slide>
                <img src="uploads/ledre.webp" alt="Food">
                <div>
                    <span>Rp5000</span>
                    <i class="info fa fa-info-circle" aria-hidden="true"></i>
                    <div class="infohover">
                        Ledre adalah salah satu makanan khas bojonegoro yang bisa dibeli dengan harga terjangkau.
                    </div>
                </div>
                <div>
                    <span class="namamakanan">Kue Ledre</span>
                    <a href="">Baca</a>
                </div>
            </swiper-slide>
            <swiper-slide>
                <img src="uploads/tahu.webp" alt="Food">
                <div>
                    <span>Rp2000</span>
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <div class="infohover">
                        Tahu adalah makanan yang populer dan sering diolah sebagai lauk atau camilan dengan rasa asin.
                    </div>
                </div>
                <div>
                    <span class="namamakanan">Tahu Goreng</span>
                    <a href="">Baca</a>
                </div>
            </swiper-slide>
            <swiper-slide>
                <img src="uploads/ayamcrispy.webp" alt="Food">
                <div>
                    <span>Rp12.000</span>
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <div class="infohover">
                        Makanan yang sering menjadi favorit semua orang, tidak sedikit yang menyediakan makanan ini.
                    </div>
                </div>
                <div>
                    <span class="namamakanan">Ayam Crispy</span>
                    <a href="">Baca</a>
                </div>
            </swiper-slide>
            <swiper-slide>
                <img src="uploads/miegoreng.webp" alt="Food">
                <div>
                    <span>Rp7000</span>
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <div class="infohover">
                        Makanan praktis yang dapat dibuat semua orang, tetapi banyak juga yang menjual Mie Goreng di Bojonegoro.
                    </div>
                </div>
                <div>
                    <span class="namamakanan">Mie Goreng</span>
                    <a href="">Baca</a>
                </div>
            </swiper-slide>
            <swiper-slide>
                <img src="uploads/nasigoreng.webp" alt="Food">
                <div>
                    <span>Rp10000</span>
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <div class="infohover">
                        Opsi untuk mengobati rasa lapar dengan harga yang murah, nasi goreng  menjadi salah satu makanan paling umum.
                    </div>
                </div>
                <div>
                    <span class="namamakanan">Nasi Goreng</span>
                    <a href="">Baca</a>
                </div>
            </swiper-slide>
            <swiper-slide>
                <img src="uploads/pecel.webp" alt="Food">
                <div>
                    <span>Rp9000</span>
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <div class="infohover">
                        Nasi Pecel sering tersedia pada waktu pagi dan sering dikonsumsi sebagai sarapan oleh banyak orang.
                    </div>
                </div>
                <div>
                    <span class="namamakanan">Nasi Pecel</span>
                    <a href="">Baca</a>
                </div>
            </swiper-slide>
            <swiper-slide>
                <img src="uploads/sate.webp" alt="Food">
                <div>
                    <span>Rp2000</span>
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <div class="infohover">
                        Sate sangat cocok disajikan untuk banyak orang, kebanyakan pembeli akan memesan dalam jumlah besar.
                    </div>
                </div>
                <div>
                    <span class="namamakanan">Sate Tusuk</span>
                    <a href="">Baca</a>
                </div>
            </swiper-slide>
        </swiper-container>

        <a class="lihatsemua" href="artikel.php">Lihat Semua</a>
    </div>



    <!-- Tentang Bojonegoro -->
    <div class="container-fluid tbjn">
        <div class="tentang-bjn container">
            <img src="img/tentangbjn.png" alt="foto bjn">
            <div>
                <h1>Tentang <br>Bojonegoro</h1>
                <p>Bojonegoro adalah sebuah wilayah kabupaten di Provinsi Jawa Timur, Indonesia. Bojonegoro memiliki banyak ragam kuliner tersebar dari makanan tradisional sampai modern yang dapat dibeli dengan harga yang terjangkau.
                </p>
                <a class="ceklok" href="https://www.google.com/maps/d/u/0/viewer?mid=1i-0wpeuttIJjnkIwrLbav2EkgoQ&hl=en&ll=-7.157698969326983%2C111.89317700000004&z=13" target="_blank">Cek Lokasi</a>
            </div>
        </div>
    </div>




    <!-- Tentang Kami -->
    <div id="tentangkami" class="tk container">
        <img class="tklightwhite" src="img/lightwhite.png" alt="lightwhite">
        <img class="tklightyellow" src="img/lightyellow.png" alt="lightwhite">
        <img class="tklightyellow2" src="img/lightyellow.png" alt="lightwhite">
        <div class="tentang-kami">
            <div>
                <swiper-container class="mySwiper swiper-container1" navigation="true" pagination="true" keyboard="true" mousewheel="true" css-mode="true">
                    <swiper-slide class="swiper-slide1">
                        <img src="img/imgauthor/erik.jpg" alt="Erik">
                        <span>Erik Triayuda Wijaya</span>
                        <span>Development Leader</span>
                    </swiper-slide>
                    <swiper-slide class="swiper-slide1">
                        <img src="img/imgauthor/ferrdy.jpeg" alt="Ferrdy">
                        <span>Ferrdy Romeo Hardjo P.</span>
                        <span>Article Manager</span>
                    </swiper-slide>
                    <swiper-slide class="swiper-slide1">
                        <img src="img/imgauthor/firda.jpeg" alt="Firda">
                        <span>Daud Qhoric Firda U.N</span>
                        <span>Article Creator</span>
                    </swiper-slide>
                    <swiper-slide class="swiper-slide1">
                        <img src="img/imgauthor/byan.jpeg" alt="Byan">
                        <span>Byan Dwi Cahya Kurnia</span>
                        <span>Article Researcher</span>
                    </swiper-slide>
                    <swiper-slide class="swiper-slide1">
                        <img src="img/imgauthor/hikma.jpeg" alt="Hikma">
                        <span>Hikma Nur Hidayah</span>
                        <span>Article Creator</span>
                    </swiper-slide>
                </swiper-container>
            </div>
            <div>
                <h1>Tentang Kami</h1>
                <p>Kami adalah tim pengembang web yang bergerak dengan keinginan dan hobi berkreasi. Kami ingin membuat inovasi baru dan merealisasikan kreativitas melalui pengembangan web yang diharapkan dapat menginspirasi orang lain
                </p>
            </div>
        </div>
    </div>



    <!-- ================== Footer ================= -->
    <div class="container-fluid ft">
        <div id="footerid" class="container footer">
            <img src="img/logo.png" alt="logo">
            <ul>
                <li>Konten Kami</li>
                <li><a href="artikel.php">Artikel</a></li>
                <li><a href="https://www.google.com/maps/d/u/0/viewer?mid=1i-0wpeuttIJjnkIwrLbav2EkgoQ&hl=en&ll=-7.157698969326983%2C111.89317700000004&z=13" target="_blank">Lokasi</a></li>
            </ul>
            <ul>
                <li>Kategori Kuliner</li>
                <li><a href="">Makanan</a></li>
                <li><a href="">Minuman</a></li>
                <li><a href="">Jajanan</a></li>
            </ul>
            <ul>
                <li>Portal Developer</li>
                <li><a href="">Quackeyikz Github</a></li>
            </ul>
            <div>
                <span>Memiliki Saran?</span><br>
                <span>Kirim ke sini</span>
                <div class="kotaksaran">
                    <form class="formsaran" action="proses-saran.php" method="post">
                        <input id="kotaksaranid" type="text" placeholder="Tulis saranmu di sini" autocomplete="off" name="isisaran">
                        <input type="submit" name="submitsaran" id="">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================== Alert Saran ======================== -->
    <?php if(isset($_GET['saran'])): ?>
    <div>
        <?php
        if($_GET['saran'] == 'sukses'){
            echo "<script>alert('Saran Berhasil ditambahkan, terimakasih atas sarannya! - Kelompok 3');</script>";
        } else {
            echo "<script>alert('Saran gagal ditambahkan');</script>";
        }
        ?>
    </div>
    <?php endif; ?>





    <!-- =============== JS ================ -->
    <script>
        function toggleScrollClass() {
        var nav = document.querySelectorAll('nav')[0];
        window.pageYOffset > 0 ? nav.classList.remove('fade') : nav.classList.add('fade')
        }
        window.addEventListener('scroll', function() {toggleScrollClass()});
        toggleScrollClass();

        const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'vertical',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="node_modules/swiper/swiper.min.css"></script>
    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="node_modules/swiper/swiper-element-bundle.min.js"></script>
    <script src="js/home.js"></script>
</body>
</html>