<? session_start(); ?>
 <html><head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>帳號管理介面：瀏覽</title></head>
 <body>
 <table width="100%" border="0">
 <?
 
 include("inner2.php");
 if (isset($_GET['p'])) 
  $p=$_GET['p'];    
 else
  $p=1;   
 if ($p <=0)   $p=1; 
 $str1="select  distinct loginname,username,email from  logintable ";
 $result1=mysqli_query($link ,$str1); 
 $total1=mysqli_num_rows($result1);
 $PAGE=5;
 if ($total1==0)
  {$totalpage=0;}
 else
  {$totalpage=ceil($total1/$PAGE);}
 $begin=($p-1)*$PAGE;
 $str2=$str1." limit $begin,$PAGE"; 
 $result2=mysqli_query($link,$str2); 
 ?>		  
 <tr><td>
 <form method="get" action="<? echo htmlentities($_SERVER['PHP_SELF']); ?>" >
  <table width="100%" border="1">
    <tr><td>&nbsp;</td></tr>  
    <tr><td>&nbsp;</td>
    <td colspan="3"> 總人數為<? echo $total1; ?>篇，總頁數：
	<? echo $totalpage; ?>，目前頁次：<? echo $p; ?></td>
    <td colspan="1" align="right">
	 <a href="insert.php">新增</a>
	</td></tr>
    <tr width="100%" height="27"> 
    <td width="100" align="center" valign="middle">帳號</td>
    <td width="97" align="center" valign="middle">姓名</td>
    <td width="487" align="center" valign="middle">電子郵件</td>
    <td width="105" align="center" valign="middle">可使用功能</td>
    <td width="87" align="center" valign="middle">選項</td>
    </tr>
   <?  
    while($list=mysqli_fetch_array($result2))   
    {
   ?>
    <tr  align="center"> 
    <td><? echo $list[loginname]; ?></td>
    <td><? echo $list[username]; ?></td>
    <td>
	<a href="mailto:<? echo $list[email]; ?>"> 
	<? echo $list[email]; ?>
	</a>
	</td>
    <td>
	<?		         
	$str3="select  checkname,checkvalue from  logintable where loginname='$list[loginname]'";  
	$result3=mysqli_query($link,$str3);
    while($list2=mysqli_fetch_array($result3))     
    {
	 if($list2[checkvalue]==1)    
	   echo $list2[checkname]."<br>"; 			  
    }						 		
    ?>
    </td>
    <td>
    <a href="member_edit.php?loginname=<? echo $list[loginname];?>">編輯
	</a> 
	/ <a href="member_del.php?loginname=<? echo $list[loginname];  ?>" 
       onClick="if(!confirm('注意：刪除後，無法救回喔！請再次確定是否刪除？')){return false;}">刪除</a>
	</td>
    </tr>
     <? 
	  }
      ?>
    <tr> 
    <td colspan="4">&nbsp;</td>
    <td colspan="1"> 
	<table width="100%" border="0">
    <tr align="center" > 
    <? 
	if($p>1) 
	 {	
     ?>
     <a href="<? echo $_SERVER['PHP_SELF']."?p=".($p-1) ?>">上一頁</a>
     <?
  	 } 
	if ($p<$totalpage)
     { 
	 ?>
     <a href="<? echo $_SERVER['PHP_SELF']."?p=".($p+1) ?>">下一頁</a>
     <?
	 } 
	 ?>
  </tr></table>
  </td></tr></table>
  </form>
  <tr><td></td></tr>
  <tr>
    <td align="center"><a href="login_out.php">登出帳號管理介面</a></td>
  </tr></table></body></html>