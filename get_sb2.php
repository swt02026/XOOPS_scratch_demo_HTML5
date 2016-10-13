<?php 
	if (isset($_GET['filename']) 
		&& $str = addslashes(htmlspecialchars($_GET['filename'])))  {
		header("Content-Type:application/force-download");
		header('Content-Disposition: attachment; filename="'.$str.'"');
		readfile('sb2-js/examples/'.$str);
	}
?>