<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Data Penduduk</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Awal</a></li>
            <li class="breadcrumb-item active">Data Penduduk</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->

<?php  

if ($_GET['penduduk'] == 'tambah') {
    require_once 'tambahPenduduk.php';
}elseif ($_GET['penduduk']=='edit') {
    require_once 'ubahPenduduk.php';
}elseif ($_GET['penduduk']=='hapus') {
    require_once 'hapus.php';
}elseif ($_GET['penduduk'] == 'detail') {
    require_once 'detailPenduduk.php';
}
else{
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <a href="?penduduk=tambah" class="btn btn-success pull-right" >Tambah Data</a>
                    <h3>Data Penduduk</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered" id="myTable">
                            <thead>
                                <th>No</th>
                                <th>KONTAK</th>
                                <th>NIK</th>
                                <th>NAMA</th>
                                <th>TETALA</th>
                                <th>L/P</th>
                                <th>ALAMAT</th>
                                <th>AKSI</th>
                            </thead>
                            <?php 
                            $no=1;
                            while ($row = mysqli_fetch_assoc($penduduk)) {  
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['hp']; ?></td>
                                <td><?php echo $row['nik']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['tmp_lhr']; ?>, <?php echo $row['tgl_lhr']; ?></td>
                                <td><?php echo $row['gendre']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td>
                                    <a href="?penduduk=detail&q=<?php echo $row['id_penduduk'] ?>" class="btn-sm btn-primary" title="Detail"><i class="fa fa-info-circle"></i></a> 
                                    <a href="?penduduk=edit&q=<?php echo $row['id_penduduk'] ?>" class="btn-sm btn-warning" title="Ubah"><i class="fa fa-edit"></i></a> 
                                    <a href="?penduduk=hapus&q=<?php echo $row['id_penduduk'] ?>" onclick="return confirm('Apa Kamu Yakin Akan Menghapus Data ini ?')" class="btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php 
                            $no++;
                        } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>