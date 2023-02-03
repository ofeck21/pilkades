<?php 
require_once "template/head.php";

require_once "login-proses.php";

require_once "template/preload.php";

if(empty($_SESSION['pilkades'])){
?>    
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Masuk</h4>
                                <form method="post" action="">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Username" name="username">
                                        <?php 
                                        //jika eror
                                        if(!empty($error)){
                                            echo $error['username'];
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                         <?php 
                                        //jika eror
                                        if(!empty($error)){
                                            echo $error['password'];
                                        }
                                        ?>
                                    </div>
                                     <?php 
                                        //jika eror
                                        if(!empty($error)){
                                            echo $error['login'];
                                        }
                                        ?>
                                    <button type="submit" name="masuk" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
<?php 
require_once "template/footerend.php";
}else{
    header('location:index.php');
}
?>