<?php
include 'header.php';
?>

<div class="container"> 
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3>Edit Desa</h3>
                    <p class="text-muted">Edit Data Desa</p>
                    <hr>

                    <form action="desa_edit_aksi.php" method="post">
                        <?php
                        $id = $_GET['id'];
                        $ambil = mysqli_query ($conn,"SELECT * FROM desa WHERE desa_id ='$id'");
                        while ($pecah = mysqli_fetch_array($ambil)) {
                        ?>

                        <div class="form-group">
                            <label>Nama Desa</label>
                            <input type="text" name="nama" value="<?php echo $pecah['desa_nama']; ?>" class="form-control">
                            <input type="hidden" name="id" value="<?php echo $pecah['desa_id']; ?>">
                        </div>
                            <input type="submit" name="submit" value="simpan" class="btn btn-primary btn-sm">

                        <?php
                            }
                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>


