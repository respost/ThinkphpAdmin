<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:56:"D:\auth\public/../application/admin\view\user\index.html";i:1598162859;s:47:"D:\auth\application\admin\view\public\base.html";i:1621920483;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo $config['name']; ?> - <?php echo $config['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="description" content="<?php echo $config['description']; ?>">
    <meta name="keywords" content="<?php echo $config['keywords']; ?>">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<!--Bootstrap-->
    <link href="/static//css/bootstrap.min.css" rel="stylesheet">
	<!--引入layui框架-->
	<link rel="stylesheet" href="/static//plugins/layui/css/layui.css">
	<!--引入MUI框架-->
	<link rel="stylesheet" href="/static//plugins/mui/css/mui.css">
	<link rel="stylesheet" href="/static//plugins/mui/css/loading.css">
	<!--引入sweetalert框架-->
	<link rel="stylesheet" href="/static//plugins/sweetalert/sweetalert.css">
    <!--Nifty-->
    <link href="/static//css/nifty.min.css" rel="stylesheet">
	<!--Nifty字体图标-->
    <link href="/static//css/nifty-icons.css" rel="stylesheet">
	<!--响应式表格-->
	<link href="/static//css/h5table.css" rel="stylesheet">
	<!--覆盖样式-->
	<link href="/static//css/style.css" rel="stylesheet">
	 
  
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">     
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">
                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img src="/static//img/logo.png" alt="Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text"><?php echo $config['name']; ?></span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->
                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="nifty-icons-pli-view-list"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->
                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="nifty-icons-pli-bell"></i>
                                <span class="badge badge-header badge-danger"></span>
                            </a>
                            <!--Notification dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md">
                                <div class="pad-all bord-btm">
                                    <p class="text-semibold text-main mar-no">你有9个通知</p>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#">
                                                    <div class="clearfix">
                                                        <p class="pull-left">数据库使用率</p>
                                                        <p class="pull-right">70%</p>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div style="width: 70%;" class="progress-bar">
                                                            <span class="sr-only">70% 已完成</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#">
                                                    <div class="clearfix">
                                                        <p class="pull-left">升级进度</p>
                                                        <p class="pull-right">10%</p>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div style="width: 10%;" class="progress-bar progress-bar-warning">
                                                            <span class="sr-only">10% 已完成</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a class="media" href="#">
                                            <span class="badge badge-success pull-right">90%</span>
                                                    <div class="media-left">
                                                        <i class="nifty-icons-pli-data-settings icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">硬盘已满</div>
                                                        <small class="text-muted">50分钟前</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <i class="nifty-icons-pli-file-edit icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">新增一篇新闻</div>
                                                        <small class="text-muted">上次更新8小时前</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a class="media" href="#">
                                            <span class="label label-danger pull-right">New</span>
                                                    <div class="media-left">
                                                        <i class="nifty-icons-pli-speech-bubble-7 icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">云消息</div>
                                                        <small class="text-muted">上次更新8小时前</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <i class="nifty-icons-pli-add-user-plus-star icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">新增一个用户</div>
                                                        <small class="text-muted">4分钟前</small>
                                                    </div>
                                                </a>
                                            </li>                                                                                      
                                        </ul>
                                    </div>
                                </div>
                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-dark box-block">
                                        <i class="fa fa-angle-right fa-lg pull-right"></i>显示全部通知
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End mega dropdown-->
                    </ul>
                    <ul class="nav navbar-top-links pull-right">
                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <i class="nifty-icons-pli-male ic-user"></i>
                                </span>
                                <div class="username hidden-xs"><?php echo $member['nickname']; ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">
                                <!-- Dropdown heading  -->
                                <div class="pad-all bord-btm">
                                    <p class="text-main mar-btm"><span class="text-bold">750GB</span> of 1,000GB Used</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" style="width: 70%;">
                                            <span class="sr-only">70%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- User dropdown menu -->
                                <ul class="head-list">
                                    <li>
                                        <a href="#">
                                            <i class="nifty-icons-pli-male icon-lg icon-fw"></i> 资料
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-danger pull-right">9</span>
                                            <i class="nifty-icons-pli-mail icon-lg icon-fw"></i> 消息
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-success pull-right">New</span>
                                            <i class="nifty-icons-pli-gear icon-lg icon-fw"></i> 设置
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="nifty-icons-pli-information icon-lg icon-fw"></i> 帮助
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="nifty-icons-pli-computer-secure icon-lg icon-fw"></i> 锁屏
                                        </a>
                                    </li>
                                </ul>
                                <!-- Dropdown footer -->
                                <div class="pad-all text-right">
                                    <a href="<?php echo url('@Admin/Index/logout'); ?>" class="btn btn-primary">
                                        <i class="nifty-icons-pli-unlock"></i> 安全退出
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->
                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->
            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->
        <div class="boxed">
            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">              
				<!--公共内容区域-->
				
    <div id="page-head">
        <div id="page-title">
            <h1 class="page-header text-overflow">个人设置</h1>
        </div>
    </div>
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-base">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#demo-bsc-tab-1" data-toggle="tab">基本信息</a></li>
                        <li><a href="#demo-bsc-tab-2" data-toggle="tab">安全设置</a></li>
                        <li><a href="#demo-bsc-tab-3" data-toggle="tab">收款信息</a></li>
                    </ul>
                    <!-- Tabs Content -->
                    <form id="demo-bv-bsc-tabs" class="form-horizontal bv-form" action="#" method="post" novalidate="novalidate">
                        <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                        <div class="tab-content">
                            <div class="tab-pane pad-btm fade in active" id="demo-bsc-tab-1">
                                <p class="text-main text-bold">基本信息</p>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-3 control-label text-bold label-colon">商户编号</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">1027585</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label text-bold label-colon">下级分销编号</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">8613398</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label text-bold label-colon">登陆账号</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">97887526@qq.com</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label text-bold label-colon">身份证号</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">450122********5516</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3  control-label text-bold label-colon">手机号码</label>
                                    <div class="col-md-7  col-xs-10">
                                        <p class="form-control-static">
                                            181*****617
                                        </p>
                                    </div>
                                    
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label text-bold label-colon">销售权限</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">
                                            <span class="text-green">已开通</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label text-bold label-colon">结算权限</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">
                                            <span class="text-green">已开通</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label text-bold label-colon">结算方式</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">
                                            <span class="text-green">自动结算</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="demo-bsc-tab-2">
                                <p class="text-main text-bold">安全设置</p>
                                <hr>
                                <div class="form-group has-feedback">
                                    <label class="col-md-3 col-xs-3 control-label text-bold label-colon form-control-static">
                                        登录验证
                                    </label>
                                    <div class="col-md-7 col-xs-7">
                                        <p class="form-control-static">
                                            <span class="text-red">未开启登陆Email验证，邮箱验证可有效保护账户安全</span>
                                        </p>
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                        <p class="form-control-static">
                                                <a href="/User/User/Safe" class="btn btn-info" data-toggle="modal" data-target="#myModal">开启</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-lg-3 col-xs-3 control-label text-bold label-colon form-control-static">
                                        唯一登录
                                    </label>
                                    <div class="col-lg-7 col-xs-7">
                                        <p class="form-control-static">
                                        <span class="text-green">已开启</span>

                                        </p>
                                    </div>
                                    <div class="col-lg-2 col-xs-2">
                                        <p class="form-control-static">
                                                <a href="/User/User/OnlyLogin" class="btn btn-info" data-toggle="modal" data-target="#myModal">关闭</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="demo-bsc-tab-3">
                                <p class="text-main text-bold">收款信息</p>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-3 control-label text-bold label-colon">收款人</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">韦君元</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label text-bold label-colon">收款方式</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">支付宝</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label text-bold label-colon">收款账号</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">api777@qq.com</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label text-bold label-colon">开户地址</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-footer clearfix hidden">
                                <div class="col-lg-7 col-lg-offset-3">
                                    <button type="submit" class="btn btn-primary">
                                        Validate
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
			
            </div>           		
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap">
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name"><?php echo $member['nickname']; ?></p>
                                            <span class="mnp-desc"><?php echo $member['email']; ?></span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="nifty-icons-pli-male icon-lg icon-fw"></i> 个人资料
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="nifty-icons-pli-gear icon-lg icon-fw"></i> 设置
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="nifty-icons-pli-information icon-lg icon-fw"></i> 帮助
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="nifty-icons-pli-unlock icon-lg icon-fw"></i> 退出
                                        </a>
                                    </div>
                                </div>


                                <!--Shortcut buttons-->
                                <!--================================-->
                                <div id="mainnav-shortcut">
                                    <ul class="list-unstyled">
                                        <li class="col-xs-3" data-content="个人资料">
                                            <a class="shortcut-grid" href="#">
                                                <i class="nifty-icons-psi-male"></i>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="消息">
                                            <a class="shortcut-grid" href="#">
                                                <i class="nifty-icons-psi-speech-bubble-3"></i>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="活动">
                                            <a class="shortcut-grid" href="#">
                                                <i class="nifty-icons-psi-thunder"></i>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="锁屏">
                                            <a class="shortcut-grid" href="#">
                                                <i class="nifty-icons-psi-lock-2"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--================================-->
                                <!--End shortcut buttons-->


                                <ul id="mainnav-menu" class="list-group">
						
						            <!--Category name-->
						            <li class="list-header">导航</li>
						
						            <!--Menu list item-->
						            <li class="active-link">
						                <a href="<?php echo url('@Admin/Main/index'); ?>">
						                    <i class="nifty-icons-psi-home"></i>
						                    <span class="menu-title">
												<strong>控制面板</strong>
											</span>
						                </a>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="nifty-icons-psi-male"></i>
						                    <span class="menu-title">
												<strong>账户管理</strong>
											</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="<?php echo url('@Admin/User/index'); ?>">个人信息</a></li>											
											<li><a href="<?php echo url('@Admin/User/password'); ?>">修改密码</a></li>											
											<li><a href="<?php echo url('@Admin/User/log'); ?>">登录日志</a></li>
											<!--<li class="list-divider"></li>-->											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="<?php echo url('@Admin/Set/index'); ?>">
						                    <i class="nifty-icons-psi-gear-2"></i>
						                    <span class="menu-title">
												<strong>系统设置</strong>
												<span class="pull-right badge badge-warning">24</span>
											</span>
						                </a>
						            </li>
						
						            <li class="list-divider"></li>
						
						            <!--Category name-->
						            <li class="list-header">更新管理</li>										
									<li>
						                <a href="<?php echo url('@Admin/App/add'); ?>">
						                    <i class="nifty-icons-psi-computer-secure"></i>
						                    <span class="menu-title">添加程序</span>
						                </a>
						            </li>
						            <!--Menu list item-->
						            <li>
						                <a href="<?php echo url('@Admin/App/index'); ?>">
						                    <i class="nifty-icons-psi-receipt-4"></i>
						                    <span class="menu-title">程序列表</span>
						                </a>
						            </li>					
						
						            <li class="list-divider"></li>
						
						            <!--Category name-->
						            <li class="list-header">授权管理</li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="<?php echo url('@Admin/Product/add'); ?>">
						                    <i class="nifty-icons-psi-add"></i>
						                    <span class="menu-title">添加授权</span>
						                </a>
						            </li>
									<!--Menu list item-->
						            <li>
						                <a href="<?php echo url('@Admin/Product/type'); ?>">
						                    <i class="nifty-icons-psi-paperclip"></i>
						                    <span class="menu-title">授权分类</span>
						                </a>
						            </li>
						            <!--Menu list item-->
						            <li>
						                <a href="<?php echo url('@Admin/Product/index'); ?>">
						                    <i class="nifty-icons-pli-view-list"></i>
						                    <span class="menu-title">授权列表</span>
						                </a>
						            </li>
						
						            <li class="list-divider"></li>
						
						            <!--Category name-->
						            <li class="list-header">其他</li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="<?php echo url('@Admin/Main/fonticon'); ?>">
						                    <i class="nifty-icons-psi-facebook-2"></i>
						                    <span class="menu-title">字体图标</span>
						                </a>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="nifty-icons-psi-medal-2"></i>
						                    <span class="menu-title">
												角色管理
												<span class="label label-danger pull-right">高级</span>
											</span>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="#">角色列表</a></li>
											<li><a href="#">后台用户</a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="nifty-icons-psi-inbox-full"></i>
						                    <span class="menu-title">关于我们</span>
						                </a>
									</li>
								</ul>

                                <!--Widget-->
                                <!--================================-->
                                <div class="mainnav-widget">

                                    <!-- Show the button on collapsed navigation -->
                                    <div class="show-small">
                                        <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                            <i class="nifty-icons-pli-monitor-2"></i>
                                        </a>
                                    </div>

                                    <!-- Hide the content on collapsed navigation -->
                                    <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                                        <ul class="list-group">
                                            <li class="list-header pad-no pad-ver">服务器状态</li>
                                            <li class="mar-btm">
                                                <span class="label label-primary pull-right">15%</span>
                                                <p>CPU使用率</p>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-primary" style="width: 15%;">
                                                        <span class="sr-only">15%</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mar-btm">
                                                <span class="label label-purple pull-right">75%</span>
                                                <p>带宽使用率</p>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-purple" style="width: 75%;">
                                                        <span class="sr-only">75%</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pad-ver"><a href="#" class="btn btn-success btn-bock">查看详细信息</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--================================-->
                                <!--End widget-->

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">
            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pull-right">
                You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
            </div>
            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
				您有&nbsp;<a href="#" class="text-main"><span class="badge badge-danger complaintNumber">0</span></a>&nbsp;个事件需要处理
            </div>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <p class="pad-lft"><?php echo $config['copyright']; ?></p>
        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->
        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
    <!--jQuery-->
	<script src="/static//js/jquery.min.js"></script>
    <!--Bootstrap-->
    <script src="/static//js/bootstrap.min.js"></script>
    <!--Nifty-->
    <script src="/static//js/nifty.min.js"></script>
	<!--引入layui框架-->
	<script src="/static//plugins/layui/layui.js" charset="utf-8"></script>
	<!--引入MUI框架-->
	<script src="/static//plugins/mui/js/mui.min.js" charset="utf-8"></script>
	<script src="/static//plugins/mui/js/loading.js" charset="utf-8"></script>
	<!--引入sweetalert框架-->
	<script src="/static//plugins/sweetalert/sweetalert.min.js" charset="utf-8"></script>
	<!--js复制文本插件-->
	<script src="/static//js/clipboard.min.js"></script>
	 

</body>
</html>