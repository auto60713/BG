<!DOCTYPE HTML>
<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<?php
$classID="A001";
//$loginname="h24831276";
$loginname=$_GET['value'];

//取得傳遞過來的資料
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="activity"; // Database name 
$tbl_name1="photo"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'");

?>
<head>
<link rel="stylesheet" href="lb/lightbox.css" type="text/css" />
<script type="text/javascript" src="lb/lightbox.js"></script>
</head>

<body>

<?

$query = "SELECT location FROM photo WHERE userID='".$loginname."'";
$result=mysql_query($query);

  while ($row=mysql_fetch_array($result)) {
  //echo "id=".$row['photoID'];
   	
    echo "<a href='../".$row['location']."' rel='lightbox'><img src='../".$row['location']."' width='80' height='80'/></a> ";
    }
?>
  
</body>
</html>