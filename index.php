<?php 
	include '../../mainfile.php';
	$xoopsOption['template_main'] = "scratch_demo_index.html";
	include XOOPS_ROOT_PATH."/header.php";
	$sb2dir = 'sb2-js/examples';
	$filenames = array_slice(scandir($sb2dir), 2);
	ini_get('disable_function');
	$xoopsTpl->assign('filenames', $filenames);

	//include_once XOOPS_ROOT_PATH.'/footer.php';
?>