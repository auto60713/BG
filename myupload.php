<? session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>上傳</title></head>
<body>
<?
//inener登入資料庫好像沒用
//include("inner3.php");
 if (isset($_GET['loginname']))
    { $loginname=$_GET['loginname'];    }	
 else
  {  }
  
  //$str2="select * from student where loginname = '$loginname';";   
  //$result2=mysqli_query($link,$str2); 
  //$list=mysqli_fetch_array($result2);   
  
//自行登入
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="activity"; // Database name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'");

 

//自家用
  $userID = ltrim($loginname);
  $photo_date = date('Ymd', time());
  ?>


<? 



$classID="A001";

$stuId=$loginname;
$bak9="bak";

if(is_dir($classID)) { 
	//echo '$classID dir existed...<br>'; 
} else { 
	echo '$classID dir not existed...<br>'; 
	mkdir($classID);
} 
	//	echo "Insert member Successful";
if(is_dir($classID."/".$stuId)) { 
	//echo '$stuID dir existed...<br>'; 
} else { 
	mkdir($classID."/".$stuId);
	mkdir($classID."/".$stuId."/bak");
} 		





//多張上傳


$files=array();
$fdata=$_FILES['imageURL'];

if (is_uploaded_file($_FILES["imageURL"]["tmp_name"][0])) {
if(is_array($fdata['name'])){
for($i=0;$i<count($fdata['name']);++$i){
$uid = uniqid();
if ( copy($_FILES["imageURL"]["tmp_name"][$i],$classID."/".$stuId."/".$uid.".jpg")) {
$photoPath = $classID."/".$stuId."/".$uid.".jpg";
$query = "INSERT INTO photo (userID,date,location) VALUES ('$userID', $photo_date, '$photoPath')" or die("insert class member error");
$result=mysql_query($query);
// echo "檔案上傳成功<br>";
unlink($_FILES["imageURL"]["tmp_name"][$i]);
} else {
echo "檔案上傳失敗, imageURL<br>";
}
}
} else {
$files[]=$fdata;
if ( copy($_FILES["imageURL"]["tmp_name"],$classID."/".$stuId."/".$_FILES["imageURL"]["name"])) {
unlink($_FILES["imageURL"]["tmp_name"]);
} else {
echo "檔案上傳失敗, imageURL<br>";
}
}
} else {
echo "請選擇檔案<br>";
}



 //$query = "INSERT INTO photo (userID,date,location) VALUES ('$userID', $photo_date, '$photoPath')" or die("insert class member error");
 //$result=mysql_query($query);
 
 
?>
   <script language="JavaScript">
      alert("檔案上傳成功");
      history.go(-2);
   </script> 
   <?   
?>
</body>
</html>