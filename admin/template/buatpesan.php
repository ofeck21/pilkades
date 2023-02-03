<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Buat Pesan</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Pesan</a></li>
            <li class="breadcrumb-item active">Buat Pesan</li>
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
                            <a class="btn btn-danger btn-block waves-effect waves-light" href="?pesanmasuk">Pesan Masuk</a>
                        </div>
                        <!-- End Left sidebar -->


                        <div class="clearfix"></div>
                           
                            <div class="">
                                <div class="mt-4">
                                    <div class="">

                                       <form role="form" method="post" action="">
                                            <div class="form-group">
                                                <?php if ($_GET['buatpesan']=='balas'){ 
                                                    $id=$_GET['q'];
                                                    $inbox = mysqli_query($con, "SELECT * FROM inbox WHERE ID=$id");
                                                    $row = mysqli_fetch_array($inbox);
                                                    ?>

                                                    <input type="text" name="tujuan" class="form-control" value="<?php echo $row['SenderNumber'] ?>">
                                                    
                                                <?php }else{ ?>

                                                <input type="text" name="tujuan" class="form-control" placeholder="Tujuan">

                                                <?php } ?>
                                            </div>

                                            <div class="form-group">
                                                <textarea name="pesan" rows="8" cols="80" class="form-control" style="height:300px"></textarea>
                                            </div>

                                            <div class="form-group m-b-0">
                                                <div class="text-right">
                                                    <button type="submit" name="kirimpesan" class="btn btn-success waves-effect waves-light"> <span>Kirim</span> <i class="fa fa-send m-l-10"></i> </button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>

                                </div>
                                <!-- panel body -->
                            </div>
                            <!-- panel -->
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
</div>
<!-- End Container fluid 