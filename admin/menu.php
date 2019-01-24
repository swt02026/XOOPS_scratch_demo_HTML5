<?php
$adminmenu = array();
$icon_dir  = substr(XOOPS_VERSION, 6, 3) == '2.6' ? "" : "images/";

$moduleDirName = basename(dirname(__DIR__));

if (false !== ($moduleHelper = Xmf\Module\Helper::getHelper($moduleDirName))) {
} else {
    $moduleHelper = Xmf\Module\Helper::getHelper('system');
}
$adminObject = \Xmf\Module\Admin::getInstance();

$pathIcon32    = \Xmf\Module\Admin::menuIconPath('');

$adminmenu = [
    [
        'title' => MI_SCRATCH_ADMENU0,
        'link'  => 'admin/index.php',
        'desc'  => "Home",
        'icon'  => $pathIcon32 . '/home.png'
    ],
    [
        'title' => MI_SCRATCH_ADMENU2,
        'link'  => 'admin/upload.php',
        'desc'  => MI_SCRATCH_ADMENU2_DESC,
        'icon'  => $pathIcon32 . '/upload.png'
    ],
    [
        'title' => MI_SCRATCH_ADMENU1,
        'link'  => 'index.php',
        'desc'  => MI_SCRATCH_ADMENU1_DESC,
        'icon'  => $pathIcon32 . '/face-smile.png'
    ],
    [
        'title' => MI_SCRATCH_ADMENU3,
        'link'  => 'admin/modify_list.php',
        'desc'  => MI_SCRATCH_ADMENU3_DESC,
        'icon'  => $pathIcon32 . '/manage.png'

    ],
    [
        'title' => MI_SCRATCH_ADMENU5,
        'link'  => 'admin/about.php',
        'desc'  => MI_SCRATCH_ADMENU5_DESC,
        'icon'  => $pathIcon32 . '/about.png'
    ]
];
