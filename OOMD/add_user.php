<?php
	extract($_GET);
	$txt=$phone.':'.$name;
	$myfile = file_put_contents('customers', $txt.PHP_EOL , FILE_APPEND);
	

?>