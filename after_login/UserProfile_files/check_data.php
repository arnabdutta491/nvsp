<?php
	session_start();
	parse_str($_SERVER['QUERY_STRING'],$a);
	$con=mysql_connect("localhost","root");
	mysql_select_db('nvsp',$con);
	$result=mysql_query("select * from users where mobile=".$a['mobile'],$con);
	$num=mysql_num_rows($result);
	if($a['mobile']!=$_SESSION['mobile'] && $num>0)
			echo 'mobile_exist';
	else{
		if(strlen($a['epic'])==0){
			$sql="update users set mobile=".$a['mobile'].",first='".$a['f_name']."',last='".$a['l_name']."',epic='".$a['epic']."',email='".$a['email']."' where mobile=".$_SESSION['mobile'];
			if(mysql_query($sql,$con)){
				echo "true";
				$_SESSION['mobile']=$a["mobile"];
				$_SESSION['f_name']=$a["f_name"];
				$_SESSION['l_name']=$a["l_name"];
				$_SESSION['epic']=$a["epic"];
				$_SESSION['email']=$a["email"];
			}
			else
				echo mysql_error();
		}
		else{
			$result=mysql_query("select * from users where epic='".$a['epic']."'",$con);
			$num=mysql_num_rows($result);
			if($a['epic']!=$_SESSION['epic'] && $num>0)
				echo 'epic_exist';
			else{
				$sql="update users set mobile=".$a['mobile'].",first='".$a['f_name']."',last='".$a['l_name']."',epic='".$a['epic']."',email='".$a['email']."' where mobile=".$_SESSION['mobile'];
				if(mysql_query($sql,$con)){
					echo "true";
					$_SESSION['mobile']=$a["mobile"];
					$_SESSION['f_name']=$a["f_name"];
					$_SESSION['l_name']=$a["l_name"];
					$_SESSION['epic']=$a["epic"];
					$_SESSION['email']=$a["email"];
				}
				else
					echo mysql_error();
			}
		}
	}
?>