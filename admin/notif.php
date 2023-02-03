<?php 
require_once 'config.php';
 ?>
<a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
    <?php 
    $nt = mysqli_query($con, "SELECT * FROM inbox WHERE Processed='false'");
    if (mysqli_num_rows($nt)>0) { ?>
        
    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>

    <?php } ?>
</a>
<div class="dropdown-menu dropdown-menu-right mailbox animated flipInX" aria-labelledby="2">
    <ul>
        <li>
            <?php if ($notif = mysqli_num_rows($nt)>0){ ?>
            <div class="drop-title">Anda Memiliki <?php echo $notif ?> Pesan Baru</div>
            <?php }else{ ?>
            <div class="drop-title">Anda Tidak Memiliki Pesan Baru</div>
            <?php } ?>
        </li>
        <li>
            <?php if (mysqli_num_rows($nt)>0): 
            $msg = mysqli_fetch_array($nt);
            ?>
                
            <div class="message-center">
                <!-- Message -->
                <a href="#">
                    <div class="user-img"> <img src="images/users/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5><?php echo $msg['SenderNumber'] ?></h5> <span class="mail-desc"><?php echo $msg['TextDecoded'] ?></span> <span class="time"><?php echo $msg['ReceivingDateTime'] ?></span>
                    </div>
                </a>
                <!-- Message -->
            </div>
        </li>
        <li>
            <a class="nav-link text-center" href="?pesanmasuk"> <strong>Lihat Semua Pesan</strong> <i class="fa fa-angle-right"></i> </a>
        </li>
        <?php endif ?>
    </ul>
</div>