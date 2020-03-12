<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi,"DELETE from tamu where id='$id'");
if($query){
	header("location:output.php");
}
else{
	echo "gagal";
}

?>