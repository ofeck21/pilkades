<?php if (isset($_GET['resetpd'])){ 
    $reset = mysqli_query($con, "UPDATE penduduk SET vote=0");
if ($reset) {
    echo "<script>alert('Aplikasi Telah Di Reset');
        location=(href='?modem');
        </script>";
}else{
    echo "<script>alert('Aplikasi Gagal Di Reset');
        location=(href='?modem');
        </script>";
}
}
?>
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Modem</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Pengaturan</a></li>
            <li class="breadcrumb-item active">Modem</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->

<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-6">
            <div class="card">
                <h3 class="card-header">Detail Modem</h3>
                <div class="card-body">
                    <div class="card-content">
                        <br>
                        <pre><?php passthru('gammu identify', $hasil); ?></pre>
                    </div>
                </div>
            </div>
        </div>

         <div class="col-5">
            <div class="card">
                <h3 class="card-header">Status Service Gammu</h3>
                <div class="card-body">
                    <div class="card-content">
                        <br>
                        <center>
                        <a href="?modem=startservice" class="btn-sm btn-success">Restart Service</a>
                        <br>
                        <br>
                        <?php if ($_GET['modem']=='startservice') {
                        echo "<pre>";
                        exec("gammu-smsd -c smsdrc -k", $hasil);
                        exec("gammu-smsd -c smsdrc -u", $hasil);
                        passthru("gammu-smsd -c smsdrc -i", $hasil);
                        exec("gammu-smsd -c smsdrc -s", $hasil);
                        echo "</pre>";
                        } 

// menjalankan command untuk mengenerate file service.log
passthru("net start > service.log");

// membuka file service.log
$handle = fopen("service.log", "r");

// status awal = 0 (dianggap servicenya tidak jalan)
$status = 0;

// proses pembacaan isi file
while (!feof($handle))
{
   // baca baris demi baris isi file
   $baristeks = fgets($handle);
   if (substr_count($baristeks, 'Gammu SMSD Service (GammuSMSD)') > 0)
   {
     // jika ditemukan baris yang berisi substring 'Gammu SMSD Service (GammuSMSD)'
     // statusnya berubah menjadi 1
     $status = 1;
   }
}
// menutup file
fclose($handle);

// jika status terakhir = 1, maka gammu service running
if ($status == 1) echo "<b>Service Telah Berjalan..</b>";
// jika status terakhir = 0, maka service gammu berhenti
else if ($status == 0) echo "<b>Service Belum Berjalan..</b>";

?>
                        </center>
                    </div>
                </div>
            </div>
        </div>

<div class="col-12 text-center">
    <a href="?modem&resetpd" class="btn btn-danger btn-block" onclick="return confirm('Apa Kamu Yakin Akan Mereset Aplikasi ?')"> Reset Aplikasi </a>
</div>

    </div>
    <!-- End PAge Content -->

</div>
<!-- End Container fluid -->