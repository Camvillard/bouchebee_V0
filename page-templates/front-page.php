<?php
/**
* Template Name: Front page
*
* This template is for the front page
*
* @package cdltbisou_starter
*
*/

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="frontpage-wrapper">

		<?php get_template_part( 'views/frontpage-content' ); ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
