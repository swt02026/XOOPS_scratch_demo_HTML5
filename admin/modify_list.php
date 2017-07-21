<?php

require_once __DIR__ . '/admin_header.php';

//include  __DIR__ . '/../../../include/cp_header.php';
xoops_cp_header();
$adminObject->displayNavigation(basename(__FILE__));

$sb2dir    = '../sb2-js/examples';
$filenames = array_slice(scandir($sb2dir), 2);
$xoopsTpl->assign('filenames', $filenames);
$xoopsTpl->display('db:scratch_demo_modify_list.tpl');

require_once __DIR__ . '/admin_footer.php';
