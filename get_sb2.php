<?php 
	if (isset($_GET['filename']) 
		&& $str = addslashes(htmlspecialchars($_GET['filename'])))  {
		echo $str;

	}
?>