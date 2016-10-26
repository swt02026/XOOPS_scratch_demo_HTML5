<?php
    include '../../../include/cp_header.php';
    xoops_cp_header();

    $sb2dir = '../sb2-js/examples';
    $filenames = array_slice(scandir($sb2dir), 2);
    $xoopsTpl->assign('filenames');
    $xoopsTpl->display('db:scratch_demo_modify_list.html');

    xoops_cp_footer();
?>