<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>课程详情</title>
<style type="text/css">
.btn{
	background-color: rgba(255,255,255,1);
	height: 40px;
	width: 80px;
}
input{
	margin-bottom: 20px;
	height:25px;
}
#bg {
	width: 410px;
	margin-right: auto;
	margin-left: auto;
	background-color: #f7f7f7;
	border: 1px dashed #999;
	padding-left: 95px;
	padding-top: 60px;
	font-size: 18px;
	padding-right: 55px;
	padding-bottom: 30px;
}
</style>
</head>

<body>
<?php
	$dbname="yy";
	$serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
	$db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
	mysqli_set_charset($serverlink,"utf8");
	$sel="select * from song where songNo='$_GET[sn]'";
	$result=mysqli_query($serverlink,$sel);
	$row=mysqli_fetch_row($result);
?>

<div id="bg">
<table>
<form method="post" name="update" enctype="multipart/form-data">
   	<tr>
    	<td><img src="../pic/S<?php echo $_GET['sn']?>.jpg" width="100" height="150" />
    	<input type="file" name="picture" size="30"/></td>
    </tr>
	<tr>
        <td>歌曲编码:</td>
        <td><input type="text" name="sno" value="<?php echo $row[0]?>" readonly="readonly"/></td>
    </tr>
    
    <tr>
        <td>歌曲名称：</td>
        <td><input type="text" name="sna" value="<?php echo $row[1]?>"/></td>
    </tr>
    
    <tr>
        <td>歌手：</td>
        <td><input type="text" name="singer" value="<?php echo $row[2]?>"/></td>
    </tr>
    
    <tr>
        <td>会员专享(1)：</td>
        <td><input type="text" name="vip" value="<?php echo $row[4]?>"/></td>
    </tr>
    
    <tr>
        <td>语种：</td>
        <td><input type="text" name="lan" value="<?php echo $row[5]?>"/></td>
    </tr>
    
    <tr>
        <td>心情：</td>
        <td><input type="text" name="mood" value="<?php echo $row[6]?>"/></td>
    </tr>
    
    <tr>
        <td>风格：</td>
        <td><input type="text" name="style" value="<?php echo $row[7]?>"/></td>
    </tr>
    
	<tr>
        <td><input class="btn" type="submit" value="修改" onclick="update.action='update2.php'"  /></td>
        <td><input class="btn" type="submit" value="返回" onclick="update.action='administration.php'"  /></td></tr>
    </tr>
    
</form>
</table>

</div>
</body>
</html>