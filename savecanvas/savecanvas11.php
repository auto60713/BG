<? session_start(); ?>
<?php
//session_start();
//$usrDir = "A001/".$_SESSION[$loginname]."/";
$host="localhost"; // Host name 
$bgusername="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="activity"; // Database name 
$tbl_name="student"; // Table name 
mysql_connect("$host", "$bgusername", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'");
$query = "SELECT loginname FROM student WHERE active=1";
$result=mysql_query($query);
$row = mysql_fetch_array($result,  MYSQL_ASSOC);
echo $row['loginname']."<br>";
$usrDir = "../A001/".$row['loginname']."/";
mysql_free_result($result);

echo $usrDir."<br>";

if (isset($GLOBALS["HTTP_RAW_POST_DATA"]))
{    
	
	$imageData=$GLOBALS['HTTP_RAW_POST_DATA'];     
	 
	$filteredData=substr($imageData, strpos($imageData, ",")+1);     

	$unencodedData=base64_decode($filteredData);     

	$fp = fopen( $_GET['pic'], 'wb' );    
	fwrite( $fp, $unencodedData);    
	fclose( $fp );
}
?>