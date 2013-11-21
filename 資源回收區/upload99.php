<html>
<head>
<meta charset="UTF-8">
<title>上傳</title></head>
<body>
<? 
function import() {
require_once 'Excel/reader.php';
// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();

// Set output Encoding.
$data->setOutputEncoding('big5');
$data->read('stu_list.xls');

error_reporting(E_ALL ^ E_NOTICE);

//取得傳遞過來的資料


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="activity"; // Database name 
$tbl_name1="class"; // Table name 
$tbl_name2="student"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'");

$classID=$_POST["classID"];
$className=$_POST["className"];
  
if(is_dir($classID)) { 
	'$classID dir existed...<br>'; 
} else { 
	'$classID dir not existed...<br>'; 
	mkdir($classID);
} 

if($result){
	

	}
$query = "delete from $tbl_name2";
mysql_query($query);

for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
	for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
		 "\"".$data->sheets[0]['cells'][$i][$j]."\",";
		if ($j==1) $classId=iconv("big5","utf-8",$data->sheets[0]['cells'][$i][$j]);
		if ($j==2) $loginname=$data->sheets[0]['cells'][$i][$j];
		if ($j==3) $username=iconv("big5","utf-8",$data->sheets[0]['cells'][$i][$j]);
		if ($j==4) $nickName=iconv("big5","utf-8",$data->sheets[0]['cells'][$i][$j]);	
		if ($j==5) $email=$data->sheets[0]['cells'][$i][$j];			
		if ($j==6) $cellPhone=$data->sheets[0]['cells'][$i][$j];
		if ($j==7) $pass1=$data->sheets[0]['cells'][$i][$j];
	}
	"\n";
	$query = "INSERT INTO $tbl_name2 (classId,loginname,username,nickName,email,cellPhone, pass1) VALUES ('$classId','$loginname','$username','$nickName','$email','$cellPhone','$pass1')" or die("insert class member error");
	$result=mysql_query($query);
	if($result){
	//	echo "Insert member Successful";
		if(is_dir($classID."/".$loginname)) { 
			'$loginname dir existed...<br>'; 
		} else { 
			mkdir($classID."/".$loginname);
			mkdir($classID."/".$loginname."/bak");
		} 		
	}
}
mysql_close();

//print_r($data);
//print_r($data->formatRecords);
}

// 儲存上傳的檔案
if ( copy($_FILES["myfile"]["tmp_name"],$_FILES["myfile"]["name"])) {
	
	?>
   <script language="JavaScript">
      alert("檔案上傳成功");
      history.go(-2);
   </script> 
   <?
   
   import();
   unlink($_FILES["myfile"]["tmp_name"]);
}

?>
</body>
</html>