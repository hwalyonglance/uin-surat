<!DOCTYPE html>
<html>
<head>
	<title>Matkul</title>
</head>
<body>
	<form action='store.php' method='POST'>
		<table>
			<tr>
				<td>no_jurusan</td>
				<td>:</td>
				<td>
					<select name='no_jurusan'>
						<?php
							include '../../koneksi.php';
							$g = mysqli_query($db, "SELECT * FROM jurusan");
							while ( $j = mysqli_fetch_assoc($g) ) {
								?>
									<option value="<?= $j['no'] ?>"><?= $j['id_jurusan'].' => '.$j['nama_jurusan'] ?></option>
								<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>id_matkul</td>
				<td>:</td>
				<td><input type="text" name="id_matkul"></td>
			</tr>
			<tr>
				<td>nama matkul</td>
				<td>:</td>
				<td><input type="" name="nama_matkul"></td>
			</tr>
			<tr>
				<td>semester</td>
				<td>:</td>
				<td><input type="number" name="semester"></td>
			</tr>
			<tr>
				<td>SKS</td>
				<td>:</td>
				<td><input type="number" name="sks"></td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" value="Tambahkan">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>