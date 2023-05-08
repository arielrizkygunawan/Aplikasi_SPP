<?php 
include '../koneksi.php';
$ID_SPP = $_POST['ID_SPP'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];
mysqli_query($koneksi, "INSERT INTO spp VALUES ('$ID_SPP','$tahun','$nominal')");

header("location:CRUD-SPP.php?pesan=input");
?>
