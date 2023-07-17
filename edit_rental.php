<?php
include "koneksi.php";
$id_pelanggan = $_GET['n'];
$q = "SELECT * from dt_rental where id_pelanggan='$id_pelanggan'";
$ex = mysqli_query($koneksi, $q);
$r = mysqli_fetch_array($ex);
?>
<form action="#" method="post">
id_pelanggan: <input type="text" name="tid_pelanggan" value="<?php echo $r['id_pelanggan'];?>"/><br/>
nama_pelanggan : <input type="text" name="tnama_pelanggan" value="<?php echo $r['nama_pelanggan'];?>"/><br/>
alamat : <input type="text" name="talamat" value="<?php echo $r['alamat'];?>"/><br/>
no_telp : <input type="text" name="tno_telp" value="<?php echo $r['no_telp'];?>"/><br/>
id_dvd : <input type="text" name="tid_dvd" value="<?php echo $r['id_dvd'];?>"/><br/>
nama_dvd : <input type="text" name="tnama_dvd" value="<?php echo $r['nama_dvd'];?>"/><br/>
harga : <input type="text" name="tharga" value="<?php echo $r['harga'];?>"/><br/>
<input type="submit" name="bok" value="Ubah Data"/>
</form>
<a href="rental.php">Kembali ...</a>

<?php

if(isset($_POST['bok'])){
    $id_pelanggan = $_POST['tid_pelanggan'];
    $nama_pelanggan = $_POST['tnama_pelanggan'];
    $alamat = $_POST['talamat'];
    $no_telp = $_POST['tno_telp'];
    $id_dvd = $_POST['tid_dvd'];
    $nama_dvd = $_POST['tnama_dvd'];
    $harga = $_POST['tharga'];
    $q = "UPDATE dt_rental SET nama_pelanggan='$nama_pelanggan', alamat='$alamat', no_telp='$no_telp', 
    id_dvd='$id_dvd', nama_dvd='$nama_dvd', harga='$harga' WHERE id_pelanggan='$id_pelanggan'";
    mysqli_query($koneksi, $q);
    echo "Data berhasil diubah";
    }
?>