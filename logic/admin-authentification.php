<?php
	$admin_username="SIR STARK";
	$admin_password=md5('admin-hub');

	if (isset($_POST['admin_login'])) {
		$admin_identity=$_POST['admin_identity'];
		$admin_key=md5($_POST['admin_key']);

		if (($admin_username == $admin_identity) && ($admin_password == $admin_key)) {
			session_start();
			$_SESSION['admin_online']=$admin_username;
     		$_SESSION['last_login_timestamp']= time();
			header('location:../index.php');
		}else{
			header('location:../index.php?page=help');
		}
	}

?>