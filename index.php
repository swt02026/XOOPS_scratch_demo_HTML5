<?php 
	include '../../mainfile.php';
	$xoopsOption['template_main'] = "scratch_demo_about.html";
	include XOOPS_ROOT_PATH."/header.php";
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
	//$xoopsTpl->assign('data', "aaa");
	//$xoopsTpl->assign('all_data', $all_data);
	
	include_once XOOPS_ROOT_PATH.'/footer.php';
?>