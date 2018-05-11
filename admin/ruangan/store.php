<?php

include '../../koneksi.php';

$b = $_POST['id_ruangan'];
$c = $_POST['nama_ruangan'];
$d = $_POST['lantai'];

mysqli_query($db, "INSERT INTO ruangan (id_ruangan, nama_ruangan, lantai) VALUES('$b', '$c', $d);") or die (mysqli_error($db));
header('location:index.php');
?>