<?php
session_start();

if($_SESSION['status'] == "") {
    echo "<script>alert('Silahkan Login Terlebih Dahulu!'); </script>";
    echo "<script>location='../index.php' ; </script>";
}

?>