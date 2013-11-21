<?
$ID = $_REQUEST["ID"]; 
//連結MySQL Server
    $conn = mysql_connect("localhost", "root", "123456");
//選擇資料庫
    mysql_select_db("Message", $conn);
//指定提取資料的校對字元表
    mysql_query("set character set utf8");   
//建立查詢字串
$SQL="SELECT * FROM allmessage WHERE 編號=" . $ID;
//將回傳結果存放於變數中
$datalist=mysql_query($SQL);
//將資料錄轉換為欄位陣列集合
$fielddatas=mysql_fetch_array($datalist);
?>

<html>
<head><title>留言板</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
</head>
<body>
<form method="POST" action="anssave.php">
  <input type="hidden" name="ID" value="<?=$ID;?>">
  <div align="center"><center><p><strong><font size="5">板主意見回覆</font></strong></p>
  </center></div><div align="center"><center>
<table border="0">
  <center></center>
  <TR>
  <td bgcolor="#CCCCFF"><font color="blue" size="2">網友姓名</font></td>
  <td bgcolor="#CCCCFF"><font size="2"><?=$fielddatas["網友姓名"];?></font></td>
</tr>
<tr>
  <td bgcolor="#CCCCFF"><font color="blue" size="2" >留言主題</font></td>
  <td bgcolor="#CCCCFF"><font size="2"><?=$fielddatas["留言主題"];?></font></td>
</tr>
<tr>
  <td bgcolor="#CCCCFF"><font color="blue" size="2" >留言內容</font></td>
  <td bgcolor="#CCCCFF"><font size="2"><?=$fielddatas["留言內容"];?></font></td>
</tr>
<tr>
  <td bgcolor="#CCCCFF"><font size="2" color="#0000FF">板主</font><font color="blue" size="2" >答覆</font></td>
  <td bgcolor="#CCCCFF"><font size="2"><textarea rows="5" name="Ans" cols="39"><?=$fielddatas["板主回覆"];?></textarea></font></td>
</tr>
  </table>
  </center></div><div align="center"><center><input type="submit"
  value="送出回覆">
  </center></div>
  <div align="center"><center>&nbsp;[<a href="guest.asp"><font color="#FF0000"><font onmouseover="this.style.color='#0000BB'" onmouseout="this.style.color='red'">返回留言板</font></font></a>] 
  </center></div>
</form>
<?
  mysql_close($conn);
?>
</body>
</html>