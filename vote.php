<div class="card-deck mb-3 text-center">
  <?php
  require_once 'admin/config.php'; 
  $svote = mysqli_query($con, "SELECT * FROM vote");
  $jvote = mysqli_num_rows($svote)-3;
  $scaleg = mysqli_query($con, "SELECT * FROM caleg ORDER BY no_urut ASC");
  while ($row = mysqli_fetch_array($scaleg)) { 
  $no = $row['no_urut'];
  $chsl = mysqli_query($con, "SELECT * FROM vote WHERE no_urut=$no");
  $shsl = mysqli_num_rows($chsl)-1;
  $hvote = $shsl;
  if ($shsl>0) {
    $hvote = number_format( $shsl*100/$jvote,2 );
  }

  
  ?>
  <div class="card mb-4 box-shadow">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal"><?php echo $row['no_urut'] ?></h4>
    </div>
    <div class="card-body">
      <h1 class="card-title pricing-card-title"><?php echo $hvote ?> <small class="text-muted">%</small></h1>
      <img src="admin/images/caleg/<?php echo $row['foto'] ?>" height="150" width="150" style="border:1px solid gray; object-fit: cover;">
      <br><br>
      Mendapatkan <?php echo $shsl ?> Sauara
      <br><br>
      <button type="button" class="btn btn-lg btn-block btn-outline-primary"><?php echo $row['nama_caleg'] ?></button>
    </div>
  </div>

<?php } ?>

