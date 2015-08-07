<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zero
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<header id="masthead" class="site-header" role="banner">
		<div class="jumbotron text-center">
			<div class="container">				
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div>
		</div><!-- .site-branding -->

		<!-- <div class="container-fluid">
			<div class="row">				
				
			</div>			
		
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'zero' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>#site-navigation
		
		
		</div> -->
	</header><!-- #masthead -->
	
	<div class="container">
		<nav class="navbar navbar-default">
		    <!-- Collect the nav links, forms, and other content for toggling -->
	    	<div id="site-navigation" class="main-navigation" role="navigation">
	    		<?php wp_nav_menu( array('container' => false, 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav' ) ); ?>
	    	</div>	      
		</nav>

	

	
