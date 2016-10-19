<?php 
	if (isset($_GET['filename']) &&
		$str = preg_replace("/[&#!*;%@~^$]/", '', $_GET['filename'])
		&& $str = addslashes(htmlspecialchars($str)))  {
		header("Content-Type:application/octet-stream");
		header('Content-Disposition: attachment; filename="'.$str.'"');
		ob_clean();
    		flush();
		readfile('sb2-js/examples/'.$str);
		exit;
	}
?>