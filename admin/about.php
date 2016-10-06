<?php
	
	include '../../../include/cp_header.php';
	xoops_cp_header();
	echo "HELOO";
	$xoopsTpl->assign('data',"dddd");
	$o=$xoopsTpl->fetch('../templates/scratch_demo_about.html');
	echo $o;
	xoops_cp_footer();
?>