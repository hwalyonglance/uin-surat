<!DOCTYPE html>
<html>
<head>
	<title>Matkul</title>
</head>
<body>
	<nav>
		<a href="../jurusan/">Jurusan</a>
		<a href="../ruangan/index.php">Ruangan</a>
		<a href="../dosen/">Dosen</a>
		<a href="#">Matkul</a>
		<a href="../jadwal/index.php">Jadwal</a>
	</nav>
	<h1>MATKUL</h1>
	<a href="create.php">tambah</a>
	<table border='1px'>
		<tr>
			<th>no matkul</th>
			<th>id matkul</th>
			<th>nama matkul</th>
			<th>no jurusan</th>
			<th>id jurusan</th>
			<th>nama jurusan</th>
		</tr>
		<?php
			include '../../koneksi.php';
			$e = mysqli_query($db, "SELECT matkul.no as no_matkul, jurusan.no as no_jurusan, matkul.*, jurusan.* FROM matkul INNER JOIN jurusan ON matkul.no_jurusan=jurusan.no");
			while ($data= mysqli_fetch_assoc($e)) {
				?>
					<tr>
						<td><?php echo $data['no_matkul'] ?></td>
						<td><?= $data['id_matkul'] ?></td>
						<td><?= $data['nama_matkul'] ?></td>
						<td><?= $data['no_jurusan'] ?></td>
						<td><?= $data['id_jurusan'] ?></td>
						<td><?= $data['nama_jurusan'] ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>