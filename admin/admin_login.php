<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>身份验证</title>
</head>

<body>
<?php
	$dbname="yy";
	$serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
	$db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
	mysqli_set_charset($serverlink,"utf8");
	$_SESSION["adminNo"]=$_POST["uname"];
	$pwd=md5($_POST['pwd']);
	$sql="select * from administration where administration='$_POST[uname]' and pwd ='$pwd'";
	$result=mysqli_query($serverlink,$sql);
	if(mysqli_num_rows($result)>0&&$_SESSION["vcode"]==$_POST["ck"])
		header("location:administration.php");
	elseif($_SESSION["vcode"]!=$_POST["ck"]){
		?>
        <script language="javascript">
			alert('验证码错误');
			window.history.back(-1);
		</script>
        <?php
	}
	else{?>
        <script language="javascript">
			alert('用户名或密码错误错误');
			window.history.back(-1);
		</script>
        <?php
	}
?>
</body>
</html>