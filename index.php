<head>
	<title> THE ULTIMATE HUB </title>
	<link rel="stylesheet" href="styles/material.cyan-teal.min.css" />
	<link rel="stylesheet" type="text/css" href="styles/material.min.css.map">
	<link rel="stylesheet" type="text/css" href="styles/hub-custom.css">
</head>


<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
<?php
	include('header.php');
?>
        <main class="mdl-layout__content">
            <div class="page-content">
<!-- check for session first -->
                <?php
                session_start();
                    if (!isset($_SESSION['admin_online'])) {?>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-phone">
                            <?php include('admin-window.php'); ?>
                        </div>
                    </div><?php }
                ?>

        <?php
            if (isset($_SESSION['admin_online'])) { ?>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-phone"></div>
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-phone logout-button">
                            <a href="./logic/logout.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">Admin Logout</a>
                        </div>
                    </div>
            <?php } ?>

                <div class="mdl-grid" id="hub-links">
                        <?php
                            if (!isset($_GET['page'])) {
                                include('default.php'); 
                              }else{
                                $page=$_GET['page'];
                                include("$page.php");
                              }
                        ?>
                </div>
<!-- insert another division for small devices onlu on home page -->
        <?php
            if (!isset($_GET['page'])) {?>
 
                <div class="mdl-grid mdl-layout--small-screen-only" id="about">
                    mike
                </div> <?php              
            }
        ?>
<!-- insert division for large screen and session for admin -->
        <?php
            if (isset($_SESSION['admin_online'])) { ?>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-phone">
                            <?php include('admin-upload.php'); ?>
                        </div>
                    </div>
            <?php } ?>
         

            </div>
        </main>

        
<?php
    include('footer.php');
?>
</div>

	<script type="text/javascript" src="scripts/material.min.js"></script>