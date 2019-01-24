<?php
include __DIR__ . '/../../mainfile.php';
$GLOBALS['xoopsOption']['template_main'] = 'scratch_demo_index.tpl';
include XOOPS_ROOT_PATH . '/header.php';
$sb2dir    = 'sb2-js/examples';
$filenames = array_slice(scandir($sb2dir, SCANDIR_SORT_NONE), 2);
$xoopsTpl->assign('filenames', $filenames);

include_once XOOPS_ROOT_PATH . '/footer.php';
