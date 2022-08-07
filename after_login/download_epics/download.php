<?php
	$a = $_POST;
	$con=mysql_connect("localhost","root");
	if(!$con)
	{
		die("could not connect!".mysql_error());
	}
	mysql_select_db("nvsp_ad",$con);
    // $arr = [];
    // echo "select * from users where email='".$a['epic']."'";
	if($result=mysql_query("select email from users where epic='".$a['epic']."'",$con)){
		$num=mysql_num_rows($result);
        $row=mysql_fetch_array(	$result);
        $data =  array('data' => $row[0],"len" => $num );
	}
	else
    {
        $data =  array("len" => $num);
    }
    // array_push($data,$arr);

    echo json_encode($data);
?>