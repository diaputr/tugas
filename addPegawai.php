<?php 
$lmenu = "pegawai";
$sbLmenu = "pegawai";
$judul = "Form Input Data Pegawai";
$rmenu = ["Home", "Pegawai", "Input Pegawai"];
$rlink = ["index.php", "pegawai.php", "addpegawai.php"];
include("header.php");
include("koneksi.php");
if (isset($pesan)) {
?>
    <div class="card bg-gradient-danger col-md-8 mx-auto">
        <div class="card-header">
            <h3 class="card-title"><?php echo $pesan ?></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
    </div>
<?php } ?>
<div class="card card-light col-md-8 mx-auto p-0">
    <div class="card-header ">
        <h3 class="card-title">Input Data Pegawai</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="addpegawai_.php" method="POST" enctype="multipart/form-data">
        <div class="card-body ">
            <!-- /.card -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <input name="tnip" type="text" class="form-control" placeholder="NIP ..." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input name="tnama" type="text" class="form-control" placeholder="Nama Lengkap ..." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-2">
                    <input type="radio" name="tradio" class="radio" value="L"> Laki-laki     
                </div>
                <div class="tradio">     
                    <input type="radio" name="tradio" class="radio" value="P"> Perempuan 
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input name="tgl_lahir" type="date" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea name="talamat" class="form-control" placeholder="Alamat ..." required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Golongan</label>
                <div class="col-sm-10">
                    <select name="tgol" class="form-control" required>
                        <option value="">-- Pilih Jabatan --</option>
                        <?php
                        $golongan = $db->query("select * from golongan");
                        foreach ($golongan as $g) {
                            echo '<option value="' . $g['id'] . '">' . $g['jabatan'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input name="tgbr" type="file" class="form-control" accept=".jpg,.png,.jpeg,.gif"required> .jpg, .png, .jpeg, .gif
                </div>
            </div> 
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan Data Pegawai</button>
            <a href="pegawai.php">
                <button type="button" class="btn btn-default float-right">Batal</button>
            </a>
            <button type="reset" class="btn btn-default float-right">Reset</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>
<!-- /.card -->
<?php include("footer.php"); ?>