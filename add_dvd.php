<?php include "koneksi.php"; ?>
<form action="#" method="post">
id_dvd: <input type="text" name="tid_dvd"/><br/>
nama_dvd : <input type="text" name="tnama_dvd"/><br/>
harga : <input type="text" name="tharga"/><br/>
<input type="submit" name="bok" value="Simpan"/>
</form>
<a href="dvd.php">  Kembali ...</a>
<?php
if(isset($_POST['bok'])){
    $id_dvd = $_POST['tid_dvd'];
    $nama_dvd = $_POST['tnama_dvd'];
    $harga = $_POST['tharga'];
    $q = "insert into dt_dvd(id_dvd, nama_dvd, harga)";
    $q .= "values ('$id_dvd', '$nama_dvd', '$harga')";
    mysqli_query($koneksi, $q);
    echo "Data tersimpan";
}
?>