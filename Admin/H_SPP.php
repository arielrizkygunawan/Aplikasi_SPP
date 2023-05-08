<?php 
include '../koneksi.php';
$ID_SPP = $_GET['ID_SPP'];
mysqli_query($koneksi,"DELETE FROM spp WHERE ID_SPP='$ID_SPP'")or die(mysql_error());

header("location:CRUD-SPP.php?pesan=hapus");
?>
