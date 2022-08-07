<?php
	session_start();
	$data  = $_POST;
	$con=mysql_connect("localhost","root");
	if(!$con)
		die("could not connect!".mysql_error());
	mysql_select_db("nvsp_ad",$con);
	if($data['isepic']=="True"){
		if($result=mysql_query("select * from users where epic='".$data['epic']."' or email = '".$_SESSION["email"]."'",$con)){
			$num=mysql_num_rows($result);
			if($num>0){
				echo 5;
			}
			else{
				$query="insert into users values('".$data['phno']."','','','".$data['epic']."','".$_SESSION["email"]."','".$data['pwrd']."')";
				echo json_encode($query);
				if(mysql_query($query,$con))
					echo 1;
				else
					echo 3;
			}
		}
		else
			echo 3;
		
	}
	
	else{
		$epic = create_epic();
		$query="insert into `users` (`mobile`,`first`,`last`,`email`,`password`,`epic`) values('".$data['phno']."','".$data['first']."','".$data['last']."','".$_SESSION["email"]."','".$data['pwrd']."','".$epic."')";
		if(mysql_query($query,$con))		
			echo 1;
		else
			echo 3;
	}
	
	function create_epic()
	{
		$word = array_merge(range('A', 'Z'));
		shuffle($word);
		$w = substr(implode($word), 0, 3);
		$num = array_merge(range(0,9));
		shuffle($num);
		$n = substr(implode($num), 0, 5);

		return $w.$n;
	}
?>