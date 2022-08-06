<?php
session_start();
$data="";
$i=1;
	while($i<=5){
		$n=rand(48,123);
		if(($n>=48 and $n<=57) or ($n>=65 and $n<=90) or($n>=97 and $n<=122)){
			$data.=strval(chr($n));
			$i++;
		}
	}
	$_SESSION["captcha"]=$data;
	echo $data;
?>