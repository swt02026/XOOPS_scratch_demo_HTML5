<?php
$adminmenu = array();
$icon_dir=substr(XOOPS_VERSION,6,3)=='2.6'?"":"images/";

$adminmenu=[
	[
		'title' => "about",
		'link' =>  'admin/about.php',
		'desc' => "",
		'icon' => 'images/admin/about.png' 
	],
    [
        'title' => "上傳作品",
        'link' =>  'admin/upload.php',
        'desc' => "",
        'icon' => 'images/admin/demo.png'
    ]

];
?>