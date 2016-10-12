<?php 
	include '../../mainfile.php';
	$xoopsOption['template_main'] = "scratch_demo_demo.html";
	include XOOPS_ROOT_PATH."/header.php";

	echo $modversion['templates'];
	include_once XOOPS_ROOT_PATH.'/footer.php';
?>