<?php
include "koneksi.php";
$id_dvd = $_GET['n'];
$q = "DELETE FROM dt_dvd WHERE id_dvd='$id_dvd'";
$ex = mysqli_query($koneksi, $q);
echo "Data terhapus \n";
echo "<a href='dvd.php'> Kembali ...</a>";
?>