<?php 
	if (isset($_GET['filename']) 
		&& $str = filter_var(
		            addslashes(
		                htmlspecialchars($_GET['filename']))
            , FILTER_SANITIZE_STRING))  {
		header("Content-Type:application/octet-stream");
		header('Content-Disposition: attachment; filename="'.$str.'"');
		ob_clean();
        flush();
		readfile('sb2-js/examples/'.$str);
		exit;
	}
?>