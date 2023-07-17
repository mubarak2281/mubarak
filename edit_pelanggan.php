<?php
include "koneksi.php";
$id_pelanggan = $_GET['n'];
$q = "SELECT * from dt_pelanggan where id_pelanggan='$id_pelanggan'";
$ex = mysqli_query($koneksi, $q);
$r = mysqli_fetch_array($ex);
?>
<form action="#" method="post">
id_pelanggan: <input type="text" name="tid_pelanggan" value="<?php echo $r['id_pelanggan'];?>"/><br/>
nama_pelanggan : <input type="text" name="tnama_pelanggan" value="<?php echo $r['nama_pelanggan'];?>"/><br/>
alamat : <input type="text" name="talamat" value="<?php echo $r['alamat'];?>"/><br/>
no_telp : <input type="text" name="tno_telp" value="<?php echo $r['no_telp'];?>"/><br/>
<input type="submit" name="bok" value="Ubah Data"/>
</form>
<a href="pelanggan.php">Kembali ...</a>

<?php

if(isset($_POST['bok'])){
    $id_pelanggan = $_POST['tid_pelanggan'];
    $nama_pelanggan = $_POST['tnama_pelanggan'];
    $alamat = $_POST['talamat'];
    $no_telp = $_POST['tno_telp'];
    $q = "UPDATE dt_pelanggan SET nama_pelanggan='$nama_pelanggan', alamat='$alamat', no_telp='$no_telp' 
    WHERE id_pelanggan='$id_pelanggan'";
    mysqli_query($koneksi, $q);
    echo "Data berhasil diubah";
    }
?>