<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Data Caleg</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Awal</a></li>
            <li class="breadcrumb-item active">Pemilu</li>
            <li class="breadcrumb-item active">Data Calon</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->

<?php  

if ($_GET['caleg'] == 'tambah') {
    require_once 'tambahCaleg.php';
}elseif ($_GET['caleg']=='ubah') {
    require_once 'ubahCaleg.php';
}elseif ($_GET['caleg']=='hapus') {
    require_once 'hapus.php';
}
else{
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <a href="?caleg=tambah" class="btn btn-success pull-right" >Tambah Data</a>
                    <h3>Data Caleg</h3>
                </div>
                <hr>
                <div class="card-body">
                    <?php while ($row = mysqli_fetch_assoc($caleg)) { ?>
                    <div class="col-lg-6 pull-left">
                        <div class="card">
                            <div class="card-body">
                                <div class="foto">
                                <div class="nomor " style="background: #2980b9; width: 50px; height: 50px; color: #fff; margin:auto; text-align:center; border-radius: 30px; margin-top: -45px; font-size: 30px;">
                                <?php echo $row['no_urut'] ?>
                                </div>
                                <img src="images/caleg/<?php echo $row['foto'] ?>" width="150" height="150" class="pull-left">
                                </div>
                                <div class="identitas pull-left" style="height: 125px; padding-left: 10px; width: 284px;">
                                    <br>
                                    Nama : <strong> <?php echo $row['nama_caleg'] ?> </strong><br>
                                    Moto : <?php echo $row['moto'] ?>
                                </div>
                                <div class="aksi pull-right">
                                    <a href="?caleg=ubah&q=<?php echo $row['id_caleg'] ?>" class="btn-sm btn-warning">Ubah</a>
                                    <a href="?caleg=hapus&q=<?php echo $row['id_caleg'] ?>" class="btn-sm btn-danger" onclick="return confirm('Apa Kamu Yakin Akan Menghapus Caleg Ini ?')">Hapus</a>
                                </div>

                              
                            </div>
                        </div>
                    </div>

                     <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>