<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

	<main id="content" class="<?php echo odin_classes_page_full(); ?>" tabindex="-1" role="main">
		<div class="desc">
			<h1><?php echo bloginfo( 'title' ); ?></h1>
			<?php if ( $desc = get_theme_mod( 'desc' ) ): ?>
				<span><?php echo $desc; ?></span>
			<?php endif ?>
		</div><!-- desc -->	
	</main><!-- #content -->
</div><!-- .container -->

	<?php if ( $slider = get_theme_mod( 'slider' ) ): ?>
		<div class="slider col-sm-12 nopadding">
			<?php echo do_shortcode( $slider ); ?>
		</div><!-- slider -->
	<?php endif; ?>

<div class="container">
	<div class="col-sm-12 loop-acervo">
		<h1><?php _e( 'Acervo Digital', 'odin' ); ?></h1>

		<a href="">
			<div class="col-sm-3 nopadding thumb">
				<div class="desc">2016</div><!-- desc -->
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp-thumb.jpg" alt="">
			</div><!-- thumb -->
		</a>
		<a href="">
			<div class="col-sm-3 nopadding thumb">
				<div class="desc">2015</div><!-- desc -->
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp-thumb.jpg" alt="">
			</div><!-- thumb -->
		</a>
		<a href="">
			<div class="col-sm-3 nopadding thumb">
				<div class="desc">2014</div><!-- desc -->
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp-thumb.jpg" alt="">
			</div><!-- thumb -->
		</a>
		<a href="">
			<div class="col-sm-3 nopadding thumb">
				<div class="desc">2013</div><!-- desc -->
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp-thumb.jpg" alt="">
			</div><!-- thumb -->
		</a>
		<a href="">
			<div class="col-sm-3 nopadding thumb">
				<div class="desc">2012</div><!-- desc -->
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp-thumb.jpg" alt="">
			</div><!-- thumb -->
		</a>
		<a href="">
			<div class="col-sm-3 nopadding thumb">
				<div class="desc">2011</div><!-- desc -->
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp-thumb.jpg" alt="">
			</div><!-- thumb -->
		</a>
		<a href="">
			<div class="col-sm-3 nopadding thumb">
				<div class="desc">2010</div><!-- desc -->
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp-thumb.jpg" alt="">
			</div><!-- thumb -->
		</a>
		<a href="">
			<div class="col-sm-3 nopadding thumb">
				<div class="desc">2009</div><!-- desc -->
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp-thumb.jpg" alt="">
			</div><!-- thumb -->
		</a>

	</div><!-- loop-acervo -->

<?php
get_footer();
