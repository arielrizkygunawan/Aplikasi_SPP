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
                
            </div>   
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>DATA TRANSAKSI PEMBAYARAN</h4>
                        <div class="card-header-action">
                            <a href="T_Entri.php" class="btn btn-primary">Tambah Transaksi Pembayaran <i class="fas fa-chevron-right"></i></a>
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
                                    <th>ID PEMBAYARAN</th>
                                    <th>NAMA PETUGAS</th>
                                    <th>NAMA SISWA</th>
                                    <th>TANGGAL BAYAR</th>
                                    <th>NOMINAL SPP</th>
                                    <th>JUMLAH BAYAR</th>
                                    <th>Action</th>
                                </tr>
                                <?php 
                    include "../koneksi.php";
                    $query_mysql = mysqli_query($koneksi,"select petugas.ID_Petugas , petugas.nama_Petugas , pembayaran.ID_Pembayaran from petugas inner join pembayaran on petugas.ID_Petugas = pembayaran.ID_Petugas");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?>
                    <tr>
                        <td><?php echo $data['ID_Pembayaran']; ?></td>
                        <td class="font-weight-600" value=" <?php echo $data['ID_Petugas']; ?> "><?php echo $data['nama_Petugas']; ?></td>
                    <?php } ?>
                    <?php 
                    include "../koneksi.php";
                    $query_mysql = mysqli_query($koneksi,"select siswa.nisn , siswa.nama , pembayaran.jumlah_bayar , pembayaran.ID_Pembayaran from siswa inner join pembayaran on siswa.nisn = pembayaran.nisn");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?>                            
                        <td class="font-weight-600" value=" <?php echo $data['nisn']; ?> "><?php echo $data['nama']; ?></td>
                    <?php } ?>
                    <?php 
                    include "../koneksi.php";
                    $query_mysql = mysqli_query($koneksi,"select spp.ID_SPP , spp.nominal , pembayaran.ID_Pembayaran , pembayaran.tgl_bayar , pembayaran.jumlah_bayar from spp inner join pembayaran on spp.ID_SPP = pembayaran.ID_SPP");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?>                  
                        <td class="font-weight-600"><?php echo $data['tgl_bayar']; ?></td>                        
                        <td class="font-weight-600" value=" <?php echo $data['ID_SPP']; ?> "><?php echo $data['nominal']; ?></td>               
                        <td class="font-weight-600"><?php echo $data['jumlah_bayar']; ?></td>
                        </td>  
                            
                        <td>
                            <a href="E_Entri.php?ID_Pembayaran=<?php echo $data['ID_Pembayaran']; ?>" class="btn btn-primary">EDIT</a>
                            <a href="H_Entri.php?ID_Pembayaran=<?php echo $data['ID_Pembayaran']; ?>" class="btn btn-danger">HAPUS</a>
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