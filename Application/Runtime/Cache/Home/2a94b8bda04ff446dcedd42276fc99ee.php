<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Dark Login Form</title>
		<link rel="stylesheet" href="/Public/css/style.css">
		<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>

	<body>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<form method="post" action="<?php echo U('login');?>" class="login">
			<p>
				<label for="login">Number:</label>
				<input type="text" name="number" id="login">
			</p>

			<p>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password">
			</p>
<!--			<input type='hidden' name="phone" id="phone" value="+18511339112">
-->
			<p class="login-submit">
				<button type="submit" class="login-button">Login</button>
			</p>

		</form>
		<section class="about">
			<p class="about-author">
				&copy; 2015&ndash;2016 <a href="http://weibo.com/527819757" target="_blank">weibo-phantomer</a>
				<br> Original PSD by <a href="http://www.doublefei.com" target="_blank">phantomer</a>
		</section>
	</body>

</html>