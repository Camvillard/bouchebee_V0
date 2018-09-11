<?php
/**
 * The empty header.
 *
 *
 * @package bouchebee
 */

 $container = get_theme_mod( 'understrap_container_type' );
 ?>
 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>
 <head>
 	<meta charset="<?php bloginfo( 'charset' ); ?>">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<meta name="mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
 	<link rel="profile" href="http://gmpg.org/xfn/11">
 	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 	<?php wp_head(); ?>
 </head>

 <body <?php body_class(); ?>>

 <div class="hfeed site" id="page">

 	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

 		<?php if ( 'container' == $container ) : ?>
 			<div class="container" >
 		<?php endif; ?>

 			<?php if ( 'container' == $container ) : ?>
 			</div><!-- .container -->
 			<?php endif; ?>


 	</div><!-- #wrapper-navbar end -->
