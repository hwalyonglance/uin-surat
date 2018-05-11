<?php

include '../../koneksi.php';

$a = $_GET['no'];

$q = mysqli_query($db, "SELECT * FROM jurusan WHERE no = $a") or die (mysqli_error($db));

$r = mysqli_fetch_object($q);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Jurusan</title>
</head>
<body>
	<form action='update.php' method='POST'>
		<table>
			<tr>
				<td>no</td>
				<td>:</td>
				<td><input type="number" name="no" readonly value="<?= $r->no ?>"></td>
			</tr>
			<tr>
				<td>id_jurusan</td>
				<td>:</td>
				<td><input type="text" name="id_jurusan" value="<?= $r->id_jurusan ?>"></td>
			</tr>
			<tr>
				<td>nama jurusan</td>
				<td>:</td>
				<td><input type="text" name="nama_jurusan" value="<?= $r->nama_jurusan ?>"></td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" value="perbarui">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>