<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:57:"D:\auth\public/../application/index\view\index\login.html";i:1617775932;s:49:"D:\auth\application\index\view\public\common.html";i:1618380685;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>用户登录 - <?php echo $config['webname']; ?></title>
		<meta name="keywords" content="<?php echo $config['keywords']; ?>"></meta>
		<meta name="description" content="<?php echo $config['description']; ?>"></meta>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
		<meta name="format-detection" content="telephone=no, address=no, email=no">
		<meta name="x5-orientation" content="portrait">
		<meta name="x5-fullscreen" content="true">
		<meta name="screen-orientation" content="portrait">
		<meta name="full-screen" content="yes">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<!--覆盖样式放最后-->		
		<link rel="stylesheet" href="/static//css/style.css">		
		
<link rel="stylesheet" type="text/css" href="/static//css/login.css">

	</head>
	<body>
		<header>
		</header>
		<!--header end-->
		<!--主体内容部分-->
		<div class="clearfix"></div>
		
<div class="loginWrapper">
    <div class="loginBox" id="wt-login">
      <div class="content">
        <div class="web-logo">
          <a href="/">
            <div class="icon-loginLogo" style="background:url(/static//img/default.png) center no-repeat; background-size: contain"></div>
          </a>
        </div>
        <div class="window">
          <form action="<?php echo $config['current_url']; ?>" method="post" id="UserLoginForm" novalidate="novalidate">
            <div class="method-box clearfix">
              <div class="method fl zhanghao_method">
                <div class="input-box fill-list">
                  <i class="iconfont"></i>
                  <em class="posi-box"></em>
                  <input type="text" name="username" placeholder="请输入手机号码"></div>
                <div class="input-box fill-list">
                  <i class="iconfont"></i>
                  <em class="posi-box"></em>
                  <input type="password" name="password" autocomplete="off" placeholder="请输入密码"></div>
                <div class="operate clearfix Keep-Password">
                  <input type="hidden" name="referer" value="0">
                  <p class="agree fl remember-pass"><i></i>记住登录</p>
                  <a class="fr" href="javascript:;" onclick="mui.alert('请联系客服');">忘记密码</a>
				</div>
                <input class="login" type="submit" name="user-login" id="login_submit" value="登录"></div>
            </div>
          </form>
        </div>
        <div class="other-way-tilte">QQ一键登录</div>
        <div class="all-kinds-of ">
          <a href="javascript:;" onclick="mui.toast('功能开发中');">
            <i class="iconfont icon-qq"></i>
          </a>
          <a href="javascript:;" onclick="mui.toast('功能开发中');">
            <i class="iconfont icon-wChat"></i>
          </a>
          <a href="javascript:;" onclick="mui.toast('功能开发中');">
            <i class="iconfont icon-weibo"></i>
          </a>
        </div>
        <div class="LoginLinkBox">还没有账号？
          <a href="<?php echo url('@Index/Index/reg'); ?>">马上注册</a></div>
      </div>
    </div>
</div>
		
		<!--底部内容部分-->
		<div class="clearfix"></div>
		<footer>		
		</footer>
		<script type="text/javascript" src="/static//js/jquery.min.js"></script>
		<!--公共表单验证组件-->
		<script type="text/javascript" src="/static//js/jquery.validate.min.js"></script>
		<!--公共表单提交组件-->
		<script type="text/javascript" src="/static//js/jquery.form.js"></script>
		
<script type="text/javascript" src="/static//js/login.js"></script>	
<script type="text/javascript">
$(function() {
    $("#UserLoginForm").validate({
      errorPlacement: function(error, element) {
        error.appendTo(element.parent().find('.posi-box'));
      },
      rules: {
        username: {
          required: true,
          minlength: 11,
		  maxlength: 11
        },
        password: {
          required: true,
          minlength: 6,
          maxlength: 12
        },
      },
      //错误信息提示
      messages: {
        username: {
          required: "请输入手机号码",
          minlength: "必须是11位的手机号码",
		  maxlength: "必须是11位的手机号码"
        },
        password: {
          required: "请输入密码",
          minlength: "密码必须6到12位，且不能出现空格",
          maxlength: "密码必须6到12位，且不能出现空格"
        },
      },
      submitHandler: function(form) { //通过之后回调
        $(form).ajaxSubmit({
          dataType: "json",
          beforeSubmit: function(formData, jqForm, options) {
            $('#login_submit').attr("disabled", "disabled");
            mui.showLoading("正在登录","div");
          },
          success: function(msg, statusText) {
            if (msg) {
              setTimeout(function() {
                mui.hideLoading();
                //返回的是正确的提示时
                if (msg['code'] === 1) {
                  mui.toast(msg['msg']);
                  setTimeout(function() {
                    window.location.href = '/';
                  },1000);
                } else {
                  mui.alert(msg['msg']);
                  $('#login_submit').removeAttr("disabled");
                }
              },100);
            }
          },
          //提交发生错误时的函数调用
          error: function(event, errorText, errorType) {
            mui.hideLoading();
            mui.alert("登录失败");
            $('#login_submit').removeAttr("disabled");
          },
        });
      }
    });
});
//按下回车键
$(document).keyup(function(event){
	if(event.keyCode=="13"){
		$('.login').click();
	}
});
</script>

	</body>
</html>