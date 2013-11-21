<? session_start(); ?>
<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>畢輯網-超連結模式</title>

<link rel="stylesheet" type="text/css" href="../menu.css" />
<link rel="stylesheet" href="lb/lightbox.css" type="text/css" />
<script type="text/javascript" src="lb/lightbox.js"></script>

<?php
$classID="A001";
$stuId=$loginname;
?>
</head>


<style type="text/css" title=""> 

html { 
		overflow: hidden; 
	} 
          li{display:inline;} 
          li a{position:relative;} 
          li a:hover{position:relative;border:none;z-index:1000;}/*此?要有border:none?性，否?IE6下面?法?示出?，是IE6??的BUG*/ 
          li a img{width:100px;height:100px;border:none;position:absolute;}/*使用??定位??片固定?而?离?面流*/ 
          li a:hover img{position:absolute;left:-50px;
		  top:-80px;width:600px;height:500px;padding:5px;background:#fff;border:2px solid #000;z-index:1000;} /*注意?里的z-index?示?置，否??有重?*/ 
         li#pic-01 a img{top:0;left:0;} 
         li#pic-02 a img{top:0;left:110px;} 
         li#pic-03 a img{top:0;left:220px;} 
         li#pic-04 a img{top:110px;left:0;} 
         li#pic-05 a img{top:110px;left:110px;} 
         li#pic-06 a img{top:110px;left:220px;} 
         li#pic-07 a img{top:220px;left:0px;} 
         li#pic-08 a img{top:220px;left:110px;} 
         li#pic-09 a img{top:220px;left:220px;}
		 
		 #wmp{
margin-left:250px;
			 }
			 #home{
margin-top:-100px;
			 }
			 h5 {
	position:absolute;
right:118px;

	}
	.name1 {
	position:absolute;
right:120px;
font-size:20px;
color:#1E1E78;
font-family:標楷體;
	}
	
	#face {
	 position:relative; 
      top:0px; 
      left:180px; 
	   width:700px; 
       height:500px; 
      border:#0000FF 2px solid; 
	}
	
     </style> 
	 
	 
	 
<script>

function change(){ 
   vi = document.form1.select1.options[document.form1.select1.selectedIndex].value;
   window.location.href="show2.php?id=" +vi;
  
}

</script>



<?
$classID="A001";
//$loginname="h24831276";
//$loginname= $_POST['vi'];

//取得傳遞過來的資料
$host="localhost"; // Host name 
$usernameq="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="activity"; // Database name 
$tbl_name1="photo"; // Table name 

mysql_connect("$host", "$usernameq", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
mysql_query("SET NAMES 'utf8'");

?>


<body onload="">

<ul class="navi">

	<li><a href="#">瀏覽</a>
    	<ul>
         	<li><a href="../ebook2.php">相簿模式</a></li>
                	
        </ul> 
    </li>  
	
 <li><a href="../member_sys/mylist.php">回首頁</a></li>   
</ul>


 <nav id="wmp">
 <br>
<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?> </p>
 <br>
 <br>
 <br>
</nav>
 

 <br>  
  選擇同學<br>
  <form name="form1"> 
  <select  name="select1" onChange="change()" size=20 style="float:left;" >
  <option value='H24831276'>H24831276 陳品豪 </option><br/>
  <option value='H24831357'>H24831357 林師聖 </option><br/>
  <option value='H24831161'>H24831161 朱益弘 </option><br/>
  <option value='H24831103'>H24831103 王信文 </option><br/>
  <option value='H24831200'>H24831200 蔡旻臻 </option><br/>
  <option value='H24831399'>H24831399 王筱萱 </option><br/>
  <option value='H24831080'>H24831080 吳靜庭 </option><br/>


  </select>
</form> 
<div id="face">

<?
$nowwho = $_GET['id'];
$query = "SELECT location FROM photo WHERE userID='".$nowwho."'";
$result=mysql_query($query);
$letgo = "rel='lightbox'";

  while ($row=mysql_fetch_array($result)) {
  //echo "id=".$row['photoID'];
   	
    echo "<a href='../".$row['location']."' '.$letgo.'><img src='../".$row['location']."' width='80' height='80'/></a> ";
    }
?>
</div>


</body>
</html>
