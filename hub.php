<div class="mdl-cell mdl-cell--3-col"></div>
<div class="mdl-cell mdl-cell--9-col">
				<?php
	$dir_path = "links/server-uploads";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/server-uploads');
				foreach ($fileList as $filename){
					if (is_file($filename) != '.' && is_file($filename) != '..'){?>
					<a href="<?php echo $filename ."/" .$files[$i]; ?>"> <?php echo $files[$i]; ?> </a><br><?php
				}
				}
			}
		}
	}else{
		echo "Directory not found";
	}
				?>
</div>
