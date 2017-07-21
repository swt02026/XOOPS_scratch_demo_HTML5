<?php
    $adminmenu = array();
    $icon_dir=substr(XOOPS_VERSION,6,3)=='2.6'?"":"images/";

    $adminmenu=[
        [
            'title' => "上傳作品",
            'link' =>  'admin/upload.php',
            'desc' => "上傳作品",
            'icon' => 'assets/images/admin/upload.jpg'
        ],
        [
            'title' => "作品展示",
            'link' =>  'index.php',
            'desc' => "作品展示",
            'icon' => 'assets/images/admin/demo.jpg'
        ],
        [
            'title' => '作品管理',
            'link' => 'admin/modify_list.php',
            'desc' => '作品管理',
            'icon' => 'assets/images/admin/manage.jpg'

        ],
        [
            'title' => "關於",
            'link' =>  'admin/about.php',
            'desc' => "關於",
            'icon' => 'assets/images/admin/about.jpg'
        ]
    ];
?>
