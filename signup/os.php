<?php
include '../core/Database.php';
$db = new Database;

/**
* Session start 
**/
session_start();

/**
* Set session try
*/
if (!isset($_SESSION['try'])) {
	$_SESSION['try'] = 1;
}else{
	$_SESSION['try']++;
}

// Just for testing wil delete
$_SESSION['try'] = 0;

/**
* Header with error if try is more than 5 times
*/
if ($_SESSION['try'] > 5) {
	$error = "شما به تعداد زیاد تلاش کردید و دسترسی شما محود خواهد شد";
	header("Location: ../index.php?error=".urlencode($error));
}

/**
*  If teacher is logged in
*/
if (isset($_SESSION['t_logged_in'])) {
	$error = "شما از قبل وارد شده اید";
	header("Location: ../index.php".$error);
}

/**
* Set The ip session
*/
if (!isset($_SESSION['my_ip'])) {
	$get_real_ip_of_user = $db->get_real_ip_adress();
	$_SESSION['my_ip'] = $get_real_ip_of_user;
}
else{
	$real_ip = $db->get_real_ip_adress();
	if ($_SESSION['my_ip'] !== $real_ip ) {
		$error = "سلام شما اجازه دسترسی به وب را ندارید";
		header("Location: ../index.php?error=".urldecode($error));
	}
}

/**
* Insert data into database
*/
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$personalcode = $_POST['personalcode'];

	$insert = $db->register_os($fname,$personalcode);
	if ($insert) {
		$get_info = $db->get_last_row("ostad");
		$get_info = $get_info->fetch_assoc();
		if ($get_info) {
			$info = array('full_name'=>$get_info['fname'] , 'personalcode'=>$get_info['personalcode'] , 'lessen_chose'=>false);
			$_SESSION['os_info'] = $info;
			$_SESSION['t_logged_in'] = $db->get_real_ip_adress;
			header("Location: ../ostad");
		}else{echo "get info prob";}
	}else{echo "insert prob";}
}
else{
	$error = "خطای نا شناخته";
	header("Location: ../index.php?error=".urlencode($error));
}