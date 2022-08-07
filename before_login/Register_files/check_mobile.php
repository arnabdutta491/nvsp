<?php
	$a = $_POST;
	// echo json_encode($a);
	$con=mysql_connect("localhost","root");
	if(!$con)
	{
		die("could not connect!".mysql_error());
	}
	mysql_select_db("nvsp_ad",$con);
	// echo json_encode(mysql_query("select * from users where email='".$a['email']."'",$con));
	if($result=mysql_query("select * from users where email='".$a['email']."'",$con)){
		
		$num=mysql_num_rows($result);
		// echo json_encode($num);
		if($num>0)
			echo false;
		else
			echo true;
	}
	else
		echo "error";
?>