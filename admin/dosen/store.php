<?php

include '../../koneksi.php';

$b = $_POST['nidn'];
$c = $_POST['nama_dosen'];

mysqli_query($db, "INSERT INTO dosen (nidn, nama_dosen) VALUES('$b', '$c');") or die (mysqli_error($db));
header('location:index.php');
?>