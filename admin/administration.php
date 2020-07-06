<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
	$dbname="yy";
	$serverlink=mysqli_connect('localhost','root','')or die("数据库连接失败");
	$db=mysqli_select_db($serverlink,"$dbname")or die("无法连接数据库");
	mysqli_set_charset($serverlink,"utf8");
?>
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">歌曲管理</li>
    <li class="TabbedPanelsTab" tabindex="0">添加歌曲</li>
    <li class="TabbedPanelsTab" tabindex="0">查询歌曲</li>
    <li class="TabbedPanelsTab" tabindex="0">评论管理</li>
    <li class="TabbedPanelsTab" tabindex="0">管理员管理</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
       <form method="post" name="song" >
    	<table>
		  <tr><td>歌曲编码</td><td>歌曲名称</td><td>歌手</td><td>热度</td><td>会员专享(1)</td><td>语种</td><td>心情</td><td>风格</td><td></td><td></td><td></td></tr>
    		<?php
				$size=10;
				if(isset($_GET["num"]))
					$page=$_GET["num"];
				else
					$page=1;
				$end=$size*$page;
				$start=$size*$page-10;
				$sel="select * from song order by songNo limit $start,$size";
				$sel2="select * from song order by songNo limit $end,$size";
				$result=mysqli_query($serverlink,$sel);
				$result2=mysqli_query($serverlink,$sel2);
				@$row2=mysqli_num_rows($result2);
				while($row=mysqli_fetch_row($result)){
			?>
		  <tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td><td><?php echo $row[2]?></td><td><?php echo $row[3]?></td><td><?php echo $row[4]?></td><td><?php echo $row[5]?></td><td><?php echo $row[6]?></td><td><?php echo $row[7]?></td><td><a href="update.php?sn=<?php echo $row[0]?>">修改</a></td><td><a href="#" onclick="if(confirm('确定要删除吗')){location.href='delete.php?sn=<?php echo $row[0]?>'}">删除</a></td><td><input type="checkbox" name="del[]" value="<?php echo $row[0]?>" /></td></tr>	
   		 <?php
				}
		?>		
		</table>
        <input class="btn" type="submit" value="批量删除" onclick="if(confirm('确定要删除所选的全部内容吗')) song.action='delete.php'" />
      </form>
		<?php
			if($page>1){
				echo "<a href='administration.php?num=1&tab=0'>首页</a>"."    ";
				?><a href='administration.php?num=<?php echo $page-1?>&tab=0'>上一页</a>&nbsp;&nbsp;
       		 <?php
			}
			if($row2>0){?><a href='administration.php?num=<?php echo $page+1?>&tab=0'>下一页</a>&nbsp;&nbsp;
     		   <?php
			}
			$all="select * from song";
			$result3=mysqli_query($serverlink,$all);
			$num2=mysqli_num_rows($result3);
			$pagenum=ceil($num2/$size);
			$i=1;
			while($i<=$pagenum){
				if($i==$page)
					echo $i."    ";
				else
					echo "<a href='administration.php?num=$i&tab=0'>$i</a>"."    ";
				$i=$i+1;
			}
		?>
    </div>
    <div class="TabbedPanelsContent">
      <form method="post" name="add" action="add.php" enctype="multipart/form-data">
        <p>
          <input type="hidden" name="MAX_FILE_SIZE" value="20240000" />
          歌曲：
          <input type="file" name="myfile[]" />
        </p>
        <p>图片：
          <input type="file" name="myfile[]" />
        </p>
        <p>歌曲名称：
          <input type="text" name="sna"/>
        </p>
        <p>歌手：
          <input type="text" name="singer"/>
        </p>
        <p>会员专享(1)：
          <input type="text" name="vip"/>
        </p>
        <p>语种：
          <input type="text" name="lan"/>
        </p>
        <p>心情：
          <input type="text" name="mood"/>
        </p>
        <p>风格：
          <input type="text" name="style"/>
        </p>
        <input class="btn" type="submit" value="添加"/>
      </form>
    </div>
    <div class="TabbedPanelsContent">
    	<form name="search" method="post">
    		<select name="keyword">
    			<option value="歌曲名称" <?php if(@$_POST["keyword"]=="歌曲名称") echo "selected"?>>歌曲名称</option>
       			<option value="歌手" <?php if(@$_POST["keyword"]=="歌手") echo "selected"?>>歌手</option>
       			<option value="语种" <?php if(@$_POST["keyword"]=="语种") echo "selected"?>>语种</option>
       		 	<option value="心情" <?php if(@$_POST["keyword"]=="心情") echo "selected"?>>心情</option>
                <option value="风格" <?php if(@$_POST["keyword"]=="风格") echo "selected"?>>风格</option>
   			</select>
    		<input type="text"  name="keywords" value="<?php echo @$_POST['keywords']?>"/>
    		<input class="btn" type="submit" onclick="search.action='administration.php?tab=2'" value="查询" />
		</form>
        	<table>
				<tr><td>歌曲编码</td><td>歌曲名称</td><td>歌手</td><td>热度</td><td>会员专享(1)</td><td>语种</td><td>心情</td><td>风格</td><td></td><td></td><td></td></tr>
    <form name="selresult" method="post">
    	<?php
		if(@$_POST["keyword"]=="歌曲名称"){
			$search="select * from song where songName like '%$_POST[keywords]%'";
			$result=mysqli_query($serverlink,$search);
			while($row=mysqli_fetch_row($result)){
		?>
			<tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td><td><?php echo $row[2]?></td><td><?php echo $row[3]?></td><td><?php echo $row[4]?></td><td><?php echo $row[5]?></td><td><?php echo $row[6]?></td><td><?php echo $row[7]?></td><td><a href="update.php?sn=<?php echo $row[0]?>">修改</a></td><td><a href="#" onclick="if(confirm('确定要删除吗')){location.href='delete.php?sn=<?php echo $row[0]?>'}">删除</a></td><td><input type="checkbox" name="del[]" value="<?php echo $row[0]?>" /></td></tr>	
   			 <?php
				}
			?>		
			</table> 
      	<?php
		}
		elseif(@$_POST["keyword"]=="歌手"){
			$search="select * from song where singer like '%$_POST[keywords]%'";
			$result=mysqli_query($serverlink,$search);
			while($row=mysqli_fetch_row($result)){
		?>
			<tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td><td><?php echo $row[2]?></td><td><?php echo $row[3]?></td><td><?php echo $row[4]?></td><td><?php echo $row[5]?></td><td><?php echo $row[6]?></td><td><?php echo $row[7]?></td><td><a href="update.php?sn=<?php echo $row[0]?>">修改</a></td><td><a href="#" onclick="if(confirm('确定要删除吗')){location.href='delete.php?sn=<?php echo $row[0]?>'}">删除</a></td><td><input type="checkbox" name="del[]" value="<?php echo $row[0]?>" /></td></tr>	
  	  <?php
			}
			}
		elseif(@$_POST["keyword"]=="语种"){
			$search="select * from song where language like '%$_POST[keywords]%'";
			$result=mysqli_query($serverlink,$search);
			while($row=mysqli_fetch_row($result)){
		?>
			<tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td><td><?php echo $row[2]?></td><td><?php echo $row[3]?></td><td><?php echo $row[4]?></td><td><?php echo $row[5]?></td><td><?php echo $row[6]?></td><td><?php echo $row[7]?></td><td><a href="update.php?sn=<?php echo $row[0]?>">修改</a></td><td><a href="#" onclick="if(confirm('确定要删除吗')){location.href='delete.php?sn=<?php echo $row[0]?>'}">删除</a></td><td><input type="checkbox" name="del[]" value="<?php echo $row[0]?>" /></td></tr>	
   	 <?php
			}
			}
		elseif(@$_POST["keyword"]=="心情"){
			$search="select * from song where mood like '%$_POST[keywords]%'";
			$result=mysqli_query($serverlink,$search);
			while($row=mysqli_fetch_row($result)){
		?>
			<tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td><td><?php echo $row[2]?></td><td><?php echo $row[3]?></td><td><?php echo $row[4]?></td><td><?php echo $row[5]?></td><td><?php echo $row[6]?></td><td><?php echo $row[7]?></td><td><a href="update.php?sn=<?php echo $row[0]?>">修改</a></td><td><a href="#" onclick="if(confirm('确定要删除吗')){location.href='delete.php?sn=<?php echo $row[0]?>'}">删除</a></td><td><input type="checkbox" name="del[]" value="<?php echo $row[0]?>" /></td></tr>	
    <?php
			}
			}
		elseif(@$_POST["keyword"]=="风格"){
			$search="select * from song where style like '%$_POST[keywords]%'";
			$result=mysqli_query($serverlink,$search);
			while($row=mysqli_fetch_row($result)){
		?>
			<tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td><td><?php echo $row[2]?></td><td><?php echo $row[3]?></td><td><?php echo $row[4]?></td><td><?php echo $row[5]?></td><td><?php echo $row[6]?></td><td><?php echo $row[7]?></td><td><a href="update.php?sn=<?php echo $row[0]?>">修改</a></td><td><a href="#" onclick="if(confirm('确定要删除吗')){location.href='delete.php?sn=<?php echo $row[0]?>'}">删除</a></td><td><input type="checkbox" name="del[]" value="<?php echo $row[0]?>" /></td></tr>	
    <?php
		}
		}
	?>	
</table>
		<input class="btn" type="submit" value="批量删除" onclick="if(confirm('确定要删除所选的全部内容吗')) song.action='delete.php'" />
      </form>
    </div>
    <div class="TabbedPanelsContent">
      <form method="post"  name="comment">
        <table>
          <tr>
            <td>评论编码</td>
            <td>用户账号</td>
            <td>歌曲编号</td>
            <td>评论内容</td>
            <td>评论日期</td>
          </tr>
          <?php
				$size=10;
				if(isset($_GET["num2"]))
					$page=$_GET["num2"];
				else
					$page=1;
				$end=$size*$page;
				$start=$size*$page-10;
				$sel="select * from comment order by commentNo limit $start,$size";
				$sel2="select * from comment order by commentNo limit $end,$size";
				$result=mysqli_query($serverlink,$sel);
				$result2=mysqli_query($serverlink,$sel2);
				@$row2=mysqli_num_rows($result2);
				while($row=mysqli_fetch_row($result)){
			?>
          <tr>
            <td><?php echo $row[0]?></td>
            <td><?php echo $row[1]?></td>
            <td><?php echo $row[2]?></td>
            <td><?php echo $row[3]?></td>
            <td><?php echo $row[4]?></td>
            <td><a href="#" onclick="if(confirm('确定要删除吗')){location.href='comment_delete.php?cn=<?php echo $row[0]?>'}">删除</a></td>
            <td><input type="checkbox" name="del[]" value="<?php echo $row[0]?>" /></td>
          </tr>
          <?php
				}
		?>
        </table>
        <input class="btn" type="submit" value="批量删除"  onclick="if(confirm('确定要删除所选的全部内容吗')) comment.action='comment_delete.php'"  />
      </form>
      <?php
			if($page>1){
				echo "<a href='administration.php?num2=1&tab=3'>首页</a>"."    ";
				?>
      <a href='administration.php?num2=<?php echo $page-1?>&tab=3'>上一页</a>&nbsp;&nbsp;
      <?php
			}
			if($row2>0){?>
      <a href='administration.php?num2=<?php echo $page+1?>&tab=3'>下一页</a>&nbsp;&nbsp;
      <?php
			}
			$all="select * from comment";
			$result3=mysqli_query($serverlink,$all);
			$num2=mysqli_num_rows($result3);
			$pagenum=ceil($num2/$size);
			$i=1;
			while($i<=$pagenum){
				if($i==$page)
					echo $i."    ";
				else
					echo "<a href='administration.php?num2=$i&tab=3'>$i</a>"."    ";
				$i=$i+1;
			}
		?>
    </div>
    <div class="TabbedPanelsContent">
    	<form method="post" name="admin">
        	<table>
              <tr><td></td><td>账号</td><td>密码</td></tr>
              <tr>
              	<td>密码修改</td>
        		<td><input type="text" name="upname" value="<?php echo $_SESSION["adminNo"]?>" readonly="readonly" /></td>
           		<td><input type="password" name="uppwd" /></td>
            	<td><input class="btn" type="submit" onclick="admin.action='admin_update.php'" value="修改" /></td>
              </tr>
             	<td>添加账户</td>
            	<td><input type="text" name="name" /></td>
           		<td><input type="password" name="pwd" /></td>
            	<td><input class="btn" type="submit" onclick="admin.action='admin_register.php'" value="添加" /></td>
           </table>
        </form>
    </div>
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>