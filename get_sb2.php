<?php
    $sb2dir = 'sb2-js/examples/';
    $filenames = array_slice(scandir($sb2dir), 2);
	if (isset($_GET['filename'])
        && in_array($_GET['filename'], $filenames)
		&& $str = addslashes(htmlspecialchars($_GET['filename'])))  {
		header("Content-Type:application/zip");
		header('Content-Disposition: attachment; filename="'.$str.'"');
		ob_clean();
    		flush();
		readfile($sb2dir.$str);
		exit;
	}
?>