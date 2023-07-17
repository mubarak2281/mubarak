<?php include "koneksi.php"; ?>
<form action="#" method="post">
id_pelanggan: <input type="text" name="tid_pelanggan"/><br/>
nama_pelanggan : <input type="text" name="tnama_pelanggan"/><br/>
alamat : <input type="text" name="talamat"/><br/>
no_telp : <input type="text" name="tno_telp"/><br/>
<input type="submit" name="bok" value="Simpan"/>
</form>
<a href="pelanggan.php">  Kembali ...</a>
<?php
if(isset($_POST['bok'])){
    $id_pelanggan = $_POST['tid_pelanggan'];
    $nama_pelanggan = $_POST['tnama_pelanggan'];
    $alamat = $_POST['talamat'];
    $no_telp = $_POST['tno_telp'];
    $q = "insert into dt_pelanggan (id_pelanggan, nama_pelanggan, alamat, no_telp)";
    $q .= "values ('$id_pelanggan', '$nama_pelanggan', '$alamat', '$no_telp')";
    mysqli_query($koneksi, $q);
    echo "Data tersimpan";
}
?>