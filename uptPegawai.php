<?php 
$lmenu = "pegawai";
$sbLmenu = "pegawai";
$judul = "Edit Data Pegawai";
$rmenu = ["Home", "Pegawai", "Edit Data Pegawai"];
$rlink = ["index.php", "pegawai.php", "uptPegawai.php"];
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
    $query = $db->query("select*from pegawai where id='" . $_GET['id'] / 123 / 123 . "'");
    $data = mysqli_fetch_assoc($query);
    if ($data) {
    ?>
        <div class="card card-light col-md-12 p-0 mx-auto">
            <div class="card-header">
                <h3 class="card-title">Update Data Pegawai</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="uptPegawai_.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kode</label>
                                <div class="col-sm-10">
                                    <input value="<?php echo $data['id'] * 123 * 123 ?>" name="tid" type="text" hidden>
                                    <input value="<?php echo $data['nip'] ?>" name="tnip" type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input value="<?php echo $data['nama'] ?>" name="tnama" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-2">
                                    <input type="radio" name="tradio" class="radio" value="L"
                                    <?php if($data['gender'] == "L") echo 'checked'?>
                                    > Laki-laki     
                                </div>
                                <div class="tradio">     
                                    <input type="radio" name="tradio" class="radio" value="P"
                                    <?php if($data['gender'] == "P") echo 'checked'?>
                                    > Perempuan 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input value="<?php echo $data['tgl_lahir'] ?>" name="tgl_lahir" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea name="talamat" class="form-control" required><?php echo $data['alamat'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Golongan</label>
                                <div class="col-sm-10">
                                    <select name="tgolongan" class="form-control" required>
                                        <option value="">--Pilih Jabatan--</option>
                                        <?php
                                        $golongan = $db->query("select * from golongan");
                                        foreach ($golongan as $g) {
                                            if ($g['id'] == $data['golongan']) {
                                                $pilih = 'selected';
                                            } else {
                                                $pilih = '';
                                            }
                                            echo '<option ' . $pilih . ' value="' . $g['id'] . '">' . $g['jabatan'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <input value="<?php echo $data['nama_file'] ?>" name="tnmFile" type="text" hidden>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input name="tgbr" type="file" class="form-control" accept=".jpg,.png,.jpeg,.gif"> .jpg, .png, .jpeg, .gif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="gbr_pegawai/<?php echo $data['nama_file'] ?>" alt="Foto tidak ditemukan" width="90%">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm  btn-flat"><i class="fa fa-save"></i> Simpan Perubahan</button>
                    <a href="delPegawai.php?id=<?php echo $data['id'] * 123 * 123 ?>" <button class="btn btn-danger btn-flat btn-sm"><i class="fa fa-trash"></i> Hapus pegawai</button>
                        <a href="pegawai.php">
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