<?php

$conn = mysqli_connect("localhost","root","","penduduk");

if(mysqli_connect_errno() ) {
    echo "koneksi ke database gagal";
}

?>