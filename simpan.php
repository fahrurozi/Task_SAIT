<?php 
include 'koneksi.php';
require 'vendor/autoload.php';

use GuzzleHttp\Client;

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    
    $query = "INSERT INTO pasiens SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat'";
    
    mysqli_query($koneksi, $query);
    
    $client = new Client();

    $response = $client->request(
        'POST',
        "192.168.56.69/api/synchttponlinecreate.php",
        [
            'json' => [
                'nim' => $nim,
                'nama' => $nama,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat
            ]
        ]
    );

    header("location:index.php");
?>