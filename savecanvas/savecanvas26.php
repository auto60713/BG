<?php
//session_start();
//$usrDir = "A001/".$_SESSION[$loginname]."/";
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="activity"; // Database name 
$tbl_name="student"; // Table name 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
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
	// Get the data   
	//$usrDir = "A001/H24831276/";	
	//$usrDir =$_GET["loginname"]
	$imageData=$GLOBALS['HTTP_RAW_POST_DATA'];     
	// Remove the headers (data:,) part.      
	// A real application should use them according to needs such as to check image type    
	$filteredData=substr($imageData, strpos($imageData, ",")+1);     
	// Need to decode before saving since the data we received is already base64 encoded    
	$unencodedData=base64_decode($filteredData);     
	//echo "unencodedData".$unencodedData;    
	// Save file.  This example uses a hard coded filename for testing,     
	// but a real application can specify filename in POST variable    
	$fp = fopen( $usrDir.'pic6.jpg', 'wb' );    
	fwrite( $fp, $unencodedData);    
	fclose( $fp );
}
?>