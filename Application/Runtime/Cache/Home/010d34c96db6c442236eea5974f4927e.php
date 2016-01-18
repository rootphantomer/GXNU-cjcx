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
			课程名称：
			<input type="text" name="rolename" id="rolename" class="abc input-default" placeholder="" value="">&nbsp;&nbsp;
			<!--			<button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp;
-->
		</form>
		<table class="table table-bordered table-hover definewidth m10">
			<thead>
				<tr>
					<th>课程名称</th>
					<th>成绩</th>
					<th>性质</th>
					<th>学分</th>
					<th>绩点</th>
				</tr>
			</thead>
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
					<td><?php echo ($vo["kcmc"]); ?></td>
					<td><?php echo ($vo["cj"]); ?></td>
					<td><?php echo ($vo["bk"]); ?></td>
					<td><?php echo ($vo["cx"]); ?></td>
					<td><?php echo ($vo["jd"]); ?></td>
				</tr><?php endforeach; endif; ?>
		</table>
	</body>

</html>