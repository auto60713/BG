<?php require_once('Connections/dbconn_album.php'); ?>
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
<head>
<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="menu.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cheese Cake 做法-相簿</title>
<style type="text/css">
<!--
body {
	background-color:#ffffff;
}
-->
</style></head>

<body>
<style type="text/css"> 
	
	body { 
	background:url(images/4567.jpg);
     padding-left:8.5%;
		
		width: 101.5%; 
		height: 100%; 
	} 
</style> 
<div id="menu">
<ul class="navi">
   <li><a href="member_sys/mylist.php">回首頁</a></li>        	   
</ul>
<hr>
<table width="244" border="1" align="center">
  <tr>
    <td width="234"><div align="center">Cheese Cake 做法-相簿<a href="uploadselect.php">上傳照片</a></div></td>
  </tr>
  <tr>
    <td height="116"><table >
      <tr>
        <?php
$rs_album_endRow = 0;
$rs_album_columns = 5; // number of columns
$rs_album_hloopRow1 = 0; // first row flag
do {
    if($rs_album_endRow == 0  && $rs_album_hloopRow1++ != 0) echo "<tr>";
   ?>
        <td><table width="200" border="1" align="center">
          <tr>
            <td colspan="2"><div align="center"><a href="display.php?ID=<?php echo $row_rs_album['ID']; ?>"><img src="<?php echo $row_rs_album['ThumbName']; ?>" /> </a></div></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center"><?php echo $row_rs_album['Comment']; ?></div></td>
          </tr>
          <tr>
            <td width="89"><div align="center"><?php echo $row_rs_album['FileType']; ?></div></td>
            <td width="95"><div align="center"><?php echo Round($row_rs_album['FileSize']/1024,0) . "K"; ?></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="delete.php?ID=<?php echo $row_rs_album['ID']; ?>&amp;ServName=<?php echo $row_rs_album['ServName']; ?>&amp;ThumbName=<?php echo $row_rs_album['ThumbName']; ?>">刪除</a></div></td>
            <td><div align="center"><a href="download.php?ServName=<?php echo $row_rs_album['ServName']; ?>&amp;LocalName=<?php echo $row_rs_album['LocalName']; ?>">下載</a></div></td>
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
</body>
</html>
<?php
mysql_free_result($rs_album);
?>
