<?php
// Buat koneksi database
$server = "localhost"; 
$user = "root"; 
$pass = "";
$database = "form upload file"; 

$koneksi = mysqli_connect($server, $user, $pass, $database) or die (mysqli_error($koneksi));


?>