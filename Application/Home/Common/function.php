<?php
function send_post($url, $post_data) {
	$postdata = http_build_query($post_data);
	$options = array('http' => array('method' => 'POST', 'header' => 'Content-type:application/x-www-form-urlencoded', 'content' => $postdata, 'timeout' => 15 * 60 // 超时时间（单位:s）
	));
	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	return $result;
}

function send_post2($url, $post_data, $cookie) {
	$postdata = http_build_query($post_data);
	$options = array('http' => array('method' => 'POST', 'header' => 'Cookie:' . $cookie, 'content' => $postdata, 'timeout' => 15 * 60 // 超时时间（单位:s）
	));
	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	return $result;
}

function checkcookie() {
	if (cookie('number') !== NULL) {
		return True;
	} else {
		exit ;
	}
}
?>