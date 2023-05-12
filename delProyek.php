<?php
include("koneksi.php");
$id = $_GET['id'] / 123 / 123;

$proyek = $db->query("select * from proyek where id='$id'");
$nmfile = mysqli_fetch_assoc($proyek);
unlink("gbr_proyek/" . $nmfile['nama_file']);

$db->query("delete from proyek where id='$id'");
header("location:proyek.php");
?>