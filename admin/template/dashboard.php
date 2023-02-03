<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Beranda</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Awal</a></li>
            <li class="breadcrumb-item active">Beranda</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-users f-s-40 color-primary"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2><?php echo $jml; ?></h2>
                        <p class="m-b-0">Hak Pilih</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-user f-s-40 color-success"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2 class="memilih"></h2>
                        <p class="m-b-0">Memilih</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-user-times f-s-40 color-danger"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2 class="belum"></h2>
                        <p class="m-b-0">Tidak Memilih</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-user-secret f-s-40 color-warning"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2><?php echo $jmlcaleg; ?></h2>
                        <p class="m-b-0">Calon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row bg-white m-l-0 m-r-0 box-shadow ">

        <!-- column -->
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Grafik Hasil Poling</h4>
                   
                    <div class="poling">Memuat Hasil Poling....</div>

                </div>
            </div>
        </div>
        <!-- column -->

        <!-- column -->
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Persentase Hasil Poling</h4>
                    <div class="persen"></div>
                </div>
            </div>
        </div>
        <!-- column -->
    </div>
    </div>
    <!-- End PAge Content -->
</div>
<!-- End Container fluid  -->