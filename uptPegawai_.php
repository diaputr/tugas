<?php
include("koneksi.php");
if (isset($_POST['tnama'])) {
    $id = $_POST['tid']/123/123;
    $kode = $_POST['tkode'];
    $nama = $_POST['tnama'];
    $gender = $_POST['tradio'];
    $alamat = $_POST['talamat'];
    $tgl = $_POST['tgl_lahir'];
    $golongan = $_POST['tgolongan'];
    $db->query("update pegawai set nama='$nama', 
    gender='$gender', alamat='$alamat', tgl_lahir='$tgl',
    golongan='$golongan' where id='$id'");

    $tmp = $_FILES['tgbr']['tmp_name'];
        $nmFile = $_POST['tnmFile'];
        unlink('gbr_pegawai/' . $nmFile);
        move_uploaded_file($tmp, 'gbr_pegawai/' . $nmFile);

    header("location:uptPegawai.php?id=" . $id*123*123);
} else {
    header("location:uptPegawai.php?id=" . $id);
}