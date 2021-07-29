<?php
include '../conn.php';

//karna id ditangkap dari url maka menggunakan  $_GET
$id = $_GET['id'];
$conn->query("DELETE FROM warga WHERE warga_id ='$id' ");

echo "<script>alert('warga telah dihapus dari daftar!') ; </script>";
echo "<script>location='warga.php'; </script>";
?>