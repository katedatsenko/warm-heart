<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package warm_heart
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?c2sn1i">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'warm-heart' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default menu">
			<div class="container header">
				<div class="page-header">
			 		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri()?>/images/logo.png"></a>
				</div>
			</div>
			<!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <?php 
					wp_nav_menu( array( 
					'theme_location' => '', 
					'menu' => 'navbar navbar-default', 
					'container' => 'div', 
					'container_class' => 'collapse navbar-collapse', 
					'container_id' => 'main-menu', 
					'menu_class' => 'nav navbar-nav', 
					'menu_id' => 'main-menu-center', 
					'echo' => true, 
					'fallback_cb' => 'wp_page_menu', 
					'before' => '', 
					'after' => '', 
					'link_before' => '', 
					'link_after' => '', 
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
					'depth' => 0, 
					'walker' => '', 
					) ); 
				?>
			    </div><!-- /.navbar-collapse -->
		</nav>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
