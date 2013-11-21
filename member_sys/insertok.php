<?session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>新增帳號處理</title>
</head>
<body>
<?
 include("inner2.php");
  
 $loginname1 =checking($link,$_POST['loginname']); 
 $query = "SELECT * FROM student  where loginname =  $loginname1 ";  
 $sql2=mysqli_query($link ,$query) or die(mysqli_error( ));
 $rows = mysqli_num_rows($sql2);
 if($rows>0){
?>
<script language="JavaScript">
   alert("帳號重複，請重新輸入！");   
   history.back();
</script>
<?
}
 $news=0;
 $products=0;
 foreach ($_POST['choicemethod'] as $choicemethod)
 {		
  switch ($choicemethod)
    {
    case "news":
        $news=1;
		break;
    case "products":
        $products=1;               			
		break;				
    }
  }
 $username1=checking($link,$_POST['username']);
 $email1=checking($link,$_POST['email']);
 $pass1=checking($link,$_POST['pass1']);
 $query= "insert into student(loginname,username,pass1,email)values($loginname1,$username1,$pass1,$email1);";
 $query.= "insert into student(loginname,username,pass1,email)values($loginname1,$username1,$pass1,$email1);";
 if(mysqli_multi_query($link,$query))
{ ?>
<script language="JavaScript">
   alert("帳號新增成功！");   
     location.href="../nav3.html";
</script> 
<?
}
else
{ ?>
<script language="JavaScript">
   alert("新增失敗");   
   history.back();
 </script>
  
</body>
</html>