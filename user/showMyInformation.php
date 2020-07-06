<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查看我的信息</title>
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
	height: 620px;
	width: 870px;
	border: 1px solid #999;
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
	font-size: 36px;
	margin-bottom: 20px;
	text-align: center;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #000;
	line-height: 50px;
}
table {
	margin-right: auto;
	margin-left: auto;
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

#content #right #box {
	height: 480px;
	width: 450px;
	margin-right: auto;
	margin-left: auto;
	margin-top: 50px;
}

#content {
	padding: 0px;
	margin-top: 30px;
}

#userName,#pwd,#pwd1,#e-mail,#myPictureName,#sex,#birth{
	height: 25px;
	width: 200px;
	margin-bottom: 20px;
	margin-bottom: 20px;
	font-size: 20px;
	line-height: 25px;
}
#year,#month,#day,#province,#city{
	height: 30px;
	width: 80px;
	font-size: 16px;
	margin-bottom: 20px;
	
}
#radio{
		margin-bottom: 20px;
}
td{
	font-family: "微软雅黑";
	font-size: 24px;
	padding-bottom: 20px;
	text-align: center;
}
span{
	color: #F00;
	padding-right: 2px;
	padding-left: 2px;
}

#container #content #left ul #top {
	font-size: 18px;
}
#XG{
	marrgin-left: 50px;
	margin-left: 130px;
}
</style>
</head>

<body>
<div>
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
            	<div id="box">
                <div id="top">我的个人信息</div>
				<?php
				
                echo "<table>";
				
                echo "<tr><td>用户名：$b</td></tr>";

                echo "<tr><td>性别：$d</td></tr>";
                
                echo "<tr><td>生日：$e</td></tr>";
                
                echo "<tr><td>居住地：$f-$g</td></tr>";
                
                echo "<tr><td>邮箱：$h</td></tr>";
                
                echo "<tr><td>个人相片：<img src='../pic/$a.jpg' width='100' height='100' /></td></tr>";
                
                echo "</table>";
                
				
				?>
				                
                
                
              </div>
          </div>
        </div>
        
  </div>
    
<div id="buttom"></div>

</div>

</body>
</html>