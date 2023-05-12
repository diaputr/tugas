<?php
include("koneksi.php");
if (isset($_POST['tnip'])) {
    $nip = $_POST['tnip'];
    $nama = $_POST['tnama'];
    $gender = $_POST['tradio'];
    $tgl = $_POST['tgl_lahir'];
    $alamat = $_POST['talamat'];
    $gol = $_POST['tgol'];
    $tmp = $_FILES['tgbr']['tmp_name'];
    $namaFiles = $_FILES['tgbr']['name'];
    $ext = substr(strrchr($namaFiles, '.'), 1);
    $checknip = $db->query("select*from pegawai where nip='$nip'");
    $ada = mysqli_num_rows($checknip);
    if ($ada > 0) {
        $pesan = "NIP sudah ada";
        include("addPegawai.php");
    } else {
        $nmFile = 'pegawai' . date("YmdHis") . '.' . $ext;
        $query = $db->query("insert into pegawai values (null,'$nip','$nama','$gender','$tgl','$alamat','$gol','$nmFile')") or die("Query gagal");
        move_uploaded_file($tmp, 'gbr_pegawai/pegawai' . date("YmdHis") . '.' . $ext);
        header("location:pegawai.php");
    }
} else {
    $pesan = "Input data gagal terjadi";
    include("addPegawai.php");
}