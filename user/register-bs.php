<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php
if($_POST['agree']==1){
	
	$userName=$_POST['userName'];
	$pwd=$_POST['pwd'];
	$pwd1=$_POST['pwd1'];
	$sex=$_POST['role'];
	$year=$_POST['year'];
	$month=$_POST['month'];
	$day=$_POST['day'];
	$province=$_POST['province'];
	$city=$_POST['city'];
	$e_mail=$_POST['e_mail'];
	$myPictureName=$_FILES['myPictureName'];
	if(!empty($_FILES["myPictureName"]["name"])){
		if($pwd==$pwd1)
		{
			$dbname="yy";
			$serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
			$db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
			mysqli_set_charset($serverlink,"utf8");
			$sql="select * from user where userName='$userName'";
			$query=mysqli_query($serverlink,$sql);
			if(mysqli_num_rows($query)==0){
				$sql="select max(user_id) from user";
				$query=mysqli_query($serverlink,$sql);
				$row=mysqli_fetch_array($query);
				list($a)=$row;
				$a++;
				$birth=$year.".".$month.".".$day;
				move_uploaded_file($myPictureName["tmp_name"],"../pic/".$a.".jpg");
				$sql="insert into user values($a,'$userName','$pwd','$sex','$birth','','','','$a','0')";
				$query=mysqli_query($serverlink,$sql);
				echo "注册成功";
				header("Refresh:3;url=index.html");
				echo "页面将在3秒后自动转跳至登录页面";
		}}else{
			echo "两次密码不一致，请重试<br>";
			header("Refresh:3;url=register.php");
			echo "页面将在3秒后自动返回";
		}
	}else{
		echo "没有上传图片或图片内容过大，请重试";
		header("Refresh:3;url=register.php");
		echo "页面将在3秒后自动返回";
	}
}else{
	echo "如不勾选同意《用户注册协议》，则无法注册成为本网站用户<br>";
	header("Refresh:3;url=register.php");
	echo "页面将在3秒后自动返回";	
}
?>

</body>
</html>