<? session_start(); ?>

<!doctype html>
<html>
<head>
<title>畢輯網-塗鴉</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="121.css" />
<script src="1111.js" type="text/javascript"></script>
<script src="drawings.js" type="text/javascript"></script>


<?php
$classID="A001";
//$loginname="h24831276";

//取得傳遞過來的資料
$host="localhost"; // Host name 
$bgusername="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="activity"; // Database name 
$tbl_name1="photo"; // Table name 

mysql_connect("$host", "$bgusername", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'");

?>


<script>
function init() {
	var img = new Image();
	

    m = document.getElementById("canvas"); //取得畫布物件參考
    c = m.getContext("2d"); //建立2d繪圖物件
    //  c.globalAlpha = 1;
    c.drawImage(img,0,0, 700, 540);
}



function confirmDrawing() {
	m = document.getElementById("canvas"); 
	var imgName = 'img' + iNo;
	var canvasData = m.toDataURL("A001/H24831276/");
	document.getElementById(imgName).src = canvasData;
	
var ajax = new XMLHttpRequest();

ajax.open("POST",'savecanvas/savecanvas11.php?pic='+pic,false);

ajax.setRequestHeader('Content-Type', 'application/upload');
ajax.send(canvasData );
location.reload();
}




function ShowImage(imageFile, imgNo)
{
	var img = new Image();
	img.src = imageFile;
	pic = imageFile; //幫php拿地址
    iNo = imgNo;
    m = document.getElementById("canvas"); //取得畫布物件參考
    c = m.getContext("2d"); //建立2d繪圖物件
	c.clearRect(0, 0, 600, 500); 
    //  c.globalAlpha = 1;
	var height = img.height;
	var width =  img.width;
	
	if (height < width) {
		c.drawImage(img,0,0, 600, 500);
	} else {
	//	alert ('The image size is '+width+'*'+height);	
	
		c.drawImage(img,90,0, 512, 640);
	}
	
}
	
function getImgSize(imgSrc)
{
var newImg = new Image();
newImg.src = imgSrc;
var height = newImg.height;
var width = newImg.width;
alert ('The image size is '+width+'*'+height);
}
</script>
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

</head>




<body>
<div id="wrapper">
<div class="menu">
	<ul>
		<li>
			<a  id="edit">編輯</a>
			<ul>
				<li>
					<a  id="clear">清除</a>
				</li>
				<li>
					<a  id="undo" title="ctrl + z">復原</a>
				</li>
				<li>
					<a  id="redo" title="ctrl + y">重作</a>
				</li>
			</ul>
		</li>
		<li>
		<li>
			<a  id="draw">色盤</a>
			<ul id="colors">
				<li style="background-color:white;">
					<a>白色</a>
				</li>
				<li style="background-color:red;">
					<a>紅色</a>
				</li>
				<li style="background-color:orange;">
					<a>橘色</a>
				</li>
				<li style="background-color:yellow;">
					<a>黃色</a>
				</li>
				<li style="background-color:green;">
					<a>綠色</a>
				</li>
				<li style="background-color:blue;">
					<a>藍色</a>
				</li>
				<li style="background-color:indigo;">
					<a>紫色</a>
				</li>
				<li style="background-color:violet;">
					<a>粉紅色</a>
				</li>
				<li style="background-color:black;">
					<a>黑色</a>
				</li>
			</ul>
			
		</li>
		<li>
			<a  id="text">增加文字</a>
			<ul id="fonts">
				<li style="font-family: 'Arial', Helvetica, sans-serif;">
					<a>宋體</a>
				</li>
				<li style="font-family: 'Courier New', Courier, monospace;">
					<a>Courier New</a>
				</li>
				<li style="font-family: 'Georgia', serif;">
					<a>Georgia</a>
				</li>
				<li style="font-family: 'Lucida Console', Monaco, monospace">
					<a>Lucida Console</a>
				</li>
				<li style="font-family: 'Times New Roman', Times, serif">
					<a>Times New Roman</a>
				</li>
				<li style="font-family: 'Verdana', Geneva, sans-serif">
					<a>Verdana</a>
				</li>
			</ul>
		</li>
		
		
		<li>
		<a label for="sizer">大小:</label>
		<input name="sizer" id="sizer" type="text" />
		</li>
		<li><a href="#" onclick="confirmDrawing()">儲存</a></li>  
   
        <li><a href="editing.php"> 上一頁 </a></li>
	</ul>
	
</div>
<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?></p>
<br>
<br>
<br>
	<table border="2" cellpadding="4" >
		<tr>
		<td>
		<canvas id="canvas" width="600" height="500"></canvas>
		</td>
		
		<td >
			<div style=" overflow:auto; width: 200px; height: 500px; " border="1" cellpadding="4" cellspacing="0" align="center" valign="middle">
				
				
				
				
				
				<?

                  $query = "SELECT location FROM photo WHERE userID='".$loginname."'";
                  $result=mysql_query($query);
                  $imgNo = 1;
                   while ($row=mysql_fetch_array($result)) {
                      //echo $row['location'];
   	                 
					 
					      //<a href="#_self" onclick="ShowImage('A001/H24831276/529125aa393e7.jpg',1)"><img id="img1" alt="" src="A001/H24831276/529125aa393e7.jpg" width="120" height="120"></a></ol>
				      $img = "'".$row['location']."'";
                      echo '<a href="#_self" onclick="ShowImage('.$img.','.$imgNo.')"><img id="img'.$imgNo.'" src="'.$row['location'].'" width="140" height="140"/></a></br></br>';
					  
					  $imgNo += 1;
                   }
                ?>
             </div> 
		</td>
	</table>

</body>
</html>

