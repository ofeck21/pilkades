<?php 
error_reporting(0);
require_once 'config.php';
$caleg = mysqli_query($con, "SELECT * FROM caleg");
$jmlcalon = mysqli_num_rows($caleg);

$datavote = mysqli_query($con, "SELECT * FROM vote");
$jmlvote = mysqli_num_rows($datavote)-$jmlcalon;
?>

<table width="100%">
<?php while ($row = mysqli_fetch_array($caleg)) {

$idc=$row['no_urut']; 
$cekhasil = mysqli_query($con, "SELECT * FROM vote WHERE no_urut=$idc");
$ha = mysqli_num_rows($cekhasil)-1;
$hasilvote = number_format( $ha*100/$jmlvote,2 );
?>
<tr>
    <td><h2><?php echo $row['no_urut'] ?></h2></td>
    <td><img src="images/caleg/<?php echo $row['foto'] ?>" width="80" height="80" style="object-fit: cover; padding: 10px;"></td>
    <td>
        <p class="f-w-600"><?php echo $row['nama_caleg'] ?> <span class="pull-left"><?php echo $hasilvote; ?>%</span></p>
<div class="progress ">
    <div role="progressbar" style="width: <?php echo $hasilvote ?>%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only"><?php echo $hasilvote ?>%</span> </div>
</div>
Mendapatkan <?php echo $ha ?> Suara
    </td>
</tr>
 <br>   

<?php } ?>
</table>