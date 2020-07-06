<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>删除评论</title>
</head>

<body>
<?php
	$dbname="yy";
	$serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
	$db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
	mysqli_set_charset($serverlink,"utf8");
	if(@$_POST["del"]!=null){
		for($i=0;$i<count($_POST['del']);$i++){
			$no=$_POST['del'][$i];
			$del="delete from comment where commentNo='$no'";
			mysqli_query($serverlink,$del);
		}
	}
	elseif(@$_GET['cn']!=null){
		$del="delete from comment where commentNo='$_GET[cn]'";
		mysqli_query($serverlink,$del);
	}
	else
		echo "<script>alert('请√中你所要删除的内容')</script>";
?>
<script>
	window.location.href="administration.php?tab=3";
</script>
</body>
</html>