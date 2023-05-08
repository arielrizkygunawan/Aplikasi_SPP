<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aplikasi_SPP</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../assets/modules/jquery-selectric/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header"><h4>Edit Data Pembayaran SPP</h4></div>
              <div class="card-body">
                <form method="POST" action="AE_Entri.php">
                <?php 
                    include "../koneksi.php";
                    $ID_Pembayaran = $_GET['ID_Pembayaran'];
                    $query_mysql = mysqli_query($koneksi,"SELECT pembayaran.ID_Pembayaran , petugas.ID_Petugas , petugas.nama_Petugas , siswa.nisn , siswa.nama , pembayaran.tgl_bayar , pembayaran.bulan_dibayar , pembayaran.tahun_dibayar , pembayaran.jumlah_bayar , spp.ID_SPP , spp.nominal FROM siswa, spp, pembayaran, petugas WHERE pembayaran.ID_Pembayaran='$ID_Pembayaran' and pembayaran.ID_Petugas=petugas.ID_Petugas and pembayaran.ID_SPP=spp.ID_SPP and pembayaran.nisn=siswa.nisn ")or die(mysql_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysql)) {
            ?>
                  <div class="form-group">
                    <label for="ID_Pembayaran">ID_Pembayaran</label>
                    <input id="ID_Pembayaran" type="text" class="form-control" name="ID_Pembayaran" value="<?php echo $data['ID_Pembayaran'] ?>" readonly>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Nama Petugas</label>
                      <select class="form-control selectric" name="ID_Petugas">
                      <option value="<?php echo $data['ID_Petugas']; ?>"><?php echo $data['nama_Petugas']; ?></option>
                      <option value="">~~ PILIH Petugas ~~</option>
                      <option value=" <?php echo $data['ID_Petugas']; ?> "><?php echo $data['nama_Petugas']; ?></option>               
                    </select>
                    </div>
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select class="form-control selectric" name="nisn">
                      <option value="<?php echo $data['nisn']; ?>"><?php echo $data['nama']; ?></option>
                      <option value="">~~ PILIH Petugas ~~</option>
                      <option value=" <?php echo $data['nisn']; ?> "><?php echo $data['nama']; ?></option>               
                    </select>
                    </div>
                  <div class="form-group">
                    <label for="tgl_bayar">Tanggal Dibayar</label>
                    <input id="tgl_bayar" type="date" class="form-control" name="tgl_bayar" value="<?php echo $data['tgl_bayar'] ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bulan_dibayar">Bulan Dibayar</label>
                    <input id="bulan_dibayar" type="text" class="form-control" name="bulan_dibayar" value="<?php echo $data['bulan_dibayar'] ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tahun_dibayar">Tahun Dibayar</label>
                    <input id="tahun_dibayar" type="text" class="form-control" name="tahun_dibayar" value="<?php echo $data['tahun_dibayar'] ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Nominal SPP</label>
                      <select class="form-control selectric" name="ID_SPP">
                      <option value="<?php echo $data['ID_SPP']; ?>"><?php echo $data['nominal']; ?></option>
                      <option value="">~~ PILIH SPP ~~</option>
                      
                      <option value=" <?php echo $data['ID_SPP']; ?> "><?php echo $data['nominal']; ?></option>            
                    
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="jumlah_bayar">Jumlah Bayar</label>
                    <input id="jumlah_bayar" type="text" class="form-control" name="jumlah_bayar" value="<?php echo $data['jumlah_bayar'] ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <?php } ?>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      SIMPAN DATA PEMBAYARAN
                    </button>
                  </div>
                <a href="Entri-Transaksi.php" class="btn btn-warning btn-lg btn-block">
                      KEMBALI
                </a>
              </div>
            </div>
            <div class="simple-footer">
            Copyright &copy; 2023 <div class="bullet"></div> Design By <a href="">Ariel Rizky Gunawan</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>