<?php 
include '../koneksi.php';
$ID_Petugas = $_POST['ID_Petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_Petugas = $_POST['nama_Petugas'];
$level = $_POST['level'];
mysqli_query($koneksi, "INSERT INTO petugas VALUES ('$ID_Petugas','$username', '$password' , '$nama_Petugas','$level')");

header("location:CRUD-Petugas.php?pesan=input");
?>
