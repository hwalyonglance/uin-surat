<!DOCTYPE html>
<html>
<head>
	<title>Jurusan</title>
</head>
<body>
	<nav>
		<a href="#">Jurusan</a>
		<a href="../ruangan/">Ruangan</a>
		<a href="../dosen/index.php">Dosen</a>
		<a href="../matkul/">Matkul</a>
		<a href="../jadwal/index.php">Jadwal</a>
	</nav>
	<h1>JURUSAN</h1>
	<a href="create.php">tambah</a>
	<table border='1px'>
		<tr>
			<th>no</th>
			<th>id jurusan</th>
			<th>nama jurusan</th>
			<th>Tindakan</th>
		</tr>
		<?php
			include '../../koneksi.php';
			$e = mysqli_query($db, "SELECT * FROM jurusan");
			while ($data= mysqli_fetch_array($e)) {
				?>
					<tr>
						<td><?php echo $data[0] ?></td>
						<td><?= $data['id_jurusan'] ?></td>
						<td><?= $data[2] ?></td>
						<td>
							<a href="edit.php?no=<?= $data[0] ?>">edit</a>
							<a href="destroy.php?no=<?= $data[0] ?>">destroy</a>
						</td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>