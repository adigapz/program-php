<?php
include '../conn.php';
// include 'cek_login.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Informasi Pendataan Penduduk</title>

    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/Chart.js"></script>

    <link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css">
    <script src="../assets/DataTables/datatables.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
        <div class="container">
            <a class="navbar-brand" href="#"><b>S.I.P.P</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><i class="fa fa-home"></i>Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="warga.php"><i class="fa fa-users"></i>Data Warga</a>
                    </li>
                    <li class="nav-item dropdown  active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-info-circle"></i>
                        Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="desa.php">Data Desa</a>
                            <a class="dropdown-item" href="dusun.php">Data Dusun</a>
                        </div>
                    </li>
                </ul>


                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle"></i>
                        Akun
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"></a>
                        <a class="dropdown-item" href="ganti_password.php"><i class="fa fa-lock"></i>Ganti Password</a>
                        <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>