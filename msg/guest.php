<?
session_start("set character set utf8");
//連結SQL Server
    $conn = mysql_connect("localhost", "root", "123456");
//選擇資料庫
    mysql_select_db("Message", $conn);
//指定提取資料的校對字元表
    mysql_query("set character set utf8");  
//建立查詢字串
$SQL="Select * From allmessage Order By 留言時間 Desc";

//分頁筆數設定
$nums=3;
      //將回傳結果存放於變數中
      $datalist=mysql_query($SQL);
      //取得欄位數量
      $fieldnum=mysql_num_fields($datalist);
      //取得資料錄數量
      $rowsnum=mysql_num_rows($datalist);
      //計算總共有多少分頁
      if (($rowsnum / $nums) >intval($rowsnum / $nums))
       {
        $TotalPage=intval($rowsnum / $nums)+1;
       }
      else
       {
        $TotalPage=intval($rowsnum / $nums);
       }
      
//決定開始顯示的分頁
//若未指定分頁則預設顯示第一頁
if (! isset($_REQUEST["ToPage"])) 
{
  $GoPage=1;
}
//若指定分頁數小於1則預設顯示第一頁
else if ($_REQUEST["ToPage"]<1) 
{
  $GoPage=1;
}
//若指定指定的分頁超過總分頁數則顯示最後一頁
else if ($_REQUEST["ToPage"]>$TotalPage)
{
  $GoPage=$TotalPage;
}
else
{
$GoPage=$_REQUEST["ToPage"];
}
//將作用中資料錄位置移到分頁的第一筆資料錄上來開始顯示內容
  mysql_data_seek($datalist,($GoPage-1)*$nums);  

//*****管理模式檢驗*****
//以下為進入管理模式的敘述
if (isset($_REQUEST["password"]))
{
  if ($_REQUEST["password"]=="test")//<-----管理密碼
     {
      $_SESSION["checkedit"]="yes";
     }
}

//以下為脫離管理模式的程式敘述
if (isset($_REQUEST["goexit"]))
{
  if ($_REQUEST["goexit"]=="yes")
     {
      $_SESSION["checkedit"]="no";
     }
}
?>
<!DOCTYPE HTML>
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf8"> 
<title>畢輯網-留言板</title>
<link rel="stylesheet" type="text/css" href="../menu.css" />
<style type="text/css">

html { 
		overflow: hidden; 
	} 

.page_show {
	text-align:center;
	}	
	.name1 {
position:absolute;
right:120px;
font-size:20px;
color:#1E1E78;
font-family:標楷體;
}
	.w7{
		text-align:center;
		}
</style>

</head> 
<body>
<div id="menu">
<ul class="navi">
   <li><a href="../member_sys/mylist.php">回首頁</a></li>        	   
</ul>
</div>


  
 
<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?> </p>

<br>

<div align="center">
<br>
<a href="../msg.php">
<img border="0" src="../images/star.gif" align="absmiddle">
<big><B>我要留言<B></big>
<img border="0" src="../images/star.gif" align="absmiddle">
</a>
</div>
<br>

<form method="post" name="formpage">
<table class="w7" border="0" width="100%" cellpadding="0" cellspacing="0" style="font-size: 10 pt; border-collapse: collapse" bordercolor="#111111" >
 <tr>
 
<td>
目前共有<?=$rowsnum;?>筆留言;
目前顯示第<?=$GoPage;?>頁留言;
共<?=$TotalPage;?>頁
</tr></table> 
</form> 
<br>
<!-----讀入與顯示資料錄----->
<?
for ($y=0;$y<$nums;$y++)
{
  //將資料錄轉換為欄位陣列集合
  if (($fielddatas=mysql_fetch_array($datalist)))
{
?>
<table border=0 width=50% bgcolor=#FFFFB4 style="border-collapse: collapse; font-size: 10 pt" align="center" bordercolor="#111111" cellpadding="0" cellspacing="0">
<tr>
<td><fieldset id=info align=center style='margin:5'>
  <img src="../images/<?=$fielddatas["圖形"];?>.gif" border="0">&nbsp<?=$fielddatas["網友姓名"];?>&nbsp於<?=$fielddatas["留言時間"];?>發表&nbsp&nbsp 

 <table border="1" width=100% bordercolor="#FF80C0" style="border-collapse: collapse; font-size: 10 pt" cellpadding="0" cellspacing="0"> 
  <tr>
 <td  valign="top" align="left">
<!-----如果是公開模式或是板主管理模式則顯示留言內容---------->
<? if ($fielddatas["私人公開"] == 0 || @$_SESSION["checkedit"]=="yes") {?>
<font color="#965A00">留言主題：</font>
<font color="#000000"><?=$fielddatas["留言主題"];?></font>
<br><font color="#5A2D00"><?=$fielddatas["留言內容"];?></font>
<!-----非公開模式或非板主管理模式則不顯示留言內容------------>
<?
}
else{
?>
 <FONT COLOR=BLUE>:) 這是留給板主的悄悄話...</FONT>
  <br><font color="#FF00F00">私人討論</font> 
<? }?>
  </td></tr>
<!------如果板主有回覆則顯示回覆內容------------------------->
 <?if (@!empty($fielddatas["板主回覆"])) {?> 
<tr bgcolor="#3399FF"> 
  <td align="left" valign=top bgcolor="#783C00" >  
  <font color="#FFFF78">板主於<?=$fielddatas["板主回覆時間"];?>回覆：</font> 
  <br>
<font color="#FFFFF0"><?=$fielddatas["板主回覆"];?></font> 
</td></tr> 
  <? } ?>
<!------如果為板主管理模式則出現回覆留言的連結----------------->
  <? if (@$_SESSION["checkedit"]=="yes") { ?>
<tr><td>
  <DIV ALIGN=RIGHT>【<a href=ans.php?ID=<?=$fielddatas["編號"];?>>板主回覆</a>】</DIV>
</td></tr>
  <?}?>
 </table> 
 </td></tr></table><br> 
<? 
}
}
?> 
<p>
<!-----管理模式選擇---------->
<form method="post">
<?if (@$_SESSION["checkedit"]=="yes") {?>
<input type="hidden" value="yes" name="goexit">
<input type="submit" value="離開管理模式">
<?
}
else{
?>
<?}?>
</form>



<!-------顯示頁選擇與分頁設定開始---------->
<nav class="page_show">
<?
for ($I=1; $I<=$TotalPage; $I++)
{
//如果非正在顯示的分頁則建立頁碼連結
   IF ($I != $GoPage )
      { 
      $myURL=$_SERVER["PHP_SELF"] . "?ToPage=";
      echo "<a href=" . $myURL . $I . ">" . $I . "</a>|" ;
      }
//如果是正在顯示的方頁則單純顯示頁碼
   else
      { 
      echo $I . "|" ;
      }
}
?>
</nav>
<!-------顯示頁選擇與分頁設定結束----------> 


</body>  
</html>