

 <!DOCTYPE html>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link rel="stylesheet" type="text/css" href="../menu.css" />
 <title>畢輯網-登入</title>
 </head>
 <style type="text/css"> 
	html { 
		overflow: hidden; 
	} 

	
	.table9{

border-color:#400000;
margin-left:320px;

		 
		}

	
</style>
 <body>
 <div id="menu">

<ul class="navi">

 <li><a href="../nav3.html">回首頁</a></li>
 

 <br>
  <br>
   <br>
    <br>
	 <br>
	 <br>
  <br>
   <br>
    <br>
	 <br>
	 <br>
  
	 
 <form action="input.php" method="post"  >
  <table width="28%" border="4" class="table9"  >
    <tr>
      <td width="20%">帳號： </td>
      <td width="85%"><input type="text" name="loginname"> </td>
    </tr>
    <tr> 
      <td>密碼：</td>
      <td><input type="password" name="password1"></td>
    </tr>
     <td> </td>
  <br>
    <td><input type="submit" name="Submit" value="送出">
    <input type="reset" name="claer" value="清除">
    <button type="button" onClick="location.href='adduser.html'" >加入會員</button></td>
 
 </table>
 </form>
 </body>
 </html>