<?php
/**
* Template Name: Thank You
*
* This template is for the contact page
*
* @package bouchebee
*
*/

get_template_part( 'global-templates/header', 'empty' );
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="contact-page">

	<div id="contact-back-home" class="btn-back">
		<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"> retour au site</a>
	</div>

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

          <?php get_template_part( 'partials/thanks-content' ); ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_template_part( 'global-templates/footer', 'empty' ); ?>