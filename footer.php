<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- #main -->

<footer id="footer" role="contentinfo">

	<div class="col-md-8">
		<div class="site-info">
			<span>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> | <?php echo sprintf( __( 'Desenvolvido com <a href="%s" rel="nofollow" target="_blank">Wordpress</a>.', 'odin' ), 'http://br.wordpress.org/' ); ?></span>
		</div><!-- .site-info -->
	</div>

	<div class="col-md-4">

		<nav id="social-area">

				<?php if ( ! dynamic_sidebar( 'redes-sociais-footer' ) ) : ?>
					<?php if ( current_user_can( 'manage_options' ) ) {
						echo "Verifique se o plugin Simple Social Icon está instalado, configurado e adicionado ao Widget Redes Sociais.";
					} ?>
				<?php endif; // end sidebar widget area ?>

		</nav>

	</div>
			
		</footer><!-- #footer -->
	</div><!-- .container -->

	<?php wp_footer(); ?>
</body>
</html>
