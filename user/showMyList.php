<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查看我的歌单</title>
<style type="text/css">

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

}#container {
	height: 1400px;
	width: 1100px;
	margin-right: auto;
	margin-left: auto;
	margin-top: 30px;
}
#one {
	height: 300px;
	width: 1100px;
	border: 1px solid #666;
		background-image: url(../pic/bg1.jpg);


}
#photo {
	height: 100px;
	width: 100px;
	border: 1px double #666;
	margin-right: auto;
	margin-left: auto;
	border-radius: 100px;
	margin-top: 100px;
	overflow: hidden;
}

#container #right {
	float: right;
	height: auto;
	width: 870px;
	border: 1px solid #999;
	padding-bottom: 20px;
}
#name {
	height: 35px;
	width: 150px;
	margin-right: auto;
	margin-left: auto;
	margin-top: 20px;
	text-align: center;
	font-size: 18px;
	color: #FFF;
}
#box #top {
	font-size: 28px;
	margin-bottom: 20px;
	text-align: center;
}

#content {
	padding: 0px;
	margin-top: 30px;
}

#container #left {
	font-family: "微软雅黑";
	font-size: 24px;
	height: 300px;
	width: 200px;
	float: left;
}
#content #left ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
}
#content #left ul li a{
	list-style-type: none;
	display: block;
	color: #333;
	background-color: #FFF;
	height: 50px;
	width: 200px;
	margin: 0px;
	line-height: 50px;
	text-align: center;
	text-decoration: none;
}


#content #left ul li a:hover{
	color: #666;	
}	

#content #right #title {
	font-family: "微软雅黑";
	font-size: 28px;
	margin-top: 20px;
	margin-left: 20px;
	color: #666;
	margin-bottom: 10px;
}
table {
	font-family: "微软雅黑";
	font-size: 18px;
	line-height: 35px;
	width: 840px;
	margin-right: auto;
	margin-left: auto;
	text-align: center;
	color: #666;
}
table a{
	font-size: 18px;
	color: #999;
	text-decoration: none;
}
tr:nth-child(2n-1){
	background-color: #f7f7f7;
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
    
  <div id="container">
      <?php
  				@session_start();
				$a=@$_SESSION['userName'];
				$dbname="yy";
				$serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
				$db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
				mysqli_set_charset($serverlink,"utf8");
				$sql="select * from user where userName='$a'";
				$query=mysqli_query($serverlink,$sql);
				$row=mysqli_fetch_array($query);
				list($a,$b,$c,$d,$e,$f,$g,$h)=$row;

  
  ?>

        <div id="one">
        	<div id="photo"><img src="../pic/<?php echo $a;?>.jpg" width="100" height="100" /></div>
            <div id="name" ><?php echo $b;?></div>
        </div>
        
        <div id="content">
            <div id="left">
            	<ul>
                	<li><a href="showMyInformation.php">查看我的信息</a></li>
                	<li><a href="updateMyInformation.php">修改我的信息</a></li>
                    <li><a href="showMyList.php">查看我的歌单</a></li>
                    <li><a href="showMyCollectList.php">我收藏的歌单</a></li>
                </ul>
            </div>
            <div id="right">
				<div id="title">我创建的歌单</div>
                <?php
				$id=$_SESSION['user_id'];
				$dbname="yy";
				$serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
				$db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
				mysqli_set_charset($serverlink,"utf8");
				$sql="select distinct listName from list where user_id='$_SESSION[user_id]'";
				$query=mysqli_query($serverlink,$sql);
				echo "<table border='0' action='' >";
				echo "<tr><td>歌单名</td><td>歌单标签</td><td>播放量</td><td>收藏量</td><td>查看</td></tr>";
				
				?>   
                
<?php
$result3=mysqli_query($serverlink,$sql);
	while($row3=mysqli_fetch_row($result3)){
		
		
		$sellist2="select * from list where user_id='$_SESSION[user_id]' and listName='$row3[0]'";
		$result4=mysqli_query($serverlink,$sellist2);
		@$row4=mysqli_fetch_row($result4);
		list($a,$b,$c,$d,$e,$f,$g)=$row4;
			echo "<tr><td>$b</td><td>$e</td><td>$f</td><td>$g</td><td><a href='songlist.php?list=$a'>详情</a></td></tr>";
	}
								?>         
            </div>
        </div>   
        
   </div>
</body>
</html>