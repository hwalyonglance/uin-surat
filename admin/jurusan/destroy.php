<?php

include '../../koneksi.php';

$a = $_GET['no'];

mysqli_query($db, "DELETE FROM jurusan WHERE no = $a") or die(mysqli_error($db));
header('location:index.php');