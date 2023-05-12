<?php
include("koneksi.php");
if (isset($_POST['tkode'])) {
    $kode = $_POST['tkode'];
    $nama = $_POST['tnama'];
    $lokasi = $_POST['tlokasi'];

    $checkKode = $db->query("select*from proyek where kode='$kode'");
    $ada = mysqli_num_rows($checkKode);
    if ($ada > 0) {
        $pesan = "Kode sudah ada";
        include("addProyek.php");
    } else {
        $query = $db->query("insert into proyek(kode, nama, lokasi) 
         values('$kode','$nama','$lokasi')") or die("Query gagal");
        header("location:proyek.php");
    }
} else {
    $pesan = "Input data gagal terjadi";
    include("addProyek.php");
}