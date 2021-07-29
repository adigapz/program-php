<?php
include '../conn.php';

$nama = $_POST['nama'];
$id = $_POST['id'];

mysqli_query ($conn,"UPDATE desa SET desa_nama='$nama' WHERE desa_id='$id'");

echo "<script>alert('Desa telah diubah!') ; </script>";
echo "<script>location='desa.php'; </script>";
?>