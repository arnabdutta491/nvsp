<?php
	session_start();
	parse_str($_SERVER['QUERY_STRING'],$data);
	$con=mysql_connect("localhost","root");
	if(!$con)
		die("could not connect!".mysql_error());
	mysql_select_db("nvsp",$con);
	if($data['isepic']=="True"){
		if($result=mysql_query("select * from users where epic='".$data['epic']."'",$con)){
			$num=mysql_num_rows($result);
			if($num>0){
				echo "epic_exist";
			}
			else{
				$query="insert into users values(".$_SESSION["mobile"].",'','','".$data['epic']."','".$data['email']."','".$data['pwrd']."')";
				if(mysql_query($query,$con))
					echo "successful";
				else
					echo mysql_error();
			}
		}
		else
			echo mysql_error();
		
	}
	else{
		$query="insert into users values(".$_SESSION["mobile"].",'".$data['first']."','".$data['last']."','','".$data['email']."','".$data['pwrd']."')";
		if(mysql_query($query,$con))		
			echo "successful";
		else
			echo mysql_error();
	}
?>