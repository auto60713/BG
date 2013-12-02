<? session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>畢輯網-美編</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="menu.css" />
<?php
$classID="A001";

$stuId=$loginname;

?>
<script>
    
var X, Y, draw; //座標與繪圖與否
var m, c; //繪圖物件
var iNo=1; //圖片編號

function init() {
	var img = new Image();

    m = document.getElementById("thisPic"); //取得畫布物件參考
    c = m.getContext("2d"); //建立2d繪圖物件
    //  c.globalAlpha = 1;
    c.drawImage(img,0,0, 700, 540);
}


function  Radio1_onclick(){
  var canvas = document.getElementById('thisPic');
  var ctx = canvas.getContext('2d'); 
  var img = new Image();	
  img.src='<?  echo  $classID."/".$stuId."/".pic;?>'+iNo + '.jpg';

  var imgd = ctx.getImageData(0, 0, 720, 540);
  var pix = imgd.data;

  // Loop over each pixel and invert the color.
  for (var i = 0, n = pix.length; i < n; i += 4) {
	pix[i ] = 0.299*pix[i]+ 0.587*pix[i+1] + 0.114*pix[i+2];
	pix[i+1] = 0.299*pix[i]+ 0.587*pix[i+1] + 0.114*pix[i+2];
	pix[i+2] = 0.299*pix[i]+ 0.587*pix[i+1] + 0.114*pix[i+2];
  }

  // Draw the ImageData at the given (x,y) coordinates.
  ctx.putImageData(imgd, 0, 0);
  }

function  Radio2_onclick(){
  var canvas = document.getElementById('thisPic');
  var ctx = canvas.getContext('2d'); 
  var img = new Image();	
  img.src='<?  echo  $classID."/".$stuId."/";?>'+ 'pic'+iNo + '.jpg';

  var imgd = ctx.getImageData(0, 0, 720, 540);
  var pix = imgd.data;

  // Loop over each pixel and invert the color.
  for (var i = 0, n = pix.length; i < n; i += 4) {
	pix[i  ] = 255 - pix[i  ]; // red
	pix[i+1] = 255 - pix[i+1]; // green
	pix[i+2] = 255 - pix[i+2]; // blue
  // i+3 is alpha (the fourth element)
  }

  // Draw the ImageData at the given (x,y) coordinates.
  ctx.putImageData(imgd, 0, 0);
}


function Radio3_onclick() 
{  
  var canvas = document.getElementById("thisPic");
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/film_bk2.jpg';
  //alert ("A001/william/20130517/"+ iNo + '.jpg');
  img2.src=imgpath;
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		//alert("OK");
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
   img1.onload = function()
   {
	ctx.drawImage(img1,0, 0, 600, 500);
	ctx.drawImage(img2,13,55,580, 390);
   }
}

function Radio4_onclick()
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();	
 
  img1.src='images/p.04.gif';
  img2.src=imgpath;
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);  
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  img1.onload = function()
  {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,31,45,468,385);
   }
}
  
function Radio5_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/p.03.gif';
  img2.src=imgpath;
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200); 
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  img1.onload = function()
  {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,31,45,468,385);
  }
}
  
function Radio6_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();
 
  img1.src='images/p.05.jpg';
  img2.src=imgpath;
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  img1.onload = function()
  {
    ctx.drawImage(img1,0,0, 600, 500);  
    ctx.drawImage(img2,65,93,480,320); 
  }  
}
  
function Radio7_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/p.06.jpg';
  img2.src=imgpath;
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
   img1.onload = function()
   {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,60,88,450,260);    
   }
}
  
function Radio8_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/p.07.jpg';
  img2.src=imgpath;
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
   img1.onload = function()
   {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,36,95,510,350);  
   }
}
	 
function Radio9_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();
      
  img1.src='images/p.08.jpg';
  img2.src=imgpath;
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
   img1.onload = function()
   {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,70,88,460,300);  
   }
}
  
function Radio10_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/p.11.jpg';
  img2.src=imgpath;
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
   img1.onload = function()
   {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,100,111,449,303);
   }
}

function Radio11_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/p.10.jpg';
  img2.src=imgpath;
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
   img1.onload = function()
   {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,125,81,412,340);
   }
}
  

  
function confirmDrawing() {
	m = document.getElementById("thisPic"); 
	var imgName = 'img' + iNo;
	var canvasData = m.toDataURL("image/png");
	document.getElementById(imgName).src = canvasData;
	
var ajax = new XMLHttpRequest();

ajax.open("POST",'savecanvas/savecanvas11.php?pic='+imgpath,false);

ajax.setRequestHeader('Content-Type', 'application/upload');
ajax.send(canvasData );
location.reload();
}


function ShowImage(imageFile, imgNo)
{
	var img = new Image();
	img.src = imageFile;
	imgpath = imageFile; //圖片地址
    iNo = imgNo;
    m = document.getElementById("thisPic"); //取得畫布物件參考
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
   <li><a href="#" onclick="confirmDrawing()">儲存</a></li>      
   <li><a href="editing.php"> 回上一頁 </a></li>         
</ul>
<br>

  
 
<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?> </p>

<ul>
<br>
    <p>
      	<input id="Radio1" name="R" type="radio" onClick="return Radio1_onclick()" />灰階
		<input id="Radio2" name="R" type="radio" onClick="return Radio2_onclick()" />反相
		<input id="Radio3" name="R" type="radio" onClick="return Radio3_onclick()" />膠片
        <input id="Radio5" name="R" type="radio" onClick="return Radio4_onclick()" />相框(粉) 
        <input id="Radio6" name="R" type="radio" onClick="return Radio5_onclick()" />相框(藍)
        <input id="Radio7" name="R" type="radio" onClick="return Radio6_onclick()" />拍立得
		<input id="Radio11" name="R" type="radio" onClick="return Radio7_onclick()" />拍立得2
		<input id="Radio12" name="R" type="radio" onClick="return Radio8_onclick()" />可愛
		<input id="Radio13" name="R" type="radio" onClick="return Radio9_onclick()" />可愛2
		<input id="Radio9" name="R" type="radio" onClick="return Radio10_onclick()" />書籤
		<input id="Radio10" name="R" type="radio" onClick="return Radio11_onclick()" />信紙
		
		

    </p>
		
	<table border="1">
	<tr>
		<td>
		<canvas id="thisPic" width="600" height="500"></canvas>
		</td>
			<td >
			<div style=" overflow:auto; width: 200px; height: 500px; " border="1" cellpadding="4" cellspacing="0" align="center" valign="middle">
				
				
				

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
		</tr>
	</table>

</ul>
</body>
</html>
