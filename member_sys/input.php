<?ob_start();
 session_start(); ?>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>登入資料檢查</title>
 </head>
 <body>
 
 <? 
 if(!isset($_POST['loginname']))
  {   ?>
  <script>
    confirm('請至表單網頁輸入帳號');
 location.href='./login.php';
  </script><?
  }
  if(!isset($_POST['password1']))
  {   ?>
  <script>
    confirm('請至表單網頁輸入密碼');
   location.href='./login.php';
  </script>
  <?
  }
  
  
  if($_POST['loginname']=="")
  {   ?>
  <script>
    window.alert('請輸入帳號');
     history.back();
  </script><?
  }
  if($_POST['password1']=="")
  {   ?>
  <script>
    window.alert('請輸入密碼');
   history.back();
  </script>
  
  <?
  }
  include("inner2.php"); 
  $loginname=checking($link,$_POST['loginname']); 
  $userpassword=checking($link,$_POST['password1']); 
  $logincheck="select * from student where loginname=$loginname and pass1=$userpassword";  
  $sql=mysqli_query($link ,$logincheck); 
  $rows =mysqli_num_rows($sql); 
   if($rows=="")
   {
   ?>
   
   
   <script language="JavaScript">
      alert("沒有這個帳號，請重新輸入");
    history.back();
   </script> 
   
   
   <?
   }    
   else
   {
	

    $list=mysqli_fetch_array($sql);   	 
    $_SESSION["loginname"]=$list['loginname'];   
    $_SESSION['username']=$list['username'];	
    if($_POST['password1']=="123123")
      header("Location:./mylist9.php");
    else
      header("Location:./mylist.php");
     } 
	$loginname="H24831276";
	$con = mysql_connect("localhost","root","123456");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("activity", $con);
	$query="UPDATE student SET active=1 WHERE loginname='$loginname'";
	echo $query;
	
	mysql_query($query);
	mysql_close($con);

	
   ?></body></html>
