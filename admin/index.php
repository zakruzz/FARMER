<?php
    session_start();
    include('security.php');
    include('includes/header.php');
    include('includes/navbar.php');
 ?>
 
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>


      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>


        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
              <?php 
                echo $_SESSION['username'];
              ?>
            </span>
            <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- End of Topbar -->

    
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      </div>

      <!-- Content Row -->
      <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Admin Total</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">

                  <?php 
                    require 'dbconfig.php';

                    $query = "SELECT usertype FROM register WHERE usertype = 'admin' ORDER BY usertype";
                    $query_run = mysqli_query($connection, $query);

                    $row = mysqli_num_rows($query_run);

                    echo '<h1>'.$row.'</h1>';
                  ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-unlock-alt fa-3x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Cuaca Tercatat</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">

                  <?php 
                    require 'dbconfig.php';

                    $query = "SELECT id FROM catatcuaca ORDER BY id";
                    $query_run = mysqli_query($connection, $query);

                    $row = mysqli_num_rows($query_run);

                    echo '<h1>'.$row.'</h1>';
                  ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-unlock-alt fa-3x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">User Total</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">

                  <?php 
                    require 'dbconfig.php';

                    $query = "SELECT usertype FROM register WHERE usertype = 'user' ORDER BY usertype";
                    $query_run = mysqli_query($connection, $query);

                    $row = mysqli_num_rows($query_run);

                    echo '<h1>'.$row.'</h1>';
                  ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-unlock-alt fa-3x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Pengendalian Hama</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">

                  <?php 
                    require 'dbconfig.php';

                    $query = "SELECT id FROM hama ORDER BY id";
                    $query_run = mysqli_query($connection, $query);

                    $row = mysqli_num_rows($query_run);

                    echo '<h1>'.$row.'</h1>';
                  ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-unlock-alt fa-3x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- Content Row -->

            <!-- /.container-fluid -->
        </div>
    <!-- End of Main Content -->
</div>
<!-- End of Page Wrapper -->

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
 ?>