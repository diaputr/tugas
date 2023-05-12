<?php
$lmenu = "home";
$judul = "Data Perusahaan";
$rmenu = ["Home"];
$rlink = ["index.php"];
include("header.php");
include("koneksi.php");
?>
<div class="card mx-auto">
    <div class="card-header">Selamat Datang</div>
    <div class="card-body">
       <div class="row">
        <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
            <div class="inner">
                <p>Pegawai</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="pegawai.php" class="small-box-footer">Selengkapnya 
                <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
        </div>

        <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
            <div class="inner">
                <p>Proyek</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="proyek.php" class="small-box-footer">Selengkapnya 
                <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
        </div>
       </div>
    </div>
</div>
<?php include("footer.php"); ?>