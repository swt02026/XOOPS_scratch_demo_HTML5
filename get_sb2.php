<?php 
<<<<<<< HEAD
	if (isset($_GET['filename']) 
		&& preg_match('/[^\n\\\/]/',$str = htmlspecialchars($_GET['filename']))<=0 ) {
=======
	if (isset($_GET['filename']) && $str = htmlspecialchars($_GET['filename'])) {
>>>>>>> test
		echo $str;

	}
?>