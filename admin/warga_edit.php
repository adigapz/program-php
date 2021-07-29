<?php
include 'header.php';
?>

<div class="container"> 
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card mb-5">
                <div class="card-body">
                    <h3>Edit Warga</h3>
                    <p class="text-muted">Edit Data Warga</p>
                    <hr>
                    <a class="btn btn-primary btn-sm mb-5" href="warga.php">Kembali</a>

                    <?php
                    $id =  $_GET['id'];
                    $warga = mysqli_query($conn, "SELECT * FROM warga WHERE warga_id = '$id'");
                    while($pecah_warga = mysqli_fetch_array($warga)){
                    ?>

                    <form action="warga_edit_aksi.php" method="post">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama"  class="form-control" placeholder="Nama Warga" value="<?php echo $pecah_warga['warga_nama']; ?>" required>
                            <input type="hidden" name="id"  class="form-control" placeholder="Nama Warga" value="<?php echo $pecah_warga['warga_id']; ?>">
                        </div> 

                        <div class="form-group">
                            <label>NO.KTP</label>
                            <input type="text" name="ktp"  class="form-control" placeholder="Nomor KTP" value="<?php echo $pecah_warga['warga_ktp']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jk" class="form-control" required>
                            <option value="">-Pilih-</option>
                            <option <?php if($pecah_warga['warga_jk']== "laki-laki"){echo"selected='selected'";} ?>value="laki-laki">Laki-laki</option>
                            <option <?php if($pecah_warga['warga_jk']== "perempuan"){echo"selected='selected'";} ?>value="perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Desa</label>
                            <select name="desa" class="form-control" required>
                            <option value="">-Pilih-</option>

                            <?php
                                $desa = mysqli_query($conn, "SELECT * FROM desa");
                            while ($pecah = mysqli_fetch_array($desa)) {
                            ?>
                            <option <?php if($pecah_warga['warga_desa']==$pecah['desa_id']){echo"selected='selected'";} ?> value="<?php echo $pecah['desa_id']; ?>"> <?php echo $pecah['desa_nama']; ?> </option>
                            <?php
                            }
                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Dusun</label>
                            <select name="dusun" class="form-control" required>
                            <option value="">-Pilih-</option>

                            <?php
                                $desa = mysqli_query($conn, "SELECT * FROM dusun");
                            while ($pecah = mysqli_fetch_array($desa)) {
                            ?>
                            <option <?php if($pecah_warga['warga_dusun']==$pecah['dusun_id']){echo"selected='selected'";} ?>value="<?php echo $pecah['dusun_id']; ?>"> <?php echo $pecah['dusun_nama']; ?> </option>
                            <?php
                            }
                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>RT</label>
                            <input type="text" name="rt" class="form-control" placeholder=""  value="<?php echo $pecah_warga['warga_rt']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>RW</label>
                            <input type="text" name="rw" class="form-control" placeholder=""  value="<?php echo $pecah_warga['warga_rw']; ?>" required >
                        </div>

                        <div class="form-group">
                            <label>status</label>
                            <select name="status" class="form-control" required>
                            <option value="">-Pilih-</option>
                            <option <?php if($pecah_warga['warga_status']=="kawin"){echo "selected ='selected'"; }?> value="kawin">Kawin</option>
                            <option <?php if($pecah_warga['warga_status']=="belum kawin"){echo "selected ='selected'";} ?>value="belum kawin">Belum Kawin</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Pendidikan</label>
                            <select name="pendidikan" class="form-control" required>
                            <option>-Pilih-</option>
                            <option <?php if($pecah_warga['warga_pendidikan']=="SD"){echo "selected ='selected'";} ?> value="SD">SD</option>
                            <option <?php if($pecah_warga['warga_pendidikan']=="SMP"){echo "selected ='selected'";} ?>value="SMP">SMP</option>
                            <option <?php if($pecah_warga['warga_pendidikan']=="SMA"){echo "selected ='selected'";} ?>value="SMA">SMA</option>
                            <option <?php if($pecah_warga['warga_pendidikan']=="S1"){echo "selected ='selected'";} ?>value="S1">S1</option>
                            <option <?php if($pecah_warga['warga_pendidikan']=="S2"){echo "selected ='selected'";} ?>value="S2">S2</option>
                            <option <?php if($pecah_warga['warga_pendidikan']=="S3"){echo "selected ='selected'";} ?>value="S3">S3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Agama</label>
                            <select name="agama" class="form-control" required>
                            <option>-Pilih-</option>
                            <option <?php if($pecah_warga['warga_agama']=="Protestan"){echo "selected ='selected'";} ?>value="Protestan">Protestan</option>
                            <option <?php if($pecah_warga['warga_agama']=="Katholik"){echo "selected ='selected'";} ?>value="Katholik">Katholik</option>
                            <option <?php if($pecah_warga['warga_agama']=="Islam"){echo "selected ='selected'";} ?> value="Islam">Islam</option>
                            <option <?php if($pecah_warga['warga_agama']=="Budha"){echo "selected ='selected'";} ?>value="Budha">Budha</option>
                            <option <?php if($pecah_warga['warga_agama']=="Hindu"){echo "selected ='selected'";} ?>value="Hindu">Hindu</option>
                            <option <?php if($pecah_warga['warga_agama']=="Konghucu"){echo "selected ='selected'";} ?>value="Konghucu">Konghucu</option>
                            </select>
                        </div>

                        <input type="submit" name="submit" value="Konfirmasi" class="btn btn-success btn-sm">
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
