<?php
/**
* Template Name: Coming soon
*
* This template is for the front page
*
* @package bouchebee
*
*/

get_template_part( 'global-templates/header', 'empty' );
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="btn-back-home">
	<i class="fa fa-arrow-left"></i>
	<a class="btn-back-white" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"> retour au site</a>
</div>

<div class="wrapper" id="comingsoon-page">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

				<main class="site-main" id="main" role="main">

					<h3 class="comingsoon-title">coming soon</h3>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'empty' ); ?>

					<?php endwhile; // end of the loop. ?>

					<div id="newsletter-form">
						<?php echo do_shortcode('[mc4wp_form id="76"]'); ?>
					</div>



					</div>

				</main><!-- #main -->


	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_template_part( 'global-templates/footer', 'empty' ); ?>
