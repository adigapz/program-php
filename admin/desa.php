<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h3>Data Desa</h3>
                    <p class="text-muted">Halaman Desa</p>
                    <hr>

                     <a class="btn btn-success btn-sm mb-2" href="desa_tambah.php"><i class="fa fa-house-user"></i>Tambah Desa</a>
                    <table class="table table-bordered table-striped table-hover table-saya">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Nama Desa</th>
                                <th width="20%">Opsi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $nomor = 1;
                            $desa = mysqli_query ($conn,"SELECT * FROM desa");
                            while ($pecah = mysqli_fetch_array($desa)) {
                            ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo ($pecah['desa_nama']); ?></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="desa_edit.php?id=<?php echo $pecah['desa_id']; ?>"><i class="fa fa-user-edit"></i></a>
                                    <a class="btn btn-danger btn-sm"  href="desa_hapus.php?id=<?php echo $pecah['desa_id']; ?>"><i class="fa fa-trash"></i></a>
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
    </div>
</div>

<?php
include 'footer.php';
?>
