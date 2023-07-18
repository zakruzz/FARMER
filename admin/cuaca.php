<?php
    session_start();
    include('security.php');
    include('includes/header.php');
    include('includes/navbar.php');
 ?>
<head>
<link rel="stylesheet" href="css/weather2.css">
</head>
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

      <!-- Topbar Search -->
      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>

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

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">3+</span>
          </a>
          <!-- Dropdown - Alerts -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Alerts Center</h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-primary">
                  <i class="fas fa-file-alt text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">December 12, 2019</div>
                <span class="font-weight-bold">A new monthly report is ready to download!</span>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-success">
                  <i class="fas fa-donate text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">December 7, 2019</div>
                $290.29 has been deposited into your account!
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-warning">
                  <i class="fas fa-exclamation-triangle text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">December 2, 2019</div>
                Spending Alert: We've noticed unusually high spending for your account.
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
          </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter">7</span>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Message Center</h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="..." />
                <div class="status-indicator bg-success"></div>
              </div>
              <div class="font-weight-bold">
                <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                <div class="small text-gray-500">Emily Fowler · 58m</div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="..." />
                <div class="status-indicator"></div>
              </div>
              <div>
                <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                <div class="small text-gray-500">Jae Chun · 1d</div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="..." />
                <div class="status-indicator bg-warning"></div>
              </div>
              <div>
                <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                <div class="small text-gray-500">Morgan Alvarez · 2d</div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="..." />
                <div class="status-indicator bg-success"></div>
              </div>
              <div>
                <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                <div class="small text-gray-500">Chicken the Dog · 2w</div>
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
          </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

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
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- End of Topbar -->

    <div class="container my-5">
      <h1 class="text-center title">Cuaca</h1>

      <?php
$status="";
$msg="";
$city="";
if(isset($_POST['city'])){
    $city=$_POST['city'];
    $url="http://api.openweathermap.org/data/2.5/weather?q=$city&appid=49c0bad2c7458f1c76bec9654081a661";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    if($result['cod']==200){
        $status="yes";
    }else{
        $msg=$result['message'];
    }
}

if(isset($_POST['city'])){
    $connection = mysqli_connect("localhost", "root", "", "adminpanel");
    $temperature = round($result['main']['temp']-273.15);
    $weathercondition = $result['weather'][0]['main'];
    $place = $result['name'];
    $speed = $result['wind']['speed'];
    $tanggal = date('d M',$result['dt']);
    
    $query = "INSERT INTO catatcuaca (temperature,weathercondition,place,speed,tanggal) VALUES ('$temperature','$weathercondition','$place', '$speed', '$tanggal')";
    $query_run = mysqli_query($connection, $query);   
}
?>
      <form class="search-location" method="post">
        <input type="text" class="form-control text-muted form-rounded p-4 shadow-sm" placeholder="Enter city name" name="city" value="<?php echo $city?>" />
        <!-- <input type="submit" value="Submit" class="submit btn btn-primary d-flex" name="submit" /> -->
        <?php echo $msg?>

        <?php if($status=="yes"){?>
        <div class="card mx-auto mt-4 shadow-lg" style="width: 18rem">
          <div class="bg-secondary">
            <img width="260vh" src="http://openweathermap.org/img/wn/<?php echo $result['weather'][0]['icon']?>@4x.png" />
          </div>
          <div class="card-body">
            <div class="place">
              <h2 class="text-center"><?php echo $result['name']?></h2>
            </div>
            <h6 class="text-center"><?php echo $result['weather'][0]['main']?></h6>
            <hr class="bg-dark" />
            <div class="card-group">
              <div class="card">
                <div class="card-body">
                  <p class="text-md text-wrap"><?php echo round($result['main']['temp']-273.15)?>°C</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <p class="text-md text-wrap"><?php echo $result['wind']['speed']?>M/H</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <p class="text-md text-wrap"><?php echo date('d M',$result['dt'])?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php } ?>
      </form>
    </div>
      <?php
    include('includes/scripts.php');
    include('includes/footer.php');
 ?>
    </div>
  </div>
</div>
