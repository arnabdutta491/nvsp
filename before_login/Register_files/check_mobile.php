<?php
	parse_str($_SERVER['QUERY_STRING'],$a);
	$con=mysql_connect("localhost","root");
	if(!$con)
		die("could not connect!".mysql_error());
	mysql_select_db("nvsp",$con);
	if($result=mysql_query("select * from users where mobile=".$a["mobile"],$con)){
		$num=mysql_num_rows($result);
		if($num>0)
			echo "false";
		else
			echo "true";
	}
	else
		echo "error";
?>