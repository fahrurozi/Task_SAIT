<h2> List Pasien </h2>
<a href="input.php">input</a>
<table border="1">
    <tr><th>NO</th><th>No RM</th><th>NAMA</th><th>GENDER</th><th>ACTION</tr>
<?php 

// Create connection 
include 'koneksi.php';

$mahasiswa = mysqli_query($koneksi, "SELECT * from pasiens");
$no=1;

foreach ($mahasiswa as $row) {
    $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki-laki';
    echo "
    <tr>
        <td> $no </td>
        <td>" . $row['nim'] . "</td>
        <td>" . $row['nama'] . "</td>
        <td>" . $jenis_kelamin . "</td>
        <td>    
            <a href='form-edit.php?id_pasien=$row[id_pasien]'>Edit</a>
            <a href='delete.php?id_pasien=$row[id_pasien]'>Delete</a>
        </td>
    </tr>"; 
    $no++;
}   
?>
</table>

<br>
<hr>
<br>
<h2>Webservice</h2>
<!-- <a href="call_api/webservice.php">Go to Webservice</a> -->
<br>
<a href="ajax_crud.html">Go to Webservice 2</a>

<br>
<hr>
<br>
<h2>OpenApi</h2>
<a href="openApi/tabel.php">Go to Open API</a>