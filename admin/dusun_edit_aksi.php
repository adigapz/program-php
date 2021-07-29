<?php
include '../conn.php';

$nama = $_POST['nama'];
$id = $_POST['id'];

mysqli_query ($conn,"UPDATE dusun SET dusun_nama='$nama' WHERE dusun_id='$id'");

echo "<script>alert('Data dusun telah diubah!') ; </script>";
echo "<script>location='dusun.php'; </script>";
?>