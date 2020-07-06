<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	echo $_POST['sna'];
	$dbname="yy";
	$serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
	$db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
	mysqli_set_charset($serverlink,"utf8");
	$sel="select * from song";
	$result=mysqli_query($serverlink,$sel);
	$num=mysqli_num_rows($result)-1;
	$last="select * from song order by songNo limit $num,1";
	$result2=mysqli_query($serverlink,$last);
	$row=mysqli_fetch_row($result2);
	$no=strval($row[0]+1);
	$insert="insert into song values(null,'$_POST[sna]','$_POST[singer]','0','$_POST[vip]','$_POST[lan]','$_POST[mood]','$_POST[style]')";
	mysqli_query($serverlink,$insert);
	$allowtype = array("gif","png","jpg","mp3");
	$size = 20240000;
	$path = "../music"; 
	$path2 = "../image"; 
	for( $i = 0;$i < count($_FILES['myfile']['error']);$i++ ){
    	$upfile[$i] = $_FILES['myfile']['name'][$i];
    	if($_FILES['myfile']['error'][$i]>0){

        	echo "上传错误";
        	switch($_FILES['myfile']['error'][$i]){
        
           	 case 1: die('第'.($i+1).'个文件上传文件大小超出了PHP配置文件中的约定值：upload_max_filesize');
           	 case 2: die('上传第'.($i+1).'个文件大小超出了表单中的约定值：MAX_FILE_SIZE');
           	 case 3: die('第'.($i+1).'个文件只被部分上传');
          	  case 4: die('第'.($i+1).'个文件没有上传');
           	 default: die('未知错误');
      	  }
 	   }
    @$hz[$i] = array_pop(explode(".",$_FILES['myfile']['name'][$i]));
    if(!in_array($hz[$i],$allowtype)){
        die("第".($i+1)."个文件后缀是<b>{$hz}</b>,不是允许的文件类型！");
    }
    if($_FILES['myfile']['size'][$i]>$size){

        die("第".($i+1)."个文件超过了允许的<b>{$size}</b>");
    }
    $filename[$i] = $no.".".$hz[$i];
    if(is_uploaded_file($_FILES['myfile']['tmp_name'][$i])){
        if($i==0){
            move_uploaded_file($_FILES['myfile']['tmp_name'][0],$path.'/'.$filename[$i]);
        }
		if($i==1){
           move_uploaded_file($_FILES['myfile']['tmp_name'][1],$path2.'/'.$filename[$i]);
        }
    }else{
        die("上传文件{$_FILES['myfile']['name'][$i]}不是一个合法文件");
    }
    $filesize[$i] = $_FILES['myfile']['size'][$i]/1024;
    echo "文件{$upfile[$i]}上传成功，文件大小为{$filesize[$i]}KB<br>";
	}
?>
<script>
	alert("添加成功");
	window.location.href="administration.php?tab=1";
</script>
</body>
</html>