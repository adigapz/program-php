<?php
include 'header.php';
?>

<div class="container-fluid">
    <div class="card ">
        <div class="card-body">
            <h3>Dashboard Warga</h3>
            <p class="text-muted">Data Warga</p>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="warga_filter.php" method="get">
                                <div class="form-group">
                                    <label>Filter Desa</label>
                                    <select name="desa" class="form-control" required>
                                        <option value="">-Pilih-</option>

                                        <?php
                                        $id_desa = $_GET['desa'];
                                            $desa = mysqli_query($conn, "SELECT * FROM desa");
                                        while ($pecah = mysqli_fetch_array($desa)) {
                                        ?>
                                        <option <?php if($pecah['desa_id']==$id_desa){echo"selected='selected'";} ?> value="<?php echo $pecah['desa_id']; ?>"> <?php echo $pecah['desa_nama']; ?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <input type="submit" value="Tampilkan Desa" class="btn btn-secondary btn-sm">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <a class="btn btn-primary bt-sm mt-3 mb-3" href="warga_tambah.php">Tambah Warga</a>
            <a class="btn btn-success bt-sm mb-3 float-right" href="warga_cetak_filter.php?desa=<?php echo $id_desa ;?>" target="_blank" >Cetak</a>
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
                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $nomor = 1;
                    $desa = $_GET['desa'];
                    $warga = mysqli_query($conn,"SELECT * FROM warga,desa,dusun WHERE warga_desa = desa_id and warga_dusun = dusun_id and warga_desa='$desa'");
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
                        <td>
                            <a href="warga_edit.php?id=<?php echo $ambil['warga_id']; ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="warga_hapus.php?id=<?php echo $ambil['warga_id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>

                    <?php
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>




<?php
include 'footer.php';
?>
