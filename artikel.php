<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Poppins -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Favicon & Title -->
    <link rel="icon" href="img/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/artikel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"></link>

    <!-- Title -->
    <title>Artikel - Mozaliner</title>
</head>
<body>
    <!-- ============= Navbar =================== -->
    <nav class="nav container-fluid">
        <div class="container">
            <a href=""><img class="brand" src="img/logotext.png" alt="logo"></a>
            <ul class="navlink">
                <li><a href="index.html">Beranda</a></li>
                <li><a href="index.html">Tentang Kami</a></li>
                <li><a href="">Artikel</a></li>
                <li><a href=""><img src="img/navsaran.png" alt="saran"></a></li>
            </ul>
        </div>
    </nav>

    <!-- ======================= Banner ============================ -->
    <div class="container-fluid banner">
        <div class="logobannerborder">
            <img src="img/logo.png" alt="Logo">
        </div>
    </div>

    <!-- =================== Search Bar ======================= -->
    <div class="container searchnav">
        <div class="sort">
            <Label for="sortselect">Urutkan Menurut : </Label>
            <select name="sortselect">
                <option value="">Paling Banyak Dicari</option>
                <option value="">Paling Populer</option>
                <option value="">Baru Ditambahkan</option>
                <option value="">Lama Ditambahkan</option>
            </select>
        </div>

        <div class="searchdiv">
            <input type="text" placeholder="Cari Di Sini..." size="30">
            <button><i class="fa fa-search"></i></button>
        </div>
    </div>


    <!-- ================== Row ===================== -->
    <div class="container row">
        <div class="result">
            <div class="par"><span>Menampilkan <span><?php $articlesql = "SELECT * FROM artikel"; $articlequery = mysqli_query($db, $articlesql);echo mysqli_num_rows($articlequery) ?></span> Hasil</span><br></div>

            <?php
            while($art = mysqli_fetch_array($articlequery)) {
                echo "<div class='card'><img src='".$art['gambar']."' alt='Food'><div><span>".$art['harga']."</span><i class='fa fa-info-circle' aria-hidden='true'></i><div class='infohover'>".$art['hover']."</div></div><div><span class='namamakanan'>".$art['nama']."</span><a href=''>Baca</a></div></div>";
            }
                ?>
        </div>
        <div class="sidebar"></div>
    </div>

    <div class="container row">
        <div class="result1">1</div>
        <div class="sidebar1"></div>
    </div>


    <!-- ================== Footer ================= -->
    <div class="container-fluid ft">
        <div class="container footer">
            <img src="img/logo.png" alt="logo">
            <ul>
                <li>Konten Kami</li>
                <li><a href="">Artikel</a></li>
                <li><a href="">Lokasi</a></li>
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
                    <form class="formsaran" action="">
                        <input type="text" placeholder="Tulis saranmu di sini" autocomplete="off">
                        <input type="submit" name="" id="">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== JS ======= -->
    <script>
    function toggleScrollClass() {
        var div = document.querySelector('searchnav')[0];
        window.pageYOffset > 0 ? div.classList.remove('fade') : div.classList.add('fade')
        }
        window.addEventListener('scroll', function() {toggleScrollClass()});
        toggleScrollClass();
    </script>
</body>
</html>