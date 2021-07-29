<?php
include '../conn.php';

//karna id ditangkap dari url maka menggunakan  $_GET
$id = $_GET['id'];
$conn->query("DELETE FROM desa WHERE desa_id ='$id' ");

echo "<script>alert('Desa telah dihapus dari daftar!') ; </script>";
echo "<script>location='desa.php'; </script>";
?>