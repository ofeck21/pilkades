<!-- header header  -->
<div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- Logo -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <!-- Logo icon -->
                <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
            </a>
        </div>
        <!-- End Logo -->
        <div class="navbar-collapse">
            <!-- toggle and nav items -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <!-- Messages -->
                <?php if (isset($_POST['autoreply'])) { 
                $_SESSION['autoreply']='start';
                }elseif (isset($_POST['stopreply']) ) {
                    unset($_SESSION['autoreply']);
                }

                if (!empty($_SESSION['autoreply'])) {
                ?>
                <li class="nav-item "><form method="POST" action=""> <button type="submit" name="stopreply" class="nav-link btn btn-sm btn-outline-danger" style="margin-top: 15px;" ><i class="fa fa-retweet"></i> Hentikan Pesan Otomatis</button></form> 
                </li>
                <li class="nav-item "><div><button class="nav-link btn btn-xs btn-outline-success" style="margin-top: 16px; margin-left: 10px;" > Pesan Otomatis Sedang Diaktifkan! </button></div> 
                </li>
                <?php }else{ ?>
                <li class="nav-item "><form method="POST" action=""> <button type="submit" name="autoreply" class="nav-link btn btn-sm btn-outline-success" style="margin-top: 15px;" ><i class="fa fa-retweet"></i> Jalankan Pesan Otomatis</button></form> 
                </li>
                <?php } ?>
                <!-- End Messages -->
            </ul>

            <!-- User profile -->
            <ul class="navbar-nav my-lg-0">
                
                <!-- Messages -->
                <li class="nav-item ">
                    <a class="nav-link " href="?pesanmasuk" > <i class="fa fa-envelope"></i>
						<?php 
                        $nt = mysqli_query($con, "SELECT * FROM inbox WHERE Processed='false'");
                        if (mysqli_num_rows($nt)>0) { ?>
                            
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>

                        <?php } ?>
					</a>
                </li>
                <!-- End Messages -->
                <!-- Profile -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/logo.png" alt="user" class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right animated flipInX">
                        <ul class="dropdown-user">
                            <li><a href="?modem"><i class="ti-settings"></i> Setting</a></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- End header header -->