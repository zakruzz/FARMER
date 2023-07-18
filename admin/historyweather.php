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
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
              Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <style>
              .dropdown-item:focus,
              .dropdown-item:hover {
              color: #2e2f37;
              text-decoration: none;
              background-color: #eaecf4;
}
            </style>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
    </nav>
    <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
      <!-- Page Heading -->

<!-- DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py3">
        <h6 class="m-0 font-weight-bold text-success">Tabel History Cuaca
        </h6>
    </div>
    <!-- Topbar Search -->
  
<form action="" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
    <input name="search" type="text" class="form-control bg-light border-2 small mt-2"  value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" />
      <button class="input-grup-append btn btn-success mt-2" type="submit">
      <i class="fas fa-search fa-sm"></i>
      </button>
  </div>
</form>
    <div class="card-body">
        <div class="table-responsive">
          <?php 
              $connection = mysqli_connect("localhost","root","","adminpanel");

              $query = "SELECT * FROM catatcuaca";
              $query_run = mysqli_query($connection, $query);
          
          ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Temperatur(°C)
                        </th>
                        <th>
                            Kondisi Cuaca
                        </th>
                        <th>
                            Tempat
                        </th>
                        <th>
                            Kecepatan Angin(M/H)
                        </th>
                        <th>
                            Tanggal
                        </th>
                        <th>
                            Terbuat
                        </th>
                        <th>
                            Delete
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if (isset($_GET['search']) && isset($_GET['search'])!='') {
                            $con = mysqli_connect("localhost", "root", "", "adminpanel");
                            $filtervalues = $_GET['search'];
                            $querysearch = "SELECT * FROM catatcuaca WHERE CONCAT(id,place) LIKE '%$filtervalues%'";
                            $query_dep = mysqli_query($con, $querysearch);
                            if (mysqli_num_rows($query_dep) > 0) 
                            {
                              $batas = 5;
                              $halaman = @$_GET['halaman'];
                              if (empty($halaman)) {
                                $posisi = 0;
                                $halaman = 1;
                              }
                              else {
                                $posisi = ($halaman-1) * $batas;
                              }
                              $items = mysqli_query($connection, "SELECT * FROM catatcuaca LIMIT $posisi, $batas");
                              $no=1 +$posisi;

                                foreach ($query_dep as $items) 
                                {
                                  ?>
                                    <tr>
                                        <td><?= $items['id'] ?></td>
                                        <td><?= $items['temperature'] ?></td>
                                        <td><?= $items['weathercondition'] ?></td>
                                        <td><?= $items['place'] ?></td>
                                        <td><?= $items['speed'] ?></td>
                                        <td><?= $items['tanggal'] ?></td>
                                        <td><?= $items['created'] ?></td>
                                        <td>
                                        <td>
                          <form action="code.php" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                            <button type="submit" name="delete" class="btn btn-danger">DELETE</button>
                          </form>
                        </td>
                                        </td>
                                    </tr>
                                    <?php
                              }
                            }else {
                              $batas = null;?>
                            <tr>
                              <td colspan="7">Data Tidak Ditemukan</td>
                            </tr>
                            <?php
                          }
                          ?>
                            <?php
                            
                                ?>
                       
                    <?php }else{
                      if (mysqli_num_rows($query_run) > 0) {
                        $batas = 5;
                        $halaman = @$_GET['halaman'];
                        if (empty($halaman)) {
                          $posisi = 0;
                          $halaman = 1;
                        }
                        else {
                          $posisi = ($halaman-1) * $batas;
                        }
                        $tampil = mysqli_query($connection, "SELECT * FROM catatcuaca LIMIT $posisi, $batas");
                        $no=1 +$posisi;
                        
                      while($row = mysqli_fetch_assoc($tampil)){?>
                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['temperature']; ?></td>
                        <td><?php 
                        if ($row['weathercondition'] == "Thunderstorm") {
                          echo "Badai";
                        }
                        elseif($row['weathercondition'] == "Drizzle"){
                          echo "Gerimis";
                        }
                        elseif($row['weathercondition'] == "Rain"){
                          echo "Hujan";
                        }
                        elseif($row['weathercondition'] == "Snow"){
                          echo "Bersalju";
                        }
                        elseif($row['weathercondition'] == "Clouds"){
                          echo "Berawan";
                        }
                        elseif($row['weathercondition'] == "Clear"){
                          echo "Cerah";
                        }
                        else {
                          echo $row['weathercondition'];
                        }
                         ?></td>
                        <td><?php echo $row['place']; ?></td>
                        <td><?php echo $row['speed']; ?></td>
                        <td><?php echo $row['tanggal']; ?></td>
                        <td><?php echo $row['created']; ?></td>
                        <td>
                          <form action="code.php" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                            <button type="submit" name="delete" class="btn btn-danger">DELETE</button>
                          </form>
                        </td>
                    </tr>
                      
                      <?php
                      }
                      }
                    }
                    ?>
                           
                    
                </tbody>
            </table>

            <?php

              $query2 = mysqli_query($connection, "SELECT * FROM catatcuaca");
              $jmldata = mysqli_num_rows($query2);
              if ($batas != 0) {
                $jmlhalaman = ceil($jmldata/$batas);
            ?>
            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <?php
      for($i=1;$i<=$jmlhalaman;$i++)
            if ($i != $halaman) {
              echo "<li class='page-item'><a class='page-link' href=\"historyweather.php?halaman=$i\">$i</a></li>";
            }
            else{
              echo "<li class='page-item'><a class='page-link'>$i</a></li>";
            }
          }
    ?>

  </ul>
</nav>
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


