<?php
include '../koneksi.php';
$ID_Kelas = $_POST['ID_Kelas'];
$nama_Kelas = $_POST['nama_Kelas'];
$program_Keahlian = $_POST['program_Keahlian'];

mysqli_query($koneksi,"UPDATE kelas SET nama_Kelas='$nama_Kelas',program_Keahlian='$program_Keahlian' WHERE ID_Kelas='$ID_Kelas'");

header("location:../Admin/Crud-Kelas.php?pesan=update");
?>