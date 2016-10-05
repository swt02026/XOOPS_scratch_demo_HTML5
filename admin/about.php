<?php
	//$xoopsOption['template_main'] = "scratch_demo_about.html"
	include '../../../include/cp_header.php';
	xoops_cp_header();
	$xoopsTpl->assign('data', "hello");
	$xoopsTpl->display("scratch_demo_about.html");
	xoops_cp_footer();
?>
