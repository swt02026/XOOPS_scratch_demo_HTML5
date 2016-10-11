<?php 
	if (isset($_GET['filename']) 
		&& $str = preg_replace('/[\n\/\\]+/','',htmlspecialchars($_GET['filename'])) ) {
		echo $str;

	}
?>