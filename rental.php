<?php
include "koneksi.php";
$koneksi = mysqli_connect("localhost", "root", "", "db_web2");
$q = "SELECT * FROM dt_rental";
$ex = mysqli_query($koneksi, $q);
echo "</br><a href='add_rental.php'>Tambah </a> || <a href='pelanggan.php'>Data Pelanggan</a> 
|| <a href='dvd.php'>Data DVD</a>";
echo "<table border='1'>";
echo "<tr>
    <th>id_pelanggan</th>
    <th>nama_pelanggan</th>
    <th>alamat</th>
    <th>no_telp</th>
    <th>id_dvd</th>
    <th>nama_dvd</th>
    <th>harga</th>
    <th>Action</th>
    </tr>";
while ($r = mysqli_fetch_assoc($ex)) {
    echo "<tr><td>".$r['id_pelanggan']."</td>";
    echo "<td>".$r['nama_pelanggan']."</td>";
    echo "<td>".$r['alamat']."</td>";
    echo "<td>".$r['no_telp']."</td>";
    echo "<td>".$r['id_dvd']."</td>";
    echo "<td>".$r['nama_dvd']."</td>";
    echo "<td>".$r['harga']."</td>";
    echo "<td><a href='edit_rental.php?n=".$r['id_pelanggan']."'>Edit</a> |";
    echo "| <a href='delete_rental.php?n=".$r['id_pelanggan']."'>Hapus</a>";
    echo "</td></tr>";
}
echo "</table>";
?>
