<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aplikasi_SPP Ariel</title>

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
  <div ID_Kelas="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header"><h4>Edit Data Kelas</h4></div>
              <?php 
                    include "../koneksi.php";
                    $ID_Kelas = $_GET['ID_Kelas'];
                    $query_mysql = mysqli_query($koneksi,"SELECT * FROM kelas WHERE ID_Kelas='$ID_Kelas' ")or die(mysql_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysql)) {
            ?>
              <div class="card-body">
                <form method="POST" action="AE_Kelas.php">
                <div class="form-group">
                    <label for="ID_Kelas">ID KELAS</label>
                    <input id="ID_Kelas" type="text" class="form-control" name="ID_Kelas" value="<?php echo $data['ID_Kelas'] ?>" readonly>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_Kelas">NAMA KELAS</label>
                    <input id="nama_Kelas" type="text" class="form-control" name="nama_Kelas" value="<?php echo $data['nama_Kelas'] ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                    <div class="form-group">
                      <label>KOMPETENSI KEAHLIAN</label>
                      <select class="form-control selectric" name="program_Keahlian">
                      <option value="<?php echo $data['program_Keahlian'] ?>"><?php echo $data['program_Keahlian'] ?></option>
                      <option value="">~~ PILIH KOMPETENSI KEAHLIAN ~~</option>
                        <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
                        <option value="DESAIN PEMODELAN DAN INFORMASI BANGUNAN">DESAIN PEMODELAN DAN INFORMASI BANGUNAN</option>
                        <option value="TEKNIK AUDIO VIDEO">TEKNIK AUDIO VIDEO</option>
                        <option value="TEKNIK KENDARAAN RINGAN DAN OTOMOTIF">TEKNIK KENDARAAN RINGAN DAN OTOMOTIF</option>
                        <option value="TEKNIK DAN BISNIS SEPEDA MOTOR">TEKNIK DAN BISNIS SEPEDA MOTOR</option>
                      </select>
                    </div>
                  
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      EDIT DATA KELAS
                    </button>
                  </div>
                </form>
                <?php } ?>
                <a href="CRUD-Kelas.php" class="btn btn-warning btn-lg btn-block">
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