<?php
include '../conn.php';

//karna id ditangkap dari url maka menggunakan  $_GET
$id = $_GET['id'];
$conn->query("DELETE FROM dusun WHERE dusun_id ='$id' ");

echo "<script>alert('Dusun telah dihapus dari daftar!') ; </script>";
echo "<script>location='dusun.php'; </script>";
?>