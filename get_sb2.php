<?php 
	if (isset($_GET['filename']) 
		&& $str = htmlspecialchars($_GET['filename']))  {
		header("Content-Type:application/octet-stream");
		echo('sb2-js/examples/'.$str);
	}
?>