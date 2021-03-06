<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"D:\auth\public/../application/index\view\index\reg.html";i:1614861322;s:49:"D:\auth\application\index\view\public\common.html";i:1618380685;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>用户注册 - <?php echo $config['webname']; ?></title>
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
    <div class="loginBox" id="wt-login" style="height:590px;">
      <div class="content">
        <div class="web-logo">
          <a href="/">
            <div class="icon-loginLogo" style="background:url(/static//img/default.png) center no-repeat; background-size: contain"></div>
          </a>
        </div>
        <div class="window" style="height: 270px;">
          <form action="<?php echo $config['current_url']; ?>" method="post" id="UserRegForm" novalidate="novalidate">
            <div class="method-box clearfix">
              <!--手机号码注册-->
              <div class="method fl phone-method">
                <div class="input-box">
                  <i class="iconfont"></i>
                  <input type="text" value="13900139000" class="phone-reg" name="username" placeholder="请输入11位手机号码">
                  <em class="posi-box"></em>
                </div>
                <div class="input-box">
                  <i class="iconfont"></i>
                  <input type="password" value="123456" class="phone-reg" name="password" autocomplete="off" placeholder="请输入密码">
                  <em class="posi-box"></em>
                </div>
                <div class="input-box">
                  <i class="iconfont"></i>
                  <input type="password" value="123456" class="phone-reg" name="repassword" autocomplete="off" placeholder="请再次输入密码">
                  <em class="posi-box"></em>
                </div>
                <div class="fill-list-none clearfix" id="captcha-div-1"></div>
                <div class="operate clearfix">
                  <p class="agree fl">
                    <i class="on"></i>同意
                    <a href="javascript:;">《短网址服务协议》</a></p>
                </div>
                <input class="login" type="submit" name="reg_submit" id="reg_submit" value="立即注册"></div>
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
        <div class="LoginLinkBox">已有账号？
          <a href="<?php echo url('@Index/Index/login'); ?>">立即登录</a></div>
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
		
<script type="text/javascript">
$(function() {
    //同意
    $('.operate .agree').on('click',function() {
      $(this).find('i').toggleClass('on');
    }) 
	$("#UserRegForm").validate({
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
		repassword: {
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
        repassword: {
          required: "请再次输入密码",
          minlength: "密码必须6到12位，且不能出现空格",
          maxlength: "密码必须6到12位，且不能出现空格"
        },
      },
      submitHandler: function(form) { //通过之后回调
        $(form).ajaxSubmit({
          dataType: "json",
          beforeSubmit: function(formData, jqForm, options) {
            $('#reg_submit').attr("disabled", "disabled");
            mui.showLoading("正在注册","div");
          },
          success: function(msg, statusText) {
            if (msg) {
              setTimeout(function() {
                mui.hideLoading();
                //返回的是正确的提示时
                if (msg['code'] === 1) {
                  mui.toast(msg['msg']);
                  setTimeout(function() {
                    window.location.href = "/";
                  },1000);
                  $('#reg_submit').removeAttr("disabled");
                } else {
                  mui.alert(msg['msg']);
                  $('#reg_submit').removeAttr("disabled");
                }
              },100);
            }
          },
          //提交发生错误时的函数调用
          error: function(event, errorText, errorType) {
            mui.hideLoading();
            layer.msg("注册失败");
            $('#reg_submit').removeAttr("disabled");
          },
        });
      }
    });
});
</script>

	</body>
</html>