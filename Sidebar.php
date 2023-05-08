<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a>PEMBAYARAN SPP</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a>spp</a>
          </div>
          <ul class="sidebar-menu">
            <li><a class="nav-link" href="Dashboard-Admin.php"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
            <?php
if($_SESSION['level'] == "admin"){ ?>
            <li><a class="nav-link" href="Crud-Petugas.php"><i class="fas fa-id-card"></i><span>CRUD Data Petugas</span></a></li>
            <li><a class="nav-link" href="Crud-Siswa.php"><i class="fas fa-id-card"></i><span>CRUD Data Siswa</span></a></li>
            <li><a class="nav-link" href="Crud-Kelas.php"><i class="fas fa-id-card"></i><span>CRUD Data Kelas</span></a></li>
            <li><a class="nav-link" href="Crud-SPP.php"><i class="fas fa-file-invoice-dollar"></i><span>CRUD Data SPP</span></a></li>
            <li><a class="nav-link" href="Entri-Transaksi.php"><i class="fas fa-dollar-sign"></i><span>Entri Transaksi</span></a></li>
            <li><a class="nav-link" href="History.php"><i class="fas fa-history"></i><span>History Pembayaran</span></a></li>
<?php }else if($_SESSION['level'] == "petugas"){ ?>
            <li><a class="nav-link" href="Entri-Transaksi.php"><i class="fas fa-dollar-sign"></i><span>Entri Transaksi</span></a></li>
            <li><a class="nav-link" href="History.php"><i class="fas fa-history"></i><span>History Pembayaran</span></a></li>
<?php }else if($_SESSION['level'] == "siswa"){ ?>
            <li><a class="nav-link" href="History.php"><i class="fas fa-history"></i><span>History Pembayaran</span></a></li>
<?php } ?>
            <a href="../logout.php" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i>Logout
            </a>
          </ul>
          </div>        
        </aside>
      </div>