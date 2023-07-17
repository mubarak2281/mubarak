<?php
include "koneksi.php";
$id_dvd = $_GET['n'];
$q = "SELECT * from dt_dvd where id_dvd='$id_dvd'";
$ex = mysqli_query($koneksi, $q);
$r = mysqli_fetch_array($ex);
?>
<form action="#" method="post">
id_dvd: <input type="text" name="tid_dvd" value="<?php echo $r['id_dvd'];?>"/><br/>
nama_dvd : <input type="text" name="tnama_dvd" value="<?php echo $r['nama_dvd'];?>"/><br/>
harga : <input type="text" name="tharga" value="<?php echo $r['harga'];?>"/><br/>
<input type="submit" name="bok" value="Ubah Data"/>
</form>
<a href="dvd.php">Kembali ...</a>

<?php

if(isset($_POST['bok'])){
    $id_dvd = $_POST['tid_dvd'];
    $nama_dvd = $_POST['tnama_dvd'];
    $harga = $_POST['tharga'];
    $q = "UPDATE dt_dvd SET nama_dvd='$nama_dvd', harga='$harga' WHERE id_dvd='$id_dvd'";
    mysqli_query($koneksi, $q);
    echo "Data berhasil diubah";
    }
?>