<?php  
require_once 'template/head.php';
require_once 'tambah-proses.php';
require_once 'update-proses.php';
require_once 'kirim-proses.php';

if (empty($_SESSION['pilkades'])) {
	header('location:login.php');
}

require_once 'template/preload.php';

?>
<div class="autoreply"></div>
<!-- Main wrapper  -->
<div id="main-wrapper">
 
<?php  
require_once 'template/header.php';
require_once 'template/leftside.php';
?>

<!-- Page wrapper  -->
<div class="page-wrapper">
        

<?php  

if (isset($_GET['dashboard'])) {
	require_once 'template/dashboard.php';
}elseif (isset($_GET['penduduk'])) {
	require_once 'template/penduduk.php';
}elseif (isset($_GET['caleg'])) {
	require_once 'template/caleg.php';
}elseif (isset($_GET['pesanmasuk'])) {
	require_once 'template/pesanmasuk.php';
}elseif (isset($_GET['buatpesan'])) {
	require_once 'template/buatpesan.php';
}elseif (isset($_GET['draf'])) {
	require_once 'template/draf.php';
}elseif (isset($_GET['pesankeluar'])) {
	require_once 'template/pesankeluar.php';
}elseif (isset($_GET['pesanterkirim'])) {
	require_once 'template/pesanterkirim.php';
}elseif (isset($_GET['pesansiaran'])) {
	require_once 'template/pesansiaran.php';
}elseif (isset($_GET['modem'])) {
	require_once 'template/modem.php';
}elseif (isset($_GET['keyword'])) {
	require_once 'template/keyword.php';
}
else{
	require_once 'template/dashboard.php';
}

require_once 'template/footer.php';

?>
        
    
</div>
<!-- End Page wrapper  -->

</div>
<!-- End Wrapper -->

<?php 
require_once 'template/footerend.php';
?>