<?php
include 'koneksi.php';
$id_pasien = $_GET['id_pasien'];
$query= "DELETE from pasien where id_pasien = '$id_pasien'";
mysqli_query($koneksi, $query);
header('location:index.php');


?>