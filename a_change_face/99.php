<? session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    
		<title>畢輯網-排版</title>
		<script type="text/javascript" src="1.js"></script>
		<script type="text/javascript" src="2.js"></script>
		<script type="text/javascript" src="3.js"></script>
        <link rel="stylesheet" type="text/css" href="menu.css" />
		<link rel="stylesheet" type="text/css" href="4.css" />
		
    <style>
	html { 
		overflow: hidden; 
	} 

	body { 
	background:url("../images/4567.jpg");
	background-size:100% 768px;
	background-repeat:no-repeat;
     padding-left:0%;
	} 


    .photo_wall {
	height:90px;
	width:1170px;  
	overflow-x: auto;
  
	}	

	.name1 {
	position:absolute;
	right:120px;
	font-size:20px;
color:#1E1E78;
font-family:標楷體;
	}
	
        </style>
   <script>
		function saveTypesetting() {
	m = document.getElementById("collage"); 
    document.getElementById("canvasImg").src = m.toDataURL("image/png");
}
    </script>     
</head>
     
<body>


  
  <?php
$classID="A001";

$stuId=$loginname;


?>
	   
<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?> </p>
<br>
        <br>
		<canvas id="collage" width="600px" height="500px" style="margin-top:20px;"></canvas>
		
        
     	<aside class="layers" style="left:5px;">
			<h2>功能區</h2>
			<ul>
			
				<li class="background">
					<img src="b5.jpg"/>
					<h3>Background</h3>
					<div class="visible"></div>
				</li>
			
			</ul>
			<div class="options">
				
				<span>透明度:</span>
				<select name="opacity">
					<option value="1" selected="selected">100%</option>
					<option value="0.9">90%</option>
					<option value="0.8">80%</option>
					<option value="0.7">70%</option>
					<option value="0.6">60%</option>
					<option value="0.5">50%</option>
					<option value="0.4">40%</option>
					<option value="0.3">30%</option>
					<option value="0.2">20%</option>
					<option value="0.1">10%</option>
				</select>
				<span>陰影開關:</span>
				<select name="shadow">
					<option value="true">開</option>
					<option value="false">關</option>
				</select>
			</div>
			<div class="buttons">
				<ul>
				<li class="myhome" ></li>
               
					<li class="save" ></li>

					<li class="remove" ></li>
					<li class="up"></li>
					<li class="down"></li>
				</ul>
			</div>
		</aside>
        
  
     <br>
       <br>
       <br>
		<footer class="search" style="margin-top:80px;">
		<ul class="photo_wall">
		<tr>
		<td ><table >
        <td><table width="100px" border="1" align="center"> 
        <td colspan="2"><div align="center"><img src="../<?  echo  $classID."/".$stuId."/".("pic1.jpg");  ?>" width="100" height="100"/></a></div></td>     
        <td colspan="2"><div align="center"><img src="../<?  echo  $classID."/".$stuId."/".("pic2.jpg");  ?>" width="100" height="100" /></a></div></td>        
        <td colspan="2"><div align="center"><img src="../<?  echo  $classID."/".$stuId."/".("pic3.jpg");  ?>" width="100" height="100" /></a></div></td>       
        <td colspan="2"><div align="center"><img src="../<?  echo  $classID."/".$stuId."/".("pic4.jpg");  ?>" width="100" height="100" /> </a></div></td>     
        <td colspan="2"><div align="center"><img src="../<?  echo  $classID."/".$stuId."/".("pic5.jpg");  ?>" width="100" height="100" /> </a></div></td>
        <td colspan="2"><div align="center"><img src="../<?  echo  $classID."/".$stuId."/".("pic6.jpg");  ?>" width="100" height="100" /> </a></div></td>
		<td colspan="2"><div align="center"><img src="../<?  echo  $classID."/".$stuId."/".("pic7.jpg");  ?>" width="100" height="100" /> </a></div></td>
        <td colspan="2"><div align="center"><img src="../<?  echo  $classID."/".$stuId."/".("pic8.jpg");  ?>" width="100" height="100" /> </a></div></td>
        </table>
        </ul>
		</footer>
		
	</body>
</html>

