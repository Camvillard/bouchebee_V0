<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bouchebee
 */

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<div class="shop-adress">
							<p>bouche bee
							<br>3772, rue Ontario Est
							<br>514 238 7773
							</p>
						</div>

						<div class="shop-infos">
							<p>decoration - cadeaux - cuisine - ateliers</p>
						</div>

					</div>

				</div><!-- .site-info -->

			</footer><!-- #colophon -->

		</div><!--col end -->

		</div><!-- row end -->

		<div id="instagram-footer">
			<p>bien évidement, bouche bee est sur instagram</p>
			<?php dynamic_sidebar( 'frontpagefooter' ); ?>
		</div>

		<div class="site-credits">
		<p>vous êtes bouche bées grâce à <a href="#">Dan Eap</a> pour l&apos;identité visuelle et à <a href="#">camille villard</a> pour le design & l&apos;intégration du site web.
		</p>
		</div>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
