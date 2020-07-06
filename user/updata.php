<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
		$userName=@$_SESSION['userName'];
		$dbname="yy";
		$serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
		$db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
		mysqli_set_charset($serverlink,"utf8");
		
		$pwd=$_POST['pwd'];
		$pwd1=$_POST['pwd1'];
		$province=$_POST['province'];
		$city=$_POST['city'];
		$birth=$_POST['birth'];
		$e_mail=$_POST['e-mail'];
		$myPictureName=$_FILES['myPictureName'];
		$sql="select * from user where userName='$userName' and pwd=$pwd";
		$query=mysqli_query($serverlink,$sql);
		$z=$_SESSION['user_id'];
		if(@mysqli_num_rows($query)==0){
			echo "用户旧密码错误,请重新尝试";
			header("Refresh:3;url=updateMyInformation.php");
			echo "页面将在3秒后自动返回";
		}else{
			if(empty($_FILES["myPictureName"]["name"])){
			$sql="update user set pwd='$pwd1',province='$province',city='$city',e_mail='$e_mail',birth='$birth' where userName='$userName'";
			$query=mysqli_query($serverlink,$sql);
			echo "修改成功";
			header("Refresh:3;url=showMyInformation.php");
			echo "页面将在3秒后自动返回";

			}else{
				move_uploaded_file($_FILES["myPictureName"]["tmp_name"],"../pic/".$z.".jpg");
				$sql="update user set pwd='$pwd1',province='$province',city='$city',e_mail='$e_mail',birth='$birth',photo='$z' where userName='$userName'";
				$query=mysqli_query($serverlink,$sql);
				echo "修改成功";
				header("Refresh:3;url=showMyInformation.php");
				echo "页面将在3秒后自动返回";
			}
			
		}
?>
</body>
</html>
