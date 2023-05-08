<?php
    include '../koneksi.php';
    $id = $_GET['ID_Kelas'];
    mysqli_query($koneksi,"DELETE FROM kelas WHERE ID_Kelas='$id'") or die (mysql_error());
    header ("location:../Admin/Crud-Kelas.php?pesan=hapus");
?>