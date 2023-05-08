<?php 
include '../koneksi.php';
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$ID_Kelas = $_POST['ID_Kelas'];
$alamat = $_POST['alamat'];
$no_Telp = $_POST['no_Telp'];
$ID_SPP = $_POST['ID_SPP'];
mysqli_query($koneksi, "INSERT INTO siswa VALUES ('$nisn','$nis','$nama','$ID_Kelas','$alamat','$no_Telp','$ID_SPP')");

header("location:CRUD-Siswa.php?pesan=input");
?>
