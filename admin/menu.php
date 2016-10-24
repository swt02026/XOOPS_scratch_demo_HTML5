<?php
$adminmenu = array();
$icon_dir=substr(XOOPS_VERSION,6,3)=='2.6'?"":"images/";

$adminmenu=[
	[
		'title' => "demo home page",
		'link' =>  'admin/index.php',
		'desc' => "",
		'icon' => 'images/admin/home.png' 
	],
	[
		'title' => "about",
		'link' =>  'admin/about.php',
		'desc' => "",
		'icon' => 'images/admin/about.png' 
	],
    [
        'title' => "upload",
        'link' =>  'admin/index.php',
        'desc' => "",
        'icon' => 'images/admin/demo.png'
    ]

];
?>