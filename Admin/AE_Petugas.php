<?php 
include "../koneksi.php";
$ID_Petugas = $_POST['ID_Petugas'];
$username = $_POST['username'];
$nama_Petugas = $_POST['nama_Petugas'];
$level = $_POST['level'];

mysqli_query($koneksi,"UPDATE petugas SET username='$username', nama_Petugas='$nama_Petugas' , level='$level' WHERE ID_Petugas='$ID_Petugas' ");

header("location:CRUD-Petugas.php?pesan=update");
?>
