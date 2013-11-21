<?session_start();?>
 <html><head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <script src="./validate/lib/jquery.metadata.js" type="text/javascript"></script>
 <link rel="stylesheet" type="text/css" media="screen" href="./validate/css/screen.css" />
 <script src="./validate/lib/jquery.js" type="text/javascript"></script>
 <script src="./validate/jquery.validate.js" type="text/javascript"></script>
 <script src="./validate/js/cmxforms.js" type="text/javascript"></script>
 <script src="./myvalidate.js" type="text/javascript"></script>
 <title>編輯帳號</title></head><body>
 <table width="100%" border="0"><tr><td><?
  
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
  $str2="select * from logintable where loginname = '$loginname';";   
  $result2=mysqli_query($link,$str2); 
  $list=mysqli_fetch_array($result2);     
  ?>
  <form n' class="cmxform" id="form1" action='member_update.php' method='post'>
  <table width="100%" border="0">
  <tr><td>帳號：</td>
  <td>
  <input type="text" name="loginname" value="<? echo $loginname; ?>" readonly=true>
  </td></tr>
  <tr><td>姓名：</td>
  <td>
  <input type="text" name="username"  value="<? echo $list[username]; ?>" >
  </td></tr>
  <tr><td>Email：</td>
  <td>
  <input type="text" name="email"  value="<? echo $list[email]; ?>" >
  </td></tr><tr><td>密碼：</td>
  <td><input type="text" name="password1"><br>[(一定要輸入密碼)]</td>
  </tr><tr><td>可使用的功能：</td>
  <td><? 
  $str3="select  checkname,checkvalue from  logintable where loginname='$list[loginname]'";		 
  $result3=mysqli_query($link,$str3);
  while($list2=mysqli_fetch_array($result3))     //分析他的權限
   {
	switch ($list2[checkname])
        {
         case "news":
	      if($list2[checkvalue]==1) 
		     { ?>
              <input type="checkbox" name="choicemethod[]" value="news" checked>最新消息公告<br>
			 <?
			 }
		  else
			 { ?>					
             <input type="checkbox" name="choicemethod[]" value="news">最新消息公告<br>					 
		 	 <?}
		  break;
         case "products":
	      if($list2[checkvalue]==1) 
		     { ?>
              <input type="checkbox" name="choicemethod[]" value="products" checked>最新產品介紹<br>
		    	 <?
			 }
		  else
			 { ?>					
              <input type="checkbox" name="choicemethod[]" value="products">最新產品介紹<br>					 
			  <?
			 }     
		  break;			        		  
             }			  
    } 
	?>
  </td></tr><tr>
  <td><input type="submit" name="button" value="送出"></td>
  <td><input type="reset" name="button2" value="取消"></td>
  </tr></table></form></td></tr></table></body></html>
