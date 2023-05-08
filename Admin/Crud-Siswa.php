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
                        <div class="card-stats-title text-center" ><h1>DATA SISWA</h1>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data siswa</h4>
                        <div class="card-header-action">
                            <a href="T_Siswa.php" class="btn btn-primary">Tambah Data Siswa <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice text-center">
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
                            <table class="table table-striped">
                                <tr>
                                    <th>NISN</th>
                                    <th>NIS</th>
                                    <th>NAMA</th>
                                    <th>ID KELAS</th>
                                    <th>ALAMAT</th>
                                    <th>NO TELP</th>
                                    <th>ID SPP</th>
                                    <th>Action</th>
                                </tr>
                                <?php 
                                include "../koneksi.php";
                                $query_mysql = mysqli_query($koneksi,"select * from siswa");
                                while($data = mysqli_fetch_array($query_mysql)){
                                ?>
                                <tr>
                                    <td><?php echo $data['nisn']; ?></td>
                                    <td class="font-weight-600"><?php echo $data['nis']; ?></td>
                                    <td class="font-weight-600"><?php echo $data['nama']; ?></td>
                                <td>
                                    <div class="badge badge-warning"><?php echo $data['ID_Kelas']; ?></div>
                                </td>
                                <td class="font-weight-600"><?php echo $data['alamat']; ?></td>
                                <td class="font-weight-600"><?php echo $data['no_Telp']; ?></td>
                                <td>
                                    <div class="badge badge-warning"><?php echo $data['ID_SPP']; ?></div>
                                </td>
                                    <td class="text-center">
                                        <a href="E_Siswa.php?nisn=<?php echo $data['nisn']; ?>" class="btn btn-warning">EDIT</a>
                                        <a href="H_Siswa.php?nisn=<?php echo $data['nisn']; ?>" class="btn btn-danger">HAPUS</a>
                                        <a href="Tunggakan.php?nisn=<?php echo $data['nisn']; ?>" class="btn btn-primary">LIHAT TUNGGAKAN</a>
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