<?php
include 'header.php';
?>

<div class="container">
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3>Tambah Dusun</h3>
                <p class="text-muted">Tambah Dusun baru</p>
                <hr>

                <form action="dusun_tambah_aksi.php" method="post">

                   <div class="form-group">
                        <label>Nama Dusun</label>
                        <input type="text" name="nama" placeholder="Nama Dusun" class="form-control" required>
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
