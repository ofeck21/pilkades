<?php 
$error = array(); 
if (isset($_POST['masuk'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	//validasi
	if (empty($_POST['username'])) {
		$error['username']='<span style="color:red;">Username Tidak Boleh Kosong.</span>';
		$error['password']=null;
	}elseif (empty($_POST['password'])) {
		$error['password']='<span style="color:red;">Password Tidak Boleh Kosong.</span>';
		$error['username']=null;
	}else{
		$select = mysqli_query ($con, "SELECT * FROM users WHERE username = '$username' AND password = '$password' ");

		if (mysqli_num_rows($select)>0) {
			$_SESSION['pilkades'] = $username;
			header('location:index.php');
		}else{
			$error['login']="<span style=\"color:red;\">Login Gagal !</span>";
			$error['username']=null;
			$error['password']=null;
		}
	}
}

?>