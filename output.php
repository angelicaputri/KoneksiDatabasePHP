<!DOCTYPE html>
<html>
<head>
	<title>Output</title>
</head>
<body>
	<h3>OUTPUT DATA TAMU</h3>
	<a href="input.php">+ TAMBAH MAHASISWA</a> <br> <br>
	<table border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No Telepon</th>
			</tr>
			
			<?php 
				include 'koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"select * from tamu");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['alamat']; ?></td>
						<td><?php echo $d['notlp']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $d[id]; ?>">EDIT</a>
							<a href="hapus.php?id=<?php echo $d[id]; ?>">HAPUS</a>
						</td>
					</tr>
					<?php 
				}
				?>
		</table>
</body>
</html>