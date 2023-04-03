<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard.php">
        <div class="sidebar-brand-icon">
          <img src="./image/logo.png">
        </div>
        <div class="sidebar-brand-text mx-3">R&J Motosport</div>
      </a>
      <hr class="sidebar-divider my-0">
      <?php
 if($_SESSION['level'] == 'admin'){
  ?>
      <li class="nav-item active">
        <a class="nav-link" href="dashboard_marketing_awal.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>
      <?php
 }else{
  ?>
   <li class="nav-item active">
        <a class="nav-link" href="dashboard_marketing_awal.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>
      
 <?php
 }
 if($_SESSION['level'] == 'admin'){
  ?>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item active">
        <a class="nav-link" href="edit_produk.php">
         <i class="fa fa-motorcycle"></i>
          <span>Edit Produk</span></a>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        ADMIN MENU
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
          <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
          <span>Tambah Produk</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Jenis Kendaraa</h6>
            <a class="collapse-item" href="tambah_produk.php">Motor</a>
            <a class="collapse-item" href="tambah_produk_mobil.php">Mobil</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage1" aria-expanded="true" aria-controls="collapsePage">
          <i class="fas fa-fw fa-user"></i>
          <span>User</span>
        </a>
        <div id="collapsePage1" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage User</h6>
            
            <a class="collapse-item" href="list_user.php">List User</a>
            <a class="collapse-item" href="manage_user.php">Manage User</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="statistik.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Statistik</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sold_unit.php">
          <i class="fas fa-fw  fa-check-circle"></i>
          <span>Unit Sold</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="setting.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Setting</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="history_login.php">
          <i class="fas fa-fw  fa-history"></i>
          <span>History Login</span>
        </a>
      </li>
<?php
}
?>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
    </ul>

