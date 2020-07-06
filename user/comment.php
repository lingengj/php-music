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
	date_default_timezone_set('PRC');
	$time=date('Y-m-d H:i:s');
	$sn=$_GET['sn'];
	if($_POST['content']==""){
		echo "<script>
				alert('你的评论内容不能为空');
				window.location.href='songDetail.php?songNo=$sn';
			 </script>";
		exit();
	}
	$ins="insert into comment values(null,'$_SESSION[user_id]','$_SESSION[userName]','$_GET[sn]','$_POST[content]','$time')";
	mysqli_query($serverlink,$ins);
	$sel="select * from comment where commentTime='$time'";
	$res=mysqli_query($serverlink,$sel);
	$row=mysqli_fetch_row($res);
	$ins2="insert into likecomment values('$_SESSION[user_id]','$row[0]','$_GET[sn]')";
	mysqli_query($serverlink,$ins2);
?>
<script>
	alert("发布成功");
	window.location.href="songDetail.php?songNo=<?php echo $sn?>";
</script>
</body>
</html>