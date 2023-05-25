<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "mozaliner";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
	die("Gagal Terhubung dengan database : " .mysqli_connect_error());
}

$base_url = 'http://localhost/mozaliner/'; //Ini URL Utama Mozaliner
$uploads_url = 'http://localhost/mozaliner/uploads/'; // Ini URL folder Upload untuk keperluan akses gambar thumbnail
?>