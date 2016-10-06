<?php
	
	include '../../../include/cp_header.php';
	xoops_cp_header();

	//print_r($xoopsTpl);

	$xoopsTpl->assign('data',"dddd");
	$o=$xoopsTpl->fetch('scratch_demo_about.html');
	xoops_cp_footer();
?>
