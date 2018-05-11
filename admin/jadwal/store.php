<?php

include '../../koneksi.php';

$id_jadwal = $_POST['id_jadwal'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$tahun_akademik = $_POST['tahun_akademik'];
$no_matkul = $_POST['no_matkul'];
$no_dosen = $_POST['no_dosen'];
$no_ruangan = $_POST['no_ruangan'];

mysqli_query($db, "INSERT INTO jadwal (id_jadwal, hari, jam, tahun_akademik, no_matkul, no_dosen, no_ruangan)
 				VALUES('$id_jadwal', '$hari', $jam, $tahun_akademik, $no_matkul, $no_dosen, $no_ruangan);") or die (mysqli_error($db));
header('location:index.php');
?>