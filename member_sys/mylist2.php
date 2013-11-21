<?session_start();?>

 <html><head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>畢輯網-使用者畫面</title>
<!--下面是NAV2--> 



<link rel="stylesheet" type="text/css" href="../menu.css" />

 
<style type="text/css"> 
	html { 
		overflow: hidden; 
	} 

	


	#legend { 
		position: absolute; 
		bottom: 0px; 
		width: 100%; 
		text-align: center; 
		font-family: arial; 
		font-weight: bold; 
		font-size: 1em; 
		color: #000; 
	} 
	* {
		font-family:arial;
		font-size:11px;
	}
	
	#photos {
		display:none;
	}
	
</style> 
 


<style> .dragger{

position:relative;

}
.center
{
margin:auto;
width:50%;
height:50%;
}
h3 {
	position:absolute;
right:200px;

	}
.name1 {
position:absolute;
right:120px;
font-size:20px;
color:#1E1E78;
font-family:標楷體;
}


</style>


<script>
	
var loop_no;
loop_no = 0;

function startRead()
{
  // obtain input element through DOM 

  var file = document.getElementById('file').files[0];
  if(file)
	{
    getAsText(file);
  }
}

function getAsText(readFile)
{
	var reader;
	try
	{
    reader = new FileReader();
	}catch(e)
	{
		document.getElementById('output').innerHTML =
			"Error: seems File API is not supported on your browser";
	  return;
  }

  // Read file into memory as UTF-8
  reader.readAsText(readFile, "UTF-8");

  // Handle progress, success, and errors
  reader.onload = loaded;
  reader.onerror = errorHandler;
}


function loaded(evt)
{
  // Obtain the read file data
  var fileString = evt.target.result;
  document.getElementById('output').innerHTML = fileString;
}

function errorHandler(evt)
{
  if(evt.target.error.code == evt.target.error.NOT_READABLE_ERR)
	{
    // The file could not be read
		document.getElementById('output').innerHTML = "Error reading file..."
  }
}
function playsound(n){
	if (n==1) {
		musicArea.innerHTML="<embed src='../music/Produce.mp3' HIDDEN=TRUE>";
    } else if (n==2) {
		musicArea.innerHTML="<embed src='../music/share.mp3' HIDDEN=TRUE>";
	} else if (n==3){
		musicArea.innerHTML="<embed src='../music/Screen_forever.mp3' HIDDEN=TRUE>";
		}else if(n==4){
		musicArea.innerHTML="<embed src='../music/listen_you_talk.mp3' HIDDEN=TRUE>";
    }else if(n==5){
		musicArea.innerHTML="<embed src='../music/With_the_start_of_the_journey.mp3' HIDDEN=TRUE>";
    }else {
		musicArea.innerHTML="<embed src='../music/Continue_to_run.mp3' HIDDEN=TRUE>";
	}
}

function stopsound(){
    musicArea.innerHTML="<embed src='' HIDDEN=TRUE>"  
}

function showpage(pagename)
{
  document.getElementById('webframe').src = pagename;
}

function webplay()
{
  var sleepTime;
  
  sleepTime = 4000;
  document.getElementById('webframe').src = "../A001/H24831276/test5.jpg";
  setTimeout("showpage('../A001/H24831276/pic1.jpg')", sleepTime*1 );
  setTimeout("showpage('../A001/H24831276/pic2.jpg')", sleepTime*2);
  setTimeout("showpage('../A001/H24831276/pic3.jpg')", sleepTime*3);
  setTimeout("showpage('../A001/H24831276/pic4.jpg')", sleepTime*4);
  setTimeout("showpage('../A001/H24831276/pic5.jpg')", sleepTime*5);
  setTimeout("showpage('../A001/H24831276/pic6.jpg')", sleepTime*6);
  setTimeout("showpage('../A001/H24831276/pic7.jpg')", sleepTime*7);
  setTimeout("showpage('../A001/H24831276/pic8.jpg')", sleepTime*8);
  setTimeout("showpage('../web/9.html')", sleepTime*9);
  setTimeout("showpage('../web/10.html')", sleepTime*10);
  setTimeout("showpage('../web/11.html')", sleepTime*11);
  setTimeout("showpage('../web/12.html')", sleepTime*12);
  setTimeout("showpage('../web/13.html')", sleepTime*13);
  setTimeout("showpage('../web/14.html')", sleepTime*14);
  setTimeout("showpage('../web/15.html')", sleepTime*15);
  setTimeout("showpage('../web/16.html')", sleepTime*16);
  setTimeout("showpage('../web/17.html')", sleepTime*17);
  setTimeout("showpage('../web/18.html')", sleepTime*18);
  setTimeout("showpage('../web/19.html')", sleepTime*19);
  setTimeout("showpage('../web/20.html')", sleepTime*20);
   setTimeout("showpage('../web/21.html')", sleepTime*21);
    setTimeout("showpage('../web/22.html')", sleepTime*22);
	setTimeout("showpage('../web/24.html')", sleepTime*23);
	   setTimeout("showpage('../web/25.html')", sleepTime*24);
	    setTimeout("showpage('../web/26.html')", sleepTime*25);
	 setTimeout("showpage('../web/27.html')", sleepTime*26);
  mytimeout=setTimeout("../webplay()", sleepTime*27);
}
var dock = function (dock, sMin, sMax) { 
	/* ---- private vars ---- */ 
	var xm = xmb = ov = 0; 
	var M = true; 
	var icons = document.getElementById(dock).getElementsByTagName('img'); 
	var N = icons.length; 
	var s = sMin; 
	var ovk = 0; 
	var addEvent = function (o, e, f) { 
		if (window.addEventListener) o.addEventListener(e, f, false); 
		else if (window.attachEvent) r = o.attachEvent('on' + e, f); 
	} 
	var pxLeft = function(o) { 
		for(var x=-document.documentElement.scrollLeft; o != null; o = o.offsetParent) x+=o.offsetLeft; 

		return x; 
	} 
	for(var i=0;i<N;i++) { 
		var o = icons[i]; 
		o.style.width = sMin+"px"; 
		o.style.height = sMin+"px"; 
		o.className = "dockicon"; 
	} 
	var run = function() { 
		for(var i=0;i<N;i++) { 
			var o = icons[i]; 
			var W = parseInt(o.style.width); 
			if(ov && ov.className=="dockicon") { 
				if(ov!=ovk){ 
					ovk=ov; 
					document.getElementById("legend").innerHTML = ov.lang; 
				} 
				if(M) W = Math.max((s*Math.cos(((pxLeft(o)+W/2)-xm)/sMax)),sMin); 
				s = Math.min(sMax,s+.5); 
			} else { 
				s = Math.max(s-.5,sMin); 
				W = Math.max(W-N,sMin); 
			} 
			o.style.width = W+"px"; 
			o.style.height = W+"px"; 
		} 
		if(s >= sMax) M = false; 
	} 
	addEvent(document, 'mousemove', function (e) { 
		if(window.event) e=window.event; 
		xm = (e.x || e.clientX); 
		if(xm!=xmb){ 
			M = true; 
			xmb = xm; 
		} 
		ov = (e.target)?e.target:((e.srcElement)?e.srcElement:null); 
	}); 
	setInterval(run, 16); 
}; 
 
window.onload = function() { 
	dock("dock", 48, 128); 
}

</script>
<!--下面是登入(彈出視窗)-->
<script type="text/javascript">
function myFunction()
{
var url='login.php?'
}
</script>


</head>

<body onLoad="webplay()">


<div id="menu">

<ul class="navi">

<li><a href="mylist.php">首頁</a></li>
<li><a href="#"> 管理</a>
    	<ul>   	
        <li><a href="../create.php">上傳個人照片</a></li>
        </ul> 
    </li>  
	
	<li><a href="../editing.php">編輯</a></li>
	
	<li><a href="#">瀏覽</a>
    	<ul>
         	<li><a href="../web/show2.php">超連結模式</a></li>
            <li><a href="../ebook2.php">相簿模式</a></li>      	
        </ul> 
    </li>  

	<li><a href="#" onClick="webplay()"> 播放 </a>
	   	<ul>
         	<li><a href="#" onClick="clearTimeout(mytimeout)">停止 </a></li>
		</ul>
	</li>
	<li><a href="#">音樂</a>
	    <ul>
      <li><a href="#" onClick="playsound(1)">當</a></li>
			<li><a href="#" onClick="playsound(2)">分享</a></li>  
			<li><a href="#" onClick="playsound(3)">永遠的畫面</a></li>
      <li><a href="#" onClick="playsound(4)">聽你說</a></li>
      <li><a href="#" onClick="playsound(5)">一起開始的旅程</a></li>
      <li><a href="#" onClick="playsound(6)">繼續奔跑</a></li>      
			</li>
            <li><a href="#" onClick="stopsound(this)">停止 </a></li>      	
        </ul> 
	</li>
	<li><a href="../msg/guest.php">留言板</a></li>
	<li><a href="../aboutus2.php">關於我們</a></li>
    <li><a href="login_out.php">登出</a></li>
</ul>
</div>

  
 
 


<p class="name1">您好!  <? echo $loginname; ?> <? echo $username; ?></p>
<br>
<br>
<br>
<center> 
<iframe id="webframe"  width="700" height="600px" scrolling="no" frameborder="0">
       
       

 



</iframe>
</center> 
<div id="musicArea"></div>
</body> 
</html>
