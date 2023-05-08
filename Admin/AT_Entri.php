<?php 
include '../koneksi.php';
$ID_Pembayaran = $_POST['ID_Pembayaran'];
$ID_Petugas = $_POST['ID_Petugas'];
$nisn = $_POST['nisn'];
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$ID_SPP = $_POST['ID_SPP'];
$jumlah_bayar = $_POST['jumlah_bayar'];
mysqli_query($koneksi, "INSERT INTO pembayaran VALUES ('$ID_Pembayaran','$ID_Petugas','$nisn','$tgl_bayar','$bulan_dibayar','$tahun_dibayar','$ID_SPP','$jumlah_bayar')");

header("location:Entri-Transaksi.php?pesan=input");
?>
