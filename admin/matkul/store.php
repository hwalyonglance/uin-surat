<?php

include '../../koneksi.php';

$b = $_POST['no_jurusan'];
$c = $_POST['id_matkul'];
$d = $_POST['nama_matkul'];
$e = $_POST['semester'];
$f = $_POST['sks'];

mysqli_query($db, "INSERT INTO matkul (no_jurusan, id_matkul, nama_matkul, semester, sks) 
	VALUES('$b', '$c', '$d', $e, $f);") or die (mysqli_error($db));
header('location:index.php');
?>