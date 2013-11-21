<?session_start();?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="menu.css" />
	<title>畢輯網-我要留言</title> 
</head>
<body>
<style type="text/css"> 
	html { 
		overflow: hidden; 
	} 
	body { 
	
     padding-left:8.5%;
	}
	.name1 {
position:absolute;
right:120px;
font-size:20px;
color:#1E1E78;
font-family:標楷體;
}
</style> 

<ul class="navi">
   <li><a href="member_sys/mylist.php">回首頁</a></li>   
   <li><a href="msg/guest.php">回留言板</a></li>    
</ul>
<br>
<br>
<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?> </p>
<br>
<div align="center">

<p align="center"
<br>
<font size="5">


<br><img border="0" src="images/star.gif"><b>~~留下屬於感動的回憶字句~~<b><img border="0" src="images/star.gif">

</font> 
</div> 

<form name="addmsg" method="POST" action="msg/add.php"> 
<div align="center"> 
<br><table border="1" cellspacing="0" style="border-collapse: collapse" 
bordercolor="#FFFFFF" cellpadding="0"> 
<tr><td bgcolor="#DAA520" align="center" valign="middle" width="300">
<font color="#FFFFFF" size="2">留言主題</font></td> 
<td height="50" bgcolor="#DAA520"><font size="2">
<input type="text" name="subject" size="50" value maxlength="300">
</font></td></tr> <tr>
<td bgcolor="#DAA520" align="center" valign="middle" width="300">
<font color="#FFFFFF" size="2">您的大名</font></td>
<td height="50" bgcolor="#DAA520"><font size="2">
<input type="text" name="name" size="20" maxlength="20"></font></td>
</tr>

<tr>
<td bgcolor="#DAA520" align="center" height="27" valign="middle" width="300">
<font size="2" color="#FFFFFF">代表圖形</font></td>
<td height="27" bgcolor="#DAA520">
<font size="2">
<input type="radio" name="pic" value="1" checked ><img src="images/1.gif">
<input type="radio" name="pic" value="2"><img src="images/2.gif">
<input type="radio" name="pic" value="3"><img src="images/3.gif">
<input type="radio" name="pic" value="4"><img src="images/4.gif">
<input type="radio" name="pic" value="5"><img src="images/5.gif">
<input type="radio" name="pic" value="6"><img src="images/6.gif">
<input type="radio" name="pic" value="7"><img src="images/7.gif">
<input type="radio" name="pic" value="8"><img src="images/8.gif">


</font>
</td>
</tr>
<!--私人留言或公開--> 

<!--留言內容欄位-->
<tr>
<td bgcolor="#DAA520" align="Center" height="98" valign="middle" width="147">
<font color="#FFFFFF" size="2">留言內容：</font> 
</td>
<td height="98" valign="middle" bgcolor="#DAA520"> 
<font size="2"> 
<textarea name="memo" cols="50" rows="4" ></textarea>
</font>
</td></tr><tr><td align="Center" colspan="2">
<font size="2"><input type="submit"value="送出意見">
<input type="reset" value="重填資料"></font></td>
</tr>
</table>
</div>
</form>
</center> 

</body>
</html>
