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

#detail {
	width: 600px;
	padding: 0px;
	margin-top: 20px;
	height: 400px;
	margin-left: 340px;
}
#detail img{
	float: left;
	margin-right: 45px;
}
#detail p {
	font-size: 38px;
	color: #666;
	text-align: center;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 10px;
	margin-left: 0px;
	padding: 0px;
	display: block;
	width: 400px;
	height: 60px;
}
#detail ul{
	padding: 0px;
	float: left;
	height: 200px;
}
#detail ul li{
	color: #999;
	list-style-type: none;
	font-size: 24px;
	line-height: 45px;
}
textarea {
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	width: 827px;
	height: 108px;
}
form {
	border: 1px solid rgba(153,153,153,1);
	width: 831px;
	position: relative;
	height: 150px;
}
form input {
	position: absolute;
	left: 752px;
	bottom: -1px;
	height: 42px;
	width: 80px;
	text-align: center;
	background-color: rgba(255,255,255,1);
}
.othcomment {
	height: 200px;
	width: 831px;
	position: relative;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: rgba(204,204,204,1);
	margin-top: 20px;
	margin-bottom: 20px;
}
#comment {
	margin-right: auto;
	margin-left: auto;
	width: 831px;
}
#comment #title {
	height: 40px;
	margin-top: 20px;
	font-size: 24px;
	color: rgba(102,102,102,1);
	margin-bottom: 20px;
}
#comment .othcomment #image {
	height: 50px;
	width: 50px;
	border-radius: 25px;
	position: absolute;
	left: 10px;
	top: 5px;
	border: 1px solid rgba(0,0,0,1);
}
#comment .othcomment #tag {
	color: rgba(204,204,204,1);
	float: left;
}
#comment .othcomment .uname .name {
	float: left;
}
.othcomment .uname {
	position: absolute;
	left: 80px;
	top: 0px;
}
.othcomment .content {
	position: absolute;
	left: 80px;
	top: 40px;
}
#comment .othcomment .like {
	background-image: url(../pic/comment.png);
	background-position: 0px -24px;
	display: block;
	height: 18px;
	width: 18px;
	position: absolute;
	right: 190px;
	bottom: 23px;
}
#comment .othcomment .notlike {
	background-image: url(../pic/comment.png);
	background-position: -25px -24px;
	display: block;
	height: 18px;
	width: 18px;
	position: absolute;
	right: 190px;
	bottom: 23px;
}
.othcomment .time {
	position: absolute;
	right: 0px;
	bottom: 20px;
	color: rgba(204,204,204,1);
}
#comment .othcomment #likenum {
	position: absolute;
	right: 230px;
	bottom: 21px;
	color: rgba(204,204,204,1);
}
</style>
</head>

<body>
<div id="navigation">
	<div id="header">
	<ul>
		<li><a href='home.php'>首页</a></li>
        <li><a href='song.php'>曲库</a></li>
        <li><a href='showMyInformation.php'>个人中心</a></li>
        <li><a href='exit.php'>退出登录</a></li>
    </ul>
    </div>
</div>

<?php
$dbname="yy";
$serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
$db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
mysqli_set_charset($serverlink,"utf8");
?>
<div id="detail">   
	<p>歌曲详情</p> 
    <?php
		$songNo=@$_GET['songNo'];
		$sql="select * from song where songNo=$songNo";
		$query=mysqli_query($serverlink,$sql);
		while($row=mysqli_fetch_array($query)){
			list($a,$b,$c,$d,$e,$f,$g,$h)=$row;
			echo "<img src='../pic/S$songNo.jpg' width='200px' height='200px'>";
			echo "<ul>
			<li>歌曲名:&nbsp&nbsp$b</li>
			<li>歌手:&nbsp&nbsp$c</li>
			<li>点击量:&nbsp&nbsp$d</li>
			<li>标签:&nbsp&nbsp$f $g $h</li>
			</ul>";
		}
	?>
</div>
<div id="comment">
	<form method="post" action="comment.php?sn=<?php echo $_GET['songNo']?>">
		<textarea autofocus="autofocus" placeholder="期待你的神评论……" name="content"></textarea>
        <input type="submit" value="发  表" />
    </form>
	<div id="title">热门评论</div>
	<?php
		$sel=" select a.*,count(b.songNo) from comment a,likecomment b where a.songNo=b.songNo and a.songNo='$_GET[songNo]' and a.commentNo=b.commentNo group by commentNo order by count(b.songNo) desc";
		$res=mysqli_query($serverlink,$sel);
		while($row=mysqli_fetch_row($res)){
			$sel2="select * from likecomment where user_id='$_SESSION[user_id]' and songNo='$_GET[songNo]' and commentNo='$row[0]'";
			$res2=mysqli_query($serverlink,$sel2);
			?>
          <div class="othcomment">
          	<img src="../pic/<?php echo $row[1]?>.png" id="image" />
            <div class="uname"><div id="tag">用户</div><div class="name"><?php echo $row[2]?></div></div>
            <div class="content"><?php echo $row[4]?></div>
            <div class="time"><?php echo $row[5]?></div>
            <a class="<?php if(mysqli_num_rows($res2)!=1)echo 'like';else echo 'notlike'?>" href="javascript:;" onclick=" if(<?php echo mysqli_num_rows($res2)==1?>)href='like.php?cn=<?php echo $row[0]?>&s=<?php echo $_GET['songNo']?>';"></a>
            <span id="likenum"><?php echo $row[6]-1?></span>
          </div>
            <?php
		}
	?>
</div>
</body>
</html>