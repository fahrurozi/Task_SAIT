<?php
include 'koneksi.php';

$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi, "select * from pasiens where id_pasien = '$id'");
$row = mysqli_fetch_array($mahasiswa);


function active_radio_button($value,$input){
    $result = $value==$input?'checked':'';
    return $result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Digital Talent</title>
    </head>
    <body>
        <form method="post" action="edit.php">
            <input type="hidden" value="<?php echo $row['id_mhs'];?>" name="id_mhs">
            <table>
                <tr><td>No RM</td><td><input type="text" value="<?php echo $row['nim'];?>" name="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
                <tr><td>JENIS KELAMIN</td><td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan
                </td></tr>
                
                <tr><td>ALAMAT</td><td><input value="<?php echo $row['alamat'];?>" type="text" name="alamat"</td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index.php">Kembali</a></td></tr>

            </table>
        </form>
    </body>
</html>