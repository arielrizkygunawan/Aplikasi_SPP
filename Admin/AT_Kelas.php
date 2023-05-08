<?php
include "../koneksi.php";
$ID_Kelas = $_POST['ID_Kelas'];
$nama_Kelas = $_POST['nama_Kelas'];
$program_Keahlian = $_POST['program_Keahlian'];
mysqli_query($koneksi,"INSERT INTO kelas VALUES('$ID_Kelas','$nama_Kelas','$program_Keahlian')");
header("location:../Admin/Crud-Kelas.php?pesan=input");
?>