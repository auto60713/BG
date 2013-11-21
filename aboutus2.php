<? session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
    <title>畢輯網-關於我們</title>
	<link rel="stylesheet" type="text/css" href="menu.css" />
    <style type="text/css"> 
	
	video {
	position:absolute;
     left:38%;
	 top:10%;
	 
    }




	
	.name1 {
position:absolute;
right:120px;
font-size:20px;
color:#1E1E78;
font-family:標楷體;
}


.word{
position:absolute;
     left:30%;
     top:50%;
	text-align:center
	}
</style> 
    </head>
	
	
	
	
<body>


<ul class="navi">
   <li><a href="member_sys/mylist.php">回首頁</a></li>        	   
</ul>
<br>

 
<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?> </p>


<video width="400" height="280" controls="controls" autoplay>
   <source src="movie/123.mp4" type="video/mp4">
</video>





   <nav class="word">                 
                    <FONT  size=4 COLOR="#000000" FACE="標楷體" >
<p>歡迎各位使用本系統，
<p>本系統採用Web2.0的精神，讓每個人都參與畢業紀念冊的設計，
<p>人人都可以自行編輯修改自己想要的風格、樣式也能自行挑選自己喜愛的照片，
<p>本系統含有上傳照片，瀏覽照片，排版功能，照片美編，照片編輯......功能，
<p>未來系統如果建置完全，不僅僅適用於畢業紀念冊，
<p>也適用在結婚喜宴過程中新人們的自行編輯回味；也可用於家族性活動的回憶錄。
<p>相信本系統可以讓每一位使用者，輕鬆上手，愉快編輯專屬自己的畢業紀念冊。
    </nav>         


</body>

</html>


