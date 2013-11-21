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
	

	body { 
	background:url("../images/4567.jpg");
	background-size:100% 768px;
	background-repeat:no-repeat;
     padding-left:0%;
	} 


     .photo_wall {
  height:150px;
  width:1150px;  
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
	   

  
 
<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?> </p>
<br>
        <br>
		<canvas id="collage" width="600px" height="500px" style="margin-top:20px;"></canvas>
		
        
     	<aside class="layers" style="margin-top:40px;">
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
				<li class="home" ></li>
               
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
      <tr>
                <td><table width="100px" border="1" align="center">
          <tr>
        
            <td colspan="2"><div    align="center"><img src="../A001/H24831276/pic1.jpg" width="120" height="120"/></a></div></td>
          </tr>
          
          
        </table></td>
                <td><table width="100px" border="1" align="center">
          <tr>
        
            <td colspan="1"><div    align="center"><img src="../A001/H24831276/pic2.jpg" width="120" height="120"/> </a></div></td>
          </tr>
          
          
        </table></td>
                <td><table width="100px" border="1" align="center">
          <tr>
        
            <td colspan="1"><div    align="center"><img src="../A001/H24831276/pic3.jpg" width="120" height="120"/> </a></div></td>
          </tr>
          
          
        </table></td>
                <td><table width="100px" border="1" align="center">
          <tr>
        
            <td colspan="1"><div    align="center"><img src="../A001/H24831276/pic4.jpg" width="120" height="120" /> </a></div></td>
          </tr>
          
          
        </table></td>
                <td><table width="100px" border="1" align="center">
          <tr>
        
            <td colspan="1"><div    align="center"><img src="../A001/H24831276/pic5.jpg" width="120" height="120" /> </a></div></td>
          </tr>
          
          
        </table></td>
                <td><table width="100px" border="1" align="center">
				
          <tr>
		  
            <td colspan="1"><div    align="center"><img src="../A001/H24831276/pic6.jpg" width="120" height="120" /> </a></div></td>
          </tr>
          
          
        </table></td>
                <td><table width="100px" border="1" align="center">
          <tr>
        
            <td colspan="1"><div    align="center"><img src="../A001/H24831276/pic7.jpg" width="120" height="120" /> </a></div></td>
          </tr>
          
          
        </table></td><td><table width="100px" border="1" align="center">
          <tr>
        
            <td colspan="1"><div    align="center"><img src="../A001/H24831276/pic8.jpg" width="120" height="120" /> </a></div></td>
          </tr>
          
          
        </table></td>
         
                   
           
        
        <td>&nbsp;</td></tr>    </table></td>
  </tr>
 
</table>
            </ul>
		</footer>
		
	</body>
</html>

