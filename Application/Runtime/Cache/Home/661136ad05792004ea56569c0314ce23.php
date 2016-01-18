<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

	<head>
		<title>后台管理系统</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="/Public/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
		<link href="/Public/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
		<link href="/Public/assets/css/main-min.css" rel="stylesheet" type="text/css" />
	</head>

	<body>

		<div class="header">

			<div class="dl-title">
				<!--<img src="/chinapost/Public/assets/img/top.png">-->
			</div>

			<div class="dl-log">欢迎您，<span class="dl-log-user">admin</span><a href="<?php echo U('loginout');?>" title="退出系统" class="dl-log-quit">[退出]</a>
			</div>
		</div>
		<div class="content">
			<div class="dl-main-nav">
				<div class="dl-inform">
					<div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div>
				</div>
				<ul id="J_Nav" class="nav-list ks-clear">
					<li class="nav-item dl-selected">
						<div class="nav-item-inner nav-home">查询业务</div>
					</li>
				</ul>
			</div>
			<ul id="J_NavContent" class="dl-tab-conten">

			</ul>
		</div>
		<script type="text/javascript" src="/Public/assets/js/jquery-1.8.1.min.js"></script>
		<script type="text/javascript" src="/Public/assets/js/bui-min.js"></script>
		<script type="text/javascript" src="/Public/assets/js/common/main-min.js"></script>
		<script type="text/javascript" src="/Public/assets/js/config-min.js"></script>
		<script>
			BUI.use('common/main',function(){
			        var config = [{id:'1',menu:[{text:'查询业务',items:[{id:'2',text:'用户信息查询',href:'getUserInfo'},{id:'3',text:'成绩查询',href:'getyxcj'},{id:'4',text:'不及科成绩查询',href:'getbjgcj'},{id:'6',text:'其他成绩查询',href:'getqtcj'}]}]},{id:'7',homePage : '9',menu:[{text:'业务管理',items:[{id:'9',text:'查询业务',href:'Node/index.html'}]}]}];
			        new PageUtil.MainPage({
			            modulesConfig : config
			        });
			    });
		</script>
	</body>

</html>