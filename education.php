<div class="mdl-cell mdl-cell--12-col">
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar mdl-tab">
				<a href="#bct-year-1" class="mdl-tabs__tab is-active">Year 1 BCT </a>
				<a href="#bct-year-2" class="mdl-tabs__tab">Year 2 BCT </a>
				<a href="#bct-year-3" class="mdl-tabs__tab">Year 3 BCT </a>
				<a href="#bct-year-4" class="mdl-tabs__tab">Year 4 BCT </a>
				<a href="#relevant-research" class="mdl-tabs__tab">Relevant Research</a>
			</div>
			<div class="mdl-tabs__panel is-active mdl-panel" id="bct-year-1">
				<div class="mdl-layout-spacer"><br></div>
				<h3 class="mdl-title"> Unfortunately we dont have these materials for you at the moment </h3>

				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<h3>Year 1 Semester 1</h3>
				<?php
	$dir_path = "links/BCT-COURSE/Year 1/Y1 S1/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/BCT-COURSE/Year 1/Y1 S1/');
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
					<div class="mdl-cell mdl-cell--12-col">
						<h3>Year 1 Semester 2</h3>
				<?php
	$dir_path = "links/BCT-COURSE/Year 1/Y1 S2/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/BCT-COURSE/Year 1/Y1 S2/');
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
			<div class="mdl-tabs__panel mdl-panel" id="bct-year-2">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<h3>Year 2 Semester 1</h3
				<?php
	$dir_path = "links/BCT-COURSE/Year 2/Y2 S1/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/BCT-COURSE/Year 2/Y2 S1/');
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
					<div class="mdl-cell mdl-cell--12-col">
						<h3>Year 2 Semester 2</h3>
				<?php
	$dir_path = "links/BCT-COURSE/Year 2/Y2 S2/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/BCT-COURSE/Year 2/Y2 S2/');
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
			<div class="mdl-tabs__panel mdl-panel" id="bct-year-3">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<h3>Year 3 Semester 1</h3
				<?php
	$dir_path = "links/BCT-COURSE/Year 3/Y3 S1/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/BCT-COURSE/Year 3/Y3 S1/');
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
					<div class="mdl-cell mdl-cell--12-col">
						<h3>Year 3 Semester 2</h3>
				<?php
	$dir_path = "links/BCT-COURSE/Year 3/Y3 S2/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/BCT-COURSE/Year 3/Y3 S2/');
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
			<div class="mdl-tabs__panel mdl-panel" id="bct-year-4">
				<div class="mdl-layout-spacer"><br></div>
				<h3 class="mdl-title"> Unfortunately we dont have these materials for you at the moment </h3>

				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<h3>Year 4 Semester 1</h3>
				<?php
	$dir_path = "links/BCT-COURSE/Year 4/Y4 S1/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/BCT-COURSE/Year 4/Y4 S1/');
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
					<div class="mdl-cell mdl-cell--12-col">
						<h3>Year 4 Semester 2</h3>
				<?php
	$dir_path = "links/BCT-COURSE/Year 4/Y4 S2/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('links/BCT-COURSE/Year 4/Y4 S2/');
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
			<div class="mdl-tabs__panel mdl-panel" id="relevant-research">
				<?php
	$dir_path = "BCT-COURSE/relevant-research/";
	if (is_dir($dir_path)) {
		$files = scandir($dir_path);
		for ($i=0; $i < count($files); $i++) { 
			if ($files[$i] != '.' && $files[$i] != '..') { 
				$fileList = glob('BCT-COURSE/relevant-research/');
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