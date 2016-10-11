<?php 
	if (isset($_GET['filename']) && $str = htmlspecialchars($_GET['filename'])) {
		echo $str;

	}
?>