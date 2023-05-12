<?php
$lmenu = "proyek";
$sbLmenu = "proyek";
$judul = "Data Proyek Perusahaan";
$rmenu = ["Home", "Proyek"];
$rlink = ["index.php", "proyek.php"];
include("header.php");
include("koneksi.php");
?>
<div class="row m-1">
    <a href="addProyek.php">
        <button class="btn btn-flat btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah Data</button>
    </a>
</div>
<div class="card">
    <div class="card-header">Data Proyek Perusahaan</div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th style="width: 10px;">No</th>
                    <th style="width: 10px;"></th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Lokasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = $db->query("select proyek.id as id, proyek.kode as kode, proyek.nama as nama, 
                proyek.lokasi as lokasi from proyek");
                $no = 0;
                foreach ($query as $q) {
                    $no++;
                ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td class="text-center">
                            <a href="uptProyek.php?id=<?php echo $q['id'] * 123 * 123 ?>"><button class="btn btn-primary btn-flat btn-xs"><i class="fa fa-edit"></i></button>
                        </td>
                        <td><?php echo $q['kode'] ?> </td>
                        <td><?php echo $q['nama'] ?></td>
                        <td><?php echo $q['lokasi'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include("footer.php"); ?>