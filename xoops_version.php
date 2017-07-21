<?php
$modversion = array();

//---模組基本資訊---//
$moduleDirName = basename(__DIR__);

$modversion['version']       = 1.01;
$modversion['module_status'] = 'Beta 1';
$modversion['release_date']  = '2017/01/05';
$modversion['name']          = MI_SCRATCH_NAME;
$modversion['description']   = MI_SCRATCH_NAME_DESC;
$modversion['author']        = 'swt02026';
$modversion['credits']       = 'XOOPS Development Team';
$modversion['help']          = 'page=help';
$modversion['image']         = 'assets/images/logo.jpg';
$modversion['dirname']       = $moduleDirName;
$modversion['min_php']       = '5.5';
$modversion['min_xoops']     = '2.5.8';
$modversion['min_admin']     = '1.2';

// //---模組狀態資訊---//
// $modversion['release_date'] = '';
// $modversion['module_website_url'] = '';
// $modversion['module_website_name'] = '國小';
// $modversion['author_website_url'] = '';
// $modversion['author_website_name'] = '';

//---後台使用系統選單---//
$modversion['system_menu'] = 1;

//---模組資料表架構---//
//$modversion['sqlfile']['mysql'] = 'sql/scratch_demo.sql';
//$modversion['tables'][0] = 'scratch_demo';

//---後台管理介面設定---//
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

//---前台主選單設定---//
$modversion['hasMain'] = 1;
//$modversion['sub'][1]['name'] = '';
//$modversion['sub'][1]['url'] = '';

//---模組自動功能---//
//$modversion['onInstall'] = "include/install.php";
//$modversion['onUpdate'] = "include/update.php";
//$modversion['onUninstall'] = "include/onUninstall.php";

// ------------------- Help files ------------------- //
$modversion['helpsection'] = array(
    ['name' => MI_SCRATCH_OVERVIEW, 'link' => 'page=help'],
    ['name' => MI_SCRATCH_DISCLAIMER, 'link' => 'page=disclaimer'],
    ['name' => MI_SCRATCH_LICENSE, 'link' => 'page=license'],
    ['name' => MI_SCRATCH_SUPPORT, 'link' => 'page=support'],
);

//---樣板設定---//

$modversion['templates'] = [
    [
        'file'        => 'scratch_demo_upload.tpl',
        'description' => 'scratch_demo_upload.tpl'
    ],
    [
        'file'        => 'scratch_demo_about.tpl',
        'description' => 'scratch_demo_about.tpl'
    ],
    [
        'file'        => 'scratch_demo_index.tpl',
        'description' => 'scratch_demo_index.tpl'
    ],
    [
        'file'        => 'scratch_demo_modify_list.tpl',
        'description' => 'scratch_demo_modify_list.tpl'
    ]

];

