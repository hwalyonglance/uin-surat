<!DOCTYPE html>
<html>
<head>
	<title>Dosen</title>
</head>
<body>
	<nav>
		<a href="../jurusan/">Jurusan</a>
		<a href="../ruangan/index.php">Ruangan</a>
		<a href="#">Dosen</a>
		<a href="../matkul/">Matkul</a>
		<a href="../jadwal/index.php">Jadwal</a>
	</nav>
	<h1>DOSEN</h1>
	<a href="create.php">tambah</a>
	<table border='1px'>
		<tr>
			<th>no</th>
			<th>nidn</th>
			<th>nama dosen</th>
		</tr>
		<?php
			include '../../koneksi.php';
			$e = mysqli_query($db, "SELECT * FROM dosen");
			while ($data= mysqli_fetch_array($e)) {
				?>
					<tr>
						<td><?php echo $data[0] ?></td>
						<td><?= $data['nidn'] ?></td>
						<td><?= $data[2] ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>