<?php
	session_start();
	parse_str($_SERVER['QUERY_STRING'],$a);
	$con=mysql_connect("localhost","root");
	mysql_select_db("nvsp_ad",$con);
	if($a['old']==$_SESSION['password']){
		$sql="update users set password='".$a['new']."' where mobile=".$_SESSION['mobile'];
		if(mysql_query($sql,$con)){
			$_SESSION['password']=$a['new'];
			echo "true";
		}
		else{
			echo mysql_error();
		}
	}
	else{
		echo "false";
	}
	
?>