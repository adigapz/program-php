<?php
include 'header.php';
?>

<div class="container"> 
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h3>Data Dusun</h3>
                    <p class="text-muted">Halaman Dusun</p>
                    <hr>

                     <a class="btn btn-success btn-sm mb-3" href="dusun_tambah.php"><i class="fa fa-house-user"></i> Tambah Dusun Baru</a>

                     <table class="table table-bordered table-striped table-hover table-saya">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Nama Dusun</th>
                                <th width="20%">Opsi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $nomor = 1;
                            $desa = mysqli_query ($conn,"SELECT * FROM dusun");
                            while ($pecah = mysqli_fetch_array($desa)) {
                            ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo ($pecah['dusun_nama']); ?></td>
                                <td>
                                    <a href="dusun_edit.php?id=<?php echo $pecah['dusun_id']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-user-edit"></i></a>
                                    <a href="dusun_hapus.php?id=<?php echo $pecah['dusun_id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
