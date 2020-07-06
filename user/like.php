<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$dbname="yy";
    $serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
    $db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
    mysqli_set_charset($serverlink,"utf8");
	$sn=$_GET['s'];
	$ins="insert into likecomment values('$_SESSION[user_id]','$_GET[cn]','$_GET[s]')";
	mysqli_query($serverlink,$ins);
	echo	"<script>window.location.href='songDetail.php?songNo=$sn'</script>";
	?>
</body>
</html>