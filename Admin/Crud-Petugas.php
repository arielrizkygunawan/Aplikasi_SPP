<?php
include "../Template-SPP/Header.php";
include "../Template-SPP/Navbar.php";
include "../Template-SPP/Sidebar.php";
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card card-statistic-2">
                    <div class="card-stats">
                        <div class="card-stats-title text-center" ><h1>DATA PETUGAS</h1>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Petugas</h4>
                        <div class="card-header-action">
                            <a href="T_Petugas.php" class="btn btn-primary">Tambah Data Petugas <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                        <?php
                        if(isset($_GET['pesan'])){
                            $pesan = $_GET['pesan'];
                            if($pesan == "input"){
                                echo"Data berhasil di input.";
                            }else if($pesan == "update"){
                                echo "Data berhasil di update.";
                            }else if($pesan == "hapus"){
                                echo "Data berhasil di hapus.";
                            }
                            }
                        ?>
                            <table class="table table-striped text-center">
                                <tr>
                                    <th>ID PETUGAS</th>
                                    <th>USERNAME</th>
                                    <th>NAMA PETUGAS</th>
                                    <th>LEVEL</th>
                                    <th>Action</th>
                                </tr>
                                <?php 
                                include "../koneksi.php";
                                $query_mysql = mysqli_query($koneksi,"select * from petugas");
                                while($data = mysqli_fetch_array($query_mysql)){
                                ?>
                                <tr>
                                    <td><?php echo $data['ID_Petugas']; ?></td>
                                    <td class="font-weight-600"><?php echo $data['username']; ?></td>
                                    <td class="font-weight-600"><?php echo $data['nama_Petugas']; ?></td>
                                    </td>
                                    <td>
                                    <div class="badge badge-warning"><?php echo $data['level']; ?></div>
                                    </td>
                                    <td>
                                        <a href="E_Petugas.php?ID_Petugas=<?php echo $data['ID_Petugas']; ?>" class="btn btn-primary">EDIT</a>
                                        <a href="H_Petugas.php?ID_Petugas=<?php echo $data['ID_Petugas']; ?>" class="btn btn-danger">HAPUS</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include "../Template-SPP/Footer.php"; ?>