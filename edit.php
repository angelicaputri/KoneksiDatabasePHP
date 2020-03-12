<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>
	<br/>
	<a href="output.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA TAMU</h3>

	<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi,"SELECT * from tamu where id='$id'");
		while($d = mysqli_fetch_array($data)){
	?>
		<form action="prosesEdit.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="textarea" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td>:</td>
				<td><input type="text" name="notelp" value="<?php echo $d['notlp']; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="EDIT DATA"></td>
			</tr>
		</table>
	</form>
		<?php 
	}
	?>

</body>
</html>