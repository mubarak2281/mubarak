<?php
include "koneksi.php";
$id_pelanggan = $_GET['n'];
$q = "DELETE FROM dt_rental WHERE id_pelanggan='$id_pelanggan'";
$ex = mysqli_query($koneksi, $q);
echo "\n Data terhapus \n";
echo "<a href='rental.php'> Kembali ...</a>";
?>