﻿<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录注册界面</title>
    <link rel="stylesheet" href="<?=base_url();?>/style1.css" type="text/css">

</head>
<body>

<div id="create_art_view">
    <form name="formd5"  method="post" onSubmit="ChangePwdMd5();">
        <div id="admin">Admin</div>
        <br>
        <div id="up">文章标题:<input class="form-control" name="username" type="text">
            <input type="hidden" name="username_md5">
        </div>
        <br>
        <div id="up">文章摘要:<input class="form-control" name="password" type="password">
            <input type="hidden" name="password_md5">

        </div>
        <br>
        <div id="up">文章内容:<textarea class="form-control" name="password" type="password" style="height: 200px"></textarea>

        </div>
        <div id="btn">
            <input class="button" type="button" name="login" value="发表" onclick="login_submit()"/>
            <input class="button" type="button" name="reg" value="取消" onclick="reg_submit();"/>
        </div>
    </form>
</div>
</body>
</html>