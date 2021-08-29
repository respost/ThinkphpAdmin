<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"D:\auth\public/../application/admin\view\index\login.html";i:1618376317;}*/ ?>
<!DOCTYPE html>
<html lang="zh_ch">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <title>管理员登录 - <?php echo $config['title']; ?></title>
	<!--Bootstrap-->
    <link href="/static//css/bootstrap.min.css" rel="stylesheet">
    <link href="/static//css/admin-login.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/static//js/html5shiv.js"></script>
    <script src="/static//js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-body">
<div class="container">
    <form id="form" class="form-signin" action="" method="post">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title"><?php echo $config['name']; ?></h1>
            <img src="/static//img/logo.png" alt=""/>
        </div>
        <div class="login-wrap">
            <input type="text" name="username" value="admin" class="form-control" placeholder="用户名" autofocus>
            <input type="password" name="password" value="123456" class="form-control" placeholder="密码">
            <button type="submit" class="btn btn-lg btn-login btn-block">登 录</button>
            <div class="check-tips"></div>
        </div>
    </form>
</div>
<script src="/static//js/jquery.min.js"></script>
<script src="/static//js/bootstrap.min.js"></script>
</body>
</html>
