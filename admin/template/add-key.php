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
                           <h3>Tambah Keyword</h3>
                        </div>
                        <!-- End Left sidebar -->


                        <div class="clearfix"></div>
                           
                            <div class="">
                                <div class="mt-4">
                                    <div class="">

                                       <form role="form" method="post" action="">
                                            <div class="form-group">
                                                <input type="text" name="keyword" class="form-control" placeholder="Kata Kunci">
                                            </div>

                                            <div class="form-group">
                                                <label>Pesan</label>
                                                <textarea name="pesan" rows="8" cols="80" class="form-control" style="height:300px"></textarea>
                                            </div>

                                            <div class="form-group m-b-0">
                                                <div class="text-right">
                                                    <button type="submit" name="simpan-key" class="btn btn-success waves-effect waves-light"> <span>Simpan</span> <i class="fa fa-save m-l-10"></i> </button>
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
<!-- End Container fluid -->

<?php 
if (isset($_POST['simpan-key'])) {
    $key = $_POST['keyword'];
    $pesan = $_POST['pesan'];
    $keyUp = strtoupper($key);

    if ($key != '' || $pesan != '') {
        $ins = mysqli_query ($con, "INSERT INTO keyword (keyword, pesan) VALUES ('$keyUp', '$pesan')");
        if ($ins) {
            echo "<script>alert('Data Berhasil Ditambahkan!');
        location=(href='?keyword');
        </script>";
        }else{
            echo "<script>alert('Data Gagal Ditambahkan!');
        location=(href='?keyword=add');
        </script>";
        }
    }
}
 ?>