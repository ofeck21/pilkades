<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kotak Masuk</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Pesan</a></li>
            <li class="breadcrumb-item active">Kotak Masuk</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->

<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-content">
                        <!-- Left sidebar -->
                        <div class="inbox-leftbar">
                            <?php if ($_GET['pesanmasuk']=='detail') { ?>

                                <a class="btn btn-danger btn-block waves-effect waves-light" href="?pesanmasuk">Kotak Masuk</a>

                            <?php }else{ ?>

                            <a class="btn btn-danger btn-block waves-effect waves-light" href="?buatpesan">Buat Pesan</a>

                            <?php } ?>
                        </div>
                        <!-- End Left sidebar -->

                        <div class="clearfix"></div>
                           
                           <?php if ($_GET['pesanmasuk']=='detail') {
                               $id = $_GET['q'];
                               require_once 'detailpesan.php';
                           }elseif ($_GET['pesanmasuk']=='hapus') { 
                                $id = $_GET['q'];
                                require_once 'hapus-pesan.php';
                           }else{ ?>
                            <div class="mt-4">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th width="310">Pengirim</th>
                                            <th>Pesan</th>
                                            <th>Waktu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="kotak-masuk"></tbody>
                                </table>
                            </div>
                            <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
</div>
<!-- End Container fluid 