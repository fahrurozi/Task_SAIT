<?php 
include 'koneksi.php';

// menyimpan data kedalam variabel
$id_pasien   = $_POST['id_pasien'];
$nim            = $_POST['nim'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
// query SQL untuk insert data
$query="UPDATE pasien SET nim='$nim',nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id_pasien='$id_pasien'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>
