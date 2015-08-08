﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录注册界面</title>
<link rel="stylesheet" href="<?=base_url();?>/style1.css" type="text/css">
<script type="text/javascript" src="<?=base_url();?>/md5.js"></script>
</head>
<body>
<script language="javascript">
 
 function ChangePwdMd5() {
  theform=document.formd5;
  theform.username_md5.value=hex_md5(theform.username.value);
  theform.password_md5.value=hex_md5(theform.password.value);
  }
 function reg_submit() {
     ChangePwdMd5();
     document.formd5.action="<?=site_url('register/showreg')?>";
     document.formd5.submit();
 }
 function login_submit(){
     ChangePwdMd5();
     document.formd5.action="<?=site_url('Login/login')?>";
     document.formd5.submit();
 }
</script>
	<div id="loginview">
	<form name="formd5"  method="post" onSubmit="ChangePwdMd5();">
	<div id="admin">Admin</div>
    <br>
    <div id="up">Username:&nbsp;&nbsp;<input class="form-control" name="username" type="text">
		<input type="hidden" name="username_md5">
	</div>
    <br>
	<div id="up">Password:&nbsp;&nbsp;<input class="form-control" name="password" type="password">
		<input type="hidden" name="password_md5">
	</div>    
    <div id="btn">
        <input class="button" type="button" name="login" value="登录" onclick="login_submit()"/>
        <input class="button" type="button" name="reg" value="注册" onclick="reg_submit();"/>
    </div>
    </form>
    </div>
</body>
</html>

