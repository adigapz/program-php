<?php
include '../conn.php';
include 'cek_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Warga</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>

</head>
<body>

<h3 class="text-center">Laporan Data Warga</h3>
<table class="table table-bordered table-hover table-striped table-saya">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No.Ktp</th>
            <th>JK</th>
            <th>Desa</th>
            <th>Dusun</th>
            <th>RT</th>
            <th>RW</th>
            <th>Status</th>
            <th>Pendidikan</th>
            <th>Agama</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $nomor = 1;
        $desa = $_GET['desa'];
        $warga = mysqli_query($conn,"SELECT * FROM warga,desa,dusun WHERE warga_desa = desa_id and warga_dusun = dusun_id and warga_desa = '$desa' ");
        while($ambil = mysqli_fetch_array($warga)) {
        ?>

        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $ambil['warga_nama']; ?></td>
            <td><?php echo $ambil['warga_ktp']; ?></td>
            <td><?php echo $ambil['warga_jk']; ?></td>
            <td><?php echo $ambil['desa_nama']; ?></td>
            <td><?php echo $ambil['dusun_nama']; ?></td>
            <td><?php echo $ambil['warga_rt']; ?></td>
            <td><?php echo $ambil['warga_rw']; ?></td>
            <td><?php echo $ambil['warga_status']; ?></td>
            <td><?php echo $ambil['warga_pendidikan']; ?></td>
            <td><?php echo $ambil['warga_agama']; ?></td>
        </tr>

        <?php
        }
        ?>
    </tbody>
</table>
</div>

<script>
window.print();
</script>
</body>
</html>