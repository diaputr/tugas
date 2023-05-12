<?php
include("koneksi.php");
$id = $_GET['id'] / 123 / 123;

$pegawai = $db->query("select * from pegawai where id='$id'");
$nmfile = mysqli_fetch_assoc($pegawai);
unlink("gbr_pegawai/" . $nmfile['nama_file']);

$db->query("delete from pegawai where id='$id'");
header("location:pegawai.php");
?>