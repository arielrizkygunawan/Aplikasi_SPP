<?php
    $koneksi = mysqli_connect("localhost","root","","Aplikasi_SPP");
    if (mysqli_connect_errno()){
        echo "koneksi database gagal : " .mysqli_connect_error();
    }
    ?>