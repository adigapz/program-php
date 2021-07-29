<?php
include 'conn.php';
session_start();

$username = $_POST['uname'];
$password = $_POST['pass'];


$cek = mysqli_query($conn,"SELECT * FROM admin WHERE username= '$username' and password= '$password'");
$jumlah = mysqli_num_rows ($cek);

//cek apakah ada admin
if($jumlah == 1 ) {
    //jika login berhasil
     $_SESSION['status'] = "berhasil";
    header("location: admin/index.php");
} else{
    echo "Silahkan Login Terlebih Dahulu!!";
    echo "<script>location='index.php' ; </script>";

}

?>