<!DOCTYPE html>
<html>
<head>
	<title>Ruangan</title>
</head>
<body>
	<nav>
		<a href="../jurusan/">Jurusan</a>
		<a href="#">Ruangan</a>
		<a href="../dosen/index.php">Dosen</a>
		<a href="../matkul/">Matkul</a>
		<a href="../jadwal/index.php">Jadwal</a>
	</nav>
	<h1>RUANGAN</h1>
	<a href="create.php">tambah</a>
	<table border='1px'>
		<tr>
			<th>no</th>
			<th>id ruangan</th>
			<th>nama ruangan</th>
			<th>lantai</th>
		</tr>
		<?php
			include '../../koneksi.php';
			$e = mysqli_query($db, "SELECT * FROM ruangan");
			while ($data= mysqli_fetch_array($e)) {
				?>
					<tr>
						<td><?php echo $data['no'] ?></td>
						<td><?= $data['id_ruangan'] ?></td>
						<td><?= $data['nama_ruangan'] ?></td>
						<td><?= $data['lantai'] ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>