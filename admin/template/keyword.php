
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kata Kunci</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Pengaturan</a></li>
            <li class="breadcrumb-item active">Kata Kunci</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->

<?php 
if ($_GET['keyword']=='add') {
    require_once 'add-key.php';
}elseif ($_GET['keyword']=='hapus') {
    $q= $_GET['q'];
    $qH = mysqli_query($con, "DELETE FROM keyword WHERE id_key=$q");

    if ($qH) {
        echo "<script>alert('Data Telah Dihapus!');
        location=(href='?keyword');
        </script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus!');
        location=(href='?keyword');
        </script>";
    }
}elseif ($_GET['keyword']=='ubah') {
    require_once 'ubah-key.php';
}
else{

 ?>


<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card" style="min-height: 400px;">
                <div class="card-body">
                    <div class="card-content">
                        <!-- Left sidebar -->
                        <div class="inbox-leftbar">
                            <a class="btn btn-danger btn-block waves-effect waves-light" href="?keyword=add">Tambah Kata Kunci</a>
                        </div>
                        <!-- End Left sidebar -->
<?php 
$key = mysqli_query($con, "SELECT * FROM keyword ORDER BY id_key DESC");
$no =1;
 ?>
                        <div class="clearfix"></div>
                            <div class="mt-4">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Key</th>
                                            <th>Pesan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (mysqli_num_rows($key)==0) {
                                             echo "<tr><td colspan='4'>Tidak Ada Data!</td></tr>";
                                        }else{
                                        while ($row = mysqli_fetch_assoc($key)) { ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $row['keyword'] ?></td>
                                            <td><?php echo $row['pesan'] ?></td>
                                            <td>
                                                <a href="?keyword=ubah&q=<?php echo $row['id_key'] ?>" class="btn-sm btn-info" title="Ubah"><i class="fa fa-edit"></i></a>
                                                <a href="?keyword=hapus&q=<?php echo $row['id_key'] ?>" onclick="return confirm('Apa Kamu Yakin Akan Menghapus Pesan ini ?')" class="btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                     <?php
                                     $no++;       
                                        }
                                    }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
</div>
<!-- End Container fluid -->
<?php 
}
 ?>