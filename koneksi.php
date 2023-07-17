<?php 
$host = "localhost";
$user = "root";
$pass = "";
$koneksi = mysqli_connect($host, $user, $pass);
mysqli_select_db($koneksi, "db_web2") or die(mysqli_error($koneksi));
// memeriksa apakah koneksi berhasil
if (mysqli_connect_errno()) {
    echo "Koneksi ke database gagal: " . mysqli_connect_error();
    exit();
}

echo "Koneksi ke database berhasil";

?>