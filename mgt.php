<? session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>畢輯網-創建紀念簿</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="menu.css" />
</head>
<body>
<style type="text/css"> 
	
	html { 
		overflow: hidden; 
	} 

	
.name1 {
position:absolute;
right:120px;
font-size:20px;
color:#1E1E78;
font-family:標楷體;
}
	

</style> 
<div id="menu">
<ul class="navi">
        
   <li><a href="member_sys/mylist.php">回首頁</a></li>        	   
</ul>


<form action="upload99.php" method="post" enctype="multipart/form-data">
<br>





<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?> </p>
<br>

<h2>班級設定</h2>
<div>
班級代碼<input type="text" name="classID" size="10" value=""><br><br>
班級名稱<input type="text" name="className" size="40" value="">
<br>
<br>成員資料  <input type="file" name="myfile"/> Excel檔資料格式：班級,學號,姓名,暱稱,email,手機號,密碼 
</div>



<br><br>
<input type="submit" value="上傳"/>
</form>
</body>
</html>
