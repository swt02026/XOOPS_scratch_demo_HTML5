<?php

require_once __DIR__ . '/admin_header.php';

//include  __DIR__ . '/../../../include/cp_header.php';
xoops_cp_header();
$adminObject->displayNavigation(basename(__FILE__));

$xoopsTpl->display('db:scratch_demo_upload.tpl');

require_once __DIR__ . '/admin_footer.php';
