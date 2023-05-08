<?php 
include '../koneksi.php';
$ID_Pembayaran = $_GET['ID_Pembayaran'];
mysqli_query($koneksi,"DELETE FROM pembayaran WHERE ID_Pembayaran='$ID_Pembayaran'")or die(mysql_error());

header("location:Entri-Transaksi.php?pesan=hapus");
?>




