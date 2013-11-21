<? ob_start();
   session_start();
?>

<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登出</title>
</head><body><?
  //  echo "loginname=".$loginname;
	
	$con = mysql_connect("localhost","root","123456");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("activity", $con);
//	$query="UPDATE student SET active=0 WHERE loginname='$loginname'";
	$query="UPDATE student SET active=0";
	echo $query;
	
	mysql_query($query);
	mysql_close($con);
	
	session_unset();
    session_destroy();
    header("Location:../nav3.html");	
   ?></body></html>
