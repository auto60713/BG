<? session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>畢輯網-塗鴉</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="menu.css" />

<script>
    
var X, Y, draw; //座標與繪圖與否
var m, c; //繪圖物件
var iNo=1; //圖片編號

function init() {
	var img = new Image();
	img.src = "A001/H24831276/pic1.jpg";

    m = document.getElementById("thisPic"); //取得畫布物件參考
    c = m.getContext("2d"); //建立2d繪圖物件
    //  c.globalAlpha = 1;
    c.drawImage(img,0,0, 700, 540);
}

function md() {
    X = event.offsetX; 
    Y = event.offsetY;   
    draw = true; 
}

function mv() {
    if (draw) {
        c.beginPath(); 
        c.moveTo(X, Y); 
         X = event.offsetX;
         Y = event.offsetY;
         c.lineTo(X, Y); 
         c.closePath(); 
         c.stroke(); 
    }
}

function mup() { draw = false; }

function Radio1_onclick() { c.strokeStyle = "rgb(255,0,0)"; }
function Radio2_onclick() { c.strokeStyle = "rgb(0,255,0)"; }
function Radio3_onclick() { c.strokeStyle = "rgb(0,0,255)"; }
function Radio4_onclick() { c.strokeStyle = "rgb(0,0,0)"; }     
function Radio5_onclick() { c.strokeStyle = "rgb(128,0,128)"; }       

function Radio6_onclick() { c.lineWidth = 1; }
function Radio7_onclick() { c.lineWidth = 2; }
function Radio8_onclick() { c.lineWidth = 3; }
function Radio9_onclick() { c.lineWidth = 5; }
function Radio10_onclick() { c.lineWidth = 10; }

function Button1_onclick() { location.reload(); }  /* ????  */
function Button2_onclick() {
    document.getElementById("img").src = m.toDataURL("image/png");  /* ???? */
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
<style type="text/css"> 
	
html { 
		overflow: hidden; 
	} 

	

	h5 {
	position:absolute;
right:103px;

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

<body onload="init()" onmousedown="md()" onmousemove="mv()" onmouseup="mup()">

<ul class="navi">
<li><a href="#"  onclick="bak2.php">復原</a></li>

   <li><a href="#" onclick="confirmDrawing()">儲存</a></li>  
   
   <li><a href="editing.php"> 上一頁 </a></li>
   
</ul>
<br>

<?
//include("inner3.php");
if (isset($_GET['loginname']))
    { $loginname=$_GET['loginname'];    }	
 else
  {  
    ?>
       
   <?
  }
 $str2="select * from student where loginname = '$loginname';";   
//$result2=mysqli_query($link,$str2); 
//$list=mysqli_fetch_array($result2);     
  ?>
  
 
<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?> </p>


<ul>
<br>
		
    <p>
        <input id="Radio1" name="R" type="radio" onclick="return Radio1_onclick()" />紅
        <input id="Radio2" name="R" type="radio" onclick="return Radio2_onclick()" />綠
        <input id="Radio3" name="R" type="radio" onclick="return Radio3_onclick()" />藍
        <input id="Radio4" name="R" type="radio" onclick="return Radio4_onclick()" checked="checked" />黑         
        <input id="Radio5" name="R" type="radio" onclick="return Radio5_onclick()" />紫
        <input id="Radio6" name="W" type="radio"  onclick="return Radio5_onclick()" />1px
        <input id="Radio7" name="W" type="radio" onclick="return Radio6_onclick()" />2px
        <input id="Radio8" name="W" type="radio" checked="checked" onclick="return Radio7_onclick()" />3px
        <input id="Radio9" name="W" type="radio" onclick="return Radio8_onclick()" />5px
        <input id="Radio10" name="W" type="radio" onclick="return Radio9_onclick()" />10px
    </p>
    

	<?php
$classID="A001";

$stuId=$loginname;
?>
	
	<table border="2" cellpadding="4" >
		<tr>
		<td>
		<canvas id="thisPic" width="600" height="500"></canvas>
		</td>
		
		<td >
			<div style=" overflow:auto; width: 180px; height: 500px; " border="1" cellpadding="4" cellspacing="0" align="center" valign="middle">
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic1.jpg");  ?>',1)"><img id="img1" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic1.jpg");  ?>" width="120" height="120"></a></ol>
				
				
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic2.jpg");  ?>',1)"><img id="img1" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic2.jpg");  ?>" width="120" height="120"></a></ol>
				
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic3.jpg");  ?>',1)"><img id="img1" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic3.jpg");  ?>" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic4.jpg");  ?>',1)"><img id="img1" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic4.jpg");  ?>" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic5.jpg");  ?>',1)"><img id="img1" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic5.jpg");  ?>" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic6.jpg");  ?>',1)"><img id="img1" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic6.jpg");  ?>" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic7.jpg");  ?>',1)"><img id="img1" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic7.jpg");  ?>" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('<?  echo  $classID."/".$stuId."/".("pic8.jpg");  ?>',1)"><img id="img1" alt="" 
				
				src="<?  echo  $classID."/".$stuId."/".("pic8.jpg");  ?>" width="120" height="120"></a></ol>
				
				
               
             
			</td>
	</table>
</ul>


</body>
</html>
