<?php 
	if (isset($_GET['filename']) 
		&& preg_match('/[^\n\/]+/',$str = htmlspecialchars($_GET['filename']))<=0 ) {
		echo $str;

	}
?>