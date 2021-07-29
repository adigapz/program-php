<?php
include '../conn.php';

$nama = $_POST['nama'];
mysqli_query ($conn, "INSERT INTO dusun (dusun_nama) VALUES ('$_POST[nama]')");

echo "<script>alert('Dusun berhasil ditambahkan!') ; </script>";
echo "<script>location='dusun.php' ; </script>";
?>