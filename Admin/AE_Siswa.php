<?php 
include "../koneksi.php";
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$ID_Kelas = $_POST['ID_Kelas'];
$alamat = $_POST['alamat'];
$no_Telp = $_POST['no_Telp'];
$ID_SPP = $_POST['ID_SPP'];

mysqli_query($koneksi,"UPDATE siswa SET nis='$nis', nama='$nama' , ID_Kelas='$ID_Kelas' , alamat='$alamat' ,  no_Telp='$no_Telp' ,  ID_SPP='$ID_SPP'  WHERE nisn='$nisn' ");

header("location:CRUD-Siswa.php?pesan=update");
?>
