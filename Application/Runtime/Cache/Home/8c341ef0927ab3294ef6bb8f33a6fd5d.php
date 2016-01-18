<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="/Public/css/css/style.css" />
		<script type="text/javascript" src="/Public/Js/jquery.js"></script>
		<script type="text/javascript" src="/Public/Js/jquery.sorted.js"></script>
		<script type="text/javascript" src="/Public/Js/bootstrap.js"></script>
		<script type="text/javascript" src="/Public/Js/ckform.js"></script>
		<script type="text/javascript" src="/Public/Js/common.js"></script>

		<style type="text/css">
			body {
				padding-bottom: 40px;
			}
			
			.sidebar-nav {
				padding: 9px 0;
			}
			
			@media (max-width: 980px) {
				/* Enable use of floated navbar text */
				.navbar-text.pull-right {
					float: none;
					padding-left: 5px;
					padding-right: 5px;
				}
			}
		</style>
	</head>

	<body>
		<form class="form-inline definewidth m20" action="index.html" method="get">
			用户信息：
			<input type="text" name="rolename" id="rolename" class="abc input-default" placeholder="" value="">&nbsp;&nbsp;
			<!--			<button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp;
-->
		</form>
		<table class="table table-bordered table-hover definewidth m10">
			<thead>
				<tr>
					<th>列表</th>
					<th>详情</th>
				</tr>
			</thead>
			<tr>
				<td>姓名</td>
				<td><?php echo ($data["msg"]["xm"]); ?></td>
			</tr>
			<tr>
				<td>学号</td>
				<td><?php echo ($data["msg"]["xh"]); ?></td>
			</tr>
			<tr>
				<td>性别</td>
				<td>
					<?php if(($$data["msg"]["xb"]) == "1"): ?>女<?php else: ?>男<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>出生日期</td>
				<td><?php echo ($data["msg"]["csrq"]); ?></td>
			</tr>
			<tr>
				<td>身份证号</td>
				<td><?php echo ($data["msg"]["mz"]); ?></td>
			</tr>
			<tr>
				<td>学院</td>
				<td><?php echo ($data["msg"]["xy"]); ?></td>
			</tr>
			<tr>
				<td>年级</td>
				<td><?php echo ($data["msg"]["nj"]); ?></td>
			</tr>
		</table>
	</body>

</html>