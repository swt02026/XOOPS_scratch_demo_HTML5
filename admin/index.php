<?php 
	$xoopsOption['template_main'] = "scratch_demo_index.html";
	include 'header.php';
	include_once "../function.php";
	include_once XOOPS_ROOT_PATH."/header.php";
	$all_data=[
		[
			"link" => "google.com",
			"class_num" => 1
		],
		[
			"link" => "google2.com",
			"class_num" => 2
		]
	];
	$xoopsTpl->assign('all_data', $all_data);
	
	include 'footer.php';
?>