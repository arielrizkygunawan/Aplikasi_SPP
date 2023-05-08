<?php 
include "../koneksi.php";
$ID_SPP = $_POST['ID_SPP'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

mysqli_query($koneksi,"UPDATE spp SET tahun='$tahun', nominal='$nominal' WHERE ID_SPP='$ID_SPP' ");

header("location:CRUD-SPP.php?pesan=update");
?>
