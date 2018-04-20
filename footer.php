<footer class="mdl-mini-footer">
	<div class="mdl-mini-footer__left-section">
		<ul class="mdl-mini-footer--link-list">
			<li>
                <?php
                    if (isset($_SESSION['admin_online'])) {?>
                    <a class="mdl-navigation__link" href="./logic/logout.php">Admin Logout</a>
                        <?php }else{ ?>
                    <a class="mdl-navigation__link" href="index.php?page=about">About</a>
                       <?php }
                ?>
			</li>
		</ul>
	</div>	

	<div class="mdl-mini-footer__left-section mdl-layout--large-screen-only">
		Privacy & Terms
	</div>	

	<div class="mdl-mini-footer__right-section mdl-layout--large-screen-only">

	</div>	

	<div class="mdl-mini-footer__right-section">
		<div class="right-custom-brand">
                <?php
                    if (isset($_SESSION['admin_online'])) {?>
                    	<div class="mdl-layout--small-screen-only">
							<a href="../dashboard/admin"> .. </a>
						</div>
				<?php } ?>
			 THE ULTIMATE HUB 
		</div>
	</div>
</footer>
