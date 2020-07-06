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
#navigation #header {
	height: 80px;
	width: 1100px;
	margin-right: auto;
	margin-left: auto;
	background-image: url(../pic/logo.jpg);
	background-repeat: no-repeat;
	background-position: left;
}
#searchBox #photo {
	width: auto;
	height: 300px;
	margin-top: 10px;
	

}
#searchBox {
	width: auto;
	height: 300px;
	margin-top: 10px;
	background-color: #F9F9F9;
	background-image: url(../pic/bg.jpg);
	margin-bottom: 40px;
}
#search{
	width: 400px;
	height: 40px;
	position: relative;
	border-radius: 3px;
	font-size: 18px;
	left: 600px;
	top: -178px;
}
#searchBox ul {
	margin: 0px;
	padding: 0px;
	position: relative;
	left: 600px;
	top: -180px;
	width: 500px;
}
#searchBox ul li {
	float: left;
	list-style-type: none;
	margin-left: 20px;
	color: #FFF;
	font-size: 16px;
}
#searchBox div ul li a {
	text-decoration: none;
	color: #FFF;
	font-size: 16px;
}
img{
	position: relative;
	left: 560px;
	top: -172px;
}

#container ul {
	display: block;
	width: 1100px;
	height: 30px;
	margin-bottom: 30px;
	margin-top: 20px;
}
#container {
	width: 1100px;
	margin-right: auto;
	margin-left: auto;
	height: 200px;
	padding-top: 20px;
	margin-top: 60px;
	border: 1px dashed #000;
	margin-bottom: 30px;
}
ul li span {
	color: #FFF;
	background-color: #999;
	padding-top: 2px;
	padding-right: 4px;
	padding-bottom: 2px;
	padding-left: 4px;
}
#skip a {
	font-size: 30px;
	line-height: 36px;
	color: #999;
	text-decoration: none;
}
#container ul li a {
	text-decoration: none;
	color: #999;
}
#container ul li {
	float: left;
	display: block;
	text-decoration: none;
	margin-right: 15px;
	font-family: "微软雅黑";
	font-size: 22px;
}
table {
	font-family: "微软雅黑";
	font-size: 22px;
	line-height: 50px;
	width: 1100px;
	margin-right: auto;
	margin-left: auto;
	text-align: center;
	color: #666;
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
	margin-left: 53px;
}

tr:nth-child(2n-1){
	background-color: #f7f7f7;
}
#ss {
	position: relative;
	left: 975px;
	top: -215px;
	display: block;
	background-image: url(../pic/search.jpg);
	background-repeat: no-repeat;
	height: 28px;
	width: 28px;
}
#php {
	font-size: 36px;
	line-height: 40px;
	font-weight: bolder;
	color: #666;
	width: 1100px;
	margin-right: auto;
	margin-left: auto;
	text-align: center;
}
.songlike{
	position: relative;
	font-size: 24px;
}
#isplay {
	position: absolute;
	left: 30px;
	top:23px;
}
tr td:first-child {
	position: relative;
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
	padding-bottom: 40px;
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
#skip {
	height: 80px;
	margin-top: 15px;
}
#php tr td #songName {
	color: rgba(102,102,102,1);
	text-decoration: none;
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
    
  <div id="searchBox">
    
    <div id="photo"></div>
    <form method="post" action="song.php">
    <input style="padding-left:8px;" type="text" name="search" id="search" placeholder="搜索歌名、歌手" />
    <input type="submit" id="ss" value=""  />
	</form>
    <div>
	  <ul>
			<li>热门搜索:</li>
            <li><a href="#">林俊杰</a></li>
            <li><a href="#">东方之珠</a></li>
            <li><a href="#">周杰伦</a></li>
            <li><a href="#">啦啦啦</a></li>
                    
        </ul>    
    </div>
		    
  </div>
        
        
    <div id="container">
   		<ul>
        	<li><span>语种</span></li>
            <li><a href="song.php?key=中文">国语</a></li>
            <li><a href="song.php?key=日语">日语</a></li>
            <li><a href="song.php?key=英语">英语</a></li>
            <li><a href="song.php?key=粤语">粤语</a></li>
            <li><a href="song.php?key=韩语">韩语</a></li>
            <li><a href="song.php?key=小语种">小语种</a></li>
            <li><a href="song.php?key=阿拉伯语">阿拉伯语</a></li>
            <li><a href="song.php?key=闽南语">闽南语</a></li>
            <li><a href="song.php?key=法语">法语</a></li>
        </ul> 
        
      <ul>
        	<li><span>风格</span></li>
            <li><a href="song.php?key=流行">流行</a></li>
            <li><a href="song.php?key=轻音乐">轻音乐</a></li>
            <li><a href="song.php?key=电子">电子</a></li>
            <li><a href="song.php?key=纯音乐">纯音乐</a></li>
            <li><a href="song.php?key=嘻哈">嘻哈</a></li>
            <li><a href="song.php?key=民谣">民谣</a></li>
            <li><a href="song.php?key=摇滚">摇滚</a></li>
            <li><a href="song.php?key=乡村">乡村</a></li>
            <li><a href="song.php?key=蓝调">蓝调</a></li>
            <li><a href="song.php?key=爵士">爵士</a></li>
            <li><a href="song.php?key=中国传统">中国传统</a></li>
            <li><a href="song.php?key=抒情">抒情</a></li>
            <li><a href="song.php?key=重摇滚">重摇滚</a></li>
            <li><a href="song.php?key=世界音乐">世界音乐</a></li>
            
        </ul>
        
      <ul>
        	<li><span>心情</span></li>
            <li><a href="song.php?key=快乐">快乐</a></li>
            <li><a href="song.php?key=治愈">治愈</a></li>
            <li><a href="song.php?key=励志">励志</a></li>
            <li><a href="song.php?key=安静">安静</a></li>
            <li><a href="song.php?key=甜蜜">甜蜜</a></li>
            <li><a href="song.php?key=忧伤">忧伤</a></li>
            <li><a href="song.php?key=思念">思念</a></li>
            <li><a href="song.php?key=宣泄">宣泄</a></li>
            <li><a href="song.php?key=寂寞">寂寞</a></li>
            <li><a href="song.php?key=孤独">孤独</a></li>
            <li><a href="song.php?key=兴奋">兴奋</a></li>
       </ul>
       
  </div>
<div id="php">
<?php
if(!empty($_POST['search'])){
	$key=@$_POST['search'];
}else{
	if(empty($_POST['search'])){
		$key=@$_GET['key'];
		}
}
if(!empty($key)){
	$sql="select * from song where language like '%$key%' or mood like '%$key%' or style like '%$key%' limit 10";
}else{
	$sql="select * from song limit 10";
}
$dbname="yy";
$serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
$db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
mysqli_set_charset($serverlink,"utf8");
$query=mysqli_query($serverlink,$sql);
				$size=10;
				if(isset($_GET["num"])){$page=$_GET["num"];}
				else {$page=1;}
				$end=$size*$page;
				$start=$size*$page-10;
				if(isset($_GET["a"]))
					$_SESSION['a']=$_GET["a"];
$sel="select * from song where language like '%$key%' or mood like '%$key%' or style like '%$key%' limit $start,$size";
$sel2="select * from song where language like '%$key%' or mood like '%$key%' or style like '%$key%' limit $end,$size";
$sel3="select * from song where language like '%$key%' or mood like '%$key%' or style like '%$key%'";
$_SESSION["sql"]=$sel3;
				$query=mysqli_query($serverlink,$sel);
				$result2=mysqli_query($serverlink,$sel2);
				@$row2=mysqli_num_rows($result2);
				@$t=mysqli_num_rows($query);
				if($t!=0){
					echo "<table border='0' action='' method='post'>";
					echo "<tr><td>歌曲</td><td>歌手</td><td>点击热度</td><td>语言</td>
					<td>风格</td><td>心情</td><td>播放</td><td>添加</td></tr>";
					$i=-1+($page-1)*10;
					while($row=mysqli_fetch_array($query))
						{
						list($a,$b,$c,$d,$e,$f,$g,$h)=$row;
						$i=$i+1;
						$sellist="select distinct listName from list where user_id='$_SESSION[user_id]'";
						$result3=mysqli_query($serverlink,$sellist);
						?>
						<tr><td><a id="songName" href="songDetail.php?songNo=<?php echo $a?>"><?php echo $b?></a><img id="isplay" <?php if(isset($_GET['a'])&&@$_GET['a']==$i)echo "src='../pic/wave.gif'"?> /></td><td><?php echo $c?></td><td><?php echo $d?></td><td><?php echo $f?></td>
						<td><?php echo $h?></td><td><?php echo $g?></td><td><a href='song.php?a=<?php echo $i?>&t=<?php echo $t?>'><span></span></a></td><td><span class='songlike'>+
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
					</span></td></tr>
                        <?php
						}
						?>
					</table>
                    <?php
				}
				else{
					echo "<script>alert('曲库里暂时没有您所搜索的歌曲哦，请重新尝试');
					history.back(-1);</script>";}
		?>
        <div id="skip">
			<?php
                if($page>1){
                    echo "<a href='song.php?num=1'>首页</a>"."    ";
                    ?><a href='song.php?num=<?php echo $page-1?>'>上一页</a>&nbsp;&nbsp;
                 <?php
                }
                if($row2>0){?><a href='song.php?num=<?php echo $page+1?>'>下一页</a>&nbsp;&nbsp;
                   <?php
                }
				if($sql=="select * from song limit 10"){
					$all="select * from song";
				}else{
					$all=$sql;
				}
                $result3=mysqli_query($serverlink,$all);
                $num2=mysqli_num_rows($result3);
                $pagenum=ceil($num2/$size);
                $i=1;
                while($i<=$pagenum){
                    if($i==$page)
                        echo $i."    ";
                    else
                        echo "<a href='song.php?num=$i'>$i</a>"."    ";
                    $i=$i+1;
                }
            ?>
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
