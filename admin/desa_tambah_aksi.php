<?php
include '../conn.php';

$nama = $_POST['nama'];
mysqli_query ($conn, "INSERT INTO desa (desa_nama) VALUES ('$_POST[nama]')");

echo "<script>alert('Desa berhasil ditambahkan!') ; </script>";
echo "<script>location='desa.php' ; </script>";
?>