<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];

$query = mysqli_query($koneksi,"INSERT INTO tamu VALUES('','$nama','$alamat','$notelp')");
if($query){
	header("location:output.php");
}
else{
	echo "gagal";
}

?>