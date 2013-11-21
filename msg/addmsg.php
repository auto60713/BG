<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title>麻辣家族留言板</title> 
</head> 
<body>
<div align="center">
<p align="center">
<font size="2">
<img src="../images/title.gif"> 
</font> 
<br>
<font size="5"><a href="guest.php">
<img border="0" src="../images/star.gif" align="absmiddle">
我有話要說!!!<img border="0" src="../images/star.gif" align="absmiddle">
</a></font> </div> 
<form name="addmsg" method="POST" action="add.php"> 
<div align="center"> 
<table border="1" cellspacing="0" style="border-collapse: collapse" 
bordercolor="#FFFFFF" cellpadding="0"> 
<tr><td bgcolor="#339933" align="center" valign="middle" width="147">
<font color="#FFFFFF" size="2">留言主題</font></td> 
<td height="25" bgcolor="#E8FFE8"><font size="2">
<input type="text" name="subject" size="50" value maxlength="20">
</font></td></tr> <tr>
<td bgcolor="#339933" align="center" valign="middle" width="147">
<font color="#FFFFFF" size="2">您的大名</font></td>
<td height="25" bgcolor="#E8FFE8"><font size="2">
<input type="text" name="name" size="20" maxlength="20"></font></td>
</tr>
<tr> 
<td bgcolor="#339933" align="center" valign="middle" width="147">
<font color="#FFFFFF" size="2">E-Mail</font></td>
<td height="25" bgcolor="#E8FFE8"><font size="2">
<input type="text" name="email" size="35" maxlength="40"></font></td>
</tr>
<tr>
<td bgcolor="#339933" align="center" height="27" valign="middle" width="147">
<font size="2" color="#FFFFFF">代表圖形</font></td>
<td height="27" bgcolor="#E8FFE8">
<font size="2">
<input type="radio" name="pic" value="1" checked ><img src="../images/1.gif">
<input type="radio" name="pic" value="2"><img src="../images/2.gif">
<input type="radio" name="pic" value="3"><img src="../images/3.gif">
<input type="radio" name="pic" value="4"><img src="../images/4.gif">
<input type="radio" name="pic" value="5"><img src="../images/5.gif">
<input type="radio" name="pic" value="6"><img src="../images/6.gif">
<input type="radio" name="pic" value="7"><img src="../images/7.gif">
<input type="radio" name="pic" value="8"><img src="../images/8.gif">
<input type="radio" name="pic" value="9"><img src="../images/9.gif">
<input type="radio" name="pic" value="10"><img src="../images/10.gif">
</font>
</td>
</tr>
<!--私人留言或公開--> 
<tr>
<td bgcolor="#339933" align="center" width="147">
<font color="#FFFFFF" size="2">留言性質</font></td>
<td bgcolor="#E8FFE8">
<font size="2">
<select name="personal" size="1">
<option value="0" selected>大家來討論</option> 
<option value="1">只給板主看</option> 
</select> 
</font> 
</td> 
</tr>
<!--留言內容欄位-->
<tr>
<td bgcolor="#339933" align="Center" height="98" valign="middle" width="147">
<font color="#FFFFFF" size="2">留言內容：</font> 
</td>
<td height="98" valign="middle" bgcolor="#E8FFE8"> 
<font size="2"> 
<textarea name="memo" cols="50" rows="4" ></textarea>
</font>
</td></tr><tr><td align="Center" colspan="2">
<font size="2"><input type="submit"value="送出意見">
<input type="reset" value="重填資料"></font></td>
</tr></table></div>
</form></center> 
</body></html>