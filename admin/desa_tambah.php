<?php
include 'header.php';
?>

<div class="container">
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3>Tambah Desa</h3>
                <p class="text-muted">Tambah Desa baru</p>
                <hr>

                <form action="desa_tambah_aksi.php" method="post">

                   <div class="form-group">
                        <label>Nama Desa</label>
                        <input type="text" name="nama" placeholder="Nama Desa" class="form-control" required>
                   </div>

                        <input type="submit" name="submit" value="tambah" class="btn btn-primary btn-sm">

                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include 'footer.php';
?>
