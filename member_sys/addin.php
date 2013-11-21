<?
//判斷欄位資料是否為空白
//若欄位資料空白則呼叫msg副程式
if (empty($_REQUEST["username"]))
{
 msg("您忘記輸入大名啦!!");
}
else if(empty($_REQUEST["email"]))
{
 msg(!"您忘記輸入E-Mail啦!!");
}
else if(empty($_REQUEST["loginname"]))
{
 msg("您忘記填寫登入名稱啦!!");
}
else if(empty($_REQUEST["Pass1"]))
{
 msg("您忘記填寫登入密碼啦!!");
}
else
{
//接收來自『加入會員』表單中的欄位資料
$username = $_REQUEST["username"];
$email = $_REQUEST["email"];
$loginname = $_REQUEST["loginname"];
$Pass1 = $_REQUEST["Pass1"];
}

//連結MySQL Server
    $conn = mysql_connect("localhost", "root", "123456");
//選擇資料庫
    mysql_select_db("activity", $conn);       
//指定提取資料的校對字元表
    mysql_query("set character set utf8");
//建立查詢字串用以判斷登入名稱是否重複
$SQL="Select loginname From student Where loginname='" . $loginname . "'";
$RS=mysql_query($SQL);

if (!mysql_fetch_array($RS))
{
 //如果登入名稱沒有人使用則寫入會員資料
 $sql = "Insert Into student (loginname, Pass1, username, email) Values ('";
 $sql = $sql . $loginname . "', '";
 $sql = $sql . $Pass1 . "', '";
 $sql = $sql . $username . "', '";
 $sql = $sql . $email . "')";
 mysql_query($sql);
 msg("線上加入會員成功\!!");
}
else  //登入名稱重複
{
 msg("您的登入名稱 $loginname 已經有人使用!!");
}
?>

<? 
function msg($info) 
{
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>加入會員狀況</title>
</head>
<BODY>
   <CENTER>
   <H2><Font Color=red><?=$info?><HR size="1" color="#FF0066">
   <FORM>
   <INPUT Type=Button Value="上一頁" OnClick="history.back();">
   </FORM>
   </CENTER>
   </font>
</BODY>
</html>
<?
exit();    
} 
?>