<?session_start(); ?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>修改帳號處理</title></head>
<body><?
include("inner2.php");
include("session_decide.php");
if (isset($_POST['loginname']))
    { $loginname=$_POST['loginname'];    }	
else
  {  
    ?>
  <script>
   alert("很抱歉，目前沒有辦法執行");   
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
 $password11=checking($link,$_POST['password1']); 
 //欄位部分
 $field1="username=$username1,pass1=$password11,checkvalue=$news,email=$email1";
 $field2="username=$username1,pass1=$password11,checkvalue=$products,email=$email1";
 //SQL語法	 
 $query="update logintable set ".$field1." where checkname = 'news' and  loginname='$loginname';"; 
 $query.="update logintable set ".$field2." where checkname = 'products' and  loginname='$loginname';";    
 if(mysqli_multi_query($link,$query))
  { ?>
  <script language="JavaScript">
   alert("帳號更新成功！");   
   location.href="list.php";
  </script> <?
  }
  else
  { ?>
  <script language="JavaScript">
   alert("更新失敗");   
   history.back();
  </script> <?
  }
?></body></html>