<!DOCTYPE html>
<html lang="en">
<head>
	<meta property="fb:pages" content="531942616840103" />
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/ionicons.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	
	<?php wp_head(); ?>

	<!-- Design By Trong -->
	
</head>
<body>

<!-- 	<div class="header-wrapper hidden-sm">
	<div class="container">
   		<div class="row">
   			<div class="col-sm-4 col-md-4 col-lg-4 logo-header">
   				<a href="<?php bloginfo('url'); ?>">
   					<img src="<?php bloginfo('template_directory')?>/img/new-logo.png" alt="<?php bloginfo('name'); ?>">
   				</a>
   			</div> end #logo-header
   			<div class="col-sm-4 col-md-4 col-lg-4 search-center">
   				<form method="get" action="<?php bloginfo('url'); ?>/">
				  <input type="text" name="s" class="textbox" placeholder="Search">
				  <button type="submit" class="button"><i class="ion-search"></i></button>
				</form>
   			</div> end #banner-top-right
   			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 admin-login text-center">
   				<a href="<?php bloginfo('url') ?>/wp-admin" target="_blank">Admin Login</a>
   			</div>
   		</div>
   </div>
</div> end header-wrapper -->

	<header>
		<div class="main-header">
			<div class="container">
				<form method="get" accept="<?php bloginfo('url'); ?>/" class="navbar-form navbar-right" role="search" style="display: none;" >
					<div class="form-group">
						<input type="text" name="s" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default"><i class="ion-search"></i></button>
				</form>
				<div class="menu-header">
					<?php wp_nav_menu( 
						array( 
							'theme_location' => 'topmenu', 
							'container' => 'false', 
							'menu_id' => '', 
							'menu_class' => ''
						) 
						); ?>
				</div>
			</div>
		</div>
	</header>