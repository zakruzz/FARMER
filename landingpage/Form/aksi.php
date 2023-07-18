<?php
// panggil koneksi database
include "koneksi.php";

// pengujian tombol upload di klik
if(isset($_POST['bupload']))
{
    // ekstensi file yang boleh di upload
    $ekstensi_diperbolehkan = array('docx', 'pdf', 'txt');
    $nama =  $_FILES['file']['name']; //untuk mendapatkan nama file yang diupload
    //nama_file.pdf
    $x = explode('.', $nama);
    $ekstensi =  strtolower(end($x));
    $ukuran = $_FILES['file']['size']; //buat ukuran file yang di upload
    $file_tmp = $_FILES['file']['tmp_name']; // buat temporary file yang di upload
    $Nama = $_POST['namalengkap'];
    $Email = $_POST['alamatemail'];
    //uji jika ekstensi file yang diupload sesuai
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        //Boleh upload
        //Jika ukuran file minimal 20mb
        if($ukuran< 20000000){
            //PINDAHKAN KE FOLDER FILE APLIKASI
            move_uploaded_file($file_tmp, 'file/'.$nama);
            //SIMPAN KE DATABASE
            $simpan = mysqli_query($koneksi, "INSERT INTO upload VALUES ('', '$Nama', '$Email', '$nama')");
            if($simpan){
                echo "<script>alert('FILE BERHASIL DI UPLOAD');
            document.location='index.php'
            </script>";
            }else{
                echo "<script>alert('GAGAL MENGUPLOAD FILE');
            document.location='index.php'
            </script>";
            }

            }else{
            //ukuran tidak sesuai
            echo "<script>alert('UKURAN FILE TERLALU BESAR,FILE YANG DIUPLOAD MAKSIMAL 20MB');
            document.location='index.php'
            </script>";
    
            }
        } else{
        //ekstensi file tidak sesuai
        echo "<script>alert('ISI DATA DENGAN BENAR');
            document.location='index.php'
            </script>";
    }
}
// BUAT NAMA DAN EMAIL
// if (isset($_POST['bupload'])) {
//     mysqli_query($koneksi, "INSERT INTO upload SET 
//     Nama = '$_POST[namalengkap]',
//     Email = '$_POST[alamatemail]'");
//     }

?>