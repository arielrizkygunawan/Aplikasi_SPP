<?php
    session_start();
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = mysqli_query($koneksi,"select * from petugas where username='$username' and password='$password'");
   
    $cek = mysqli_num_rows($login);
    if($cek>0){
        $data = mysqli_fetch_assoc($login);
        if ($data['level']=="admin"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            header("location:Admin/Dashboard-Admin.php");
        }else if ($data['level']=="petugas"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "petugas";
            header("location:Petugas/Dashboard-Petugas.php");
        }
}else{
    header("location:index.php?pesan=gagal");
}
?>
