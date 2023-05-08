<?php
include "../Template-SPP/Header.php";
include "../Template-SPP/Navbar.php";
include "../Template-SPP/Sidebar.php";
?>
      <!-- Main Content -->
        <div class="main-content">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
              <?php 
                    include "../koneksi.php";
                    $query_mysql = mysqli_query($koneksi,"select spp.ID_SPP , spp.nominal , pembayaran.ID_Pembayaran , pembayaran.jumlah_bayar from spp inner join pembayaran on spp.ID_SPP = pembayaran.ID_SPP");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?> 
                  <div class="card-stats-title">
                    <?php 
                    if($data['nominal'] <= $data['jumlah_bayar']){
                      echo "Tunggakan";
                    }else{
                      echo "Lebih Bayar";
                    }                    
                    ?>
                  </div>
                  <?php } ?>
                </div>
                <div class="card-icon shadow-primary bg-danger">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                  <?php 
                    include "../koneksi.php";
                    $query_mysql = mysqli_query($koneksi,"select spp.ID_SPP , spp.nominal , pembayaran.ID_Pembayaran , pembayaran.jumlah_bayar from spp inner join pembayaran on spp.ID_SPP = pembayaran.ID_SPP");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?> 
                    <h4>
                      <?php 
                    if($data['nominal'] <= $data['jumlah_bayar']){
                      echo "Total Tunggakan";
                    }else{
                      echo "Total Lebih Bayar";
                    }                    
                    ?>
                    </h4>
                  </div>
                  <?php } ?>
                  <?php 
                    include "../koneksi.php";
                    $query_mysql = mysqli_query($koneksi,"select spp.ID_SPP , spp.nominal , pembayaran.ID_Pembayaran , pembayaran.jumlah_bayar from spp inner join pembayaran on spp.ID_SPP = pembayaran.ID_SPP");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?> 
                  <div class="card-body">
                    <?php 
                    $x = $data['nominal'];
                    $y = $data['jumlah_bayar'];
                    $total = $y - $x ;
                    echo $total;
                    ?>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">
                    Data Uang Masuk
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pembayaran</h4>
                    <?php 
                    include "../koneksi.php";
                    $query_mysql = mysqli_query($koneksi,"select * from spp");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?>
                  </div>
                  <div class="card-body"><?php echo $data['nominal']; ?></div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">
                    Nominal Harus Bayar
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-warning">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Harus Bayar</h4>
                    <?php 
                    include "../koneksi.php";
                    $query_mysql = mysqli_query($koneksi,"select * from pembayaran");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?>
                  </div>
                  <div class="card-body"><?php echo $data['jumlah_bayar']; ?></div>
                    <?php } ?>
                </div>
              </div>
            </div>
          </div>
          
          <?php 
                    include "../koneksi.php";
                    $query_mysql = mysqli_query($koneksi,"select spp.ID_SPP , spp.nominal , pembayaran.ID_Pembayaran , pembayaran.jumlah_bayar from spp inner join pembayaran on spp.ID_SPP = pembayaran.ID_SPP");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?>
          <?php
          if($data['nominal'] > $data['jumlah_bayar']){
          ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                <?php 
                    include "../koneksi.php";
                    $query_mysql = mysqli_query($koneksi,"select spp.ID_SPP , spp.nominal , pembayaran.ID_Pembayaran , pembayaran.jumlah_bayar from spp inner join pembayaran on spp.ID_SPP = pembayaran.ID_SPP");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?> 
                  <div class="card-stats-title">
                    <h6>
                      <?php 
                      if($data['jumlah_bayar'] < $data['nominal']){
                        echo "SPP LUNAS";
                      }
                      ?>
                    </h6>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-12">
              <div class="card">
              <?php 
                    include "../koneksi.php";
                    $query_mysql = mysqli_query($koneksi,"select spp.ID_SPP , spp.nominal , pembayaran.ID_Pembayaran , pembayaran.jumlah_bayar from spp inner join pembayaran on spp.ID_SPP = pembayaran.ID_SPP");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?> 
                <div class="card-stats-title text-center">
                  <h2>
                  <?php 
                    $x = $data['nominal'];
                    $y = $data['jumlah_bayar'];
                    $total = $y - $x ;
                    if($data['jumlah_bayar'] < $data['nominal']){
                      echo "Lebih Bayar $total";
                    }
                    ?>
                  </h2><br>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
                  <?php } ?>
          <?php } ?>
                  

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-stats-title text-center">
                  <h2>Bukti Transaksi Pembayaran</h2><br>
                </div>
                <div class="card-body">
                  <table class="table" style="text-align: center;">
                    <tr>                   
                      <th>ID PEMBAYARAN</th>
                      <th>NAMA PETUGAS</th>
                      <th>NAMA SISWA</th>
                      <th>TANGGAL</th>
                      <th>NOMINAL</th>
                      <th>JUMLAH</th>
                    </tr>
                    <?php 
                    include "../koneksi.php";
                    $query_mysql = mysqli_query($koneksi,"select petugas.ID_Petugas , petugas.username , pembayaran.ID_Pembayaran from petugas inner join pembayaran on petugas.ID_Petugas = pembayaran.ID_Petugas");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?>
                      <tr>
                        <td><?php echo $data['ID_Pembayaran']; ?></td>
                        <td class="font-weight-600" value=" <?php echo $data['ID_Petugas']; ?> "><?php echo $data['username']; ?></td>
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
                            <?php } ?>                                                            
                          </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php include "../Template-SPP/Footer.php";
?>
