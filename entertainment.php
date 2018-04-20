<div class="mdl-cell mdl-cell--12-col">
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar mdl-tab">
				<a href="" class="mdl-tabs__tab"> </a>
				<a href="#single-movies" class="mdl-tabs__tab is-active"> Single Movies</a>
				<a href="#movie-series" class="mdl-tabs__tab"> Movie Series </a>
				<a href="#mp3-music" class="mdl-tabs__tab"> MP3 Music </a>
				<a href="#mp4-music" class="mdl-tabs__tab">MP4 Music </a>
				<a href="#mashups" class="mdl-tabs__tab">Mashups </a>
			</div>
			<div class="mdl-tabs__panel is-active mdl-panel" id="single-movies">
				<?php
	$dir_path = "links/Movies";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/Movies');
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
			<div class="mdl-tabs__panel mdl-panel" id="movie-series">
				<?php
	$dir_path = "links/Series";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/Series');
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
			<div class="mdl-tabs__panel mdl-panel" id="mp3-music">
				<?php
	$dir_path = "links/Music/Mp3";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/Music/Mp3');
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
			<div class="mdl-tabs__panel mdl-panel" id="mp4-music">
				<?php
	$dir_path = "links/Music/Mp4";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/Music/Mp4');
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
			<div class="mdl-tabs__panel mdl-panel" id="mashups">
				<?php
	$dir_path = "links/Music/Mashups";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/Music/Mashups');
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

		</div>
</div>
