<?php 
	session_start();
	// parse_str($_SERVER['QUERY_STRING'],$a);
	$a = $_POST;
	if($a['txtCaptcha']==$_SESSION['captcha']){
		echo 'true';
		$_SESSION["email"]=$a['email'];
		
	}else
		echo 'false';
?>