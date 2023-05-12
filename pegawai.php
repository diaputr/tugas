<?php
$lmenu = "pegawai";
$sbLmenu = "pegawai";
$judul = "Data Pegawai Perusahaan";
$rmenu = ["Home", "Pegawai"];
$rlink = ["index.php", "pegawai.php"];
include("header.php");
include("koneksi.php");
?>
<div class="row m-1">
    <a href="addPegawai.php">
        <button class="btn btn-flat btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah Data</button>
    </a>
</div>
<div class="card">
    <div class="card-header">Data Pegawai</div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th style="width: 10px;">No</th>
                    <th style="width: 10px;"></th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th style="width: 10px">Gender</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Gaji</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = $db->query("select pegawai.id as id, pegawai.nip as nip, pegawai.nama as nama, 
                pegawai.gender as gender, pegawai.tgl_lahir as tgl_lahir, pegawai.alamat as alamat,
                golongan.jabatan as jabatan, golongan.gaji as gaji from pegawai inner join golongan where pegawai.golongan = golongan.id");
                $no = 0;
                foreach ($query as $q) {
                    $no++;
                ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td>
                            <a href="uptPegawai.php?id=<?php echo $q['id'] * 123 * 123 ?>"<button class="btn btn-primary btn-flat btn-xs"><i class="fa fa-edit"></i></button>
                        </td>
                        <td><?php echo $q['nip'] ?> </td>
                        <td><?php echo $q['nama'] ?></td>
                        <td><?php echo $q['gender'] ?></td>
                        <td><?php echo $q['tgl_lahir'] ?></td>
                        <td><?php echo $q['alamat'] ?></td>
                        <td><?php echo $q['jabatan'] ?></td>
                        <td><?php echo $q['gaji'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include("footer.php"); ?>