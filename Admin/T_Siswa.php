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
              <div class="card-header"><h4>Tambah Data Siswa</h4></div>
              <div class="card-body">
                <form method="POST" action="AT_Siswa.php">
                  <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input id="nisn" type="text" class="form-control" name="nisn">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nis">NIS</label>
                    <input id="nis" type="text" class="form-control" name="nis">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input id="nama" type="text" class="form-control" name="nama">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                      <label>KOMPETENSI KEAHLIAN</label>
                      <select class="form-control selectric" name="ID_Kelas">
                      <option value="">~~ PILIH KELAS ~~</option>
                      <?php
                        include "../koneksi.php";
                        $query_mysql = mysqli_query($koneksi,"select * from kelas");
                        $nomor = 1;
                        while($data = mysqli_fetch_array($query_mysql)){
                      ?> 
                      <option value=" <?php echo $data['ID_Kelas']; ?> "><?php echo $data['nama_Kelas']; ?></option>            
                    <?php } ?>
                    </select>
                    </div>
                  <div class="form-group">
                    <label for="alamat">ALAMAT</label>
                    <input id="alamat" type="text" class="form-control" name="alamat">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_Telp">NO TELP</label>
                    <input id="no_Telp" type="text" class="form-control" name="no_Telp">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                      <label>ID SPP</label>
                      <select class="form-control selectric" name="ID_SPP">
                      <option value="">~~ PILIH SPP ~~</option>
                      <?php
                        include "../koneksi.php";
                        $query_mysql = mysqli_query($koneksi,"select * from spp");
                        $nomor = 1;
                        while($data = mysqli_fetch_array($query_mysql)){
                      ?> 
                      <option value=" <?php echo $data['ID_SPP']; ?> "><?php echo $data['nominal']; ?></option>            
                    <?php } ?>
                    </select>
                    </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      SIMPAN DATA Siswa
                    </button>
                  </div>
                </form>
                <a href="CRUD-Siswa.php" class="btn btn-warning btn-lg btn-block">
                      KEMBALI
                </a>
              </div>
            </div>
            <div class="simple-footer">
            Copyright &copy; 2023 <div class="bullet"></div> Design By Ariel Rizky Gunawan
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