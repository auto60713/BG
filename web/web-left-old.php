<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title></title>
  <script>
  
  function getUserlist() {
	var myobject = {
		ValueA : 'H26010001',
		ValueB : 'H26010002',
		ValueB : 'H260100003'
	};
	var select = document.getElementById("example-select");
	for(index in myobject) {
		select.options[select.options.length] = new Option(myobject[index], index);
	}
  }
  
  function sidChg(sidName){
	document.myPic.src="img/" +picName
  }
  </script>
  </head>
  
  <body onload="">
  <img width="100" height="100" src="images/left_1.jpg">  
  <br><br>  
  選擇人物<br>
  
  <?
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="123456"; // Mysql password 
	$db_name="activity"; // Database name 
	$tbl_name1="student"; // Table name 
	
	$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	mysql_query("SET NAMES 'utf8'");

	$result = mysql_query("SELECT stuId,stuName FROM $tbl_name1");
	echo "<select name=student value=''>Student Name</option>";
	// printing the list box select command

	while($row=mysql_fetch_array($result)){//Array or records stored in $nt
		echo "<option value='$row[stuId] $row[stuName]'</option>";
		echo $row['stuId'] . " " . $row['stuName'];
		echo "<br />";
		/* Option values are added by looping through the array */
	}
	echo "</select>";// Closing of list box 
?>
 </body>
</html>
