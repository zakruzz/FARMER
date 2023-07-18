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







        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">              
              <?php echo $_SESSION['username'] ?>
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
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
      </div>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <label>Usertype</label>
                <select name="usertype" class="form-control">
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
            </div>
      

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Admin
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                  Add Admin Profile
              </button>
        </h6>
    </div>
    <!-- Topbar Search -->
  
<form action="" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
    <input name="search" type="text" class="form-control bg-light border-2 small mt-2"  value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" />
      <button class="input-grup-append btn btn-primary mt-2" type="submit">
      <i class="fas fa-search fa-sm"></i>
      </button>
  </div>
</form>
    <div class="card-body">
    <?php
        if (isset($_SESSION['success']) && $_SESSION['success'] !='') {
            echo '<div class="alert alert-success" role="alert">'.$_SESSION['success'].'</div>';
            unset($_SESSION['success']);
        }
        if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
            echo '<div class="alert alert-danger" role="alert">'.$_SESSION['status'].'</div>';
            unset($_SESSION['status']);
        }
        ?>
        <div class="table-responsive">
          <?php 
              $connection = mysqli_connect("localhost","root","","adminpanel");

              $query = "SELECT * FROM register";
              $query_run = mysqli_query($connection, $query);
          
          ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Username
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Password
                        </th>
                        <th>
                            Jabatan
                        </th>
                        <th>
                            Edit
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
                            $querysearch = "SELECT * FROM register WHERE CONCAT(id,username,email) LIKE '%$filtervalues%'";
                            $query_dep = mysqli_query($con, $querysearch);
                            if (mysqli_num_rows($query_dep) > 0) 
                            {
                                foreach ($query_dep as $items) 
                                {
                                    ?>
                                    <tr>
                                        <td><?= $items['id'] ?></td>
                                        <td><?= $items['username'] ?></td>
                                        <td><?= $items['email'] ?></td>
                                        <td><?= $items['password'] ?></td>
                                        <td><?= $items['usertype'] ?></td>
                                        <td>
                            <form action="register_edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                            </form>
                        </td>
                        <td>
                          <form action="code.php" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                            <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                          </form>
                        </td>
                                    </tr>
                                    <?php
                                }
                            }else {?>
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
                        $tampil = mysqli_query($connection, "SELECT * FROM register LIMIT $posisi, $batas");
                        $no=1 +$posisi;
                      while($row = mysqli_fetch_assoc($tampil)){?>
                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['usertype']; ?></td>
                        <td>
                            <form action="register_edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                            </form>
                        </td>
                        <td>
                          <form action="code.php" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                            <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                          </form>
                        </td>
                    </tr>
                      
                      <?php
                      }
                      }
                    } ?>
                           
                    
                </tbody>
            </table>

            <?php 
              $query2 = mysqli_query($connection, "SELECT * FROM register");
              $jmldata = mysqli_num_rows($query2);
              $jmlhalaman = ceil($jmldata/$batas);
            ?>
            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <?php
      for($i=1;$i<=$jmlhalaman;$i++)
            if ($i != $halaman) {
              echo "<li class='page-item'><a class='page-link' href=\"register.php?halaman=$i\">$i</a></li>";
            }
            else{
              echo "<li class='page-item'><a class='page-link'>$i</a></li>";
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


