﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录注册界面</title>
<link rel="stylesheet" href="<?=base_url();?>/style1.css" type="text/css">
<script type="text/javascript" src="<?=base_url();?>/md5.js"></script>
<script src="<?=base_url();?>jquery-2.1.3.min.js"></script>
</head>
<body>
<script language="javascript">
 
 function ChangePwdMd5()
  {
  theform=document.formd5;
  theform.username_md5.value=hex_md5(theform.username.value);
  theform.password_md5.value=hex_md5(theform.password.value);
  }

</script>
	<div id="registerview">
	<form name="formd5" action="<?=site_url('register/reg')?>" method="post" onSubmit="ChangePwdMd5();">
	<div id="admin">Admin</div>
    <br>
    <div id="up">帐号:&nbsp;&nbsp;<input class="form-control" name="username" type="text">
		<input type="hidden" name="username_md5">
	</div>
    <br>
	<div id="up">密码:&nbsp;&nbsp;<input class="form-control" name="password" type="password">
		<input type="hidden" name="password_md5">
	</div>
        <br>
        <div id="up">确认密码:<input class="form-control" name="re_password" type="password">
        </div>
        <br>
        <div id="up">用户名:&nbsp;<input class="form-control" name="nickname" type="text">
        </div>
        <br>
        <div id="up">email:&nbsp; <input class="form-control" name="email" type="text">
        </div>
    <div id="btn">
        <input class="button" type="submit" name="login" value="确定"/>
        <input class="button" type="reset" name="reg" value="返回"/>
    </div>
    </form>
    </div>
</body>
</html>

