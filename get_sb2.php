<?php 
	if (isset($_GET['filename']) 
		&& $str = addslashes(htmlspecialchars($_GET['filename'])))  {
		header("Content-Type:application/octet-stream");
		readfile('sb2-js/'.$str);
	}
?>