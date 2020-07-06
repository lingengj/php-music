<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
#navigation {
	height: 80px;
	border: 1px dashed #000;
	background-color: #373737;
}

#navigation #header {
	height: 80px;
	width: 1100px;
	margin-right: auto;
	margin-left: auto;
	background-image: url(../pic/logo.jpg);
	background-repeat: no-repeat;
	background-position: left;
}
#navigation ul {
	padding: 0px;
	width: 1100px;
	background-image: url(../pic/logo.jpg);
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 341px;
}
#navigation ul li {
	list-style-type: none;
	float: left;
	font-family: "微软雅黑";
	font-size: 30px;
	line-height: 80px;
	color: #FFF;
	display: block;
}
#navigation ul li a{
	color: #FFF;
	text-decoration: none;
	padding-right: 25px;
	padding-left: 25px;

}

#navigation ul li :hover{
	color: #666;
	background-color: #FFF;
	display: block;

}

#box {
	background-color: #f7f7f7;
	width: auto;
}


#container {
	height: 300px;
	width: 1100px;
	margin-right: auto;
	margin-left: auto;
	margin-top: 20px;
	background-color: #f7f7f7;
}
#container #left {
	float: left;
	height: 300px;
	width: 400px;
}

#left #photo {
	height: 250px;
	width: 250px;
	border: 1px dashed #999;
	margin-top: 22.5px;
	margin-right: auto;
	margin-left: auto;
}


#container #right {
	float: right;
	height: 130px;
	width: 700px;
	padding-top: 50px;
	margin-top: auto;
	margin-bottom: auto;
}

#right #listName {
	font-family: "微软雅黑";
	font-size: 24px;
	color: #333;
	margin-bottom: 10px;
}
#right #user_id {
	line-height: 17px;
	color: #999;
	height: 17px;
	background-image: url(../pic/111.PNG);
	background-repeat: no-repeat;
	padding-left: 20px;
	margin-bottom: 10px;
}
#container #right #button {
	height: 31px;
	width: 90px;
	line-height: 31px;
	background-repeat: no-repeat;
	color: #000;
	text-decoration: none;
	border: 1px solid #666;
	text-align: center;
	margin-top: 10px;
}
#container #right #button a {
	text-decoration: none;
	color: #666;
}
#container #right #tag,#container #right #count {
	margin-bottom: 5px;
}
#list {
	height: auto;
	width: 1100px;
	margin-right: auto;
	margin-left: auto;
	padding-bottom: 20px;
	border: 1px dashed #666;
	padding-top: 30px;
	margin-top: 10px;
}
table {
	font-family: "微软雅黑";
	font-size: 22px;
	line-height: 50px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
	text-align: center;
	color: #666;
}
table a{
	display: block;
}
table a span{
	content: '';
	display: block;
	border-top-width: 10px;
	border-right-width: 10px;
	border-bottom-width: 10px;
	border-left-width: 10px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: transparent;
	border-right-color: transparent;
	border-bottom-color: transparent;
	border-left-color: #999;
	margin-left: 50px;
}

tr:nth-child(2n-1){
	background-color: #f7f7f7;
}
#isplay {
	position: absolute;
	left: 20px;
	top:20px;
}
#songName {
	color: rgba(102,102,102,1);
	text-decoration: none;
}
tr td:first-child {
	position:relative;
}
</style>
</head>

<body>
<?php
        $dbname="yy";
        $serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
        $db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
        mysqli_set_charset($serverlink,"utf8");
		echo "<div id='navigation'><div id='header'><ul>";
            echo "<li><a href='home.php'>首页</a></li>
            <li><a href='song.php'>曲库</a></li>
            <li><a href='showMyInformation.php'>个人中心</a></li>
            <li><a href='exit.php'>退出登录</a></li>";
        echo "</ul></div></div>";
		if(isset($_GET["a"]))
					$_SESSION['a']=$_GET["a"];
		if(isset($_GET["list"]))
			$_SESSION['list']=$_GET['list'];
		$z=$_SESSION['list'];		
        $sql="select listName,userName,tag,play,collect from list,user,song where list.user_id=user.user_id and song.songNo=list.songNo and listNo='$_SESSION[list]'";
        $query=mysqli_query($serverlink,$sql);
		$query2=mysqli_query($serverlink,$sql);
		$row2=@mysqli_fetch_row($query2);
        while($row=@mysqli_fetch_array($query))
        {@list($a,$b,$c,$d,$e)=$row;

        echo "<div id='box'><div id='container'><div id='left'><div id='photo'>
        	<img src='../pic/S$z.jpg' width='250' height='250' /></div></div>";
            
        echo "<div id='right'><div id='listName'>$a</div><div id='user_id'>$b</div>
              <div id='tag'>标签:$c</div><div id='count'>播放量:$d</div><div id='count'>收藏量:$e</div>
              <div id='button'><a href='collect.php?ln=$a'>收藏</a></div></div></div></div>"; }  

		echo "<div id='list'>";
        
        
        $sql="select * from song,list where song.songNo=list.songNo and listName='$row2[0]'";
		$_SESSION["sql"]=$sql;
        $query=mysqli_query($serverlink,$sql);
		@$t=mysqli_num_rows($query);
        echo "<table border='0' action='' method='post'>";
        echo "<tr><td>歌曲名称</td><td>歌手</td><td>点击量</td><td>语言</td><td>风格</td><td>播放</td></tr>";
		$i=-1;
        while($row=mysqli_fetch_array($query))
        {
		list($a,$b,$c,$d,$e,$f,$g,$h)=$row;
		$i=$i+1;
		?>
        <tr><td><a id="songName" href="songDetail.php?songNo=<?php echo $a?>"><?php echo $b?></a><img id='isplay' <?php if(isset($_GET['a'])&&@$_GET['a']==$i)echo "src='../pic/wave.gif'"?> /></td>
        <?php
        echo "<td>$c</td><td>$d</td><td>$f</td><td>$h</td><td><a href='songList.php?a=$i&t=$t&list=$z'><span></span></a></td></tr>";
        }
        echo "</table>";
		echo "</div>";
		include("buttom.php");
        ?>
<div id="page"></div>
<script language="javascript" src="../js/jquery-3.3.1.min.js"></script>
<script language="javascript">
function GetQueryString(name)
	{
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)return  unescape(r[2]); 
}
$(document).ready(function(e) {
		if(GetQueryString('a'))
         $("#page").load("player.php");
});
</script>
</body>
</html>