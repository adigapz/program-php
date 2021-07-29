<?php
include 'header.php';
?>

<div class="container"> 
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3>Edit Dusun</h3>
                    <p class="text-muted">Edit Data Dusun</p>
                    <hr>

                    <form action="dusun_edit_aksi.php" method="post">
                        <?php
                        $id = $_GET['id'];
                        $ambil = mysqli_query ($conn,"SELECT * FROM dusun WHERE dusun_id ='$id'");
                        while ($pecah = mysqli_fetch_array($ambil)) {
                        ?>

                        <div class="form-group">
                            <label>Nama Dusun</label>
                            <input type="text" name="nama" value="<?php echo $pecah['dusun_nama']; ?>" class="form-control">
                            <input type="hidden" name="id" value="<?php echo $pecah['dusun_id']; ?>">
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


