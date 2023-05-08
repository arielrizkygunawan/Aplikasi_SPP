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
                        <div class="card-stats-title text-center" > <h1>DATA SPP</h1>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data SPP</h4>
                        <div class="card-header-action">
                            <a href="T_SPP.php" class="btn btn-primary">Tambah Data SPP <i class="fas fa-chevron-right"></i></a>
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
                                    <th>ID SPP</th>
                                    <th>TAHUN</th>
                                    <th>NOMINAL</th>
                                    <th>Action</th>
                                </tr>
                                <?php 
                                include "../koneksi.php";
                                $query_mysql = mysqli_query($koneksi,"select * from spp");
                                while($data = mysqli_fetch_array($query_mysql)){
                                ?>
                                <tr>
                                    <td><?php echo $data['ID_SPP']; ?></td>
                                    <td class="font-weight-600"><?php echo $data['tahun']; ?></td>
                                    <td>
                                        <div class="badge badge-warning"><?php echo $data['nominal']; ?></div>
                                    </td>
                                    <td>
                                        <a href="E_SPP.php?ID_SPP=<?php echo $data['ID_SPP']; ?>" class="btn btn-primary">EDIT</a>
                                        <a href="H_SPP.php?ID_SPP=<?php echo $data['ID_SPP']; ?>" class="btn btn-danger">HAPUS</a>
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