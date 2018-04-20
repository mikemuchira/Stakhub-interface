<div class="mdl-cell mdl-cell--12-col">
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar mdl-tab">
				<a href="#web-dev" class="mdl-tabs__tab is-active">Web Development </a>
				<a href="#crash-courses" class="mdl-tabs__tab">Crash courses </a>
				<a href="#pen-test" class="mdl-tabs__tab">Pen. Testing </a>
				<a href="#cyber-security" class="mdl-tabs__tab">Cyber Security </a>
				<a href="#relevant-research" class="mdl-tabs__tab">Relevant Research</a>
			</div>
			<div class="mdl-tabs__panel is-active mdl-panel" id="web-dev">
				<?php
	$dir_path = "links/For-Devs/web-dev/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/For-Devs/web-dev');
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
			<div class="mdl-tabs__panel mdl-panel" id="crash-courses">
				<?php
	$dir_path = "links/For-Devs/crash-courses/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/For-Devs/crash-courses');
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
			<div class="mdl-tabs__panel mdl-panel" id="pen-test">
				<?php
	$dir_path = "links/For-Devs/pen-test/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/For-Devs/pen-test');
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
			<div class="mdl-tabs__panel mdl-panel" id="cyber-security">
				<?php
	$dir_path = "links/For-Devs/cyber-security/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/For-Devs/cyber-security');
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
			<div class="mdl-tabs__panel mdl-panel" id="relevant-research">
				<?php
	$dir_path = "links/For-Devs/relevant-research/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/For-Devs/relevant-research');
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