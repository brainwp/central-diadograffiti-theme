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

	</div><!-- #wrapper -->

	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 pull-left">
					<div class="col-sm-12">
						<?php _e( 'Alguns direitos reservados', 'odin' ); ?>
						<img src="<?php bloginfo('template_url');?>/assets/images/cc-icon.png">
					</div><!-- .col-sm-12 -->
					<div class="col-sm-12">
						<?php _e( 'Desenvolvido com', 'odin' ); ?>
						<img src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/assets/images/wp-icon.png">
					</div><!-- .col-sm-12 -->
				</div><!-- .col-sm-4 -->
				<div class="col-sm-8 pull-right logos">
					<a href="http://www.acaoeducativa.org.br/" class="ae" target="_blank"></a>
					<a href="http://www.brasa.art.br" class="brasa" target="_blank"></a>
				</div><!-- .col-sm-8 pull-right -->
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #footer -->

	<?php wp_footer(); ?>
</body>
</html>
