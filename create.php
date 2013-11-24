<? session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>畢輯網-上傳個人照片</title>
	<link rel="stylesheet" type="text/css" href="menu.css" />
    <style type="text/css"> 
	.name1 {
position:absolute;
right:120px;
font-size:20px;
color:#1E1E78;
font-family:標楷體;
}
</style>

</head>
<body>
<div id="menu">
<ul class="navi">
   <li><a href="member_sys/mylist.php"> 回首頁 </a></li>        	   
</ul>
<br>
  
 
<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?> </p>



<br><br><br><br>
<form action="create_finish.php" method="post" enctype="multipart/form-data">
　　　請上傳個人照片
<br>
<hr>
　　**** 限定JPG　可多張上傳 ****<br><br>
　　<input type="file" name="imageURL[]" id="imageURL" multiple />
<br>
<hr>

　　<input type="submit" value="上傳" name="submit" />
</form>
</body>
</html>
