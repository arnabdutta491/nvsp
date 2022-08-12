<?php 
include_once ("../email_sent/email_send.php");
$a = $_POST;
$con=mysql_connect("localhost","root");
if(!$con)
{
    die("could not connect!".mysql_error());
    $con=mysql_connect("localhost","root");

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
    $res = true;
    if ($res) //change korte hobe
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
    // echo "select otp from user_otp where flag = '1' and  user_email='".$a['email']."' order by id desc limit 1";
    $sql = "select otp from user_otp where flag = '1' and  user_email='".$a['email']."' order by id desc limit 1";
    // echo $sql;
    $result = mysql_query($sql,$con);

    if(mysql_num_rows($result) > 0){
		// $num=mysql_num_rows($result);
        $row=mysql_fetch_array($result);
        // echo $row[0] == $a['otp'];
        // echo json_encode($row);
        // echo  $a['otp'].'\n';
        // echo $row['otp'];
        // $match_otp =  "";
        if ($row['otp'] == $a['otp'])
        {
            $update_sql = "update user_otp set  flag = '0' where  user_email='".$email."' order by id desc limit 1";
            mysql_query($update_sql,$con);
            $data =  array('id' => "2");

        }
        else{
            $data =  array('id' => "3");


        }
	}
	else
    {
        $data =  array("id" => "1");
    }
    echo json_encode($data);
}
?>