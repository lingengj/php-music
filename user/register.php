<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
#container {

}
#userName,#pwd,#pwd1,#e-mail,#myPictureName{
	height: 25px;
	width: 200px;
	margin-bottom: 20px;
	margin-bottom: 20px;
}
#year,#month,#day,#province,#city{
	height: 30px;
	width: 80px;
	font-size: 16px;
	margin-bottom: 20px;
	
}
#radio{
		margin-bottom: 20px;
}
td:nth-child(2n-1){
	font-family: "微软雅黑";
	font-size: 18px;
	padding-bottom: 20px;
	
}
span{
	color: #F00;
	padding-right: 2px;
	padding-left: 2px;
}

#container #box {
	height: 620px;
	width: 700px;
	margin-right: auto;
	margin-left: auto;
	border: 1px dashed #999;
	padding-top: 50px;
	padding-left: 270px;
	background-color: #F0F0F0;
	border-radius:6px;
}
#header a {
	font-size: 16px;
}
#button {
	padding-left: 100px;
	color: #666;
}
#ZC,#CZ{
	margin-top:20px;
}
#header {
	font-family: "微软雅黑";
	font-size: 28px;
	margin-bottom: 30px;
	margin-left: 2px;
}
</style>
</head>

<body>
<div>
	<div id="container">
    	<div id="box">
        <div id="header">新用户注册<a>（带<span>*</span>为必填项！）</a></div>
        <table>
        <form method="post" action="register-bs.php" name="form1" enctype="multipart/form-data" >
        <tr>
        	<td><span>*</span>用户名：</td>
       		<td><input type="text" name="userName" id="userName" size="12" warnmessage="用户名不能为空！"/></td>
            
        </tr>
        
        <tr>
            <td><span>*</span>密码:</td>
            <td><input type="password" name="pwd" id="pwd" size="12"/></td>
        </tr>
        
        <tr>
            <td><span>*</span>确认密码：</td>
            <td><input type="password" name="pwd1" id="pwd1" size="12"/></td>
        </tr>
        
        <tr>
            <td><span>*</span>性别:</td>
            <td><input type="radio" name="role" id="radio" value="男"/>男
            <input type="radio" name="role" value="女"/>女</td>
        </tr>
        
        <tr>
        	<td><span>*</span>出生日期:</td>
            <td><select name="year" id="year">
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                </select>
                年
                <select name="month" id="month">
                <option value="1">1</option>
                <option value="2">2</option>
                </select>
                月
                <select name="day" id="day">
                <option value="1">1</option>
                <option value="2">2</option>
                </select>
                日
            </td>
        </tr>
        
        <tr>
        	<td style="padding-right:2px">地址：</td>
            <td> <select name="province" id="province">
            <option value="广东">广东</option>
            <option value="广西">广西</option>
            </select>
       		省
            <select name="city" id="city">
            <option value="x1"></option>
            <option value="x2"></option>
            </select>
       	    市
            </td>
        </tr>
        
        <tr>
        	<td>邮箱:</td>
        	<td><input type="text" name="e_mail" id="e-mail" size="12"/></td>
        </tr>
        
        <tr>
            <td><span>*</span>个人相片:</td>
            <td><input type="file" name="myPictureName" id="myPictureName" size="30"/></td>
        </tr>
        
        <tr>
            <td><input type="checkbox" name="agree" style="margin:20px 0px 0px 100px;display:inline-block;" value="1"/></td>
            <td><a style="font-size:14px;padding-top:-20px;">我已阅读并同意《用户注册协议》</a></td>
        </tr>
        
        <tr>
            <td> </td>
        	<td>
            	<input type="submit" name="zc" id="zc" value="注册" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            	<input type="reset" name="CZ" id="CZ" value="重置"/>
            </td>
        	
        </tr>
        
        
        </form>
        </table>
        
      </div>
    </div>
</div>

<?php

?>
</body>
</html>