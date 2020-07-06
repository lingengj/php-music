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
$sel="select * from list where listNo='$_GET[listNo]'";
$result=mysqli_query($con,$sel);
@$row=mysqli_fetch_row($result);
$play=$row[5]+1;
$collect=$row[6]+1;
$ins="insert into list values(null,'$row[1]','$_SESSION[userName]','$_GET[songNo]',null,'$play','$collect')";
mysqli_query($con,$ins);
echo "<script>history.back(-1)</script>";

?>
</body>
</html>