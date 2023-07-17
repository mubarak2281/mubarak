<?php
include "koneksi.php";
$koneksi = mysqli_connect("localhost", "root", "", "db_web2");
$q = "select * from dt_dvd";
$ex = mysqli_query($koneksi, $q);
echo "</br><a href='add_dvd.php'>Tambah dvd</a> || <a href='rental.php'>Data Rental</a>
|| <a href='pelanggan.php'>Data Pelanggan</a>";
echo "<table border=1>";
echo "<tr>
    <th>id_dvd</th>
    <th>nama_dvd</th>
    <th>harga</th>
    <th>Action</th>
    </tr>";
while($r = mysqli_fetch_assoc($ex)){
    echo "<tr><td>".$r['id_dvd']."</td>";
    echo "<td>".$r['nama_dvd']."</td>";
    echo "<td>".$r['harga']."</td>";
    echo "<td><a href='edit_dvd.php?n=".$r['id_dvd']."'>Edit</a> |";
    echo "| <a href='delete_dvd.php?n=".$r['id_dvd']."'>Hapus</a>";
    echo "</td></tr>";
}
echo "</table>";
?>