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
	

.dragger{

position:relative;

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


#webframe{

	position: absolute;
left: 20%;
border-style:double;
border-width:9px; 

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


var i = 1;
function webplay(){

 document.getElementById("webframe").src = "../A001/show/pic ("+i+").jpg";
 document.getElementById("wtf").innerHTML = i;

i += 1; 
 setTimeout("webplay()", 2000 );
}



</script>

</head>

<body onLoad="webplay()">


<div id="menu">

<ul class="navi">

<li><a href="mylist.php">首頁</a></li>
<li><a href="#"> 管理</a>
    	<ul>   	
    	<li><a href="../creat_class.php">建立紀念簿</a></li>
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


<img src="smiley.gif" alt="Smiley face" height="70%" width="50%" id="webframe">       
<p id="wtf">123</p>

<div id="musicArea"></div>
</body> 





</html>
