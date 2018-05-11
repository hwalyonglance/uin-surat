<!DOCTYPE html>
<html>
<head>
	<title>Jadwal</title>
</head>
<body>
	<nav>
		<a href="../jurusan/">jurusan</a>
		<a href="../ruangan/">Ruangan</a>
		<a href="../dosen/index.php">Dosen</a>
		<a href="../matkul/">Matkul</a>
		<a href="#">Jadwal</a>
	</nav>
	<h1>Jadwal</h1>
	<a href="create.php">tambah</a>
	<table border='1px'>
		<tr>
			<th>no</th>
			<th>id Jadwal</th>
			<th>hari</th>
			<th>jam</th>
			<th>tahun akadamik</th>
			<th>no matkul</th>
			<th>id matkul</th>
			<th>nama matkul</th>
			<th>no dosen</th>
			<th>id dosen</th>
			<th>nama dosen</th>
			<th>no ruangan</th>
			<th>id ruangan</th>
			<th>nama ruangan</th>
		</tr>
		<?php
			include '../../koneksi.php';
			$e = mysqli_query($db, "SELECT * FROM jadwal INNER JOIN matkul ON jadwal.no_matkul=matkul.no INNER JOIN dosen ON jadwal.no_dosen=dosen.no INNER JOIN ruangan ON jadwal.no_ruangan=ruangan.no") or die(mysqli_error($db));
			while ($data= mysqli_fetch_assoc($e)) {
				?>
					<tr>
						<td><?php echo $data['no'] ?></td>
						<td><?= $data['id_jadwal'] ?></td>
						<td><?php echo $data['hari'] ?></td>
						<td><?php echo $data['jam'] ?></td>
						<td><?php echo $data['tahun_akademik'] ?></td>
						<td><?php echo $data['no_matkul'] ?></td>
						<td><?php echo $data['id_matkul'] ?></td>
						<td><?php echo $data['nama_matkul'] ?></td>
						<td><?php echo $data['no_dosen'] ?></td>
						<td><?php echo $data['nidn'] ?></td>
						<td><?php echo $data['nama_dosen'] ?></td>
						<td><?php echo $data['no_ruangan'] ?></td>
						<td><?php echo $data['id_ruangan'] ?></td>
						<td><?php echo $data['nama_ruangan'] ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>