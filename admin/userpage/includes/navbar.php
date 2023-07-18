<style>
  .bg-gradasi-hijau {
    background-color: #546d64;
    background-image: linear-gradient(180deg, #71c19d 10%, #71c19d 100%);
    background-size: cover;
  }
</style>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradasi-hijau sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-0">
        <img src="img/logo.png" alt="" srcset="" width="50px"/>
      </div>
    <div class="sidebar-brand-text mx-3">FARMER</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0" />

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a
    >
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Heading -->
  <div class="sidebar-heading">Monitoring</div>

  <!-- Nav Item - Pages Collapse Menu -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="weather.php">
      <i class="fas fa-fw fa-cog"></i>
      <span>Cuaca</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="historyweather.php">
      <i class="fas fa-fw fa-table"></i>
      <span>Riwayat Cuaca</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Heading -->
  <div class="sidebar-heading">Aksi Petani</div>

  <li class="nav-item">
    <a class="nav-link collapsed" href="pengalamanmu.php">
      <i class="fas fa-fw fa-table"></i>
      <span>Pengendalian Hama</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

  <!-- Sidebar Message -->
</ul>
<!-- End of Sidebar -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

        <form action="logout.php" method="POST">
          <button type="submit" name="logout_btn" class="btn btn-success">Logout</button>
        </form>
      </div>
    </div>
  </div>
</div>
