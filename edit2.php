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
	img.src='<?  echo  $classID."/".$stuId."/pic";?>'+ +iNo + '.jpg';

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


 function Radio3_onclick() {  
  var canvas = document.getElementById('thisPic');  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  var img = new Image();	
 
  img.src='images/film_bk2.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,0,0, 600, 500);
  img.src='<?  echo  $classID."/".$stuId."/";?>'+ 'pic'+iNo + '.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,13,55,580, 390);
  }

   function Radio4_onclick() {  
  var canvas = document.getElementById('thisPic');  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  var img = new Image();	
 
  img.src='images/p.02.gif';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,0,0, 600, 500);
  img.src='<?  echo  $classID."/".$stuId."/";?>'+ 'pic'+iNo + '.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,20,20,600,420);
  }
  
  function Radio5_onclick() {  
  var canvas = document.getElementById('thisPic');  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  var img = new Image();	
 
  img.src='images/p.04.gif';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,0,0, 600, 500);
  img.src='<?  echo  $classID."/".$stuId."/";?>'+ 'pic'+iNo + '.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,31,45,468,385);
  }
  
  function Radio6_onclick() {  
  var canvas = document.getElementById('thisPic');  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  var img = new Image();	
 
  img.src='images/p.03.gif';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,0,0, 600, 500);
  img.src='<?  echo  $classID."/".$stuId."/";?>'+ 'pic'+iNo + '.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,31,45,468,385);
  }
  
   function Radio7_onclick() {  
  var canvas = document.getElementById('thisPic');  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  var img = new Image();	
 
  img.src='images/p.05.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,0,0, 600, 500);
  img.src='<?  echo  $classID."/".$stuId."/";?>'+ 'pic'+iNo + '.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,50,88,510,360);
  }
  
  function Radio8_onclick() {  
  var canvas = document.getElementById('thisPic');  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  var img = new Image();	
 
  img.src='images/p.06.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,0,0, 600, 500);
  img.src='<?  echo  $classID."/".$stuId."/";?>'+ 'pic'+iNo+ '.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,50,88,510,160);
  }
  function Radio9_onclick() {  
  var canvas = document.getElementById('thisPic');  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  var img = new Image();	
 
  img.src='images/p.07.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,0,0, 600, 500);
  img.src='<?  echo  $classID."/".$stuId."/";?>'+ 'pic'+iNo+'.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,35,88,510,360);
  }
  function Radio10_onclick() {  
  var canvas = document.getElementById('thisPic');  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  var img = new Image();	
 
  img.src='images/p.08.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,0,0, 600, 500);
  img.src='<?  echo  $classID."/".$stuId."/";?>'+ 'pic'+iNo+ '.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,100,88,410,310);
  }
  function Radio11_onclick() {  
  var canvas = document.getElementById('thisPic');  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  var img = new Image();	
 
  img.src='images/p.09.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,0,0, 600, 500);
  img.src='<?  echo  $classID."/".$stuId."/";?>'+ 'pic'+iNo+ '.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,170,73,280,300);
  }
  function Radio12_onclick() {  
  var canvas = document.getElementById('thisPic');  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  var img = new Image();	
 
  img.src='images/p.10.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,0,0, 600, 500);
  img.src='<?  echo  $classID."/".$stuId."/".pic;?>'+ iNo + '.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,130,100,400,300);
  }
   function Radio13_onclick() {  
  var canvas = document.getElementById('thisPic');  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  var img = new Image();	
 
  img.src='images/p.11.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,0,0, 600, 500);
  img.src='<?  echo  $classID."/".$stuId."/";?>'+'pic'+iNo+ '.jpg';
   // ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  ctx.drawImage(img,100,130,440,300);
  }
  

function confirmDrawing() {
	m = document.getElementById("thisPic"); 
	var imgName = 'img' + iNo;
	var canvasData = m.toDataURL("image/png");
	document.getElementById(imgName).src = canvasData;
	
var ajax = new XMLHttpRequest();
switch(iNo){
case 1:
ajax.open("POST",'savecanvas/savecanvas11.php',false);
break;
case 2:
ajax.open("POST",'savecanvas/savecanvas12.php',false);
break;
case 3:
ajax.open("POST",'savecanvas/savecanvas13.php',false);
break;
case 4:
ajax.open("POST",'savecanvas/savecanvas14.php',false);
break;
case 5:
ajax.open("POST",'savecanvas/savecanvas15.php',false);
break;
case 6:
ajax.open("POST",'savecanvas/savecanvas16.php',false);
break;
case 7:
ajax.open("POST",'savecanvas/savecanvas17.php',false);
break;
case 8:
ajax.open("POST",'savecanvas/savecanvas18.php',false);
break;

}
ajax.setRequestHeader('Content-Type', 'application/upload');
ajax.send(canvasData );
}


function ShowImage(imageFile, imgNo)
{
	var img = new Image();
	img.src = imageFile;
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

<body onLoad="init()">
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
        <input id="Radio5" name="R" type="radio" onClick="return Radio5_onclick()" />相框(粉) 
        <input id="Radio6" name="R" type="radio" onClick="return Radio6_onclick()" />相框(藍)
        <input id="Radio7" name="R" type="radio" onClick="return Radio7_onclick()" />拍立得
		<input id="Radio11" name="R" type="radio" onClick="return Radio11_onclick()" />拍立得2
		<input id="Radio12" name="R" type="radio" onClick="return Radio12_onclick()" />可愛
		<input id="Radio13" name="R" type="radio" onClick="return Radio13_onclick()" />可愛2
		<input id="Radio9" name="R" type="radio" onClick="return Radio9_onclick()" />書籤
		<input id="Radio10" name="R" type="radio" onClick="return Radio10_onclick()" />信紙
		
		

    </p>
		
	<table border="1">
	<tr>
		<td>
		<canvas id="thisPic" width="600" height="500"></canvas>
		</td>
			<td >
			<div style=" overflow:auto; width: 200px; height: 500px;" border="1" cellpadding="4" cellspacing="0" align="center" valign="middle">
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic1.jpg");  ?>',1)"><img id="img1" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic1.jpg");  ?>" width="120" height="120"></a></ol>
				
				
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic2.jpg");  ?>',2)"><img id="img2" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic2.jpg");  ?>" width="120" height="120"></a></ol>
				
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic3.jpg");  ?>',3)"><img id="img3" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic3.jpg");  ?>" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic4.jpg");  ?>',4)"><img id="img4" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic4.jpg");  ?>" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic5.jpg");  ?>',5)"><img id="img5" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic5.jpg");  ?>" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic6.jpg");  ?>',6)"><img id="img6" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic6.jpg");  ?>" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic7.jpg");  ?>',7)"><img id="img7" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic7.jpg");  ?>" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic8.jpg");  ?>',8)"><img id="img8" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic8.jpg");  ?>" width="120" height="120"></a></ol>
				
			</td>
		</tr>
	</table>

</ul>
</body>
</html>
