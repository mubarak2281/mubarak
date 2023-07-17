<?php
include "koneksi.php";
$id_pelanggan = $_GET['n'];
$q = "DELETE FROM dt_pelanggan WHERE id_pelanggan='$id_pelanggan'";
$ex = mysqli_query($koneksi, $q);
echo "Data terhapus \n";
echo "<a href='pelanggan.php'> Kembali ...</a>";
?>