<?php
	include 'header.php';
	$xoopsOption['template_main']="scratch_demo_index.html"
	include_once XOOPS_ROOT_PATH.'/header.php';
	global $xoospTpl;
	$all_data = [
		[
			"link" => "http://google.com",
			"class_num" => "ma12"
		],
		[
			"link" => "http://google2.com",
			"class_num" => "ma13"
		]
	];
	$xoopsTpl->assign("all_data", $all_data);

?>