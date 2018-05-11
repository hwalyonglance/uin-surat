<?php

include '../../koneksi.php';

$a = $_POST['no'];
$b = $_POST['id_jurusan'];
$c = $_POST['nama_jurusan'];

mysqli_query($db, "UPDATE jurusan SET id_jurusan = '$b', nama_jurusan = '$c' WHERE no = $a ") or die(mysqli_error($db));
// header('location:index.php');