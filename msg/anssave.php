<?
$ID =$_REQUEST["ID"];
$Ans=$_REQUEST["Ans"];

//連結MySQL Server
    $conn = mysql_connect("localhost", "root", "123456");
//選擇資料庫
    mysql_select_db("Message", $conn);
//指定提取資料的校對字元表
    mysql_query("set character set utf8");   
//建立查詢字串
$SQL="update allmessage set 板主回覆='" . nl2br($Ans) . "',板主回覆時間='" .
        date("Y-m-j H:i:s") . "' WHERE 編號=" . $ID;
//寫入資料
mysql_query($SQL);

header("Location: guest.php");
?>