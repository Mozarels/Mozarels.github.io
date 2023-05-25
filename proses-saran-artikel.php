<?php
include ("config.php");

// Cek apakah tombol submit sudah diklik atau belum
if(isset($_POST['submitsaran'])) {
    // ambil data dari form
    $saran = $_POST['isisaran'];

    // query
    $saransql = "INSERT INTO saran (isisaran) VALUE ('$saran')";
    $saranquery = mysqli_query($db, $saransql);

    // Berhasil tersimpan?
    if($saranquery) {
        // Menampilkan alert box berhasil;
        header('Location: artikel.php?saran=sukses'); 
    } else {
        // Alert box gagal
        header('Location: artikel.php?saran=gagal');
        echo("Saran gagal ditambahkan");
    }
}