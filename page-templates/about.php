<?php
/**
* Template Name: About
*
* This template is for the about page
*
* @package bouchebee
*
*/

get_template_part( 'global-templates/header', 'side' );
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="about-page-wrapper">


	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

<div id="aboutpage-pattern">
	<img src="<?php echo get_template_directory_uri() . '/images/pattern_1.svg'; ?>" />
</div>
