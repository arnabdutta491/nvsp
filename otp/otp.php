<?php 
include_once ("../email_sent/email_send.php");
$a = $_POST;
$con=mysql_connect("localhost","root");
if(!$con)
{
    die("could not connect!".mysql_error());
}
mysql_select_db("nvsp_ad",$con);
$email = $a['email'];
if ($a['id'] == 1)
{
    // create otp and save 
    $num = array_merge(range(0,9));
    shuffle($num);
    $n = substr(implode($num), 0, 6);
    $res = email($n,$email);
    if (!$res) //change korte hobe
    {
        
        $query="insert into `user_otp` (`user_email`,`otp`,`flag`) values('".$a['email']."','".$n."','1')";
		if(mysql_query($query,$con))		
			echo 1;
		else
			echo 3;
    }
    else{
        echo 2;
    }
}
else if ($a['id'] == 2)
{

    // get the otp of an user
    echo "select otp from user_otp where flag = '1' and  user_email='".$a['email']."' order by id desc limit 1";
    if($result=mysql_query("select otp from user_otp where flag = '1' and  email='".$a['email']."' order by id desc limit 1",$con)){
		$num=mysql_num_rows($result);
        $row=mysql_fetch_array($result);
        // echo $row[0] == $a['otp'];
        echo $row;
        echo  $a['otp'];
        $match_otp =  "";
        if ($row[0] == $a['otp'])
        {
            mysql_query("update user_otp set  flag = '0' where  email='".$a['email']."' order by id desc limit 1",$con);
        }
        $data =  array('id' => "2");
	}
	else
    {
        $data =  array("id" => "1");
    }
    echo json_encode($data);
}
?>