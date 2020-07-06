<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
body{
	margin: 0px;
	padding: 0px;	
}
#player {
	height: 80px;
	width: 100%;
	position: fixed;
	bottom: 0px;
	background-color: rgba(51,51,51,1);
	opacity:1;
}
#player #btn5 {
	background-image: url(../pic/player.png);
	background-position: 0px -66px;
	display: block;
	height: 16px;
	width: 16px;
	position: absolute;
	left: 1144px;
	top: 33px;
}
#player #btn6 {
	background-image: url(../pic/player.png);
	background-position: -21px -66px;
	display: block;
	height: 16px;
	width: 16px;
	position: absolute;
	left: 1144px;
	top: 33px;
}
#player .btn1 {
	background-image: url(../pic/player.png);
	height: 20px;
	width: 20px;
	display: block;
	background-position: -20px 0px;
	position: absolute;
	left: 200px;
	top: 30px;
}
#player .btn2 {
	background-image: url(../pic/player.png);
	background-position: 0px -20px;
	display: block;
	height: 16px;
	width: 16px;
	position: absolute;
	left: 160px;
	top: 32px;
}
#player .btn3 {
	background-image: url(../pic/player.png);
	background-position: 0px -36px;
	display: block;
	height: 16px;
	width: 16px;
	position: absolute;
	left: 240px;
	top: 32px;
}
#mod #playmod {
	height: 0px;
	width: 0px;
	display: block;
	overflow: hidden;
}
#player #mod {
	background-image: url(../pic/player.png);
	background-position: 0px -181px;
	display: block;
	height: 16px;
	width: 18px;
	position: absolute;
	left: 1104px;
	top: 33px;
}
#video{
    margin-top: 0px;
} 
#videoControls{
	width: 760px;
	margin-top: 0px;
	position: absolute;
	top: 48px;
	left: 300px;
} 
#download {
	background-image: url(../pic/player.png);
	background-position: 0px -83px;
	display: block;
	height: 16px;
	width: 16px;
	position: absolute;
	top: 33px;
	left: 1184px;
}
.show{
    opacity: 1;
} 
.hide{
    opacity: 0;
} 
#progressWrap{
	height: 4px;
	cursor: pointer;
	margin: 0px;
	position: relative;
	background-color: rgba(102,102,102,1);
} 
#playProgress{
	background-color: rgba(255,255,255,1);
	width: 0px;
	height: 4px;
	position: absolute;
	left: 0;
	top: 0;
}
#showProgress{
	font-size: 10px;
	position: absolute;
	left: 1000px;
	top: 30px;
	color: rgba(255,255,255,1);
}
#player #songName {
	font-size: 12px;
	color: rgba(255,255,255,1);
	position: absolute;
	top: 30px;
	left: 300px;
}
.bar{
	width: 10px;
	height: 10px;
	position: absolute;
	top: -3px;
	left: 0;
	cursor: pointer;
	background-color: #FFF;
	border-radius:5px;
}
.like{
	position: relative;	
}
.list {
	width: 100px;
	display: none;
	position: absolute;
	background-color: rgba(51,51,51,1);
	left: 13px;
	bottom: 10px;
	z-index: 1000;
	padding-top: 10px;
	padding-right: 20px;
	padding-bottom: 10px;
	padding-left: 20px;
}
.like:hover .list{
	display:block;
}
.listName {
	font-size: 12px;
	color: rgba(255,255,255,1);
	text-align: center;
	display: block;
	height: 20px;
	width: 100px;
	margin-top: 10px;
	text-decoration: none;
}
#player #comment {
	background-image: url(../pic/player.png);
	background-position: 0px -280px;
	display: block;
	height: 18px;
	width: 16px;
	position: absolute;
	top: 34px;
	left: 1222px;
	text-decoration: none;
}
#num {
	font-size: 9px;
	color: rgba(255,255,255,1);
	display: block;
	height: 10px;
	position: relative;
	left: 6px;
	bottom: 6px;
	text-align: center;
	background-color: rgba(51,51,51,1);
	padding-right: 2px;
	padding-left: 2px;
	font-weight: bolder;
}
#vol {
	background-image: url(../pic/player.png);
	background-position: 0px -100px;
	display: block;
	position: absolute;
	left: 1270px;
	top: 33px;
	height: 16px;
	width: 18px;
}
.volume{
	height: 4px;
	cursor: pointer;
	margin: 0px;
	position: relative;
	background-color: rgba(102,102,102,1);
}
#player #volumeControl {
	width: 100px;
	margin-top: 0px;
	position: absolute;
	top: 40px;
	left: 1300px;
}
.volbar{
    width: 10px;
	height: 10px;
	position: absolute;
	top: -3px;
	left: 0;
	cursor: pointer;
	background-color: #FFF;
	border-radius:5px;
}
.volmask{
	background-color: rgba(255,255,255,1);
	width: 0px;
	height: 4px;
	position: absolute;
	left: 0;
	top: 0;
}
</style>
<script language="javascript" src="../js/jquery-3.3.1.min.js"></script>
<script language="javascript">
	var video=document.getElementById('f');
	var u=parseInt(GetQueryString('u'));
	var playmod=document.getElementById("playmod");
$(document).ready(function(e) {
    var videoControls = document.getElementById("videoControls");
	var videoContainer = document.getElementById("videoContainer");
	var controls = document.getElementById("video_controls"); 
	var playBtn = document.getElementById("playBtn"); 
	var fullScreenBtn = document.getElementById("fullScreenBtn");
	var progressWrap = document.getElementById("progressWrap");
	var playProgress = document.getElementById("playProgress");
	var bar = document.getElementById('bar');
	var progressFlag= setInterval(getProgress, 60);
	var mod=document.getElementById("mod");
	var player=document.getElementById("player");
	var volume = document.getElementById('volume');
    var volbar = document.getElementById('volbar');
    var volmask = document.getElementById('volmask');
	var vol=document.getElementById("vol");
    var volbarleft = 0;
	var flag=0;
	var a=parseInt(GetQueryString('a'));
	var b=a+1;
	var e=a-1;
	var t=parseInt(GetQueryString('t'));
	var d=parseInt(Math.random()*(t+1));
	var f=t-1;
	video.volume=0.3;
	volmask.style.width = '30px' ;
    volbar.style.left = "30px";
	$(".btn1").click(function() {
        if(video.paused){
			video.play(); 
			progressFlag = setInterval(getProgress, 60);
			this.style.backgroundPosition="-20px 0px";
			}
		else{
			video.pause();clearInterval(progressFlag);
			this.style.backgroundPosition="0px 0px";
			}
	});
	$("#vol").click(function() {
        if(video.muted){
			video.muted=false;
			video.volume=0.5; 
			volmask.style.width = '50px' ;
   			volbar.style.left = "50px";
			this.style.backgroundPosition="0px -100px";
			}
		else{
			video.muted=true;
			volmask.style.width = '0px' ;
   			volbar.style.left = "0px";
			this.style.backgroundPosition="0px -126px";
			}
	});
	function getProgress(){
		var percent = video.currentTime / video.duration;
		if(flag==0){ 
			playProgress.style.width = percent * (progressWrap.offsetWidth)  + "px"; 
			bar.style.left = percent * (progressWrap.offsetWidth) + "px";
		}
		if(video.currentTime!=0){			    			
			showProgress.innerHTML = timeToMinute(video.currentTime)+"/"+timeToMinute(video.duration);
		}
		else
			showProgress.innerHTML = "00:00";  
	}
	$("#progressWrap").mouseup(function(e) {
		flag=0;
        if(video.paused || video.ended){ 
			enhanceVideoSeek(e);
			 } 
		 else{ 
			enhanceVideoSeek(e);
				  } 
				  });
	function enhanceVideoSeek(e){ 
		clearInterval(progressFlag);
		var length = e.pageX - offset(progressWrap,'left'); 
		var percent = length / progressWrap.offsetWidth;  
		video.currentTime = percent * video.duration;
		progressFlag = setInterval(getProgress, 60);
		}
	var barleft = 0;
	bar.onmousedown = function(event){
	  flag=1;
      var event = event || window.event;
      var leftVal = event.clientX - this.offsetLeft;
      var that = this;
      document.onmousemove = function(event){
        var event = event || window.event;
        barleft = event.clientX - leftVal;     
        if(barleft < 0)
          barleft = 0;
        else if(barleft >progressWrap.offsetWidth - bar.offsetWidth)
          barleft = progressWrap.offsetWidth - bar.offsetWidth;
        playProgress.style.width = barleft +'px' ;
        that.style.left = barleft + "px";
        window.getSelection ? window.getSelection().removeAllRanges() : document.selection.empty();
      }
    }
	volbar.onmousedown = function(event){
      var event = event || window.event;
      var leftVal = event.clientX - this.offsetLeft;
      var that = this;
	  video.muted=false;
	  vol.style.backgroundPosition="0px -100px";
      document.onmousemove = function(event){
        var event = event || window.event;
        volbarleft = event.clientX - leftVal;     
        if(volbarleft < 0)
          volbarleft = 0;
        else if(volbarleft > volume.offsetWidth - volbar.offsetWidth)
          volbarleft = volume.offsetWidth - volbar.offsetWidth;
        volmask.style.width = volbarleft +'px' ;
        that.style.left = volbarleft + "px";
		video.volume=volbarleft/(volume.offsetWidth-volbar.offsetWidth)  ;
        window.getSelection ? window.getSelection().removeAllRanges() : document.selection.empty();
		if( that.style.left=="0px")
			vol.style.backgroundPosition="0px -126px";
		else
			vol.style.backgroundPosition="0px -100px";
      }
    }
	function timeToMinute(times){
    	var result = '00:00:00';
    	var hour,minute,second
   		if (times > 0) {
      		hour = Math.floor(times / 3600);
     		if (hour < 10) {
       			hour = "0"+hour;
      		}
      		minute = Math.floor((times - 3600 * hour) / 60);
      		if (minute < 10) {
        		minute = "0"+minute;
      		}
 			second = Math.floor((times - 3600 * hour - 60 * minute) % 60);
      		if (second < 10) {
       			second = "0"+second;
     		}
      		if (hour == '00') {
	      		result = minute+':'+second;
     		}
			else if (minute == '00'){
    	  		result = hour+':'+minute+':'+second;
      		} 
			else {
    	  		result = second;
     		}
    	console.log("result",result);
    	return result;  
	}
	}
    document.onmouseup = function(){
      	document.onmousemove = null; 
    }
	
	var x=1;
	$("#mod").click(function() {	
	if(playmod.innerHTML=="顺序播放"){
		playmod.innerHTML="随机播放";
		video.loop=false;
		this.style.backgroundPosition="0px -51px";
		u=1;
	}
	else if(playmod.innerHTML=="随机播放"){
		playmod.innerHTML="单曲循环";
		video.loop=true;
		this.style.backgroundPosition="0px -163px";
		u=2;
	}
	else if(playmod.innerHTML=="单曲循环"){
		playmod.innerHTML="列表循环";
		video.loop=false;
		this.style.backgroundPosition="0px -144px";
		u=3;
	}
	else{
		playmod.innerHTML="顺序播放";
		video.loop=false;
		this.style.backgroundPosition="0px -181px";
		u=4;
	}
	});
	$(".btn2").click(function() {	
		if(playmod.innerHTML=="顺序播放"){
			if(e==-1){
				window.location.href=window.location.pathname+"?a="+f+"&t="+t+"&u="+u;
			}
			window.location.href=window.location.pathname+"?a="+e+"&t="+t+"&u="+u;
		}
		else if(playmod.innerHTML=="列表循环"){
			if(e==-1)
			window.location.href=window.location.pathname+"?a="+f+"&t="+t+"&u="+u;
			window.location.href=window.location.pathname+"?a="+e+"&t="+t+"&u="+u;
		}
		else if(playmod.innerHTML=="随机播放"){
			window.location.href=window.location.pathname+"?a="+d+"&t="+t+"&u="+u;
		}
		else{
			if(e==-1){
				window.location.href=window.location.pathname+"?a="+f+"&t="+t+"&u="+u;
			}
			window.location.href=window.location.pathname+"?a="+e+"&t="+t+"&u="+u;
		}
	});
	$(".btn3").click(function() {	
		if(playmod.innerHTML=="顺序播放"){
			if(b==t){
				window.location.href=window.location.pathname+"?a=0&t="+t+"&u="+u;
			}
			window.location.href=window.location.pathname+"?a="+b+"&t="+t+"&u="+u;
		}
		else if(playmod.innerHTML=="列表循环"){
			if(b==t){
				window.location.href=window.location.pathname+"?a=0&t="+t+"&u="+u;
			}
			window.location.href=window.location.pathname+"?a="+b+"&t="+t+"&u="+u;
		}
		else if(playmod.innerHTML=="随机播放"){
			window.location.href=window.location.pathname+"?a="+d+"&t="+t+"&u="+u;
		}
		else{
			if(b==t){
				window.location.href=window.location.pathname+"?a=0&t="+t+"&u="+u;
			}
			window.location.href=window.location.pathname+"?a="+b+"&t="+t+"&u="+u;
		}
	});
	video.addEventListener('ended',function(){
		if(playmod.innerHTML=="顺序播放"){
			if(b==t)
			window.location.href=window.location.pathname+"?a=-1&t="+t+"&u="+u;
			window.location.href=window.location.pathname+"?a="+b+"&t="+t+"&u="+u;
		}
		else if(playmod.innerHTML=="列表循环"){
			if(b==t)
			window.location.href=window.location.pathname+"?a=0&t="+t+"&u="+u;
			window.location.href=window.location.pathname+"?a="+b+"&t="+t+"&u="+u;
		}
		else if(playmod.innerHTML=="随机播放"){
			window.location.href=window.location.pathname+"?a="+d+"&t="+t+"&u="+u;
		}
    });
});
$(function(){
	if(parseInt(GetQueryString('u'))){
	if(u==1){
		$("#mod").css({"background-position":"0px -51px"});
		playmod.innerHTML="随机播放";
	}
	else if(u==2){
		$("#mod").css({"background-position":"0px -163px"});
		playmod.innerHTML="单曲循环";
		video.loop=true;
		
	}
	else if(u==3){
		$("#mod").css({"background-position":"0px -144px"});
		playmod.innerHTML="列表循环";
		
	}
	else{
		$("#mod").css({"background-position":"0px -181px"});
		playmod.innerHTML="顺序播放";
		
	}
	}
});
function offset(obj,direction){
    var offsetDir = 'offset'+ direction[0].toUpperCase()+direction.substring(1);
    var realNum = obj[offsetDir];
    var positionParent = obj.offsetParent; 
    while(positionParent != null){
		realNum += positionParent[offsetDir];
		positionParent = positionParent.offsetParent;
    }
    return realNum;
}
function GetQueryString(name)
	{
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)return  unescape(r[2]); 
}
</script>
</head>

<body>
<?php
$dbname="yy";
				$con=mysqli_connect('localhost','root','')or die("数据库连接失败");
				$db=mysqli_select_db($con,"$dbname")or die("无法连接数据库");
				mysqli_set_charset($con,"utf8");
if(isset($_SESSION["a"]))
	$a=$_SESSION["a"];
	else
	$a=-1;
$sql=$_SESSION['sql']." limit $a,1";
$result=mysqli_query($con,$sql);
@$row=mysqli_fetch_row($result);
$sel="select * from list where songNo=$row[0] and user_id='$_SESSION[user_id]'";
$result2=mysqli_query($con,$sel);
@$num=mysqli_num_rows($result2);
$sellist="select distinct listName from list where user_id='$_SESSION[user_id]'";
$result3=mysqli_query($con,$sellist);
$com="select * from comment where songNo=$row[0]";
$comres=mysqli_query($con,$com);
@$num2=mysqli_num_rows($comres);
?>
<audio id="f" src="../music/<?php echo $row[0];?>.mp3" autoplay></audio>
<div id="player">
	<div id="videoControls">
    	<div id="progressWrap" >
       		<div class="bar" id="bar">
			</div>
            <div id="playProgress">
            </div>
        </div>
    </div>
	<span id="showProgress"></span> 
	<a class="btn2" href="javascript:;"></a>
	<a class="btn1" href="javascript:;"></a>
	<a class="btn3" href="javascript:;"></a>
	<a class="btn4" id="mod" href="javascript:;">
    	<span id="playmod">顺序播放</span>
    </a>
	<span id="songName"><?php echo $row[1];?>  -  <?php echo $row[2];?></span>
    <span class="like" id=<?php if($num>0) echo "btn6";else echo "btn5"?>>
   		<span class="list">
        	<?php 
				while($row3=mysqli_fetch_row($result3)){
					$sellist3="select distinct if('$row[0]' not in(select songNo from list where listName='$row3[0]' and user_id='$_SESSION[user_id]'),'$row3[0]',0) from list";
					$que=mysqli_query($con,$sellist3);
					$row5=mysqli_fetch_row($que);
					if($row5[0]==$row3[0]){
					$sellist2="select listNo from list where user_id='$_SESSION[user_id]' and listName='$row3[0]'";
					$result4=mysqli_query($con,$sellist2);
					@$row4=mysqli_fetch_row($result4);
			?>
            		<a class="listName" href="addToList.php?listNo=<?php echo $row4[0]?>&songNo=<?php echo $row[0];?>"><?php echo $row3[0]?></a>
            <?php
								}
				}
			?>
       </span>
  </span>
  <?php
  	$vip="select vip from user where userName='$_SESSION[userName]'";
	$vresult=mysqli_query($con,$vip);
	@$isV=mysqli_fetch_row($vresult);
  ?>
  <a id="download" download=<?php echo $row[1];?> href="javascript:;" onclick="if(<?php echo @$isV[0]?>==1){ href='../music/<?php echo $row[0]; ?>.mp3'} else {alert('您不是vip')}" ></a>
  <a id="comment" href="javascript:;"><span id="num"><?php echo $num2?></span></a>
  <a id="vol" href="javascript:;"></a>
  <div id="volumeControl">
  	<div class="volume" id="volume">
    	<div class="volbar" id="volbar">
    	</div>
   	 	<div class="volmask" id="volmask"></div>
  	</div>
  </div>
</div>
<?php
	unset($_SESSION['a']);
?>
</body>
</html>
