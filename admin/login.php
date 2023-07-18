<?php 
    session_start();
    include('includes/header.php');
    ?>

<body class="bg-gradient-primary">

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center marginTop">

    <div class="col-xxl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                <?php 
                                if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
                                    echo '<div class="alert alert-danger" role="alert">
                                    '.$_SESSION['status'].'</div>';
                                    unset($_SESSION['status']);
                                }
                                
                                ?>
                            </div>
                            <form class="user" action="code.php" method="POST">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control form-control-user"
                                        placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                         placeholder="Password">
                                </div>
                                <!-- <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div> -->
                                <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                </a> -->
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="registerpage.php">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>


</body>






<?php 
    include('includes/scripts.php');
?>