<?php
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>歌手</title>
<style type="text/css">
body{
	background-color:#f7f7f7;
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
#navigation #header {
	height: 80px;
	width: 1100px;
	margin-right: auto;
	margin-left: auto;
	background-image: url(../pic/logo.jpg);
	background-repeat: no-repeat;
	background-position: left;
}
#navigation {
	height: 80px;
	border: 1px dashed #000;
	background-color: #373737;
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
.slider {
	border: 1px dashed #F00;
	margin-right: auto;
	margin-left: auto;
	margin-bottom: 30px;
}
#container {
	height: auto;
	width: 1100px;
	margin-right: auto;
	margin-left: auto;
}
#list {
	width: 1100px;
	margin-top: 80px;
	margin-right: auto;
	margin-left: auto;
	height: 400px;
}
#list ul {
	padding: 0px;
	height: 300px;
	width: 200px;
	float: left;
	margin-right: 25px;
}
#list ul:last-child{
	padding: 0px;
	height: 300px;
	width: 200px;
	float: left;
	margin-right: 0px;
}
#container #list ul li {
	font-size: 28px;
	line-height: 36px;
	color: #999;
	float: left;
	list-style-type: none;
}
#title {
	font-family: "微软雅黑";
	font-size: 30px;
	color: #666;
	text-align: center;
	clear: left;
}
#container #rank {
	width: 1100px;
	border: 1px solid #999;
	margin-right: auto;
	margin-left: auto;
	margin-top: 40px;
	padding-top: 30px;
	padding-bottom: 50px;
}
table {
	font-family: "微软雅黑";
	font-size: 18px;
	line-height: 40px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
	text-align: center;
	color: #666;
	margin-top: 20px;
	margin-bottom: 20px;
}
tr:first-child{
	background-color: #999;
	color: #FFF;
	font-size: 26px;
	line-height: 50px;
	height: 50px;
}
tr:hover{
	background-color: #999999;
	color: #FFF;
}
tr:hover a {
	color: #FFF;
	background-color: #999999;	
}
tr:hover a span{
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
	margin-left: 50px;
	border-left-color:#FFF;
}
table a{
	color: #999999;
	text-decoration: none;	
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
td:nth-child(1){
	border-bottom-width: 1px;
	border-bottom-style: dashed;
	border-bottom-color: #CCC;	
	width:300px;
}
td:nth-child(2){
	width:300px;
		border-bottom-width: 1px;
	border-bottom-style: dashed;
	border-bottom-color: #CCC;	

}
td:nth-child(3){

	width:200px;
	border-bottom-width: 1px;
	border-bottom-style: dashed;
	border-bottom-color: #CCC;	

}
td:nth-child(4){
	width:100px;
	border-bottom-width: 1px;
	border-bottom-style: dashed;
	border-bottom-color: #CCC;	

}
td:nth-child(5){
	width:100px;
	border-bottom-width: 1px;
	border-bottom-style: dashed;
	border-bottom-color: #CCC;	

}
#list ul li {
	list-style-type: none;
	display: block;
	overflow: hidden;
}
#list ul li a{
	font-size: 18px;
	line-height: 32px;
	color: #999;
	text-decoration: none;
	display: block;
	overflow: hidden;
	width: 200px;
}
#list ul li a img{
	height: 200px;
	width: 200px;
	margin-bottom: 10px;
}
.songlike{
	position: relative;
	font-size: 24px;
}
#isplay {
	position: absolute;
	left: 20px;
	top:20px;
}
tr td:first-child {
	position:relative;
}
.songlist {
	width: 100px;
	display: none;
	position: absolute;
	background-color: rgba(153,153,153,1);
	left: 13px;
	bottom: -50px;
	z-index: 1000;
	padding-top: 0px;
	padding-right: 20px;
	padding-bottom: 30px;
	padding-left: 20px;
}
.songlike:hover .songlist{
	display:block;
}
.songlistName {
	font-size: 12px;
	color: rgba(255,255,255,1);
	text-align: center;
	display: block;
	height: 20px;
	width: 100px;
	margin-top: 10px;
	text-decoration: none;
}

</style>
<link href="../css/app.css" rel="stylesheet" type="text/css" />
<link href="../css/normalize.css" rel="stylesheet" type="text/css" />
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
?>
<div class="slider">

	<div class="slider-img">
		<ul class="slider-img-ul">
			<li><img src="../pic/200855.jpg"></li>
			<li><img src="../pic/200811.jpg"></li>
			<li><img src="../pic/200822.jpg"</li>
			<li><img src="../pic/200833.jpg"></li>
			<li><img src="../pic/200844.jpg"></li>
			<li><img src="../pic/200855.jpg"></li>
			<li><img src="../pic/200811.jpg"></li>
		</ul>
	</div>

</div>

<script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/xSlider.js"></script>

<div id='list'>
  <div id='title'>歌单推荐</div>
		
		<?php
		$sql="select distinct listName,play from list order by play desc limit 5"; 
		$query=mysqli_query($serverlink,$sql);
				while($row=mysqli_fetch_row($query)){
					$sellist2="select listNo from list where listName='$row[0]'";
					$query2=mysqli_query($serverlink,$sellist2);
					@$row2=mysqli_fetch_row($query2);
					?>
                    <ul>
                    <li><a href='songList.php?list=<?php echo $row2[0]?>'><img src='../pic/S<?php echo $row2[0]?>.jpg'/></a></li>
					<li><a><?php echo $row[0]?></a></li><br><li><a>播放量:<?php echo $row[1]?></a></li>
					</ul>
                    <?php
				}
		echo"</div></div>";
  
  		echo "<div id='rank'><div id='title'>热门歌曲</div>";
        if(isset($_GET["a"]))
			$_SESSION['a']=$_GET["a"];
		$sql="select * from song order by hits desc limit 10";
		$sql2="select * from song order by hits desc";
		$_SESSION["sql"]=$sql2;
		$query=mysqli_query($serverlink,$sql);
		$t=mysqli_num_rows($query);
		$i=-1;
		echo "<table border='0' action='' method='post'>";
		echo "<tr><td>歌曲</td><td>歌手</td><td>点击热度</td><td>播放</td><td>添加</td></tr>";
		while($row=mysqli_fetch_array($query))
		{
			list($a,$b,$c,$d,$e,$f,$g,$h)=$row;
			$sellist="select distinct listName from list where user_id='$_SESSION[user_id]'";
			$result3=mysqli_query($serverlink,$sellist);
			$i=$i+1;
		?>
			<tr>
				<td><a href="songDetail.php?songNo=<?php echo $a?>"><?php echo $b?></a><img id="isplay" <?php if(isset($_GET['a'])&&@$_GET['a']==$i)echo "src='../pic/wave.gif'"?> /></td>
				<td><?php echo $c?></td>
				<td><?php echo $d?></td>
				<td><a href='home.php?a=<?php echo $i?>&t=<?php echo $t?>'><span></span></a></td>
				<td><span class='songlike'>+
						<span class='songlist'>
						<?php
							while($row3=mysqli_fetch_row($result3)){
								$sellist3="select distinct if('$a' not in(select songNo from list where listName='$row3[0]' and user_id='$_SESSION[user_id]'),'$row3[0]',0) from list";
								$que=mysqli_query($serverlink,$sellist3);
								$row5=mysqli_fetch_row($que);
								if($row5[0]==$row3[0]){
								$sellist2="select listNo from list where user_id='$_SESSION[user_id]' and listName='$row3[0]'";
								$result4=mysqli_query($serverlink,$sellist2);
								@$row4=mysqli_fetch_row($result4);
			?>
            		<a class="songlistName" href="addToList.php?listNo=<?php echo $row4[0]?>&songNo=<?php echo $a;?>"><?php echo $row3[0]?></a>
            <?php	
								}
				}
								?>
       					</span>	
					</span>
				</td>
			</tr>
        <?php
		}
		?>
		</table>;

    </div>
    
</div>
<?php
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
