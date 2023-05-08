<?php 
include '../koneksi.php';
$ID_Petugas = $_GET['ID_Petugas'];
mysqli_query($koneksi,"DELETE FROM petugas WHERE ID_Petugas='$ID_Petugas'")or die(mysql_error());

header("location:CRUD-Petugas.php?pesan=hapus");
?>
