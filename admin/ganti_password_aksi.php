<?php
include '../conn.php';

$password = md5($_POST['password']);

mysqli_query($conn,"UPDATE admin SET password = '$password'");

header("location:ganti_password.php?pesan=password");
?>