<?php 
include 'koneksi.php';
 
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
 
$query = mysqli_query($koneksi,"UPDATE tamu set nama='$nama', alamat='$alamat', notlp='$notelp' where id='$id'");
 
if($query){
	header("location:output.php");
}
else{
	echo "gagal";
}
 
?>