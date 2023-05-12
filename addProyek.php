<?php 
$lmenu = "proyek";
$sbLmenu = "proyek";
$judul = "Form Input Data Proyek";
$rmenu = ["Home", "Proyek", "Input Proyek"];
$rlink = ["index.php", "proyek.php", "addProyek.php"];
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
        <h3 class="card-title">Input Data Proyek</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="addProyek_.php" method="POST" enctype="multipart/form-data">
        <div class="card-body ">
            <!-- /.card -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode</label>
                <div class="col-sm-10">
                    <input name="tkode" type="text" class="form-control" placeholder="Kode Proyek ..." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input name="tnama" type="text" class="form-control" placeholder="Nama Proyek ..." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <input name="tlokasi" type="text" class="form-control" placeholder="Lokasi Proyek ..." required>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan Data Proyek</button>
            <a href="proyek.php">
            <button type="button" class="btn btn-default float-right">Batal</button>
            </a><button type="reset" class="btn btn-default float-right">Reset</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>
<!-- /.card -->
<?php include("footer.php"); ?>