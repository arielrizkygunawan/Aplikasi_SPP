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
                <div class="card-stats-title text-center"><h1>DATA KELAS</h1></div>
                <div class="card-stats-items">
                  <div class="card-stats-item">
                    <div class="card-stats-item-count">42</div>
                    <div class="card-stats-item-label">Jumlah Seluruh Kelas</div>
                  </div>
                  <div class="card-stats-item">
                    <div class="card-stats-item-count">9</div>
                    <div class="card-stats-item-label">Jumlah Kelas RPL</div>
                  </div>
                  <div class="card-stats-item">
                    <div class="card-stats-item-count">6</div>
                    <div class="card-stats-item-label">Jumlah Kelas DPIB</div>
                  </div>
                  <div class="card-stats-item">
                    <div class="card-stats-item-count">9</div>
                    <div class="card-stats-item-label">Jumlah Kelas TAV</div>
                  </div>
                  <div class="card-stats-item">
                    <div class="card-stats-item-count">9</div>
                    <div class="card-stats-item-label">Jumlah Kelas TKRO</div>
                  </div>
                  <div class="card-stats-item">
                    <div class="card-stats-item-count">9</div>
                    <div class="card-stats-item-label">Jumlah Kelas TBSM</div>
                  </div>
                </div>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                </div>
                <div class="card-body"></div>
              </div>
            </div>
            <div class="row"> 
        <?php
        if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "input"){
                echo "Data berhasil di input.";
            }else if($pesan == "update"){
                echo "Data berhasil di update.";
            }else if($pesan == "hapus"){
                echo "Data berhasil di hapus.";
            }
        }
        ?>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Kelas</h4>
                    <a href="T_kelas.php" class="btn btn-primary">Tambah Data Kelas</a>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive table-invoice">
                      <table class="table table-striped text-center">
                        <tr>
                          <th>ID Kelas</th>
                          <th>Nama Kelas</th>
                          <th>Kompetensi Keahlian</th>
                          <th>Action</th>
                        </tr>
                        <?php
                         include "../koneksi.php";
                         $query_mysql = mysqli_query($koneksi,"select * from kelas");
                         $nomor = 1;
                         while($data = mysqli_fetch_array($query_mysql)){
                         ?>
                         <tr>
                          <td class="font-weight-600"><?php echo $data['ID_Kelas'];?></td>
                          <td>
                            <div class="badge badge-warning"><?php echo $data['nama_Kelas']; ?></div>
                          </td>
                          <td><?php echo $data['program_Keahlian'];?></td>
                          <td>
                            <a href="E_Kelas.php?ID_Kelas=<?php echo $data['ID_Kelas'];?>" class="btn btn-primary">Edit</a>
                            <a href="H_Kelas.php?ID_Kelas=<?php echo $data['ID_Kelas'];?>" class="btn btn-danger">Hapus</a>
                          </td>
                         </tr>
                         <?php } ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </section>
      </div>
<?php include "../Template-SPP/Footer.php"; ?>
     