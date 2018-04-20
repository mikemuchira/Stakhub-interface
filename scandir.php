<?php
	$fileList = glob('logic/*');
	foreach ($fileList as $filename) {
		if (is_file($filename)) {
			echo  $filename, '<br>';
		}
	}
?>

<?php 
	$dir= 'links/';
	$files = scandir($dir);
		if (is_array($files)) {
			print_r($files);
		}
?>