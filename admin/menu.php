<?php
$adminmenu = array();
$icon_dir=substr(XOOPS_VERSION,6,3)=='2.6'?"":"images/";

$i = 1;
$adminmenu[$i]['title'] = "demo home page";
$adminmenu[$i]['link'] = 'admin/index.php' ;
$adminmenu[$i]['desc'] = "";
$adminmenu[$i]['icon'] = 'images/admin/home.png' ;

$i++;
$adminmenu[$i]['title'] = "about";
$adminmenu[$i]['link'] = 'admin/about.php';
$adminmenu[$i]['desc'] = "";
$adminmenu[$i]['icon'] = 'images/admin/about.png';
?>