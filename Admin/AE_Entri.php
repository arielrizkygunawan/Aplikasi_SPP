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
mysqli_query($koneksi,"UPDATE pembayaran SET ID_Petugas='$ID_Petugas', nisn='$nisn' , tgl_bayar='$tgl_bayar' , bulan_dibayar='$bulan_dibayar' ,  tahun_dibayar='$tahun_dibayar' ,  ID_SPP='$ID_SPP' , jumlah_bayar='$jumlah_bayar'  WHERE ID_Pembayaran='$ID_Pembayaran' ");

header("location:Entri-Transaksi.php?pesan=input");
?>