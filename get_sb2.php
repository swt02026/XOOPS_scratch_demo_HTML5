<?php 
	if (isset($_GET['filename']) 
		&& $str = preg_place('/[\n\/\\]+/','',htmlspecialchars($_GET['filename'])) ) {
		echo $str;

	}
?>