<?php 
	session_start();
	parse_str($_SERVER['QUERY_STRING'],$a);
	if($a['c']==$_SESSION['captcha']){
		echo 'true';
		$_SESSION["mobile"]=$a['mobile'];
	}else
		echo 'false';
?>