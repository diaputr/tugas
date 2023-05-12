<?php 
$lmenu = "proyek";
$sbLmenu = "proyek";
$judul = "Edit Data Proyek";
$rmenu = ["Home", "Proyek", "Edit Data Proyek"];
$rlink = ["index.php", "proyek.php", "uptProyek.php"];
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
    <?php }
if (isset($_GET['id']) && $_GET['id'] != '') {
    $query = $db->query("select*from proyek where id='" . $_GET['id'] / 123 / 123 . "'");
    $data = mysqli_fetch_assoc($query);
    if ($data) {
    ?>
        <div class="card card-light col-md-8 mx-auto p-0">
            <div class="card-header">
                <h3 class="card-title">Update Data Proyek</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="uptProyek_.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kode</label>
                                <div class="col-sm-10">
                                    <input value="<?php echo $data['id'] * 123 * 123 ?>" name="tid" type="text" hidden>
                                    <input value="<?php echo $data['kode'] ?>" name="tkode" type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input value="<?php echo $data['nama'] ?>" name="tnama" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <input value="<?php echo $data['lokasi'] ?>" name="tlokasi" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm  btn-flat"><i class="fa fa-save"></i> Simpan Perubahan</button>
                    <a href="delProyek.php?id=<?php echo $data['id'] * 123 * 123 ?>"<button class="btn btn-danger btn-flat btn-sm"><i class="fa fa-trash"></i> Hapus Proyek</button>
                        <a href="proyek.php">
                            <button type="button" class="btn btn-default btn-sm btn-flat float-right">Batal</button>
                        </a>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
        <!-- /.card -->
<?php
    }
}
include("footer.php"); ?>