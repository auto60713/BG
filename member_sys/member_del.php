<?session_start();?>
 <html><head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>刪除帳號資訊</title></head><body><?
 include("session_decide.php"); 
 include("inner2.php");
 if (isset($_GET['loginname']))
    { $loginname=$_GET['loginname'];    }	
 else
  {  
    ?>
  <script>
   alert("很抱歉，目前沒有辦法執行");   
   history.back();	   	
   </script>    
    <?
  }
  $str="delete  from logintable where loginname = '$loginname';";  
  if(mysqli_query($link,$str))
  {  
    ?>
      <script>  
      alert("已完成刪除");   
      location.href="list.php";   	
      </script>    
   <?
   } 
 else
  { ?>
   <script language="JavaScript">
    alert("刪除失敗");   
     history.back();
    </script> <?
  }   
   ?></body></html>
