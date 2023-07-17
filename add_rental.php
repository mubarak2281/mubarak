<?php include "koneksi.php";?>
<form action="#" method="post">
id_pelanggan: <input type="text" name="tid_pelanggan"/><br/>
nama_pelanggan : <input type="text" name="tnama_pelanggan"/><br/>
alamat : <input type="text" name="talamat"/><br/>
no_telp : <input type="text" name="tno_telp"/><br/>
id_dvd : <input type="text" name="tid_dvd"/><br/>
nama_dvd : <input type="text" name="tnama_dvd"/><br/>
harga : <input type="text" name="tharga"/><br/>
<input type="submit" name="bok" value="Simpan"/>
</form>
<a href="rental.php">  Kembali ...</a>
<?php
if(isset($_POST['bok'])){
    $id_pelanggan = $_POST['tid_pelanggan'];
    $nama_pelanggan = $_POST['tnama_pelanggan'];
    $alamat = $_POST['talamat'];
    $no_telp = $_POST['tno_telp'];
    $id_dvd = $_POST['tid_dvd'];
    $nama_dvd = $_POST['tnama_dvd'];
    $harga = $_POST['tharga'];
    $q = "insert into dt_rental (id_pelanggan, nama_pelanggan, alamat, no_telp, id_dvd, nama_dvd, harga)";
    $q .= "values ('$id_pelanggan', '$nama_pelanggan', '$alamat', '$no_telp', '$id_dvd', '$nama_dvd', '$harga')";
    mysqli_query($koneksi, $q);
    echo "Data tersimpan";
}
?>

