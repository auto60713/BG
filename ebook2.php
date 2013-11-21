<?session_start();?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>畢輯網-相簿模式</title>
		
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<noscript><link rel="stylesheet" type="text/" href="css/noJS.css" /></noscript>
	
<link rel="stylesheet" type="text/css" href="menu.css" />

<?php
$classID="A001";

$stuId=$loginname;

$bak9="bak";
?>

<script type="text/javascript" src="3D/clay.min.js"></script>
<style type="text/css"> 
html { 
		overflow: hidden; 
	} 
	 
	.name1 {
position:absolute;
right:120px;
font-size:20px;
color:#1E1E78;
font-family:標楷體;
}
	
</style> 

	<script type="text/javascript" src="5.js"></script>
		<script type="text/javascript" src="js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="js/jquery.bookblock.js"></script>
		<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var config = {
							$bookBlock: $( '#bb-bookblock' ),
							$navNext	: $( '#bb-nav-next' ),
							$navPrev	: $( '#bb-nav-prev' ),
							$navJump	: $( '#bb-nav-jump' ),
							bb				: $( '#bb-bookblock' ).bookblock( {
								speed				: 800,
								shadowSides	: 0.8,
								shadowFlip	: 0.7
							} )
						},
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							var $slides = config.$bookBlock.children(),
									totalSlides = $slides.length;

							// add navigation events
							config.$navNext.on( 'click', function() {

								config.bb.next();
								return false;

							} );

							config.$navPrev.on( 'click', function() {
								
								config.bb.prev();
								return false;

							} );

							config.$navJump.on( 'click', function() {
								
								config.bb.jump( totalSlides );
								return false;

							} );
							
							// add swipe events
							$slides.on( {

								'swipeleft'		: function( event ) {
								
									config.bb.next();
									return false;
								},
								'swiperight'	: function( event ) {
								
									config.bb.prev();
									return false;
									
								}

							} );
						};

						return { init : init };
				})();

				Page.init();

			});
		</script>
	</head>
	
	<body>
	<div id="menu">

<ul class="navi">

	<li><a href="#">瀏覽</a>
    	<ul>
         	<li><a href="web/show2.php">超連結模式</a></li>
                	
        </ul> 
    </li>  
	
 <li><a href="member_sys/mylist.php">回首頁</a></li>   
</ul>
</div>


  
 <?

?>
 
<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?> </p>

<br>
<section class="main" aline="center" >

				<div class="bb-custom-wrapper">
					<div id="bb-bookblock" class="bb-bookblock" aline="center">
					<?
					//取得傳遞過來的資料
                     $host="localhost"; // Host name 
                     $username="root"; // Mysql username 
                     $password="123456"; // Mysql password 
                     $db_name="activity"; // Database name 
                     $tbl_name1="photo"; // Table name 

                     mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
                     mysql_select_db("$db_name")or die("cannot select DB");
                     mysql_query("SET NAMES 'utf8'");


                     $query = "SELECT location FROM photo WHERE userID='".$loginname."'";
                     $result=mysql_query($query);

					 while ($row=mysql_fetch_array($result)) {
                       //echo "id=".$row['photoID'];
                    	echo '<div class="bb-item">';
				
						echo '<img width="600px" height="500px" src="$row[location]">';
						
				      //echo $row["location"];
						
						echo "</div>";
						
                     
                        }
					
					?>
                           	
				</div>
					<nav>
						<a id="bb-nav-prev" href="#">Previous</a>
						<a id="bb-nav-next" href="#">Next</a>
						<a id="bb-nav-jump" href="#" title="Go to last item">Last page</a>
					</nav>
				</div>
				
			</section>
			
		</div>
	
		
	</body>
</html>