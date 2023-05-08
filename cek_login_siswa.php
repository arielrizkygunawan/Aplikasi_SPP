<?php
    session_start();
    include 'koneksi.php';
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $_SESSION['level'] = "siswa";
    $login = mysqli_query($koneksi,"select*from siswa where nisn='$nisn' and nis='$nis'");
    $cek = mysqli_num_rows($login);
    if($cek > 0){
        $data = mysqli_fetch_assoc($login);
        $_SESSION['level'] == "Siswa";
        $_SESSION['nisn'] = $nisn;
        header("location:Siswa/Dashboard-Siswa.php");
    }else{
      header("location:index.php?pesan=gagal");
}
?>
