<?php 
	include 'header.php';
	include_once '../function.php';
	include_once XOOPS_ROOT_PATH."/header.php";
	global $xoopsTpl;
	$xoopsTpl->assign('all_data', $all_data);
	
	include 'footer.php';
?>