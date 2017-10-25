<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package halo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info container">
			<div class="row">

				<div class="col-md-4 col-xs-12">
					<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
					<?php endif; ?>
				</div>

				<div class="col-md-4 col-xs-12">
					<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
					<?php endif; ?>
				</div>

				<div class="col-md-4 col-xs-12">
					<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
						<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
					<?php endif; ?>
				</div>

			</div>
			
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'halo' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'halo' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'halo' ), 'halo', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
