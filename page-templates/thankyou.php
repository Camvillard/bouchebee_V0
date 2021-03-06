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

<div class="wrapper" id="thankyou-page">

  <?php get_template_part( 'partials/thanks-content' ); ?>

</div><!-- Wrapper end -->

<div id="thankyou-back-home">
	<a class="btn-back-blue" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"  itemprop="url">
    <span class="data-link">retour à l'accueil</span>
  </a>
</div>

<?php get_template_part( 'global-templates/footer', 'empty' ); ?>
