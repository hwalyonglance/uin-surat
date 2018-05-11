<?php

include '../../koneksi.php';

$b = $_POST['id_jurusan'];
$c = $_POST['nama_jurusan'];

mysqli_query($db, "INSERT INTO jurusan (id_jurusan, nama_jurusan) VALUES('$b', '$c');") or die (mysqli_error($db));
header('location:index.php');
?>