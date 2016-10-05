<?php
	include '../../mainfile.php';
	$xoopsOption['template_main'] = "scratch_demo_about.html";
	include '../../../include/cp_header.php';
	xoops_cp_header();
	include XOOPS_ROOT_PATH."/header.php";
	$xoopsTpl->assign('data', "hello");
	include_once XOOPS_ROOT_PATH.'/footer.php';
	xoops_cp_footer();
?>
