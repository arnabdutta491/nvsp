<?php
	session_start();
	// parse_str($_SERVER['QUERY_STRING'],$a);
	$s=$_POST['uname'];
	$isnum=true;
	for($i=0;$i<strlen($s);$i++){
		if($s[$i]>='0' && $s[$i]<='9')
			$isnum=true;
		else{
			$isnum=false;
			break;
		}
	}
	$con=mysql_connect("localhost","root");
	if(!$con)
		die("could not connect!".mysql_error());
	mysql_select_db("nvsp_ad",$con);
	if($isnum==true){
		if($result=mysql_query("select * from users where (mobile=".$a["data"]." or email='".$a["data"]."') and password='".$a["pwrd"]."' limit 1",$con)){
			$num=mysql_num_rows($result);
			if($num>0){
				$row=mysql_fetch_array($result);
				$_SESSION['mobile']=$row["mobile"];
				$_SESSION['f_name']=$row["first"];
				$_SESSION['l_name']=$row["last"];
				$_SESSION['epic']=$row["epic"];
				$_SESSION['email']=$row["email"];
				$_SESSION['password']=$row["password"];
				echo "true";
			}
			else
				echo "false";
		}
		else{
			echo "error1";
		}
	}
	else{
		if($result=mysql_query("select * from users where email='".$a["data"]."' and password='".$a["pwrd"]."' limit 1",$con)){
			$num=mysql_num_rows($result);
			if($num>0){
				$row=mysql_fetch_array($result);
				$_SESSION['mobile']=$row["mobile"];
				$_SESSION['f_name']=$row["first"];
				$_SESSION['l_name']=$row["last"];
				$_SESSION['epic']=$row["epic"];
				$_SESSION['email']=$row["email"];
				$_SESSION['password']=$row["password"];
				echo "true";
			}
			else
				echo "false";
		}
		else
			echo "error2";
	}
?>