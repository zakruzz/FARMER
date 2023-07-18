<?php
session_start();
include('security.php');

$connection = mysqli_connect("localhost", "root","","adminpanel");

if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    
    if ($password === $cpassword) 
    {
        $query = "INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email','$password', '$usertype')";
        $query_run = mysqli_query($connection, $query);
        
        if ($query_run) 
        {
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: register.php');
        }
        else {
            $_SESSION['status'] = "Admin Profile NOT Added";
            header('Location: register.php');
        }    
    }
    else {
        $_SESSION['status'] = "Password and Confirm Password Doesn't Match";
        header('Location: register.php');
    }    
}

if (isset($_POST['registerpage'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = "user";

    if ($password === $cpassword) 
    {
        $query = "INSERT INTO register (username,email,password, usertype) VALUES ('$username','$email','$password', '$usertype')";
        $query_run = mysqli_query($connection, $query);
        
        if ($query_run) 
        {
            $_SESSION['success'] = "Akun Telah Terbuat";
            header('Location: registerpage.php');
        }
        else {
            $_SESSION['status'] = "Akun GAGAL Terbuat";
            header('Location: registerpage.php');
        }    
    }
    else {
        $_SESSION['status'] = "Password dan Confirm Password Tidak Sama";
        header('Location: registerpage.php');
    }    
}


if (isset($_POST['updatebtn'])) 
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];
    
    $query = "UPDATE register SET username='$username', email='$email', usertype='$usertypeupdate', password= '$password' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data Telah Diperbarui";
        header('Location: register.php');
    }
    else {
        $_SESSION['status'] = "Data GAGAL Diperbarui";
        header('Location: register.php');
    }
}


if (isset($_POST['delete_btn'])) 
{
    $id = $_POST ['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
        $_SESSION['success'] = "Data Telah Dihapus";
        header('Location: register.php');
    }
    else 
    {
        $_SESSION['status'] = "Data GAGAL Dihapus";
        header('Location: register.php');
    }
}

if (isset($_POST['delete'])) 
{
    $id = $_POST ['delete_id'];

    $query = "DELETE FROM catatcuaca WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
        $_GET['search'] = "";
        $_SESSION['success'] = "Data Telah Dihapus";
        header('Location: historyweather.php');
    }
    else 
    {
        $_GET['search'] = "";
        $_SESSION['status'] = "Data GAGAL Dihapus";
        header('Location: historyweather.php');
    }
}


if (isset($_POST['login_btn'])) {
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM register WHERE username='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if ($usertypes['usertype'] == "admin") {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    }
    else if($usertypes['usertype'] == "user"){
        $_SESSION['username'] = $email_login;
        header('Location: userpage/index.php');
    }
    else{
        $_SESSION['status'] = "Email/Password Anda Salah";
        header('Location: login.php');  
    }
}



?>