<?php
include("koneksi.php");
if (isset($_POST['tkode'])) {
    $id = $_POST['tid']/123/123;
    $kode = $_POST['tkode'];
    $nama = $_POST['tnama'];
    $lokasi = $_POST['tlokasi'];
    $db->query("update proyek set nama='$nama', 
    lokasi='$lokasi' where id='$id'");
    header("location:proyek.php");
} else {
    header("location:uptProyek.php?id=" . $id);
}
?>