<!DOCTYPE html>
<html>
<head>
	<title>Jadwal</title>
</head>
<body>
	<form action='store.php' method='POST'>
		<table>
			<tr>
				<td>id jadwal</td>
				<td>:</td>
				<td><input type="text" name="id_jadwal"></td>
			</tr>
			<tr>
				<td>hari</td>
				<td>:</td>
				<td><input type="" name="hari"></td>
			</tr>
			<tr>
				<td>jam</td>
				<td>:</td>
				<td><input type="number" name="jam"></td>
			</tr>
			<tr>
				<td>tahun akademik</td>
				<td>:</td>
				<td><input type="number" name="tahun_akademik"></td>
			</tr>
			<tr>
				<td>matkul</td>
				<td>:</td>
				<td>
					<select name='no_matkul'>
						<?php
							include '../../koneksi.php';
							$g = mysqli_query($db, "SELECT * FROM matkul");
							while ( $j = mysqli_fetch_assoc($g) ) {
								?>
									<option value="<?= $j['no'] ?>"><?= $j['id_matkul'].' => '.$j['nama_matkul'] ?></option>
								<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>dosen</td>
				<td>:</td>
				<td>
					<select name='no_dosen'>
						<?php
							$k = mysqli_query($db, "SELECT * FROM dosen");
							while ( $m = mysqli_fetch_assoc($k) ) {
								?>
									<option value="<?= $m['no'] ?>"><?= $m['nidn'].' => '.$m['nama_dosen'] ?></option>
								<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>ruangan</td>
				<td>:</td>
				<td>
					<select name='no_ruangan'>
						<?php
							$o = mysqli_query($db, "SELECT * FROM ruangan");
							while ( $q = mysqli_fetch_assoc($o) ) {
								?>
									<option value="<?= $q['no'] ?>"><?= $q['id_ruangan'].' => '.$q['nama_ruangan'] ?></option>
								<?php
							}
						?>
					</select>
				</td>
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