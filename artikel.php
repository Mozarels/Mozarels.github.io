<!DOCTYPE html>
<?php include("config.php"); ?>
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
            <li><a href="index.php">Beranda</a></li>
                <li><a href="index.php#tentangkami">Tentang Kami</a></li>
                <li><a href="artikel.php">Artikel</a></li>
                <li><a href="#kotaksaranid"><img src="img/navsaran.png" alt="saran" title="Beri Saran"></a></li>
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
    <form action="" method="post">
    <div class="container searchnav">
        <div class="sort">
            <Label for="sortselect">Urutkan Menurut : </Label>
            <select name="sortselect">
                <option value="semua">Semua</option>
                <option value="populer">Paling Populer</option>
                <option value="baru">Baru Ditambahkan</option>
                <option value="lama">Lama Ditambahkan</option>
            </select>
            <button><i class="fa fa-link"></i></button>
        </div>

        <div class="searchdiv">
            <input type="text" placeholder="Cari Di Sini..." size="30">
            <button><i class="fa fa-search"></i></button>
        </div>
    </div>


    <!-- ================== Row ===================== -->
    <div class="container row">
        <div class="result">

            <?php
            // Semua Data
            $semuasql = "SELECT * FROM artikel";
            $semuaquery = mysqli_query($db, $semuasql);

            // $populersql = "SELECT count(*) as total FROM artikel ORDER BY popularitas DESC";
            // $populerquery = mysqli_query($db, $populersql);

            // $barusql = "SELECT count(*) as total FROM artikel ORDER BY tanggal DESC";
            // $baruquery = mysqli_query($db, $barusql);

            // $lamasql = "SELECT count(*) as total FROM artikel ORDER BY tanggal ASC";
            // $lamaquery = mysqli_query($db, $lamasql);

            // if (isset($_POST['sortselect'])) { ?>
            <?php while($hasilsemua = mysqli_fetch_array($semuaquery)) { ?>
                <div class='card'>
                    <img src="<?php echo $uploads_url.$hasilsemua['gambar'] ?>" alt='Makanan'>
                    <div>
                        <span class='namamakanan'><?php echo $hasilsemua['nama'] ?></span>
                        <a href="#">Baca</a>
                    </div>
                </div>         
            <?php } ?>

        </div>
        <div class="sidebar">1</div>
    </div>

    <div class="container row">
        <div class="result1">1</div>
        <div class="sidebar1"></div>
    </div>

    </form>


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
                    <form class="formsaran" action="proses-saran-artikel.php" method="post">
                        <input type="text" placeholder="Tulis saranmu di sini" autocomplete="off" name="isisaran">
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