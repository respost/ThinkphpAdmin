<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:56:"D:\auth\public/../application/admin\view\main\index.html";i:1618377427;s:47:"D:\auth\application\admin\view\public\base.html";i:1621920483;}*/ ?>
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
				
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">仪表板</h1>

	<!--Searchbox-->
	<div class="searchbox">
		<div class="input-group custom-search-form">
			<input type="text" class="form-control" placeholder="请输入搜索内容..">
			<span class="input-group-btn">
                                <button class="text-muted" type="button"><i class="nifty-icons-pli-magnifi-glass"></i></button>
                            </span>
		</div>
	</div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End page title-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">

	<div class="row">
		<div class="col-lg-7">

			<!--Network Line Chart-->
			<!--===================================================-->
			<div id="demo-panel-network" class="panel">
				<div class="panel-heading">
					<div class="panel-control">
						<button id="demo-panel-network-refresh" data-toggle="panel-overlay" data-target="#demo-panel-network" class="btn"><i class="nifty-icons-pli-repeat-2 icon-lg"></i></button>
						<div class="btn-group">
							<button class="dropdown-toggle btn" data-toggle="dropdown" aria-expanded="false"><i class="nifty-icons-pli-gear icon-lg"></i></button>
							<ul class="dropdown-menu dropdown-menu-right">
								<li>
									<a href="#">活动</a>
								</li>
								<li>
									<a href="#">动作</a>
								</li>
								<li>
									<a href="#">其他</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">其他链接</a>
								</li>
							</ul>
						</div>
					</div>
					<h3 class="panel-title">服务器状态</h3>
				</div>

				<!--Morris line chart placeholder-->
				<div id="morris-chart-network" class="morris-full-content"></div>

				<!--Chart information-->
				<div class="panel-body">
					<div class="row pad-top">
						<div class="col-lg-8">
							<div class="media">
								<div class="media-left">
									<div class="media">
										<p class="text-semibold text-main">温度</p>
										<div class="media-left pad-no">
											<span class="text-2x text-semibold text-nowrap text-main">
					                                            <i class="nifty-icons-pli-temperature"></i> 43.7
					                                        </span>
										</div>
										<div class="media-body">
											<p class="mar-no">°C</p>
										</div>
									</div>
								</div>
								<div class="media-body pad-lft">
									<div class="pad-btm">
										<p class="text-semibold text-main mar-no">今天提示</p>
										<small>一种美妙的宁静占据了我的整个灵魂，就像春天的这些甜蜜的早晨，我全心全意地享受着。</small>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<p class="text-semibold text-main">带宽使用率</p>
							<ul class="list-unstyled">
								<li>
									<div class="media">
										<div class="media-left">
											<span class="text-2x text-semibold text-main">75.9</span>
										</div>
										<div class="media-body">
											<p class="mar-no">Mbps</p>
										</div>
									</div>
								</li>
								<li>
									<div class="clearfix">
										<p class="pull-left mar-no">效果</p>
										<p class="pull-right mar-no">75%</p>
									</div>
									<div class="progress progress-xs">
										<div class="progress-bar progress-bar-info" style="width: 75%;">
											<span class="sr-only">75%</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!--===================================================-->
			<!--End network line chart-->

		</div>
		<div class="col-lg-5">
			<div class="row">
				<div class="col-sm-6 col-lg-6">

					<!--Sparkline Area Chart-->
					<div class="panel panel-success panel-colorful">
						<div class="pad-all">
							<p class="text-lg text-semibold"><i class="nifty-icons-pli-data-storage icon-fw"></i> 硬盘使用率</p>
							<p class="mar-no">
								<span class="pull-right text-bold">132Gb</span> 剩余
							</p>
							<p class="mar-no">
								<span class="pull-right text-bold">1,45Gb</span> 已用
							</p>
						</div>
						<div class="pad-all text-center">
							<!--Placeholder-->
							<div id="demo-sparkline-area"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-6">

					<!--Sparkline Line Chart-->
					<div class="panel panel-info panel-colorful">
						<div class="pad-all">
							<p class="text-lg text-semibold"><i class="nifty-icons-pli-wallet-2 icon-fw"></i> 收益</p>
							<p class="mar-no">
								<span class="pull-right text-bold">￥764.00元</span> 今日收益
							</p>
							<p class="mar-no">
								<span class="pull-right text-bold">￥1332.00元</span> 近七日收益
							</p>
						</div>
						<div class="pad-all text-center">

							<!--Placeholder-->
							<div id="demo-sparkline-line"></div>

						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-6">

					<!--Sparkline bar chart -->
					<div class="panel panel-purple panel-colorful">
						<div class="pad-all">
							<p class="text-lg text-semibold"><i class="nifty-icons-pli-bag-coins icon-fw"></i> 销量</p>
							<p class="mar-no">
								<span class="pull-right text-bold">5单</span> 今日销量
							</p>
							<p class="mar-no">
								<span class="pull-right text-bold">125单</span> 近七日销量
							</p>
						</div>
						<div class="pad-all text-center">

							<!--Placeholder-->
							<div id="demo-sparkline-bar" class="box-inline"></div>

						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-6">

					<!--Sparkline pie chart -->
					<div class="panel panel-warning panel-colorful">
						<div class="pad-all">
							<p class="text-lg text-semibold"><i class="nifty-icons-pli-check icon-fw"></i> 任务进度</p>
							<p class="mar-no">
								<span class="pull-right text-bold">34</span> 已完成
							</p>
							<p class="mar-no">
								<span class="pull-right text-bold">79</span> 总任务
							</p>
						</div>
						<div class="pad-all">
							<ul class="list-group list-unstyled">
								<li class="mar-btm">
									<span class="label label-warning pull-right">15%</span>
									<p>进度</p>
									<div class="progress progress-md">
										<div style="width: 15%;" class="progress-bar progress-bar-light">
											<span class="sr-only">15%</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<!--List Todo-->
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="panel panel-trans">
				<div class="panel-heading">
					<h3 class="panel-title">待办事项列表</h3>
				</div>
				<div class="pad-ver">
					<ul class="list-group bg-trans list-todo mar-no">
						<li class="list-group-item">
							<input id="demo-todolist-1" class="magic-checkbox" type="checkbox">
							<label for="demo-todolist-1"><span>找到一个主意<span class="label label-danger">重要的</span></span></label>
						</li>
						<li class="list-group-item">
							<input id="demo-todolist-2" class="magic-checkbox" type="checkbox" checked>
							<label for="demo-todolist-2"><span>做些工作</span></label>
						</li>
						<li class="list-group-item">
							<input id="demo-todolist-3" class="magic-checkbox" type="checkbox">
							<label for="demo-todolist-3"><span>读一本书</span></label>
						</li>
						<li class="list-group-item">
							<input id="demo-todolist-4" class="magic-checkbox" type="checkbox">
							<label for="demo-todolist-4"><span>升级服务器<span class="label label-warning">提醒</span></span></label>
						</li>
						<li class="list-group-item">
							<input id="demo-todolist-5" class="magic-checkbox" type="checkbox" checked>
							<label for="demo-todolist-5"><span>重新设计logo图标<span class="label label-info">2 Mins</span></span></label>
						</li>
					</ul>
				</div>
				<div class="input-group pad-all">
					<input type="text" class="form-control" placeholder="添加新任务" autocomplete="off">
					<span class="input-group-btn">
					                    <button type="button" class="btn btn-success"><i class="nifty-icons-pli-add"></i></button>
					                </span>
				</div>
			</div>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<!--End todo list-->
		</div>
		<div class="col-lg-6">
			<div class="panel panel-trans">
				<div class="panel-heading">
					<div class="panel-control">
						<a title="" data-html="true" data-container="body" data-original-title="&lt;p class='h4 text-semibold'&gt;Information&lt;/p&gt;&lt;p style='width:150px'&gt;This is an information bubble to help the user.&lt;/p&gt;" href="#" class="nifty-icons-psi-information icon-lg icon-fw unselectable text-info add-tooltip"></a>
					</div>
					<h3 class="panel-title">服务</h3>
				</div>
				<div class="bord-btm">
					<ul class="list-group bg-trans">
						<li class="list-group-item">
							<div class="pull-right">
								<input id="demo-online-status-checkbox" class="toggle-switch" type="checkbox" checked>
								<label for="demo-online-status-checkbox"></label>
							</div>
							在线状态
						</li>
						<li class="list-group-item">
							<div class="pull-right">
								<input id="demo-show-off-contact-checkbox" class="toggle-switch" type="checkbox" checked>
								<label for="demo-show-off-contact-checkbox"></label>
							</div>
							显示脱机联系人
						</li>
						<li class="list-group-item">
							<div class="pull-right">
								<input id="demo-show-device-checkbox" class="toggle-switch" type="checkbox">
								<label for="demo-show-device-checkbox"></label>
							</div>
							显示我的设备图标
						</li>
					</ul>
				</div>
				<div class="panel-body">
					<div class="pad-btm">
						<p class="text-semibold text-main">升级进度</p>
						<div class="progress progress-sm">
							<div class="progress-bar progress-bar-purple" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" role="progressbar">
								<span class="sr-only">15%</span>
							</div>
						</div>
						<small>15% 已完成</small>
					</div>
					<div class="pad-btm">
						<p class="text-semibold text-main">数据库</p>
						<div class="progress progress-sm">
							<div class="progress-bar progress-bar-success" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" role="progressbar">
								<span class="sr-only">70%</span>
							</div>
						</div>
						<small>70% 已完成</small>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">订单状态</h3>
				</div>

				<!--Data Table-->
				<!--===================================================-->
				<div class="panel-body">
					<div class="pad-btm form-inline">
						<div class="row">
							<div class="col-sm-6 table-toolbar-left">
								<button class="btn btn-purple"><i class="nifty-icons-pli-add icon-fw"></i>添加</button>
								<button class="btn btn-default"><i class="nifty-icons-pli-printer"></i></button>
								<div class="btn-group">
									<button class="btn btn-default"><i class="nifty-icons-pli-information"></i></button>
									<button class="btn btn-default"><i class="nifty-icons-pli-recycling"></i></button>
								</div>
							</div>
							<div class="col-sm-6 table-toolbar-right">
								<div class="form-group">
									<input type="text" autocomplete="off" class="form-control" placeholder="搜索" id="demo-input-search2">
								</div>
								<div class="btn-group">
									<button class="btn btn-default"><i class="nifty-icons-pli-download-from-cloud"></i></button>
									<div class="btn-group">
										<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					                                        <i class="nifty-icons-pli-gear"></i>
					                                        <span class="caret"></span>
					                                    </button>
										<ul class="dropdown-menu dropdown-menu-right" role="menu">
											<li>
												<a href="#">活动</a>
											</li>
											<li>
												<a href="#">动作</a>
											</li>
											<li>
												<a href="#">其他</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#">其他链接</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>发票联</th>
									<th>用户</th>
									<th>订单日期</th>
									<th>订单金额</th>
									<th class="text-center">订单状态</th>
									<th class="text-center">订单编号</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<a href="#" class="btn-link"> Order #53431</a>
									</td>
									<td>Steve N. Horton</td>
									<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
									<td>$45.00</td>
									<td class="text-center">
										<div class="label label-table label-success">已支付</div>
									</td>
									<td class="text-center">-</td>
								</tr>
								<tr>
									<td>
										<a href="#" class="btn-link"> Order #53432</a>
									</td>
									<td>Charles S Boyle</td>
									<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
									<td>$245.30</td>
									<td class="text-center">
										<div class="label label-table label-info">已发货</div>
									</td>
									<td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
								</tr>
								<tr>
									<td>
										<a href="#" class="btn-link"> Order #53433</a>
									</td>
									<td>Lucy Doe</td>
									<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
									<td>$38.00</td>
									<td class="text-center">
										<div class="label label-table label-info">已发货</div>
									</td>
									<td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
								</tr>
								<tr>
									<td>
										<a href="#" class="btn-link"> Order #53434</a>
									</td>
									<td>Teresa L. Doe</td>
									<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
									<td>$77.99</td>
									<td class="text-center">
										<div class="label label-table label-info">已发货</div>
									</td>
									<td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
								</tr>
								<tr>
									<td>
										<a href="#" class="btn-link"> Order #53435</a>
									</td>
									<td>Teresa L. Doe</td>
									<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
									<td>$18.00</td>
									<td class="text-center">
										<div class="label label-table label-success">已支付</div>
									</td>
									<td class="text-center">-</td>
								</tr>
								<tr>
									<td>
										<a href="#" class="btn-link">Order #53437</a>
									</td>
									<td>Charles S Boyle</td>
									<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
									<td>$658.00</td>
									<td class="text-center">
										<div class="label label-table label-danger">已退款</div>
									</td>
									<td class="text-center">-</td>
								</tr>
								<tr>
									<td>
										<a href="#" class="btn-link">Order #536584</a>
									</td>
									<td>Scott S. Calabrese</td>
									<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
									<td>$45.58</td>
									<td class="text-center">
										<div class="label label-table label-warning">未支付</div>
									</td>
									<td class="text-center">-</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<div class="pull-right">
						<ul class="pagination text-nowrap mar-no">
							<li class="page-pre disabled">
								<a href="#">&lt;</a>
							</li>
							<li class="page-number active">
								<span>1</span>
							</li>
							<li class="page-number">
								<a href="#">2</a>
							</li>
							<li class="page-number">
								<a href="#">3</a>
							</li>
							<li>
								<span>...</span>
							</li>
							<li class="page-number">
								<a href="#">9</a>
							</li>
							<li class="page-next">
								<a href="#">&gt;</a>
							</li>
						</ul>
					</div>
				</div>
				<!--===================================================-->
				<!--End Data Table-->

			</div>
		</div>
	</div>

</div>
<!--===================================================-->
<!--End page content-->
			
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
	
<script type="text/javascript">
</script>

</body>
</html>