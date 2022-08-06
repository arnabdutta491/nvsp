<?php
	$a = $_POST;
	$con=mysql_connect("localhost","root");
	if(!$con)
		die("could not connect!".mysql_error());
	mysql_select_db("nvsp",$con);
	if($result=mysql_query("select * from users where email=".$a["email"],$con)){
		$num=mysql_num_rows($result);
		if($num>0)
			return false;
		else
			return true;
	}
	else
		echo "error";
?>