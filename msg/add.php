<?
//接收addmsg.php傳來的資訊
$subject=$_REQUEST["subject"];
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$pic=$_REQUEST["pic"];
$memo=nl2br($_REQUEST["memo"]);
$personal = $_REQUEST["personal"];

//連結MySQL Server
    $conn = mysql_connect("localhost", "root", "123456");
//選擇資料庫
    mysql_select_db("Message", $conn);
//指定提取資料的校對字元表
    mysql_query("set character set utf8");   

//將單引號置換為雙引號
Function chgStr($data)
{
   $chgStr = "'" . str_replace("'", "''", $data) . "'";
   return $chgStr;
}

//將資料寫入資料庫
$sql = "Insert Into allmessage (網友姓名, 留言主題, 聯絡信箱, 留言內容, 私人公開, 圖形, 留言時間) Values (";
$sql = $sql . chgStr($name) . ",";
$sql = $sql . chgStr($subject) . ",";
$sql = $sql . chgStr($email) . ",";
$sql = $sql . chgStr($memo) . ",";
$sql = $sql . chgStr($personal) . ",";
$sql = $sql . $pic . ",'";
$sql = $sql . date("Y-m-j H:i:s") . "')";
mysql_query($sql);

//將網頁轉向至顯示留言意見的網頁guest.php
header("Location: guest.php"); 
?>