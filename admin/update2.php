<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改</title>
</head>

<body>
<?php
	$dbname="yy";
	$serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
	$db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
	mysqli_set_charset($serverlink,"utf8");
	$update="update song set songName='$_POST[sna]',singer='$_POST[singer]',vip='$_POST[vip]',language='$_POST[lan]',mood='$_POST[mood]',style='$_POST[style]' where songNo='$_POST[sno]'";
	mysqli_query($serverlink,$update);
	if(!empty($_FILES["picture"]["name"]))
		move_uploaded_file($_FILES["picture"]["tmp_name"],"../pic/S".$_POST["sno"].".jpg");
?>
<script>
	alert("修改成功");
	window.location.href="administration.php?tab=0";
</script>
</body>
</html>