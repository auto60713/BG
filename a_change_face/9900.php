<? session_start(); ?>

<?php require_once('../Connections/dbconn_album.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rs_album = 10;
$pageNum_rs_album = 0;
if (isset($_GET['pageNum_rs_album'])) {
  $pageNum_rs_album = $_GET['pageNum_rs_album'];
}
$startRow_rs_album = $pageNum_rs_album * $maxRows_rs_album;

mysql_select_db($database_dbconn_album, $dbconn_album);
$query_rs_album = "SELECT * FROM album";
$query_limit_rs_album = sprintf("%s LIMIT %d, %d", $query_rs_album, $startRow_rs_album, $maxRows_rs_album);
$rs_album = mysql_query($query_limit_rs_album, $dbconn_album) or die(mysql_error());
$row_rs_album = mysql_fetch_assoc($rs_album);

if (isset($_GET['totalRows_rs_album'])) {
  $totalRows_rs_album = $_GET['totalRows_rs_album'];
} else {
  $all_rs_album = mysql_query($query_rs_album);
  $totalRows_rs_album = mysql_num_rows($all_rs_album);
}
$totalPages_rs_album = ceil($totalRows_rs_album/$maxRows_rs_album)-1;

$queryString_rs_album = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rs_album") == false && 
        stristr($param, "totalRows_rs_album") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rs_album = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rs_album = sprintf("&totalRows_rs_album=%d%s", $totalRows_rs_album, $queryString_rs_album);
?>




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
     padding-left:8.5%;
	} 


              .photo_wall {
  height:150px;
  width:850px;  
  overflow-x: auto;
  
}	

	.name1 {
	position:absolute;
right:120px;
font-size:20px;
color:black;
	}
	.r9{
		padding-left:80%;
		}
	
        </style>
   <script>function confirmDrawing() {
	m = document.getElementById("collage"); 
	var imgName = 'img' + iNo;
	var canvasData = m.toDataURL("image/png");
	document.getElementById(imgName).src = canvasData;

	var ajax = new XMLHttpRequest();
	ajax.open("POST",'savecanvas2.php',false);
	ajax.setRequestHeader('Content-Type', 'application/upload');
	ajax.send(canvasData );  
}


   
		function saveTypesetting() {
	m = document.getElementById("collage"); 
    document.getElementById("canvasImg").src = m.toDataURL("image/png");
}
    
function ShowImage(imageFile, imgNo)
{
	var img = new Image();
	img.src = imageFile;
    iNo = imgNo;
    m = document.getElementById("collage"); //取得畫布物件參考
    c = m.getContext("2d"); //建立2d繪圖物件
	c.clearRect(0, 0, 800, 640); 
    //  c.globalAlpha = 1;
	var height = img.height;
	var width =  img.width;
	
	if (height < width) {
		c.drawImage(img,0,0, 800, 640);
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
	
       
    <?
 include("../inner3.php");
 if (isset($_GET['loginname']))
    { $loginname=$_GET['loginname'];    }	
 else
  {  
    ?>
       
   <?
  }
  $str2="select * from student where loginname = '$loginname';";   
  $result2=mysqli_query($link,$str2); 
  $list=mysqli_fetch_array($result2);     
  ?>
  
 
<p class="name1">您好!  <? echo $loginname; ?> </p>
<br>
        <br>
		<canvas id="collage" width="600px" height="450px" style="margin-top:20px;"></canvas>
		
        
        
		<table border="1" class="r9">
			<td >
			<div style=" overflow:auto; width: 150px; height: 500px; " border="1" cellpadding="4" cellspacing="0" align="center" valign="middle">
				
				<ol><a href="#_self" onclick="ShowImage('A001/H24831276/2.jpg',2)"><img id="img2" alt="" src="../A001/H24831276/2.jpg" width="120" height="120"></a></ol>		
				<ol><a href="#_self" onclick="ShowImage('A001/H24831276/3.jpg',3)"><img id="img3" alt="" src="../A001/H24831276/3.jpg" width="120" height="120"></a></ol>			
				<ol><a href="#_self" onclick="ShowImage('A001/H24831276/4.jpg',4)"><img id="img4" alt="" src="../A001/H24831276/4.jpg" width="120" height="120"></a></ol>				
				<ol><a href="#_self" onclick="ShowImage('A001/H24831276/5.jpg',1)"><img id="img1" alt="" src="../A001/H24831276/5.jpg" width="120" height="120"></a></ol>
                <ol><a href="#_self" onclick="ShowImage('A001/H24831276/6.jpg',1)"><img id="img1" alt="" src="../A001/H24831276/6.jpg" width="120" height="120"></a></ol>
                <ol><a href="#_self" onclick="ShowImage('A001/H24831276/7.jpg',1)"><img id="img1" alt="" src="../A001/H24831276/7.jpg" width="120" height="120"></a></ol>
                <ol><a href="#_self" onclick="ShowImage('A001/H24831276/8.jpg',1)"><img id="img1" alt="" src="../A001/H24831276/8.jpg" width="120" height="120"></a></ol>
                <ol><a href="#_self" onclick="ShowImage('A001/H24831276/9.jpg',1)"><img id="img1" alt="" src="../A001/H24831276/9.jpg" width="120" height="120"></a></ol>
			</td>

	</table>
        
  
     <br>
       <br>
       <br>
		<footer class="search" style="margin-top:80px;">
			<ul class="photo_wall">
            <tr>
    <td ><table >
      <tr>
        <?php
$rs_album_endRow = 0;
$rs_album_columns = 5; // number of columns
$rs_album_hloopRow1 = 0; // first row flag
do {
    if($rs_album_endRow == 0  && $rs_album_hloopRow1++ != 0) echo "<tr>";
   ?>
        <td><table width="100px" border="1" align="center">
          <tr>
        
            <td colspan="2"><div    align="center"><img src="../<?php echo $row_rs_album['ThumbName']; ?>" /> </a></div></td>
          </tr>
          
          
        </table></td>
        <?php  $rs_album_endRow++;
if($rs_album_endRow >= $rs_album_columns) {
  ?>
      </tr>
      <?php
 $rs_album_endRow = 0;
  }
} while ($row_rs_album = mysql_fetch_assoc($rs_album));
if($rs_album_endRow != 0) {
while ($rs_album_endRow < $rs_album_columns) {
    echo("<td>&nbsp;</td>");
    $rs_album_endRow++;
}
echo("</tr>");
}?>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;
      <div align="center">
        <table border="0">
          <tr>
            <td><div align="center">
              <?php if ($pageNum_rs_album > 0) { // Show if not first page ?>
                <a href="<?php printf("%s?pageNum_rs_album=%d%s", $currentPage, 0, $queryString_rs_album); ?>">第一頁</a>
                <?php } // Show if not first page ?>
            </div></td>
            <td><div align="center">
              <?php if ($pageNum_rs_album > 0) { // Show if not first page ?>
                <a href="<?php printf("%s?pageNum_rs_album=%d%s", $currentPage, max(0, $pageNum_rs_album - 1), $queryString_rs_album); ?>">上一頁</a>
                <?php } // Show if not first page ?>
            </div></td>
            <td><div align="center">
              <?php if ($pageNum_rs_album < $totalPages_rs_album) { // Show if not last page ?>
                <a href="<?php printf("%s?pageNum_rs_album=%d%s", $currentPage, min($totalPages_rs_album, $pageNum_rs_album + 1), $queryString_rs_album); ?>">下一頁</a>
                <?php } // Show if not last page ?>
            </div></td>
            <td><div align="center">
              <?php if ($pageNum_rs_album < $totalPages_rs_album) { // Show if not last page ?>
                <a href="<?php printf("%s?pageNum_rs_album=%d%s", $currentPage, $totalPages_rs_album, $queryString_rs_album); ?>">最後一頁</a>
                <?php } // Show if not last page ?>
            </div></td>
          </tr>
        </table>
    </div></td>
  </tr>
</table>
            </ul>
		</footer>
		
	</body>
</html>

<?php
mysql_free_result($rs_album);
?>