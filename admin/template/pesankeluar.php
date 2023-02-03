<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kotak Keluar</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Pesan</a></li>
            <li class="breadcrumb-item active">Kotak Keluar</li>
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
                            <a class="btn btn-danger btn-block waves-effect waves-light" href="?buatpesan">Buat Pesan</a>
                        </div>
                        <!-- End Left sidebar -->

                        <div class="clearfix"></div>
                        <?php
                           if ($_GET['pesankeluar']=='hapus') { 
                                $id = $_GET['q'];
                                require_once 'hapus-pesan.php';
                           }else{ ?>
                            <div class="mt-4">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th width="310">Tujuan</th>
                                            <th>Pesan</th>
                                            <th>Waktu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="kotak-keluar"></tbody>
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