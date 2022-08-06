<?php 
	session_start();
	parse_str($_SERVER['QUERY_STRING'],$a);
	if($a['c']==$_SESSION['captcha'])
		echo 'true';
	else{
		echo 'false';
	}
?>